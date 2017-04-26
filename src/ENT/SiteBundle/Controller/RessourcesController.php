<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RessourcesController extends Controller
{

  public function indexAction()
  {
    $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:ressources.html.twig', array('test' => "TEST Done !"));


      return new Response($content);

  }


}
