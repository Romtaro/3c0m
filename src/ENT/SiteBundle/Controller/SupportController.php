<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{
    public function indexAction($id)
    {
        if ($id == "new") {
            $content = $this
    ->get('templating')
    ->render('ENTSiteBundle:Membre:support_new.html.twig', array('test' => "Support"));
            return new Response($content);
        }

        if ($id == "historique") {
            $content = $this
      ->get('templating')
      ->render('ENTSiteBundle:Membre:support_histo.html.twig', array('test' => "Support"));
            return new Response($content);
        }

        if ($id == "suivi") {
            $content = $this
      ->get('templating')
      ->render('ENTSiteBundle:Membre:support_follow.html.twig', array('test' => "Support"));
            return new Response($content);
        }
    }
}
