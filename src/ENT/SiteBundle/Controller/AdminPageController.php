<?php

namespace ENT\SiteBundle\Controller;
use ENT\SiteBundle\Entity\Materiel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AdminPageController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction($idCat)
    {

           $repository = $this->getDoctrine()
             ->getManager()
             ->getRepository('ENTSiteBundle:Materiel');


           $materiel = $repository->findBy(
          array('idCat' => $idCat)

        );

        //   var_dump($documentation);
           //var_dump($documentation);
           $error = "TEST DONE !";

           //var_dump($doc);
           // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
           // ou null si l'id $id  n'existe pas, d'où ce if :
           if (null === $materiel) {
               $error = "L'annonce d'id ".$idCat." n'existe pas.";
           } else {
               $contnom = array();
               $contnum = array();


               $mat = new Materiel();
               foreach ($materiel as $mat) {
                   $nom = $mat->getNom();
                   $num = $mat->getNumber();

                   array_push($contnom, $nom);
                   array_push($contnum, $num);
                   //array_remove($con)
               }

               $content = $this
           ->get('templating')
           ->render('ENTSiteBundle:Admin:paneladmin.html.twig', array('m_nom' => $contnom, 'm_num' => $contnum));
      //var_dump($content);
           // Le render ne change pas, on passait avant un tableau, maintenant un objet
      return new Response($content);
               }
           }}
