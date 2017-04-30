<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $name = array('Draden','Romtaro','Maxou','Champi');
        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Advert:index.html.twig', array('nom' => $name));

        return new Response($content);
    }

    public function iindexAction()
    {
        $name = array('Draden','Romtaro','Maxou','Champi');
        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Advert:byebye.html.twig', array('nom' => $name, 'prenom' => 'Rodzaum'));

        return new Response($content);
    }
}
