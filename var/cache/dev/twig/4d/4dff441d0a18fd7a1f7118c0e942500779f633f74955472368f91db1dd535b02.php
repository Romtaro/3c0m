<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f945decd22c4ec8b30350921c3d9b9d7aa3562a3e45b5e0841083d901c613d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98978bb7e46120ea0affbe6b862683670935fb088d3cad29ad1f5d0add29986b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98978bb7e46120ea0affbe6b862683670935fb088d3cad29ad1f5d0add29986b->enter($__internal_98978bb7e46120ea0affbe6b862683670935fb088d3cad29ad1f5d0add29986b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c62957311afda4e55d939fbff7c5885000a7f90ae5f95d12fc584fea639a7f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62957311afda4e55d939fbff7c5885000a7f90ae5f95d12fc584fea639a7f29->enter($__internal_c62957311afda4e55d939fbff7c5885000a7f90ae5f95d12fc584fea639a7f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98978bb7e46120ea0affbe6b862683670935fb088d3cad29ad1f5d0add29986b->leave($__internal_98978bb7e46120ea0affbe6b862683670935fb088d3cad29ad1f5d0add29986b_prof);

        
        $__internal_c62957311afda4e55d939fbff7c5885000a7f90ae5f95d12fc584fea639a7f29->leave($__internal_c62957311afda4e55d939fbff7c5885000a7f90ae5f95d12fc584fea639a7f29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae5f503a465ee1118c5c46a83ef2ddca5afaa0430340a14ae5837981c8841e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5f503a465ee1118c5c46a83ef2ddca5afaa0430340a14ae5837981c8841e30->enter($__internal_ae5f503a465ee1118c5c46a83ef2ddca5afaa0430340a14ae5837981c8841e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e64fe83ee938744b023a623e6cf567d7ea82530b15d6ca63348ff0158aeef79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64fe83ee938744b023a623e6cf567d7ea82530b15d6ca63348ff0158aeef79a->enter($__internal_e64fe83ee938744b023a623e6cf567d7ea82530b15d6ca63348ff0158aeef79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e64fe83ee938744b023a623e6cf567d7ea82530b15d6ca63348ff0158aeef79a->leave($__internal_e64fe83ee938744b023a623e6cf567d7ea82530b15d6ca63348ff0158aeef79a_prof);

        
        $__internal_ae5f503a465ee1118c5c46a83ef2ddca5afaa0430340a14ae5837981c8841e30->leave($__internal_ae5f503a465ee1118c5c46a83ef2ddca5afaa0430340a14ae5837981c8841e30_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e7e6a5d3ccced6d6af504aa77f36608539483c98425732b2c751364fe88bfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7e6a5d3ccced6d6af504aa77f36608539483c98425732b2c751364fe88bfda->enter($__internal_3e7e6a5d3ccced6d6af504aa77f36608539483c98425732b2c751364fe88bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a88af1dcbc0e53e89280850f67e31a0b92e7af49bce18069213623f8d397ccf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88af1dcbc0e53e89280850f67e31a0b92e7af49bce18069213623f8d397ccf2->enter($__internal_a88af1dcbc0e53e89280850f67e31a0b92e7af49bce18069213623f8d397ccf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a88af1dcbc0e53e89280850f67e31a0b92e7af49bce18069213623f8d397ccf2->leave($__internal_a88af1dcbc0e53e89280850f67e31a0b92e7af49bce18069213623f8d397ccf2_prof);

        
        $__internal_3e7e6a5d3ccced6d6af504aa77f36608539483c98425732b2c751364fe88bfda->leave($__internal_3e7e6a5d3ccced6d6af504aa77f36608539483c98425732b2c751364fe88bfda_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
