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
    $documentation = $repository->find($id);
    //var_dump($documentation);

    $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Admin:paneladmin.html.twig', array('test' => "TEST Done !"));


        return new Response($content);
    }
}
