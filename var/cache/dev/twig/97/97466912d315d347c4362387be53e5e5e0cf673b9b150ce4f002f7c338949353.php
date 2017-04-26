<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_bd0e06ba450958728b0e50e8385068fc242d8da1915a4a84ef5f3970431ec603 extends Twig_Template
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
        $__internal_fed265b0119bfa65f5f5747c97dee6165c720eecd626f7a84ee94bf2b5d0cdf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed265b0119bfa65f5f5747c97dee6165c720eecd626f7a84ee94bf2b5d0cdf7->enter($__internal_fed265b0119bfa65f5f5747c97dee6165c720eecd626f7a84ee94bf2b5d0cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7eb0727f84ba1ceea8796c2ef1d78e6fa95c27a65a69314baea723e9a3df06c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb0727f84ba1ceea8796c2ef1d78e6fa95c27a65a69314baea723e9a3df06c9->enter($__internal_7eb0727f84ba1ceea8796c2ef1d78e6fa95c27a65a69314baea723e9a3df06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fed265b0119bfa65f5f5747c97dee6165c720eecd626f7a84ee94bf2b5d0cdf7->leave($__internal_fed265b0119bfa65f5f5747c97dee6165c720eecd626f7a84ee94bf2b5d0cdf7_prof);

        
        $__internal_7eb0727f84ba1ceea8796c2ef1d78e6fa95c27a65a69314baea723e9a3df06c9->leave($__internal_7eb0727f84ba1ceea8796c2ef1d78e6fa95c27a65a69314baea723e9a3df06c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
