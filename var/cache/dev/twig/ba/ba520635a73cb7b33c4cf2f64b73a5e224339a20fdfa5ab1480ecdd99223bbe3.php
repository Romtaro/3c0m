<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_3608afeecfbf49a60f5a7e73f609adb33c2c637440720f91b8e132b5743a52fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89197faa6b136d2e590178cc9885b211ce5ca9e0cad6c513ffbf76fd29adf21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89197faa6b136d2e590178cc9885b211ce5ca9e0cad6c513ffbf76fd29adf21a->enter($__internal_89197faa6b136d2e590178cc9885b211ce5ca9e0cad6c513ffbf76fd29adf21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c188e328fb430cffa12ba930f6c89296cc7e46bbf727d251f423297deb3578f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c188e328fb430cffa12ba930f6c89296cc7e46bbf727d251f423297deb3578f7->enter($__internal_c188e328fb430cffa12ba930f6c89296cc7e46bbf727d251f423297deb3578f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_89197faa6b136d2e590178cc9885b211ce5ca9e0cad6c513ffbf76fd29adf21a->leave($__internal_89197faa6b136d2e590178cc9885b211ce5ca9e0cad6c513ffbf76fd29adf21a_prof);

        
        $__internal_c188e328fb430cffa12ba930f6c89296cc7e46bbf727d251f423297deb3578f7->leave($__internal_c188e328fb430cffa12ba930f6c89296cc7e46bbf727d251f423297deb3578f7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_529e0514433800ae907a1f63b2f0c71e08303648483868caf87ac9fe0fc84ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529e0514433800ae907a1f63b2f0c71e08303648483868caf87ac9fe0fc84ded->enter($__internal_529e0514433800ae907a1f63b2f0c71e08303648483868caf87ac9fe0fc84ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_926c13080b09b9b9458d4bb560c174a03095f3d0fa7edf1b9cc24fb9edfa7a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926c13080b09b9b9458d4bb560c174a03095f3d0fa7edf1b9cc24fb9edfa7a9d->enter($__internal_926c13080b09b9b9458d4bb560c174a03095f3d0fa7edf1b9cc24fb9edfa7a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_926c13080b09b9b9458d4bb560c174a03095f3d0fa7edf1b9cc24fb9edfa7a9d->leave($__internal_926c13080b09b9b9458d4bb560c174a03095f3d0fa7edf1b9cc24fb9edfa7a9d_prof);

        
        $__internal_529e0514433800ae907a1f63b2f0c71e08303648483868caf87ac9fe0fc84ded->leave($__internal_529e0514433800ae907a1f63b2f0c71e08303648483868caf87ac9fe0fc84ded_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
