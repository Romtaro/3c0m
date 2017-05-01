<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FaqController extends Controller
{

  public function indexAction()
  {
    $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:faq.html.twig', array('test' => "FAQ"));
      

      return new Response($content);
  }

}
