<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0f14d86f0462ec2ddbaa4fa0c49f9a04e76b117921f0208e74e8f849aa9de329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bbe8a21c5a4abff861d30805c2832d7d53ebbf7e17563f622fa0818e46649b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbe8a21c5a4abff861d30805c2832d7d53ebbf7e17563f622fa0818e46649b2->enter($__internal_7bbe8a21c5a4abff861d30805c2832d7d53ebbf7e17563f622fa0818e46649b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_af5f634f7ec83375dbb1889d9e2a47d3d95cee0e54a99be7225599801bec56f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5f634f7ec83375dbb1889d9e2a47d3d95cee0e54a99be7225599801bec56f7->enter($__internal_af5f634f7ec83375dbb1889d9e2a47d3d95cee0e54a99be7225599801bec56f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbe8a21c5a4abff861d30805c2832d7d53ebbf7e17563f622fa0818e46649b2->leave($__internal_7bbe8a21c5a4abff861d30805c2832d7d53ebbf7e17563f622fa0818e46649b2_prof);

        
        $__internal_af5f634f7ec83375dbb1889d9e2a47d3d95cee0e54a99be7225599801bec56f7->leave($__internal_af5f634f7ec83375dbb1889d9e2a47d3d95cee0e54a99be7225599801bec56f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94614be20f68898ef148db45392b4e977a39074c066111eb71b2af431dff7974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94614be20f68898ef148db45392b4e977a39074c066111eb71b2af431dff7974->enter($__internal_94614be20f68898ef148db45392b4e977a39074c066111eb71b2af431dff7974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5e81196163a2d4f861d96f49bbb30f7cea73956e16d2faa449207bcae934d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e81196163a2d4f861d96f49bbb30f7cea73956e16d2faa449207bcae934d95->enter($__internal_b5e81196163a2d4f861d96f49bbb30f7cea73956e16d2faa449207bcae934d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b5e81196163a2d4f861d96f49bbb30f7cea73956e16d2faa449207bcae934d95->leave($__internal_b5e81196163a2d4f861d96f49bbb30f7cea73956e16d2faa449207bcae934d95_prof);

        
        $__internal_94614be20f68898ef148db45392b4e977a39074c066111eb71b2af431dff7974->leave($__internal_94614be20f68898ef148db45392b4e977a39074c066111eb71b2af431dff7974_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb5116a2919809efa812d0ab2f11bc9e65b3f65d867f04ea91ff59e847b79105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5116a2919809efa812d0ab2f11bc9e65b3f65d867f04ea91ff59e847b79105->enter($__internal_eb5116a2919809efa812d0ab2f11bc9e65b3f65d867f04ea91ff59e847b79105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba1d06e427473022f929227780daaf6bfd2be9dd81f97edb4b65a0d4ce3076b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1d06e427473022f929227780daaf6bfd2be9dd81f97edb4b65a0d4ce3076b0->enter($__internal_ba1d06e427473022f929227780daaf6bfd2be9dd81f97edb4b65a0d4ce3076b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ba1d06e427473022f929227780daaf6bfd2be9dd81f97edb4b65a0d4ce3076b0->leave($__internal_ba1d06e427473022f929227780daaf6bfd2be9dd81f97edb4b65a0d4ce3076b0_prof);

        
        $__internal_eb5116a2919809efa812d0ab2f11bc9e65b3f65d867f04ea91ff59e847b79105->leave($__internal_eb5116a2919809efa812d0ab2f11bc9e65b3f65d867f04ea91ff59e847b79105_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
