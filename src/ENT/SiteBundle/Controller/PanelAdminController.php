<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PanelAdminController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('ENTSiteBundle:Adminpage');
      //var_dump($repository);
    // On récupère l'entité correspondante à l'id $id
  //  $documentation = $repository->find($id);
    //var_dump($documentation);
    if (isGranted('ROLE_USER')) {
        $content = $this
          ->get('templating')
          ->render('ENTSiteBundle:Membre:panelmembre.html.twig', array('test' => "TEST Done ! (test)", 'username' => "| Et ta maman (username)", 'eurt' => "PanelAdminController (eurt)"));


        return new Response($content);
    }
        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Admin:paneladmin.html.twig', array('test' => "TEST Done ! (test)", 'username' => "| Et ta maman (username)", 'eurt' => "PanelAdminController (eurt)"));


        return new Response($content);
    }
}
