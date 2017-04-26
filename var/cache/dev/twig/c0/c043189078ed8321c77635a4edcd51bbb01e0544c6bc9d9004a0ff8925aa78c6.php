<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9ed92de4d44e011f57fcaf5369103ce5b054ebc93ac35697289dfe8239d09088 extends Twig_Template
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
        $__internal_da0932179f528027532228d7d8f12ad11ebf274ea5c2e1e448c7724876132663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0932179f528027532228d7d8f12ad11ebf274ea5c2e1e448c7724876132663->enter($__internal_da0932179f528027532228d7d8f12ad11ebf274ea5c2e1e448c7724876132663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_2f91e0a7045259b78f3b3ef4b15511c3c23630e60db6623bc76f177f2e8e9a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f91e0a7045259b78f3b3ef4b15511c3c23630e60db6623bc76f177f2e8e9a6c->enter($__internal_2f91e0a7045259b78f3b3ef4b15511c3c23630e60db6623bc76f177f2e8e9a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_da0932179f528027532228d7d8f12ad11ebf274ea5c2e1e448c7724876132663->leave($__internal_da0932179f528027532228d7d8f12ad11ebf274ea5c2e1e448c7724876132663_prof);

        
        $__internal_2f91e0a7045259b78f3b3ef4b15511c3c23630e60db6623bc76f177f2e8e9a6c->leave($__internal_2f91e0a7045259b78f3b3ef4b15511c3c23630e60db6623bc76f177f2e8e9a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
