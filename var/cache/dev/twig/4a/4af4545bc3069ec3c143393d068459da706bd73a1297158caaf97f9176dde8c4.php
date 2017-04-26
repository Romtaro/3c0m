<?php

/* ENTSiteBundle:Advert:byebye.html.twig */
class __TwigTemplate_45dd7fa732900bcbc7e004202aef4be839d490f40524dd1ab12287d3708ca66e extends Twig_Template
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
        $__internal_661bfc40da9a1e6333fee6aafdf6ebd314219edb09ce40b4bffa2abfca60a5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661bfc40da9a1e6333fee6aafdf6ebd314219edb09ce40b4bffa2abfca60a5c1->enter($__internal_661bfc40da9a1e6333fee6aafdf6ebd314219edb09ce40b4bffa2abfca60a5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:byebye.html.twig"));

        $__internal_f2ec977855f739c6968e32b16fc9ef850b2e5bf60b4ca7fb43fe3ce1a62515f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ec977855f739c6968e32b16fc9ef850b2e5bf60b4ca7fb43fe3ce1a62515f8->enter($__internal_f2ec977855f739c6968e32b16fc9ef850b2e5bf60b4ca7fb43fe3ce1a62515f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:byebye.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma dexuièeme page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>ByeBye ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le ByeBye World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce ByeBye world !
    </p>
  </body>
</html>
";
        
        $__internal_661bfc40da9a1e6333fee6aafdf6ebd314219edb09ce40b4bffa2abfca60a5c1->leave($__internal_661bfc40da9a1e6333fee6aafdf6ebd314219edb09ce40b4bffa2abfca60a5c1_prof);

        
        $__internal_f2ec977855f739c6968e32b16fc9ef850b2e5bf60b4ca7fb43fe3ce1a62515f8->leave($__internal_f2ec977855f739c6968e32b16fc9ef850b2e5bf60b4ca7fb43fe3ce1a62515f8_prof);

    }

    public function getTemplateName()
    {
        return "ENTSiteBundle:Advert:byebye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma dexuièeme page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>ByeBye {{ nom }} !</h1>

    <p>
      Le ByeBye World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce ByeBye world !
    </p>
  </body>
</html>
", "ENTSiteBundle:Advert:byebye.html.twig", "C:\\wamp64\\www\\Synfony_Project\\src\\ENT\\SiteBundle/Resources/views/Advert/byebye.html.twig");
    }
}
