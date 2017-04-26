<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_811081022aaee7f42458c513da7b90e5922f1c5a63d8e912793b3d66e5b09d0c extends Twig_Template
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
        $__internal_5979f65b802059d58965711527b428647bff70d7afd21981c78b9cf67780cf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5979f65b802059d58965711527b428647bff70d7afd21981c78b9cf67780cf91->enter($__internal_5979f65b802059d58965711527b428647bff70d7afd21981c78b9cf67780cf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e256eb13533d5fd13370065b78f04bc63c6019a2a3a411e355fdebc44706fd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e256eb13533d5fd13370065b78f04bc63c6019a2a3a411e355fdebc44706fd28->enter($__internal_e256eb13533d5fd13370065b78f04bc63c6019a2a3a411e355fdebc44706fd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5979f65b802059d58965711527b428647bff70d7afd21981c78b9cf67780cf91->leave($__internal_5979f65b802059d58965711527b428647bff70d7afd21981c78b9cf67780cf91_prof);

        
        $__internal_e256eb13533d5fd13370065b78f04bc63c6019a2a3a411e355fdebc44706fd28->leave($__internal_e256eb13533d5fd13370065b78f04bc63c6019a2a3a411e355fdebc44706fd28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
