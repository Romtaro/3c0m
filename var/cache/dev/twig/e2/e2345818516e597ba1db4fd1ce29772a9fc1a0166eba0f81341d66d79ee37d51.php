<?php

/* base.html.twig */
class __TwigTemplate_54760178e2afd20d65f9beb08cc368901cb954cbe7d422100dbffaa4bf820fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0251451cfa10e2c6cb10aeb91aec8187b2f18cfc19f2266e670fa52d56b4233f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0251451cfa10e2c6cb10aeb91aec8187b2f18cfc19f2266e670fa52d56b4233f->enter($__internal_0251451cfa10e2c6cb10aeb91aec8187b2f18cfc19f2266e670fa52d56b4233f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_82250010bf16fa4edf73ec6931d1df57a34c103e072981923fd71ce50c17989e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82250010bf16fa4edf73ec6931d1df57a34c103e072981923fd71ce50c17989e->enter($__internal_82250010bf16fa4edf73ec6931d1df57a34c103e072981923fd71ce50c17989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0251451cfa10e2c6cb10aeb91aec8187b2f18cfc19f2266e670fa52d56b4233f->leave($__internal_0251451cfa10e2c6cb10aeb91aec8187b2f18cfc19f2266e670fa52d56b4233f_prof);

        
        $__internal_82250010bf16fa4edf73ec6931d1df57a34c103e072981923fd71ce50c17989e->leave($__internal_82250010bf16fa4edf73ec6931d1df57a34c103e072981923fd71ce50c17989e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0471278cb88fb8a5c0e20376202b54bb90eea7cb78031441d8fd7f9360d09d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0471278cb88fb8a5c0e20376202b54bb90eea7cb78031441d8fd7f9360d09d5d->enter($__internal_0471278cb88fb8a5c0e20376202b54bb90eea7cb78031441d8fd7f9360d09d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c6ffd79767d839be6a85a3abeacde9f47db1bee457f59a77db02109d3cdd5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6ffd79767d839be6a85a3abeacde9f47db1bee457f59a77db02109d3cdd5d4->enter($__internal_3c6ffd79767d839be6a85a3abeacde9f47db1bee457f59a77db02109d3cdd5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c6ffd79767d839be6a85a3abeacde9f47db1bee457f59a77db02109d3cdd5d4->leave($__internal_3c6ffd79767d839be6a85a3abeacde9f47db1bee457f59a77db02109d3cdd5d4_prof);

        
        $__internal_0471278cb88fb8a5c0e20376202b54bb90eea7cb78031441d8fd7f9360d09d5d->leave($__internal_0471278cb88fb8a5c0e20376202b54bb90eea7cb78031441d8fd7f9360d09d5d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc42e4121d6ccdd5e977c6802f6098b3724f9152c014c3fc6f423d1560d8aa85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc42e4121d6ccdd5e977c6802f6098b3724f9152c014c3fc6f423d1560d8aa85->enter($__internal_cc42e4121d6ccdd5e977c6802f6098b3724f9152c014c3fc6f423d1560d8aa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7183d3d8edd84723f21b53b9da9a3e66ab88bc9a952098a5d5fb5eb2958d18cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7183d3d8edd84723f21b53b9da9a3e66ab88bc9a952098a5d5fb5eb2958d18cf->enter($__internal_7183d3d8edd84723f21b53b9da9a3e66ab88bc9a952098a5d5fb5eb2958d18cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7183d3d8edd84723f21b53b9da9a3e66ab88bc9a952098a5d5fb5eb2958d18cf->leave($__internal_7183d3d8edd84723f21b53b9da9a3e66ab88bc9a952098a5d5fb5eb2958d18cf_prof);

        
        $__internal_cc42e4121d6ccdd5e977c6802f6098b3724f9152c014c3fc6f423d1560d8aa85->leave($__internal_cc42e4121d6ccdd5e977c6802f6098b3724f9152c014c3fc6f423d1560d8aa85_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa4d19cf70eb3bd63f25e1545fedd18eadbff9890765b29c9b7fad70f1048ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4d19cf70eb3bd63f25e1545fedd18eadbff9890765b29c9b7fad70f1048ec7->enter($__internal_fa4d19cf70eb3bd63f25e1545fedd18eadbff9890765b29c9b7fad70f1048ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04174fb9f1d02f64132a7e8ba9591aecfb332a3ca1eaba6af1bbf84dc9de34f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04174fb9f1d02f64132a7e8ba9591aecfb332a3ca1eaba6af1bbf84dc9de34f2->enter($__internal_04174fb9f1d02f64132a7e8ba9591aecfb332a3ca1eaba6af1bbf84dc9de34f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04174fb9f1d02f64132a7e8ba9591aecfb332a3ca1eaba6af1bbf84dc9de34f2->leave($__internal_04174fb9f1d02f64132a7e8ba9591aecfb332a3ca1eaba6af1bbf84dc9de34f2_prof);

        
        $__internal_fa4d19cf70eb3bd63f25e1545fedd18eadbff9890765b29c9b7fad70f1048ec7->leave($__internal_fa4d19cf70eb3bd63f25e1545fedd18eadbff9890765b29c9b7fad70f1048ec7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5773e4ed19e8fb6050226dc6a5119f76370d6b7f7cc64d468c6ae3fce10b051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5773e4ed19e8fb6050226dc6a5119f76370d6b7f7cc64d468c6ae3fce10b051->enter($__internal_c5773e4ed19e8fb6050226dc6a5119f76370d6b7f7cc64d468c6ae3fce10b051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_659068c61557409b2d763ade7200275eec8c3962ead0f589d8d374cace2a3acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659068c61557409b2d763ade7200275eec8c3962ead0f589d8d374cace2a3acd->enter($__internal_659068c61557409b2d763ade7200275eec8c3962ead0f589d8d374cace2a3acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_659068c61557409b2d763ade7200275eec8c3962ead0f589d8d374cace2a3acd->leave($__internal_659068c61557409b2d763ade7200275eec8c3962ead0f589d8d374cace2a3acd_prof);

        
        $__internal_c5773e4ed19e8fb6050226dc6a5119f76370d6b7f7cc64d468c6ae3fce10b051->leave($__internal_c5773e4ed19e8fb6050226dc6a5119f76370d6b7f7cc64d468c6ae3fce10b051_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Synfony_Project\\app\\Resources\\views\\base.html.twig");
    }
}
