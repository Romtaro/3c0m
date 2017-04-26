<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_a1835c81571e261e615a9aa3c0aed6586de4d9bbe4c5a602afb23f293487e0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_833cc8ee6755ae96e875cd747fba468d30eede7681278a06afdbd12c96e866c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833cc8ee6755ae96e875cd747fba468d30eede7681278a06afdbd12c96e866c0->enter($__internal_833cc8ee6755ae96e875cd747fba468d30eede7681278a06afdbd12c96e866c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ff51b20f05230cd34c51f70b60ea273ef551b494a7e2f5cb9e9b3bb86011f16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff51b20f05230cd34c51f70b60ea273ef551b494a7e2f5cb9e9b3bb86011f16c->enter($__internal_ff51b20f05230cd34c51f70b60ea273ef551b494a7e2f5cb9e9b3bb86011f16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_833cc8ee6755ae96e875cd747fba468d30eede7681278a06afdbd12c96e866c0->leave($__internal_833cc8ee6755ae96e875cd747fba468d30eede7681278a06afdbd12c96e866c0_prof);

        
        $__internal_ff51b20f05230cd34c51f70b60ea273ef551b494a7e2f5cb9e9b3bb86011f16c->leave($__internal_ff51b20f05230cd34c51f70b60ea273ef551b494a7e2f5cb9e9b3bb86011f16c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
