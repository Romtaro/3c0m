<?php
namespace ENT\SiteBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ENT\SiteBundle\Form\ContactType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Forms;
use ENT\SiteBundle\Entity\Contact;

class LoginController extends Controller
{
    public function indexAction()
    {
        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !"));
        return new Response($content);
    }

    public function deconnexionAction()
    {
        $content = $this
        ->get('templating')
        ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !"));
        return new Response($content);
    }

    public function connexionAction(Request $request)
    {
        $contact = new Contact();
        //$formFactory = Forms::createFormFactory();
        $form = $this->get('form.factory')
                     ->create(ContactType::class, $contact);
      //   ->createBuilder()
       //  ->add('name', 'Symfony\Component\Form\Extension\Core\Type\TextType')
       //  ->add('email', 'Symfony\Component\Form\Extension\Core\Type\EmailType')
       //  ->add('mdp', 'Symfony\Component\Form\Extension\Core\Type\PasswordType')
       //  ->add('submit', 'Symfony\Component\Form\Extension\Core\Type\SubmitType')
                  //   ->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            //  var_dump();
            $repository = $this->getDoctrine()
              ->getManager()
              ->getRepository('ENTSiteBundle:Contact');
              //var_dump($repository);
            // On récupère l'entité correspondante à l'id $id
            $find = $repository->findAll($pseudo);
            //var_dump($documentation);
            $error = "TEST DONE !";
            // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
            // ou null si l'id $id  n'existe pas, d'où ce if :
            if (null === $find) {
                $error = "L'annonce d'id ".$pseudo." n'existe pas.";
            } else {
                $pseu = $find->getPseudo();
          //      $id_doc = $documentation->getId();
          //      $id_cat = $documentation->getIdCat();
          //      $nom = $documentation->getNom();
          //      $taille = $documentation->getTaille();
           // $date_enrg = $documentation->getDataEnregistrement();

            // Le render ne change pas, on passait avant un tableau, maintenant un objet
            return $this->render('ENTSiteBundle:Membre:panelmembre.html.twig', array(
              'pseudo' => $pseu,
              //'data_enrg' => $data_enrg,
              'test' => $error,
            ));
            }
            return $this->render('ENTSiteBundle:Membre:login.html.twig', array(
                 'test' => $error,
               ));
        }
        return $this->render('ENTSiteBundle:Membre:login.html.twig', array('form' => $form->createView()));
    //    $content = $this
    //  ->get('templating')
    //  ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !"));
    //   return new Response($content);
    }
}
