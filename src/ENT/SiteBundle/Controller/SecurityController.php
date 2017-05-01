<?php

// src/OC/UserBundle/Controller/SecurityController.php;


namespace ENT\SiteBundle\Controller;

use ENT\SiteBundle\Entity\Contact;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ENT\SiteBundle\Form\ContactType;
use ENT\SiteBundle\Security\User\WebserviceUser;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\InMemoryUserProvider;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->get('form.factory')
                   ->create(ContactType::class, $contact);

        $repository = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('ENTSiteBundle:Contact');

        $error = "Membre";
        $authenticationUtils = $this->get('security.authentication_utils');

        if ($request->isMethod('POST') && $form->handleRequest($request)->isSubmitted()) {
            $pseu = $contact->getPseudo();
            $passw = $contact->getMdp();


          //var_dump($request = $this->get('ENTSiteBundle.service.role')->isGranted('ROLE_ADMIN', $pseu));
            $find = $repository->findBy(array('pseudo' => $pseu, ));
          //$finde = $find->getRoles();
            $sess = $request->getSession();

            $pseu_bdd = $find[0]->getPseudo();
            $passw_bdd = $find[0]->getMdp();
            $salt_bdd = $find[0]->getSalt();
            $roles_bdd = $find[0]->getRoles();
            //var_dump($roles_bdd);

            $enabled = isset($attributes['enabled']) ? $attributes['enabled'] : true;

            $tk = new TokenStorage();
            $tokn_att = $this->get('security.token_storage')->getToken();
            //var_dump($sess);
            //var_dump($tokn_att);
            $tokn_att = $this->get('security.token_storage');
            $td = new WebserviceUser($pseu_bdd, $passw_bdd, $salt_bdd, array($roles_bdd));
            var_dump($td);
            $user = new User($pseu_bdd, $passw_bdd, array($roles_bdd), $enabled, true, true, true);



            $de = new InMemoryUserProvider(array($users = array($user)));
            //var_dump($de);
            //$cot = $de->loadUserByUsername($pseu_bdd);
            //var_dump($cot);
            //$cott = $de->createUser($td);
            //var_dump($cott);


            $conte =  $this->render('ENTSiteBundle:Admin:paneladmin.html.twig', array(

      'pseudo' => $authenticationUtils->getLastUsername(),


      'status'         => $authenticationUtils->getLastAuthenticationError(),

    ));
            return new Response($conte);
        }
        return $this->render('ENTSiteBundle:Membre:login.html.twig', array(

              'last_username' => $authenticationUtils->getLastUsername(),

              'error'         => $authenticationUtils->getLastAuthenticationError(),
              'form' => $form->createView(),

            ));
    }

    public function logoutAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $request->getSession()->invalidate();
        return $this->render('ENTSiteBundle:Membre:logine.html.twig', array(

      'last_username' => $authenticationUtils->getLastUsername(),

      'error'         => $authenticationUtils->getLastAuthenticationError(),

    ));
    }
}
