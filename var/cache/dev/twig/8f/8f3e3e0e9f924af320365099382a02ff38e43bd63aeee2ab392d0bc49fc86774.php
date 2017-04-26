<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_442cdeaaaea6b939cc2600789fa03d7ce3ccf76f04ac03bfa8b342a8699da036 extends Twig_Template
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
        $__internal_846210c186295d7d5ce007cb8974d0317bef80752ce1608aafcebae0f851349e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846210c186295d7d5ce007cb8974d0317bef80752ce1608aafcebae0f851349e->enter($__internal_846210c186295d7d5ce007cb8974d0317bef80752ce1608aafcebae0f851349e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_878689204972c51274d33f271082e894253016c39c5ed597208494eff9c31b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878689204972c51274d33f271082e894253016c39c5ed597208494eff9c31b7b->enter($__internal_878689204972c51274d33f271082e894253016c39c5ed597208494eff9c31b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_846210c186295d7d5ce007cb8974d0317bef80752ce1608aafcebae0f851349e->leave($__internal_846210c186295d7d5ce007cb8974d0317bef80752ce1608aafcebae0f851349e_prof);

        
        $__internal_878689204972c51274d33f271082e894253016c39c5ed597208494eff9c31b7b->leave($__internal_878689204972c51274d33f271082e894253016c39c5ed597208494eff9c31b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
