<?php

/* ENTSiteBundle:Advert:byebye.html.twig */
class __TwigTemplate_5fd8431af56ae9affd9b9a363b68b5a86344df9d9faeccc0cba05c501ea29565 extends Twig_Template
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
        $__internal_db4afd7695205efde7876a5dd8b9a84ca22ded41580b6aadcdcdf1f69282d7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4afd7695205efde7876a5dd8b9a84ca22ded41580b6aadcdcdf1f69282d7fb->enter($__internal_db4afd7695205efde7876a5dd8b9a84ca22ded41580b6aadcdcdf1f69282d7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:byebye.html.twig"));

        $__internal_b0f92588311c4a7d414b3ffc838cf722abbf202d47c17a03a8fd3fc6fdc624e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f92588311c4a7d414b3ffc838cf722abbf202d47c17a03a8fd3fc6fdc624e7->enter($__internal_b0f92588311c4a7d414b3ffc838cf722abbf202d47c17a03a8fd3fc6fdc624e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ENTSiteBundle:Advert:byebye.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma dexuièeme page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>ByeBye
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      |
      ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "
      !</h1>

    <p>
      Le ByeBye World est un grand classique en programmation. Il signifie énormément, car cela veut dire que vous avez réussi à exécuter le programme pour accomplir une tâche simple : afficher ce ByeBye world !
    </p>
  </body>
</html>
";
        
        $__internal_db4afd7695205efde7876a5dd8b9a84ca22ded41580b6aadcdcdf1f69282d7fb->leave($__internal_db4afd7695205efde7876a5dd8b9a84ca22ded41580b6aadcdcdf1f69282d7fb_prof);

        
        $__internal_b0f92588311c4a7d414b3ffc838cf722abbf202d47c17a03a8fd3fc6fdc624e7->leave($__internal_b0f92588311c4a7d414b3ffc838cf722abbf202d47c17a03a8fd3fc6fdc624e7_prof);

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
        return array (  50 => 12,  47 => 11,  38 => 9,  34 => 8,  25 => 1,);
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
    <h1>ByeBye
      {% for i in nom %}
        {{ i }}
      {% endfor %}
      |
      {{ prenom }}
      !</h1>

    <p>
      Le ByeBye World est un grand classique en programmation. Il signifie énormément, car cela veut dire que vous avez réussi à exécuter le programme pour accomplir une tâche simple : afficher ce ByeBye world !
    </p>
  </body>
</html>
", "ENTSiteBundle:Advert:byebye.html.twig", "C:\\wamp64\\www\\Synfony_Project\\src\\ENT\\SiteBundle\\Resources\\views\\Advert\\byebye.html.twig");
    }
}
