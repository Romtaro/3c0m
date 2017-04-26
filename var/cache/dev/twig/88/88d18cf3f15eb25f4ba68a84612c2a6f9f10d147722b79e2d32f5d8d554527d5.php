<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b32b337263a1b95c07eb11ddfa163c0989a77791145ede19c0b39bd2ca20d014 extends Twig_Template
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
        $__internal_9268c26eba72bfd38f51c597950fc921f744e468170f519c819e5ca5766a6b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9268c26eba72bfd38f51c597950fc921f744e468170f519c819e5ca5766a6b33->enter($__internal_9268c26eba72bfd38f51c597950fc921f744e468170f519c819e5ca5766a6b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_c6d7f5b6deb76d9965893452b930f1fcb43b8a367fced0142256dd5abbc6564a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d7f5b6deb76d9965893452b930f1fcb43b8a367fced0142256dd5abbc6564a->enter($__internal_c6d7f5b6deb76d9965893452b930f1fcb43b8a367fced0142256dd5abbc6564a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9268c26eba72bfd38f51c597950fc921f744e468170f519c819e5ca5766a6b33->leave($__internal_9268c26eba72bfd38f51c597950fc921f744e468170f519c819e5ca5766a6b33_prof);

        
        $__internal_c6d7f5b6deb76d9965893452b930f1fcb43b8a367fced0142256dd5abbc6564a->leave($__internal_c6d7f5b6deb76d9965893452b930f1fcb43b8a367fced0142256dd5abbc6564a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
