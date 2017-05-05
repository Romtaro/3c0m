<?php

namespace ENT\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ENT\SiteBundle\Form\ContactType;
use ENT\SiteBundle\Entity\Contact;

class CheckAuthController extends Controller
{
    public function indexAction(Request $request)
    {
        $checker = '0';
        $contact = new Contact();
        $form = $this->get('form.factory')
               ->create(ContactType::class, $contact);
        $oem = $this->getDoctrine()->getManager();
        $repository = $oem->getRepository('ENTSiteBundle:Contact');

        $error = "Membre";
        $authenticationUtils = $this->get('security.authentication_utils');

        if ($request->isMethod('POST') && $form->handleRequest($request)->isSubmitted()) {
            $pseu = $contact->getPseudo();
            $passw = $contact->getMdp();
            $sess = $request->getSession();
            $find = $repository->findBy(array('pseudo' => $pseu, ));
            //$od = fetchALL($find);

            $pseu_bdd = $find[0]->getPseudo();
            $nom_bdd = $find[0]->getNom();
            $prenom_bdd = $find[0]->getPrenom();
            $passw_bdd = $find[0]->getMdp();
            $tel_bdd = $find[0]->getTel();
            $mail_bdd = $find[0]->getEmail();
            $status_bdd = $find[0]->getStatut();
            $roles_bdd = $find[0]->getRoles();
            $adresse_bdd = $find[0]->getAdresse();
            $ville_bdd = $find[0]->getVille();


            $enabled = isset($attributes['enabled']) ? $attributes['enabled'] : true;


            $test = "e";

            //var_dump($roles_bdd);

            if ($status_bdd == 1) {
                $conte =  $this
                  ->render('ENTSiteBundle:Admin:paneladmin.html.twig', array(
                          'pseudo' => $pseu_bdd,
                          'nom' => $nom_bdd,
                          'prenom' => $prenom_bdd,
                          'password' => $passw_bdd,
                          'tel' => $tel_bdd,
                          'mail' => $mail_bdd,
                          'status' => $status_bdd,
                          'roles' => $roles_bdd,
                          'adresse' => $adresse_bdd,
                          'ville' => $ville_bdd,
                          'status' => $authenticationUtils->getLastAuthenticationError(),
                          'check' => $checker,
                        ));
                $checker = '1';
                return new Response($conte);
            } else {
                $checker = '1';
                var_dump($request);
                return $this
                ->render('ENTSiteBundle:Membre:panelmembre.html.twig', array(
                            'pseudo' => $pseu_bdd,
                            'status' => $authenticationUtils->getLastAuthenticationError(),
                            'check' => $checker,
                          ));
            }
        }

        return $this
        ->render('ENTSiteBundle:Membre:login.html.twig', array(
                    'pseudo' => null,
                    'status' => $authenticationUtils->getLastAuthenticationError(),
                    'check' => $checker,
                    'form' => $form->createView(),
                  ));
    }



    public function internauteEstConnecte()
    {
        if (!$checker) {
            return false;
        } else {
            return true;
        }
    }



    public function internauteEstConnecteEtEstAdmin()
    {
        if (internauteEstConnecte() && $_SESSION['membre']['statut'] == 1) {
            return true;
        }
        return false;
    }
}
