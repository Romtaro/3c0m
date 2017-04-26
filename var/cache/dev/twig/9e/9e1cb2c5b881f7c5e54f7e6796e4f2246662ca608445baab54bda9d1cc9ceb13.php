<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_84cd78bf23a2575340c0a6afe6da9119b6d58927502d81a4144d32eb8164a362 extends Twig_Template
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
        $__internal_210df9845228edc5b46ae48a18f14bc3924530d2600f301c7f54f64f59d6e410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210df9845228edc5b46ae48a18f14bc3924530d2600f301c7f54f64f59d6e410->enter($__internal_210df9845228edc5b46ae48a18f14bc3924530d2600f301c7f54f64f59d6e410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_826e69e51e9653e4fd10d90e3319de9da1dbd2c2da651eb00bc89e8148bbdbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826e69e51e9653e4fd10d90e3319de9da1dbd2c2da651eb00bc89e8148bbdbef->enter($__internal_826e69e51e9653e4fd10d90e3319de9da1dbd2c2da651eb00bc89e8148bbdbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_210df9845228edc5b46ae48a18f14bc3924530d2600f301c7f54f64f59d6e410->leave($__internal_210df9845228edc5b46ae48a18f14bc3924530d2600f301c7f54f64f59d6e410_prof);

        
        $__internal_826e69e51e9653e4fd10d90e3319de9da1dbd2c2da651eb00bc89e8148bbdbef->leave($__internal_826e69e51e9653e4fd10d90e3319de9da1dbd2c2da651eb00bc89e8148bbdbef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
