<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ba7dfa9a7788ef2b5f0be8eaacc9f5c372adf35267cf20936dbd4ba1546e04fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_76f675123f574b38f59b95b85bed352a29ecba6ecbcfdf376b3efb46c7c7fab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f675123f574b38f59b95b85bed352a29ecba6ecbcfdf376b3efb46c7c7fab3->enter($__internal_76f675123f574b38f59b95b85bed352a29ecba6ecbcfdf376b3efb46c7c7fab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_caabd72f8b0822e12804d330bacb455361c1db2045d8a7f38a3b67bec4813d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caabd72f8b0822e12804d330bacb455361c1db2045d8a7f38a3b67bec4813d10->enter($__internal_caabd72f8b0822e12804d330bacb455361c1db2045d8a7f38a3b67bec4813d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f675123f574b38f59b95b85bed352a29ecba6ecbcfdf376b3efb46c7c7fab3->leave($__internal_76f675123f574b38f59b95b85bed352a29ecba6ecbcfdf376b3efb46c7c7fab3_prof);

        
        $__internal_caabd72f8b0822e12804d330bacb455361c1db2045d8a7f38a3b67bec4813d10->leave($__internal_caabd72f8b0822e12804d330bacb455361c1db2045d8a7f38a3b67bec4813d10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f01ed2b05c6b887844687be38421760dffd21235f47aa83df7879e1600e861e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f01ed2b05c6b887844687be38421760dffd21235f47aa83df7879e1600e861e->enter($__internal_4f01ed2b05c6b887844687be38421760dffd21235f47aa83df7879e1600e861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6605007f06b8566d43e9613a8e96f3a95a93bf691e740beb121c4e23b89ded79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6605007f06b8566d43e9613a8e96f3a95a93bf691e740beb121c4e23b89ded79->enter($__internal_6605007f06b8566d43e9613a8e96f3a95a93bf691e740beb121c4e23b89ded79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6605007f06b8566d43e9613a8e96f3a95a93bf691e740beb121c4e23b89ded79->leave($__internal_6605007f06b8566d43e9613a8e96f3a95a93bf691e740beb121c4e23b89ded79_prof);

        
        $__internal_4f01ed2b05c6b887844687be38421760dffd21235f47aa83df7879e1600e861e->leave($__internal_4f01ed2b05c6b887844687be38421760dffd21235f47aa83df7879e1600e861e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
