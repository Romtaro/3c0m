<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_403a9cdfa5ee89abfb65f11496e5223842bbe3fabb7f317a250112d1f33af4c7 extends Twig_Template
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
        $__internal_19d189930d53c3b48778e0318b9f93a6793c9545435c40e23eb7c104f2ffe5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d189930d53c3b48778e0318b9f93a6793c9545435c40e23eb7c104f2ffe5a7->enter($__internal_19d189930d53c3b48778e0318b9f93a6793c9545435c40e23eb7c104f2ffe5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ac416b11a2b44cc29a08d9ee65eedaaa17c23e891c9d649686802a25b13e6bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac416b11a2b44cc29a08d9ee65eedaaa17c23e891c9d649686802a25b13e6bed->enter($__internal_ac416b11a2b44cc29a08d9ee65eedaaa17c23e891c9d649686802a25b13e6bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_19d189930d53c3b48778e0318b9f93a6793c9545435c40e23eb7c104f2ffe5a7->leave($__internal_19d189930d53c3b48778e0318b9f93a6793c9545435c40e23eb7c104f2ffe5a7_prof);

        
        $__internal_ac416b11a2b44cc29a08d9ee65eedaaa17c23e891c9d649686802a25b13e6bed->leave($__internal_ac416b11a2b44cc29a08d9ee65eedaaa17c23e891c9d649686802a25b13e6bed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
