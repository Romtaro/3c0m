<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3ebdf972d70f51f12a9e8ab0cef83da670bf8fed84edd16b940a4634075310b5 extends Twig_Template
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
        $__internal_fa48ad1c047135a29789b6e772f6ebc4538a5c18e3dc8e211f8d93eb399297ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa48ad1c047135a29789b6e772f6ebc4538a5c18e3dc8e211f8d93eb399297ce->enter($__internal_fa48ad1c047135a29789b6e772f6ebc4538a5c18e3dc8e211f8d93eb399297ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ac0e8d43ec5c619d6c9bebcf926c5a396da5f04855ee83af1d77d2eba633518d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0e8d43ec5c619d6c9bebcf926c5a396da5f04855ee83af1d77d2eba633518d->enter($__internal_ac0e8d43ec5c619d6c9bebcf926c5a396da5f04855ee83af1d77d2eba633518d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fa48ad1c047135a29789b6e772f6ebc4538a5c18e3dc8e211f8d93eb399297ce->leave($__internal_fa48ad1c047135a29789b6e772f6ebc4538a5c18e3dc8e211f8d93eb399297ce_prof);

        
        $__internal_ac0e8d43ec5c619d6c9bebcf926c5a396da5f04855ee83af1d77d2eba633518d->leave($__internal_ac0e8d43ec5c619d6c9bebcf926c5a396da5f04855ee83af1d77d2eba633518d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
