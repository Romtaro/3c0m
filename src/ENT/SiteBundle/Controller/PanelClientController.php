<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PanelClientController extends Controller
{

  public function indexAction()
  {

    $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:panelmembre.html.twig', array('test' => "panel_client ouaich wesh ouèch !"));

      return new Response($content);

  }


}
