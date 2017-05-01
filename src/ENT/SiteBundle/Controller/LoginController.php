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
use ENT\SiteBundle\Entity\User\WebserviceUser;
use ENT\SiteBundle\Entity\User;
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class LoginController extends Controller
{
    public function indexAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->get('form.factory')->create(ContactType::class, $contact);

        $repository = $this->getDoctrine()->getManager()->getRepository('ENTSiteBundle:Contact');
        $error = "Membre";

        $pb = new ParameterBag();
        var_dump($pb);

        //$pseu_bdd = $find[0]->getPseudo();
        //$passw_bdd = $find[0]->getMdp();
        //$email_bdd = $find[0]->getEmail();

        //var_dump($pseu_bdd);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $pseu = $contact->getPseudo();
            $passw = $contact->getMdp();
            $email = $contact->getEmail();

            $find = $repository->findBy(array('pseudo' => $pseu));

            $roles_bdd = $find[0]->getRoles();
            //var_dump($roles_bdd);
            $sess = $request->getSession();
            $user = new WebserviceUser($pseu, $passw, null, array($roles_bdd));
            var_dump($request);





            return $this->render('ENTSiteBundle:Admin:paneladmin.html.twig', array(
                'pseu' => $pseu,
                'test' => $error,
              ));
        }

        return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
            'pseudo' => null,
            'test' => $error,
            'form' => $form->createView()
          ));
    }




    public function test2Action(Request $request)
    {
        $contact = new Contact();
        $form = $this->get('form.factory')->create(ContactType::class, $contact);
        $repository = $this->getDoctrine()->getManager()->getRepository('ENTSiteBundle:Contact');

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $pseu = $contact->getPseudo();
            $passw = $contact->getMdp();
            $roles = $contact->getRoles();
            $check = "checked";
            $user = new User($pseu, $passw, $roles);
            var_dump($user);

            return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
              'pseudo' => null,
              'test' => $check,
              'form' => $form->createView()
            ));
        }
        return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
          'pseudo' => null,
          'test' => null,
          'form' => $form->createView()
        ));
    }

    public function testAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->get('form.factory')
                   ->create(ContactType::class, $contact);
        $repository = $this->getDoctrine()
                                    ->getManager()
                                    ->getRepository('ENTSiteBundle:Contact');

        $session = $request->getSession();
        //var_dump($session);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $pseu = $contact->getPseudo();
            $email = $contact->getEmail();
            if ($pseu) {
                $find = $repository->findBy(array('pseudo' => $pseu));
                $pseu_bdd = $find[0]->getPseudo();
                if ($pseu_bdd) {
                    $passw = $contact->getMdp();
                    $passw_bdd = $find[0]->getMdp();
                    if ($passw == $passw_bdd) {
                        $token = new UsernamePasswordToken($pseu, null, 'main', array('ROLE_ADMIN'));
                        // give it to the security context
                    $this->container->get('token.storage')->setToken($token);
                        return $this->redirect($this->generateUrl('panel_membre'));
                    }
                }
            }
        }


        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !", 'form' => $form->createView()));
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
            //var_dump($request);
            //var_dump($request = $this->get('ENTSiteBundle.service.role')->isGranted('ROLE_ADMIN', $pseu));
            $find = $repository->findBy(array('pseudo' => $pseu, ));

            $sess = $request->getSession();

            //var_dump($sess);
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
                            $stat = "Vous êtes Administrateur de niveau : " . $status_bdd . " : ";
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
