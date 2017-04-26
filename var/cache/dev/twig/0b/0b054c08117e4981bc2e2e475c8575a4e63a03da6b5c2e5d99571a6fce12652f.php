<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_4c00c2a41dec0a95c5af0a50394beea5705570f47904df3c843ade6436de7e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c00c2a41dec0a95c5af0a50394beea5705570f47904df3c843ade6436de7e8e->enter($__internal_4c00c2a41dec0a95c5af0a50394beea5705570f47904df3c843ade6436de7e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_029f76305d92525a8a569ff57957e68f653bfcb91ffa3649797a46f895701674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029f76305d92525a8a569ff57957e68f653bfcb91ffa3649797a46f895701674->enter($__internal_029f76305d92525a8a569ff57957e68f653bfcb91ffa3649797a46f895701674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c00c2a41dec0a95c5af0a50394beea5705570f47904df3c843ade6436de7e8e->leave($__internal_4c00c2a41dec0a95c5af0a50394beea5705570f47904df3c843ade6436de7e8e_prof);

        
        $__internal_029f76305d92525a8a569ff57957e68f653bfcb91ffa3649797a46f895701674->leave($__internal_029f76305d92525a8a569ff57957e68f653bfcb91ffa3649797a46f895701674_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_379ff22a9846a3c8a3f987e355c7c56a104276fad7f37468f5beaf6df0b624ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379ff22a9846a3c8a3f987e355c7c56a104276fad7f37468f5beaf6df0b624ad->enter($__internal_379ff22a9846a3c8a3f987e355c7c56a104276fad7f37468f5beaf6df0b624ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2f7587ec2b560842e9f983047508e3bf1c8d594a81f5ddb2d7997bf5d51c7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f7587ec2b560842e9f983047508e3bf1c8d594a81f5ddb2d7997bf5d51c7f6->enter($__internal_a2f7587ec2b560842e9f983047508e3bf1c8d594a81f5ddb2d7997bf5d51c7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2f7587ec2b560842e9f983047508e3bf1c8d594a81f5ddb2d7997bf5d51c7f6->leave($__internal_a2f7587ec2b560842e9f983047508e3bf1c8d594a81f5ddb2d7997bf5d51c7f6_prof);

        
        $__internal_379ff22a9846a3c8a3f987e355c7c56a104276fad7f37468f5beaf6df0b624ad->leave($__internal_379ff22a9846a3c8a3f987e355c7c56a104276fad7f37468f5beaf6df0b624ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e727e456c0cb0913670494605399e33aaa30358c4a2012164978d6a0317c5c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e727e456c0cb0913670494605399e33aaa30358c4a2012164978d6a0317c5c25->enter($__internal_e727e456c0cb0913670494605399e33aaa30358c4a2012164978d6a0317c5c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c530eff430c4ab61ac6c1c2abda4eb7ced42b7ea4ce314e39032097df6d0c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c530eff430c4ab61ac6c1c2abda4eb7ced42b7ea4ce314e39032097df6d0c1c->enter($__internal_8c530eff430c4ab61ac6c1c2abda4eb7ced42b7ea4ce314e39032097df6d0c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c530eff430c4ab61ac6c1c2abda4eb7ced42b7ea4ce314e39032097df6d0c1c->leave($__internal_8c530eff430c4ab61ac6c1c2abda4eb7ced42b7ea4ce314e39032097df6d0c1c_prof);

        
        $__internal_e727e456c0cb0913670494605399e33aaa30358c4a2012164978d6a0317c5c25->leave($__internal_e727e456c0cb0913670494605399e33aaa30358c4a2012164978d6a0317c5c25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9de0cf84683005803aaa8a8e284c004744cffc65bda8380c9a85c6dc9519efff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de0cf84683005803aaa8a8e284c004744cffc65bda8380c9a85c6dc9519efff->enter($__internal_9de0cf84683005803aaa8a8e284c004744cffc65bda8380c9a85c6dc9519efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac720ac2d42b18a2c5af3c198a7ed7f1df0d9c529de2c7ed22dfe0c4f71a4218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac720ac2d42b18a2c5af3c198a7ed7f1df0d9c529de2c7ed22dfe0c4f71a4218->enter($__internal_ac720ac2d42b18a2c5af3c198a7ed7f1df0d9c529de2c7ed22dfe0c4f71a4218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ac720ac2d42b18a2c5af3c198a7ed7f1df0d9c529de2c7ed22dfe0c4f71a4218->leave($__internal_ac720ac2d42b18a2c5af3c198a7ed7f1df0d9c529de2c7ed22dfe0c4f71a4218_prof);

        
        $__internal_9de0cf84683005803aaa8a8e284c004744cffc65bda8380c9a85c6dc9519efff->leave($__internal_9de0cf84683005803aaa8a8e284c004744cffc65bda8380c9a85c6dc9519efff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
