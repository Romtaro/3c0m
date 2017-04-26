<?php

namespace ENT\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{

    public function loginAction()
  {
    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    $content = $this
            ->get('templating')
            ->render('ENTSiteBundle:Membre:login.html.twig', array(
                    'last_username' => "Draden",
                    'no_connect' => "Vous n'êtes pas connecté !",
                    'error'         => $error,
                ));

          return new Response($content);
  }

    public function logoutAction()
    {

    $content = $this
            ->get('templating')
            ->render('ENTSiteBundle:Membre:logout.html.twig', array(
                    'last_username' => "Draden",
                    'no_connect' => "Vous n'êtes pas connecté !",
                ));

          return new Response($content);
    }
}
