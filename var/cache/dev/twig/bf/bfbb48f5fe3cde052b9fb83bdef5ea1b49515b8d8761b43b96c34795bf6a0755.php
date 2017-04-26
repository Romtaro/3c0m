<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_3f5b7a13441abc3cf36de54e79db87bf6bcfb5e6898bebf79390f79819468494 extends Twig_Template
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
        $__internal_50f9bec13caa3cd13295cfda4aa17b53b93c1a627986b0d6539c4550f2ac2e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f9bec13caa3cd13295cfda4aa17b53b93c1a627986b0d6539c4550f2ac2e71->enter($__internal_50f9bec13caa3cd13295cfda4aa17b53b93c1a627986b0d6539c4550f2ac2e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d6383e2da74ed4a7e83fd1f5cabf9f0a7a08c9de998c2675a3aa4703a7d74ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6383e2da74ed4a7e83fd1f5cabf9f0a7a08c9de998c2675a3aa4703a7d74ded->enter($__internal_d6383e2da74ed4a7e83fd1f5cabf9f0a7a08c9de998c2675a3aa4703a7d74ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_50f9bec13caa3cd13295cfda4aa17b53b93c1a627986b0d6539c4550f2ac2e71->leave($__internal_50f9bec13caa3cd13295cfda4aa17b53b93c1a627986b0d6539c4550f2ac2e71_prof);

        
        $__internal_d6383e2da74ed4a7e83fd1f5cabf9f0a7a08c9de998c2675a3aa4703a7d74ded->leave($__internal_d6383e2da74ed4a7e83fd1f5cabf9f0a7a08c9de998c2675a3aa4703a7d74ded_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
