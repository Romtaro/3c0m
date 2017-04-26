<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7bf09c8faea72c183986e083bd4bda9f204920aaf17cd8cd7d9460a3b01bc687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a92cb3e4f6c4d4e38b304dace62ff22f278f28ffed7e6c59f8f209582f426373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92cb3e4f6c4d4e38b304dace62ff22f278f28ffed7e6c59f8f209582f426373->enter($__internal_a92cb3e4f6c4d4e38b304dace62ff22f278f28ffed7e6c59f8f209582f426373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_00e36fabd1408fc263fc91a9278cd752f06d243f40452c92418c09a3b6bb8431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e36fabd1408fc263fc91a9278cd752f06d243f40452c92418c09a3b6bb8431->enter($__internal_00e36fabd1408fc263fc91a9278cd752f06d243f40452c92418c09a3b6bb8431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92cb3e4f6c4d4e38b304dace62ff22f278f28ffed7e6c59f8f209582f426373->leave($__internal_a92cb3e4f6c4d4e38b304dace62ff22f278f28ffed7e6c59f8f209582f426373_prof);

        
        $__internal_00e36fabd1408fc263fc91a9278cd752f06d243f40452c92418c09a3b6bb8431->leave($__internal_00e36fabd1408fc263fc91a9278cd752f06d243f40452c92418c09a3b6bb8431_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_826b6d3f20d1ad0657c52cf7e2db88baa1d42bf272fab35b660d7db6dd2bb89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826b6d3f20d1ad0657c52cf7e2db88baa1d42bf272fab35b660d7db6dd2bb89f->enter($__internal_826b6d3f20d1ad0657c52cf7e2db88baa1d42bf272fab35b660d7db6dd2bb89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_31e38281298f0593776be727fc20e06ee885bb83b6b43717e005c0dbcf3ab07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e38281298f0593776be727fc20e06ee885bb83b6b43717e005c0dbcf3ab07c->enter($__internal_31e38281298f0593776be727fc20e06ee885bb83b6b43717e005c0dbcf3ab07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31e38281298f0593776be727fc20e06ee885bb83b6b43717e005c0dbcf3ab07c->leave($__internal_31e38281298f0593776be727fc20e06ee885bb83b6b43717e005c0dbcf3ab07c_prof);

        
        $__internal_826b6d3f20d1ad0657c52cf7e2db88baa1d42bf272fab35b660d7db6dd2bb89f->leave($__internal_826b6d3f20d1ad0657c52cf7e2db88baa1d42bf272fab35b660d7db6dd2bb89f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c20726b30bb78e808b91b3cbc7c6af3926053c2d45367337c48e379731cb93ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20726b30bb78e808b91b3cbc7c6af3926053c2d45367337c48e379731cb93ee->enter($__internal_c20726b30bb78e808b91b3cbc7c6af3926053c2d45367337c48e379731cb93ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d491841f5fe36c81ead5e993ed13e4c8af44351ef76584abfe1711b28891f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d491841f5fe36c81ead5e993ed13e4c8af44351ef76584abfe1711b28891f6b->enter($__internal_2d491841f5fe36c81ead5e993ed13e4c8af44351ef76584abfe1711b28891f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d491841f5fe36c81ead5e993ed13e4c8af44351ef76584abfe1711b28891f6b->leave($__internal_2d491841f5fe36c81ead5e993ed13e4c8af44351ef76584abfe1711b28891f6b_prof);

        
        $__internal_c20726b30bb78e808b91b3cbc7c6af3926053c2d45367337c48e379731cb93ee->leave($__internal_c20726b30bb78e808b91b3cbc7c6af3926053c2d45367337c48e379731cb93ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fd61ea3a9d4816bcbf332226157015faff3f71059db2b9d540956826eb0e3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd61ea3a9d4816bcbf332226157015faff3f71059db2b9d540956826eb0e3df->enter($__internal_2fd61ea3a9d4816bcbf332226157015faff3f71059db2b9d540956826eb0e3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1df1b317e3eccfb3916e016323eeb9d1a4b9e620af5a0d5365c9f53b2f4ca1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1df1b317e3eccfb3916e016323eeb9d1a4b9e620af5a0d5365c9f53b2f4ca1c->enter($__internal_b1df1b317e3eccfb3916e016323eeb9d1a4b9e620af5a0d5365c9f53b2f4ca1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b1df1b317e3eccfb3916e016323eeb9d1a4b9e620af5a0d5365c9f53b2f4ca1c->leave($__internal_b1df1b317e3eccfb3916e016323eeb9d1a4b9e620af5a0d5365c9f53b2f4ca1c_prof);

        
        $__internal_2fd61ea3a9d4816bcbf332226157015faff3f71059db2b9d540956826eb0e3df->leave($__internal_2fd61ea3a9d4816bcbf332226157015faff3f71059db2b9d540956826eb0e3df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
