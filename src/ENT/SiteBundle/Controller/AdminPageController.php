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
        var_dump("de");
        return new Response('<html><body>Admin page!</body></html>');
    }
}
