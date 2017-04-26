<?php

/* ENTSiteBundle:Advert:index.html.twig */
class __TwigTemplate_d19259832c3b8b69feda0d498893d4c391a3df184df2973a955374fce2188aa9 extends Twig_Template
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
        $__internal_f2ba4936d44daf37dc50523317c11223b5b9d0955e8a5bd1a38c663a2dc4d2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ba4936d44daf37dc50523317c11223b5b9d0955e8a5bd1a38c663a2dc4d2a1->enter($__internal_f2ba4936d44daf37dc50523317c11223b5b9d0955e8a5bd1a38c663a2dc4d2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:index.html.twig"));

        $__internal_806e13d4aa641b61cbab31e43466d55824cd33708ab52d673935aeb3963b8c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806e13d4aa641b61cbab31e43466d55824cd33708ab52d673935aeb3963b8c0b->enter($__internal_806e13d4aa641b61cbab31e43466d55824cd33708ab52d673935aeb3963b8c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["i"]), "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      !</h1>

    <p>
      Le Hello World est un grand classique en programmation. Il signifie énormément, car cela veut dire que vous avez réussi à exécuter le programme pour accomplir une tâche simple : afficher ce hello world !
    </p>
  </body>
</html>
";
        
        $__internal_f2ba4936d44daf37dc50523317c11223b5b9d0955e8a5bd1a38c663a2dc4d2a1->leave($__internal_f2ba4936d44daf37dc50523317c11223b5b9d0955e8a5bd1a38c663a2dc4d2a1_prof);

        
        $__internal_806e13d4aa641b61cbab31e43466d55824cd33708ab52d673935aeb3963b8c0b->leave($__internal_806e13d4aa641b61cbab31e43466d55824cd33708ab52d673935aeb3963b8c0b_prof);

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
        return array (  48 => 13,  39 => 11,  35 => 10,  25 => 2,);
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
    <h1>Hello
      {% for i in nom %}
        {{ i|upper }}
      {% endfor %}
      !</h1>

    <p>
      Le Hello World est un grand classique en programmation. Il signifie énormément, car cela veut dire que vous avez réussi à exécuter le programme pour accomplir une tâche simple : afficher ce hello world !
    </p>
  </body>
</html>
", "ENTSiteBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Synfony_Project\\src\\ENT\\SiteBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
