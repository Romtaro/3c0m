<?php
namespace ENT\SiteBundle\Controller;

use ENT\SiteBundle\Entity\Documentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DocumentationController extends Controller
{
    public function viewAction($idCat)
    {
      //  var_dump($idCat);
     // On récupère le repository
     $repository = $this->getDoctrine()
       ->getManager()
       ->getRepository('ENTSiteBundle:Documentation');
       //var_dump($repository);
     // On récupère l'entité correspondante à l'id $id
     $documentation = $repository->findBy(
    array('idCat' => $idCat)

);

  //   var_dump($documentation);
     //var_dump($documentation);
     $error = "TEST DONE !";

     //var_dump($doc);
     // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
     // ou null si l'id $id  n'existe pas, d'où ce if :
     if (null === $documentation) {
         $error = "L'annonce d'id ".$idCat." n'existe pas.";
     } else {

        $contnom = array();
        $doc = new Documentation();
        foreach ($documentation as $doc){
        $nom = $doc->getNom();
        $taille = $doc->getTaille();
        array_push($contnom, $nom, $taille);


    // $date_enrg = $documentation->getDataEnregistrement();
 }
 $content = $this
     ->get('templating')
     ->render('ENTSiteBundle:Membre:ressources.html.twig', array('nom' => $contnom));
//var_dump($content);
     // Le render ne change pas, on passait avant un tableau, maintenant un objet
return new Response($content);
    }
}
}
