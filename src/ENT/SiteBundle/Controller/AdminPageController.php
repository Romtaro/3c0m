<?php

namespace ENT\SiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminPageController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        $content = "Vous êtes connecté en tant que : ";
        $username = "Draden";
        $returnn = $this
            ->get('templating')
            ->render('ENTSiteBundle:Admin:paneladmin.html.twig', array(
              'eurt' => $content,
              'username' => $username,
              ));

        return new Response($returnn);
    }
}
