<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d691f38a42499a34a98cc0d2964754d2f987b9860ae8b528fe7802c025603cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_3cb0d843a05cb0b5be88805df070fb681ac84f4b8d2a06a2347d63c5181d3901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb0d843a05cb0b5be88805df070fb681ac84f4b8d2a06a2347d63c5181d3901->enter($__internal_3cb0d843a05cb0b5be88805df070fb681ac84f4b8d2a06a2347d63c5181d3901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_adc64ee6931bcb1dfa03c9803a64294b9c88998e38aadd7bbde5985bfbdef29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc64ee6931bcb1dfa03c9803a64294b9c88998e38aadd7bbde5985bfbdef29c->enter($__internal_adc64ee6931bcb1dfa03c9803a64294b9c88998e38aadd7bbde5985bfbdef29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb0d843a05cb0b5be88805df070fb681ac84f4b8d2a06a2347d63c5181d3901->leave($__internal_3cb0d843a05cb0b5be88805df070fb681ac84f4b8d2a06a2347d63c5181d3901_prof);

        
        $__internal_adc64ee6931bcb1dfa03c9803a64294b9c88998e38aadd7bbde5985bfbdef29c->leave($__internal_adc64ee6931bcb1dfa03c9803a64294b9c88998e38aadd7bbde5985bfbdef29c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc73b71645a0c91363b9dfdd366231122dacca6627f777107e387959ade53925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc73b71645a0c91363b9dfdd366231122dacca6627f777107e387959ade53925->enter($__internal_fc73b71645a0c91363b9dfdd366231122dacca6627f777107e387959ade53925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb5c069fa44e0052fc9d70fe16dbf6994209b72cd477bfecd29d9e4051a63bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5c069fa44e0052fc9d70fe16dbf6994209b72cd477bfecd29d9e4051a63bfc->enter($__internal_eb5c069fa44e0052fc9d70fe16dbf6994209b72cd477bfecd29d9e4051a63bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eb5c069fa44e0052fc9d70fe16dbf6994209b72cd477bfecd29d9e4051a63bfc->leave($__internal_eb5c069fa44e0052fc9d70fe16dbf6994209b72cd477bfecd29d9e4051a63bfc_prof);

        
        $__internal_fc73b71645a0c91363b9dfdd366231122dacca6627f777107e387959ade53925->leave($__internal_fc73b71645a0c91363b9dfdd366231122dacca6627f777107e387959ade53925_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e739c9376e3547a00cdac0d073c05b8a1667a28714b8a451b38b26d9eb5809de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e739c9376e3547a00cdac0d073c05b8a1667a28714b8a451b38b26d9eb5809de->enter($__internal_e739c9376e3547a00cdac0d073c05b8a1667a28714b8a451b38b26d9eb5809de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50ad37301d2eed39ce8d4b7e1e24685affb524a056bb92db88b645915ccef6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ad37301d2eed39ce8d4b7e1e24685affb524a056bb92db88b645915ccef6a3->enter($__internal_50ad37301d2eed39ce8d4b7e1e24685affb524a056bb92db88b645915ccef6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50ad37301d2eed39ce8d4b7e1e24685affb524a056bb92db88b645915ccef6a3->leave($__internal_50ad37301d2eed39ce8d4b7e1e24685affb524a056bb92db88b645915ccef6a3_prof);

        
        $__internal_e739c9376e3547a00cdac0d073c05b8a1667a28714b8a451b38b26d9eb5809de->leave($__internal_e739c9376e3547a00cdac0d073c05b8a1667a28714b8a451b38b26d9eb5809de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
