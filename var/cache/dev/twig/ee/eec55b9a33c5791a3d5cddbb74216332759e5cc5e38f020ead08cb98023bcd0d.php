<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_16b32b5043420463e6a1e2d44223440c04b382424715b9c6375b883a5a2212bf extends Twig_Template
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
        $__internal_476dd29e17f7441a177a021a04feb3d1e305ea047b39700a5be7d97b15b703fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476dd29e17f7441a177a021a04feb3d1e305ea047b39700a5be7d97b15b703fd->enter($__internal_476dd29e17f7441a177a021a04feb3d1e305ea047b39700a5be7d97b15b703fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d8ac965f1440d550e1d044baa267522cf9b884fab4c09da1333f9e5167c55710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ac965f1440d550e1d044baa267522cf9b884fab4c09da1333f9e5167c55710->enter($__internal_d8ac965f1440d550e1d044baa267522cf9b884fab4c09da1333f9e5167c55710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_476dd29e17f7441a177a021a04feb3d1e305ea047b39700a5be7d97b15b703fd->leave($__internal_476dd29e17f7441a177a021a04feb3d1e305ea047b39700a5be7d97b15b703fd_prof);

        
        $__internal_d8ac965f1440d550e1d044baa267522cf9b884fab4c09da1333f9e5167c55710->leave($__internal_d8ac965f1440d550e1d044baa267522cf9b884fab4c09da1333f9e5167c55710_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
