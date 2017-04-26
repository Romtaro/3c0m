<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ed48decd470a6db586ca4174c00b617b6792b6a41960745e5e6744c495aef3a7 extends Twig_Template
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
        $__internal_7434b7b53ef0b7b1bcf61def89fdf9fb161a85add585d9c1899f856d8fd51b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7434b7b53ef0b7b1bcf61def89fdf9fb161a85add585d9c1899f856d8fd51b7b->enter($__internal_7434b7b53ef0b7b1bcf61def89fdf9fb161a85add585d9c1899f856d8fd51b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_020a18a09eae68757cb2510428a288faba135b17d53399000ed828295d7319a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020a18a09eae68757cb2510428a288faba135b17d53399000ed828295d7319a0->enter($__internal_020a18a09eae68757cb2510428a288faba135b17d53399000ed828295d7319a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7434b7b53ef0b7b1bcf61def89fdf9fb161a85add585d9c1899f856d8fd51b7b->leave($__internal_7434b7b53ef0b7b1bcf61def89fdf9fb161a85add585d9c1899f856d8fd51b7b_prof);

        
        $__internal_020a18a09eae68757cb2510428a288faba135b17d53399000ed828295d7319a0->leave($__internal_020a18a09eae68757cb2510428a288faba135b17d53399000ed828295d7319a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
