<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a262ca5606d3b8424c249ea10f03d9ead0a2d37437a568c28a90cef3c20a954 extends Twig_Template
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
        $__internal_9bc7e727ceb11759ece17c344204dd879c0c0d567525470ff8cc6c2632e2ea59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc7e727ceb11759ece17c344204dd879c0c0d567525470ff8cc6c2632e2ea59->enter($__internal_9bc7e727ceb11759ece17c344204dd879c0c0d567525470ff8cc6c2632e2ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8ae8a599508ad49f97870aba6b6b781b8f2981b9850856464f3ce5097871ab6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae8a599508ad49f97870aba6b6b781b8f2981b9850856464f3ce5097871ab6e->enter($__internal_8ae8a599508ad49f97870aba6b6b781b8f2981b9850856464f3ce5097871ab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9bc7e727ceb11759ece17c344204dd879c0c0d567525470ff8cc6c2632e2ea59->leave($__internal_9bc7e727ceb11759ece17c344204dd879c0c0d567525470ff8cc6c2632e2ea59_prof);

        
        $__internal_8ae8a599508ad49f97870aba6b6b781b8f2981b9850856464f3ce5097871ab6e->leave($__internal_8ae8a599508ad49f97870aba6b6b781b8f2981b9850856464f3ce5097871ab6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
