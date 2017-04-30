<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ENT\SiteBundle\Form\ContactType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Forms;
use ENT\SiteBundle\Entity\Contact;

class LoginController extends Controller
{
    public function indexAction()
    {
        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !"));
        return new Response($content);
    }

    public function deconnexionAction()
    {
        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !"));
        return new Response($content);
    }

    public function connexionAction(Request $request)
    {
        $contact = new Contact();

        $form = $this->get('form.factory')
                     ->create(ContactType::class, $contact);

        $repository = $this->getDoctrine()
                           ->getManager()
                           ->getRepository('ENTSiteBundle:Contact');

        $error = "Membre";

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $pseu = $contact->getPseudo();
            $passw = $contact->getMdp();
            $email = $contact->getEmail();
            //var_dump($pseu);

            $find = $repository->findBy(array('pseudo' => $pseu, ));
            //var_dump($find);

            $pseu_bdd = $find[0]->getPseudo();
            $passw_bdd = $find[0]->getMdp();
            $email_bdd = $find[0]->getEmail();
            $status_bdd = $find[0]->getStatut();
            //var_dump($pseu_bdd);

            if ($pseu_bdd != $pseu) {
                $error = "Le compte " . $pseu . " n'existe pas.";
                //return $this->redirect($this->generateUrl('lo_gin'));
                return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
                  'pseudo' => $pseu,
                  //'data_enrg' => $data_enrg,
                  'test' => $error,
                  'form' => $form->createView()
                ));
            } else {
                if ($email_bdd != $email) {
                    $error = "Le compte " . $pseu . " n'est pas associé à l'adresse email : " . $email ." !";
                    //return $this->redirect($this->generateUrl('lo_gin'));
                    return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
                      'pseudo' => $pseu,
                      'mail' => $email,
                      //'data_enrg' => $data_enrg,
                      'test' => $error,
                      'form' => $form->createView(),
                      ));
                } else {
                    if ($passw_bdd != $passw) {
                        $error = "Le mot de passe du compte {{ pseudo }} associé à l'adresse email : " . $email ." n'est pas VALIDE !";
                      //return $this->redirect($this->generateUrl('lo_gin'));
                      return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
                        'pseudo' => $pseu,
                        'mail' => $email,
                        'error' => $error,
                        'form' => $form->createView(),
                        ));
                    } else {
                        if ($status_bdd != 0) {
                            $stat = "Vous êtes Administrateur de niveau : " . $status_bdd . ".";
                            return $this->render('ENTSiteBundle:Admin:paneladmin.html.twig', array(
                              'pseudo' => $pseu,
                              'status' => $stat,
                            ));
                        } else {
                            return $this->render('ENTSiteBundle:Membre:panelmembre.html.twig', array(
                                'pseudo' => $pseu,
                                'test' => $error,
                              ));
                        }
                    }
                }
                return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
                 'test' => $error,
                 'form' => $form->createView()
               ));
            }
        }
        return $this->render('ENTSiteBundle:Membre:login.html.twig', array('form' => $form->createView()));
    //    $content = $this
    //  ->get('templating')
    //  ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !"));
    //   return new Response($content);
    }
}
