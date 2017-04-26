<?php
namespace ENT\SiteBundle\Controller\Admin;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GestionCompteController extends Controller
{

  public function indexAction()
  {
    $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Admin:gestioncompte.html.twig', array('test' => "TEST Done !"));


      return new Response($content);

  }


}
