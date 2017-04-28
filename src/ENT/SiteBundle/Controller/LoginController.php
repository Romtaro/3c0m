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
        $formFactory = Forms::createFormFactory();
        $form = $formFactory->createBuilder()
        ->add('name', 'Symfony\Component\Form\Extension\Core\Type\TextType')
        ->add('email', 'Symfony\Component\Form\Extension\Core\Type\EmailType')
        ->add('mdp', 'Symfony\Component\Form\Extension\Core\Type\PasswordType')
        ->add('submit', 'Symfony\Component\Form\Extension\Core\Type\SubmitType')

      //   ->get('form.factory')
                  //   ->create(ContactType::class, $contact);
                     ->getForm();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            return $this->redirect($this->generateUrl('lo_gin'));
        }
        return $this->render('ENTSiteBundle:Membre:login.html.twig', array('form' => $form->createView()));
  //      $content = $this
  //      ->get('templating')
  //      ->render('ENTSiteBundle:Membre:login.html.twig', array('test' => "TEST Done !"));
    //    return new Response($content);
    }
}
