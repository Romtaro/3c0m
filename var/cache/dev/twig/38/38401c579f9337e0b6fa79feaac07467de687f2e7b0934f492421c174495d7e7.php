<?php

/* ENTSiteBundle:Advert:index.html.twig */
class __TwigTemplate_082db7e88bb22d37229b56288505d60a06fe0ef8620c2b190baec068826d2b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af2bd508c52a8130d2fd92e810517e3e98d0dbdb381665324c3fb0657d39dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af2bd508c52a8130d2fd92e810517e3e98d0dbdb381665324c3fb0657d39dad->enter($__internal_1af2bd508c52a8130d2fd92e810517e3e98d0dbdb381665324c3fb0657d39dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:index.html.twig"));

        $__internal_eb56d58ade07d3a0d5a40cae796f8a35d11699e868446f1af5bea80c17d61421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb56d58ade07d3a0d5a40cae796f8a35d11699e868446f1af5bea80c17d61421->enter($__internal_eb56d58ade07d3a0d5a40cae796f8a35d11699e868446f1af5bea80c17d61421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
";
        
        $__internal_1af2bd508c52a8130d2fd92e810517e3e98d0dbdb381665324c3fb0657d39dad->leave($__internal_1af2bd508c52a8130d2fd92e810517e3e98d0dbdb381665324c3fb0657d39dad_prof);

        
        $__internal_eb56d58ade07d3a0d5a40cae796f8a35d11699e868446f1af5bea80c17d61421->leave($__internal_eb56d58ade07d3a0d5a40cae796f8a35d11699e868446f1af5bea80c17d61421_prof);

    }

    public function getTemplateName()
    {
        return "ENTSiteBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ENT/SiteBundle/Resources/views/Advert/index.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello {{ nom }} !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
", "ENTSiteBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Synfony_Project\\src\\ENT\\SiteBundle/Resources/views/Advert/index.html.twig");
    }
}
