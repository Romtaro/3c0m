<?php
namespace ENT\SiteBundle\Controller;

use ENT\SiteBundle\Entity\Documentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DocumentationController extends Controller
{

  public function viewAction($idDocumentation)
  {
    var_dump($idDocumentation);
     // On récupère le repository
     $repository = $this->getDoctrine()
       ->getManager()
       ->getRepository('ENTSiteBundle:Documentation');
var_dump($repository);
     // On récupère l'entité correspondante à l'id $id
     $documentation = $repository->find($idDocumentation);


     // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
     // ou null si l'id $id  n'existe pas, d'où ce if :
     if (null === $documentation) {
       throw new NotFoundHttpException("L'annonce d'id ".$idDocumentation." n'existe pas.");
     }

     // Le render ne change pas, on passait avant un tableau, maintenant un objet
     return $this->render('ENTSiteBundle:Membre:ressources.html.twig', array(
       'documentation' => $documentation
     ));
   }
}
