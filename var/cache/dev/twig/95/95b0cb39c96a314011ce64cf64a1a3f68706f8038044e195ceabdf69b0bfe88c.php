<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_93622f295dfd907655096d409b725438223ae05a4675d37f7cf23d7be8aa891a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_47e773cbeb7212a733421537be30b8952b41f51995ddb5e1446c90c836fdecd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e773cbeb7212a733421537be30b8952b41f51995ddb5e1446c90c836fdecd6->enter($__internal_47e773cbeb7212a733421537be30b8952b41f51995ddb5e1446c90c836fdecd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5369e32259c32cdc4148b800025b54b26f4ed4f74ed930d3051b0f28a44fa7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5369e32259c32cdc4148b800025b54b26f4ed4f74ed930d3051b0f28a44fa7be->enter($__internal_5369e32259c32cdc4148b800025b54b26f4ed4f74ed930d3051b0f28a44fa7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47e773cbeb7212a733421537be30b8952b41f51995ddb5e1446c90c836fdecd6->leave($__internal_47e773cbeb7212a733421537be30b8952b41f51995ddb5e1446c90c836fdecd6_prof);

        
        $__internal_5369e32259c32cdc4148b800025b54b26f4ed4f74ed930d3051b0f28a44fa7be->leave($__internal_5369e32259c32cdc4148b800025b54b26f4ed4f74ed930d3051b0f28a44fa7be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff9eaedc75ad87dfbc37f1fe105963b12658713a79e2b589a597e7527437c9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9eaedc75ad87dfbc37f1fe105963b12658713a79e2b589a597e7527437c9e3->enter($__internal_ff9eaedc75ad87dfbc37f1fe105963b12658713a79e2b589a597e7527437c9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9d2bf806dcede2542a722570083bfa5335433e26d4ecdbe728f044cf6ee844c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d2bf806dcede2542a722570083bfa5335433e26d4ecdbe728f044cf6ee844c->enter($__internal_d9d2bf806dcede2542a722570083bfa5335433e26d4ecdbe728f044cf6ee844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d9d2bf806dcede2542a722570083bfa5335433e26d4ecdbe728f044cf6ee844c->leave($__internal_d9d2bf806dcede2542a722570083bfa5335433e26d4ecdbe728f044cf6ee844c_prof);

        
        $__internal_ff9eaedc75ad87dfbc37f1fe105963b12658713a79e2b589a597e7527437c9e3->leave($__internal_ff9eaedc75ad87dfbc37f1fe105963b12658713a79e2b589a597e7527437c9e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c8959719a79ee13e7360d7aa625f9122213bd039af89f95f550e26cf653b775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8959719a79ee13e7360d7aa625f9122213bd039af89f95f550e26cf653b775->enter($__internal_7c8959719a79ee13e7360d7aa625f9122213bd039af89f95f550e26cf653b775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3fc01bb3835753551a96c04c52a64e4b34debf3993105636d531390b8d26e0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc01bb3835753551a96c04c52a64e4b34debf3993105636d531390b8d26e0a0->enter($__internal_3fc01bb3835753551a96c04c52a64e4b34debf3993105636d531390b8d26e0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3fc01bb3835753551a96c04c52a64e4b34debf3993105636d531390b8d26e0a0->leave($__internal_3fc01bb3835753551a96c04c52a64e4b34debf3993105636d531390b8d26e0a0_prof);

        
        $__internal_7c8959719a79ee13e7360d7aa625f9122213bd039af89f95f550e26cf653b775->leave($__internal_7c8959719a79ee13e7360d7aa625f9122213bd039af89f95f550e26cf653b775_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a06bad8b2bc1e5e4457a5738749a7d8442368ca75e6c3eaf06b66e86f7e53bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a06bad8b2bc1e5e4457a5738749a7d8442368ca75e6c3eaf06b66e86f7e53bd->enter($__internal_5a06bad8b2bc1e5e4457a5738749a7d8442368ca75e6c3eaf06b66e86f7e53bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2fa60cb5ea2b8297c6889990e79a319a02ca32e6fc66bd90ef85b79c9c717d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa60cb5ea2b8297c6889990e79a319a02ca32e6fc66bd90ef85b79c9c717d91->enter($__internal_2fa60cb5ea2b8297c6889990e79a319a02ca32e6fc66bd90ef85b79c9c717d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2fa60cb5ea2b8297c6889990e79a319a02ca32e6fc66bd90ef85b79c9c717d91->leave($__internal_2fa60cb5ea2b8297c6889990e79a319a02ca32e6fc66bd90ef85b79c9c717d91_prof);

        
        $__internal_5a06bad8b2bc1e5e4457a5738749a7d8442368ca75e6c3eaf06b66e86f7e53bd->leave($__internal_5a06bad8b2bc1e5e4457a5738749a7d8442368ca75e6c3eaf06b66e86f7e53bd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
