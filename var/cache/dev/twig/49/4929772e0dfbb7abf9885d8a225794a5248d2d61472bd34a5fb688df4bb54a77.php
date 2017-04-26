<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_260bcf0ad8435ae81d6662912146cbbecd3eab416360156e2434007bc9a032d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7759d6a9a942933fb462ccb326e444e8f270342bcd2dbee00fad6ffc2add6954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7759d6a9a942933fb462ccb326e444e8f270342bcd2dbee00fad6ffc2add6954->enter($__internal_7759d6a9a942933fb462ccb326e444e8f270342bcd2dbee00fad6ffc2add6954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b65f9ba0ba1f1930721ccb9c34269051211ae854112b783994fdeb7ac1ff0020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65f9ba0ba1f1930721ccb9c34269051211ae854112b783994fdeb7ac1ff0020->enter($__internal_b65f9ba0ba1f1930721ccb9c34269051211ae854112b783994fdeb7ac1ff0020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7759d6a9a942933fb462ccb326e444e8f270342bcd2dbee00fad6ffc2add6954->leave($__internal_7759d6a9a942933fb462ccb326e444e8f270342bcd2dbee00fad6ffc2add6954_prof);

        
        $__internal_b65f9ba0ba1f1930721ccb9c34269051211ae854112b783994fdeb7ac1ff0020->leave($__internal_b65f9ba0ba1f1930721ccb9c34269051211ae854112b783994fdeb7ac1ff0020_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_10124a940e03430669296068e2e3c2a73e4b4484b41860639e848d382070c19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10124a940e03430669296068e2e3c2a73e4b4484b41860639e848d382070c19d->enter($__internal_10124a940e03430669296068e2e3c2a73e4b4484b41860639e848d382070c19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4b452c1334b556c7100aaac3e2f7a075432553ab650771448f3f647b963b7edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b452c1334b556c7100aaac3e2f7a075432553ab650771448f3f647b963b7edf->enter($__internal_4b452c1334b556c7100aaac3e2f7a075432553ab650771448f3f647b963b7edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_4b452c1334b556c7100aaac3e2f7a075432553ab650771448f3f647b963b7edf->leave($__internal_4b452c1334b556c7100aaac3e2f7a075432553ab650771448f3f647b963b7edf_prof);

        
        $__internal_10124a940e03430669296068e2e3c2a73e4b4484b41860639e848d382070c19d->leave($__internal_10124a940e03430669296068e2e3c2a73e4b4484b41860639e848d382070c19d_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e39895122ee17a374885eb3455d266e3eec239d8ec7cae32417850427bbe626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e39895122ee17a374885eb3455d266e3eec239d8ec7cae32417850427bbe626->enter($__internal_0e39895122ee17a374885eb3455d266e3eec239d8ec7cae32417850427bbe626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7f6d32275dcd1dc83d051ed89f4ce13a68781ff9a1637f1b2eb63e34665fadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f6d32275dcd1dc83d051ed89f4ce13a68781ff9a1637f1b2eb63e34665fadc->enter($__internal_d7f6d32275dcd1dc83d051ed89f4ce13a68781ff9a1637f1b2eb63e34665fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d7f6d32275dcd1dc83d051ed89f4ce13a68781ff9a1637f1b2eb63e34665fadc->leave($__internal_d7f6d32275dcd1dc83d051ed89f4ce13a68781ff9a1637f1b2eb63e34665fadc_prof);

        
        $__internal_0e39895122ee17a374885eb3455d266e3eec239d8ec7cae32417850427bbe626->leave($__internal_0e39895122ee17a374885eb3455d266e3eec239d8ec7cae32417850427bbe626_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
