<?php
namespace ENT\SiteBundle\Controller;

use ENT\SiteBundle\Entity\Documentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DocumentationController extends Controller
{
    public function viewAction($id)
    {
        //var_dump($id);
     // On récupère le repository
     $repository = $this->getDoctrine()
       ->getManager()
       ->getRepository('ENTSiteBundle:Documentation');
       //var_dump($repository);
     // On récupère l'entité correspondante à l'id $id
     $documentation = $repository->find($id);
     //var_dump($documentation);
     $test = "TEST DONE !";
     // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
     // ou null si l'id $id  n'existe pas, d'où ce if :
     if (null === $documentation) {
         $error = "L'annonce d'id ".$id." n'existe pas.";
     } else {
         $id_doc = $documentation->getId();
         $id_cat = $documentation->getIdCat();
         $nom = $documentation->getNom();
         $taille = $documentation->getTaille();
    // $date_enrg = $documentation->getDataEnregistrement();

     // Le render ne change pas, on passait avant un tableau, maintenant un objet
     return $this->render('ENTSiteBundle:Membre:ressources.html.twig', array(
       'id_doc' => $id_doc,
       'id_cat' => $id_cat,
       'nom' => $nom,
       'taille' => $taille,
       //'data_enrg' => $data_enrg,
       'test' => $error,
     ));
     }
        return $this->render('ENTSiteBundle:Membre:ressources.html.twig', array(
          'id_doc' => "null",
          'id_cat' => "null",
          'nom' => "null",
          'taille' => "null",
          //'data_enrg' => $data_enrg,
          'test' => $error,
        ));
    }
}
