<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_24ddd69e8721ffe6a68ef3333eaf02ccc835065aacc50b25672b0163ec93f756 extends Twig_Template
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
        $__internal_4716e0a3b83123c3b4cf5fffe3feb52f16fac374751c87875830cd83e569814c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4716e0a3b83123c3b4cf5fffe3feb52f16fac374751c87875830cd83e569814c->enter($__internal_4716e0a3b83123c3b4cf5fffe3feb52f16fac374751c87875830cd83e569814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_352311127995bead6de2f8c518aeecd20b5ad8fb621b42a1d5794314546768b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352311127995bead6de2f8c518aeecd20b5ad8fb621b42a1d5794314546768b9->enter($__internal_352311127995bead6de2f8c518aeecd20b5ad8fb621b42a1d5794314546768b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_4716e0a3b83123c3b4cf5fffe3feb52f16fac374751c87875830cd83e569814c->leave($__internal_4716e0a3b83123c3b4cf5fffe3feb52f16fac374751c87875830cd83e569814c_prof);

        
        $__internal_352311127995bead6de2f8c518aeecd20b5ad8fb621b42a1d5794314546768b9->leave($__internal_352311127995bead6de2f8c518aeecd20b5ad8fb621b42a1d5794314546768b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
