<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_62e623694352252364a1ae092551863519526e5cfddf26d8117f0ebd248030a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_172de332ccb31cebd61ade6c82a1fdc837eb59d5a2d42a73e4e1cafc38dc8d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172de332ccb31cebd61ade6c82a1fdc837eb59d5a2d42a73e4e1cafc38dc8d65->enter($__internal_172de332ccb31cebd61ade6c82a1fdc837eb59d5a2d42a73e4e1cafc38dc8d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6bc33ea1c9212fc94d97f9c129f0c4c839a83b95a28c27a02c1ae4ff974929be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc33ea1c9212fc94d97f9c129f0c4c839a83b95a28c27a02c1ae4ff974929be->enter($__internal_6bc33ea1c9212fc94d97f9c129f0c4c839a83b95a28c27a02c1ae4ff974929be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172de332ccb31cebd61ade6c82a1fdc837eb59d5a2d42a73e4e1cafc38dc8d65->leave($__internal_172de332ccb31cebd61ade6c82a1fdc837eb59d5a2d42a73e4e1cafc38dc8d65_prof);

        
        $__internal_6bc33ea1c9212fc94d97f9c129f0c4c839a83b95a28c27a02c1ae4ff974929be->leave($__internal_6bc33ea1c9212fc94d97f9c129f0c4c839a83b95a28c27a02c1ae4ff974929be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50193ceeda99a1c0d058beb0f2da5ee473bdfc19d1562d72916f3182da53943f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50193ceeda99a1c0d058beb0f2da5ee473bdfc19d1562d72916f3182da53943f->enter($__internal_50193ceeda99a1c0d058beb0f2da5ee473bdfc19d1562d72916f3182da53943f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f64aea79a89a9728cca452c0afe335a96693bc0ec8e8e7d4969e0fd818bcd023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64aea79a89a9728cca452c0afe335a96693bc0ec8e8e7d4969e0fd818bcd023->enter($__internal_f64aea79a89a9728cca452c0afe335a96693bc0ec8e8e7d4969e0fd818bcd023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f64aea79a89a9728cca452c0afe335a96693bc0ec8e8e7d4969e0fd818bcd023->leave($__internal_f64aea79a89a9728cca452c0afe335a96693bc0ec8e8e7d4969e0fd818bcd023_prof);

        
        $__internal_50193ceeda99a1c0d058beb0f2da5ee473bdfc19d1562d72916f3182da53943f->leave($__internal_50193ceeda99a1c0d058beb0f2da5ee473bdfc19d1562d72916f3182da53943f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e86900d2831016a2a5817f77e1c018baa833e77be82a4c4c20e101978bb363c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e86900d2831016a2a5817f77e1c018baa833e77be82a4c4c20e101978bb363c->enter($__internal_1e86900d2831016a2a5817f77e1c018baa833e77be82a4c4c20e101978bb363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7469a5256db11e3309d5b25da563472e87ea0f6dd49b82324a117607d3318d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7469a5256db11e3309d5b25da563472e87ea0f6dd49b82324a117607d3318d2->enter($__internal_e7469a5256db11e3309d5b25da563472e87ea0f6dd49b82324a117607d3318d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e7469a5256db11e3309d5b25da563472e87ea0f6dd49b82324a117607d3318d2->leave($__internal_e7469a5256db11e3309d5b25da563472e87ea0f6dd49b82324a117607d3318d2_prof);

        
        $__internal_1e86900d2831016a2a5817f77e1c018baa833e77be82a4c4c20e101978bb363c->leave($__internal_1e86900d2831016a2a5817f77e1c018baa833e77be82a4c4c20e101978bb363c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
