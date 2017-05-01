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
      // On récupère l'entité correspondante à l'id $idCat



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
         $conttaille = array();
         $contdate = array();
         $date;

         $doc = new Documentation();
         foreach ($documentation as $doc) {
             $nom = $doc->getNom();
             $taille = $doc->getTaille();
             $date = $doc->getDateEnregistrement();
             array_push($contnom, $nom);
             array_push($conttaille, $taille);
             array_push($contdate, $date);
             //array_remove($con)
         }var_dump($contdate);
         //var_dump($contnom);
         //var_dump($conttaille);

        // var_dump($contdate);

         $content = $this
     ->get('templating')
     ->render('ENTSiteBundle:Membre:ressources.html.twig', array('v_nom' => $contnom, 'v_taille' => $conttaille,  'v_date' => $contdate[0]));
//var_dump($content);
     // Le render ne change pas, on passait avant un tableau, maintenant un objet
return new Response($content);
     }
    }
}
