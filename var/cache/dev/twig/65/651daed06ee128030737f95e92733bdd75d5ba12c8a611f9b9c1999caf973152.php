<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_faad843189ee4b0524cc87f9c5d06cb6336ddbf0dd0c88d08b0a0ea0e1c9d498 extends Twig_Template
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
        $__internal_e810251494e2cefe7158297c079db1b82fdf949a4dd1d696c2e9e03e2c155e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e810251494e2cefe7158297c079db1b82fdf949a4dd1d696c2e9e03e2c155e7a->enter($__internal_e810251494e2cefe7158297c079db1b82fdf949a4dd1d696c2e9e03e2c155e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_117fda74d1f8a74cad5b881ae85acb790b22966670cef0db638455fa0604fcdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117fda74d1f8a74cad5b881ae85acb790b22966670cef0db638455fa0604fcdc->enter($__internal_117fda74d1f8a74cad5b881ae85acb790b22966670cef0db638455fa0604fcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e810251494e2cefe7158297c079db1b82fdf949a4dd1d696c2e9e03e2c155e7a->leave($__internal_e810251494e2cefe7158297c079db1b82fdf949a4dd1d696c2e9e03e2c155e7a_prof);

        
        $__internal_117fda74d1f8a74cad5b881ae85acb790b22966670cef0db638455fa0604fcdc->leave($__internal_117fda74d1f8a74cad5b881ae85acb790b22966670cef0db638455fa0604fcdc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
