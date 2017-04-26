<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_02f6b63203c4cde51250fb448a3543f877ee9f019fc64570f1b996c01ccb7e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f6b63203c4cde51250fb448a3543f877ee9f019fc64570f1b996c01ccb7e89->enter($__internal_02f6b63203c4cde51250fb448a3543f877ee9f019fc64570f1b996c01ccb7e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_93525978bc639b3e364f4cfe77fd029a852d61845214e5c2c3eb5202e0fc6e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93525978bc639b3e364f4cfe77fd029a852d61845214e5c2c3eb5202e0fc6e19->enter($__internal_93525978bc639b3e364f4cfe77fd029a852d61845214e5c2c3eb5202e0fc6e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f6b63203c4cde51250fb448a3543f877ee9f019fc64570f1b996c01ccb7e89->leave($__internal_02f6b63203c4cde51250fb448a3543f877ee9f019fc64570f1b996c01ccb7e89_prof);

        
        $__internal_93525978bc639b3e364f4cfe77fd029a852d61845214e5c2c3eb5202e0fc6e19->leave($__internal_93525978bc639b3e364f4cfe77fd029a852d61845214e5c2c3eb5202e0fc6e19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41a30d2c1beca73615baa3f03292a9142fbe2531f1f996574a347699fe219e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41a30d2c1beca73615baa3f03292a9142fbe2531f1f996574a347699fe219e65->enter($__internal_41a30d2c1beca73615baa3f03292a9142fbe2531f1f996574a347699fe219e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_291da3f09478d32adad74079d1e430c05c9df7aeff32fce311d178d8cd1e2bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291da3f09478d32adad74079d1e430c05c9df7aeff32fce311d178d8cd1e2bd9->enter($__internal_291da3f09478d32adad74079d1e430c05c9df7aeff32fce311d178d8cd1e2bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_291da3f09478d32adad74079d1e430c05c9df7aeff32fce311d178d8cd1e2bd9->leave($__internal_291da3f09478d32adad74079d1e430c05c9df7aeff32fce311d178d8cd1e2bd9_prof);

        
        $__internal_41a30d2c1beca73615baa3f03292a9142fbe2531f1f996574a347699fe219e65->leave($__internal_41a30d2c1beca73615baa3f03292a9142fbe2531f1f996574a347699fe219e65_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8da29fe29ed6967de525bfb6409f3c00742e0f4720d67e8903d1b582cbc1fc09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da29fe29ed6967de525bfb6409f3c00742e0f4720d67e8903d1b582cbc1fc09->enter($__internal_8da29fe29ed6967de525bfb6409f3c00742e0f4720d67e8903d1b582cbc1fc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac7d5c44c8d2a9124064fa3c67c7b5ffcd7856a31acecbb3c147c41107155fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7d5c44c8d2a9124064fa3c67c7b5ffcd7856a31acecbb3c147c41107155fb0->enter($__internal_ac7d5c44c8d2a9124064fa3c67c7b5ffcd7856a31acecbb3c147c41107155fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ac7d5c44c8d2a9124064fa3c67c7b5ffcd7856a31acecbb3c147c41107155fb0->leave($__internal_ac7d5c44c8d2a9124064fa3c67c7b5ffcd7856a31acecbb3c147c41107155fb0_prof);

        
        $__internal_8da29fe29ed6967de525bfb6409f3c00742e0f4720d67e8903d1b582cbc1fc09->leave($__internal_8da29fe29ed6967de525bfb6409f3c00742e0f4720d67e8903d1b582cbc1fc09_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed6857f817cf381ba46d4becb0abc623de857a5a1b8dad35df653633fc4056f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6857f817cf381ba46d4becb0abc623de857a5a1b8dad35df653633fc4056f8->enter($__internal_ed6857f817cf381ba46d4becb0abc623de857a5a1b8dad35df653633fc4056f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f6ec6faba0562b278c2a5013356109c6e585e461f9201e7dac3c8221201d230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6ec6faba0562b278c2a5013356109c6e585e461f9201e7dac3c8221201d230->enter($__internal_4f6ec6faba0562b278c2a5013356109c6e585e461f9201e7dac3c8221201d230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4f6ec6faba0562b278c2a5013356109c6e585e461f9201e7dac3c8221201d230->leave($__internal_4f6ec6faba0562b278c2a5013356109c6e585e461f9201e7dac3c8221201d230_prof);

        
        $__internal_ed6857f817cf381ba46d4becb0abc623de857a5a1b8dad35df653633fc4056f8->leave($__internal_ed6857f817cf381ba46d4becb0abc623de857a5a1b8dad35df653633fc4056f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
