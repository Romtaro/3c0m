<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_45d96b2348da25ef45bf20e88c60eea6180f4475b60e4bb21b151b20a6b47464 extends Twig_Template
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
        $__internal_a2ce766d7ec1bb29d4585d1c22f4f2cf9d2ba5e71240887a837ca8b72522e535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ce766d7ec1bb29d4585d1c22f4f2cf9d2ba5e71240887a837ca8b72522e535->enter($__internal_a2ce766d7ec1bb29d4585d1c22f4f2cf9d2ba5e71240887a837ca8b72522e535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_d132ec1369acd596a1b4a668a436114a6997bb897fb2e75d678c652fe9278d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d132ec1369acd596a1b4a668a436114a6997bb897fb2e75d678c652fe9278d98->enter($__internal_d132ec1369acd596a1b4a668a436114a6997bb897fb2e75d678c652fe9278d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a2ce766d7ec1bb29d4585d1c22f4f2cf9d2ba5e71240887a837ca8b72522e535->leave($__internal_a2ce766d7ec1bb29d4585d1c22f4f2cf9d2ba5e71240887a837ca8b72522e535_prof);

        
        $__internal_d132ec1369acd596a1b4a668a436114a6997bb897fb2e75d678c652fe9278d98->leave($__internal_d132ec1369acd596a1b4a668a436114a6997bb897fb2e75d678c652fe9278d98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
