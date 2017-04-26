<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_35400d4b9d81f8d8002898324c3a6b7ae389918c37a64551043fe0ff0fa0927b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de5a35cb82fd9181ae1ec814936ad8872fd795ef500c183e637394ba2ecf994a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5a35cb82fd9181ae1ec814936ad8872fd795ef500c183e637394ba2ecf994a->enter($__internal_de5a35cb82fd9181ae1ec814936ad8872fd795ef500c183e637394ba2ecf994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e504bd336c46120c6cb4999f5318dcc1518faa1d8dc7a79ef01756260797d161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e504bd336c46120c6cb4999f5318dcc1518faa1d8dc7a79ef01756260797d161->enter($__internal_e504bd336c46120c6cb4999f5318dcc1518faa1d8dc7a79ef01756260797d161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de5a35cb82fd9181ae1ec814936ad8872fd795ef500c183e637394ba2ecf994a->leave($__internal_de5a35cb82fd9181ae1ec814936ad8872fd795ef500c183e637394ba2ecf994a_prof);

        
        $__internal_e504bd336c46120c6cb4999f5318dcc1518faa1d8dc7a79ef01756260797d161->leave($__internal_e504bd336c46120c6cb4999f5318dcc1518faa1d8dc7a79ef01756260797d161_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85f064afd3f2885b31da0d5e4adb2b5988199369e5dfb84667235a3e8d822765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f064afd3f2885b31da0d5e4adb2b5988199369e5dfb84667235a3e8d822765->enter($__internal_85f064afd3f2885b31da0d5e4adb2b5988199369e5dfb84667235a3e8d822765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9633d6b0af6ec90c95b92ba71d6a95b8bbc5dae02f18a2547efd9d666ba32c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9633d6b0af6ec90c95b92ba71d6a95b8bbc5dae02f18a2547efd9d666ba32c0f->enter($__internal_9633d6b0af6ec90c95b92ba71d6a95b8bbc5dae02f18a2547efd9d666ba32c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9633d6b0af6ec90c95b92ba71d6a95b8bbc5dae02f18a2547efd9d666ba32c0f->leave($__internal_9633d6b0af6ec90c95b92ba71d6a95b8bbc5dae02f18a2547efd9d666ba32c0f_prof);

        
        $__internal_85f064afd3f2885b31da0d5e4adb2b5988199369e5dfb84667235a3e8d822765->leave($__internal_85f064afd3f2885b31da0d5e4adb2b5988199369e5dfb84667235a3e8d822765_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
