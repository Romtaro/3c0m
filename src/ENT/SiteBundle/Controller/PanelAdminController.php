<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PanelAdminController extends Controller
{

  public function indexAction()
  {
    $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Admin:paneladmin.html.twig', array('test' => "TEST Done !"));


      return new Response($content);

  }


}
