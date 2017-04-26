<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a55d3fc3c0ae6f5f7a25736d0fc21191641f019ec9bb6dd8fabd9db814033e81 extends Twig_Template
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
        $__internal_48105de0062594960013d54f187d4a268f88101f30b7d34cbfe419e94bf1afa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48105de0062594960013d54f187d4a268f88101f30b7d34cbfe419e94bf1afa2->enter($__internal_48105de0062594960013d54f187d4a268f88101f30b7d34cbfe419e94bf1afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_463a47772933aa6b8ab755fd2f9926df6eec0b5da24b4cb5dbd52651cc07e909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463a47772933aa6b8ab755fd2f9926df6eec0b5da24b4cb5dbd52651cc07e909->enter($__internal_463a47772933aa6b8ab755fd2f9926df6eec0b5da24b4cb5dbd52651cc07e909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48105de0062594960013d54f187d4a268f88101f30b7d34cbfe419e94bf1afa2->leave($__internal_48105de0062594960013d54f187d4a268f88101f30b7d34cbfe419e94bf1afa2_prof);

        
        $__internal_463a47772933aa6b8ab755fd2f9926df6eec0b5da24b4cb5dbd52651cc07e909->leave($__internal_463a47772933aa6b8ab755fd2f9926df6eec0b5da24b4cb5dbd52651cc07e909_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7fabf31bd7b658b7b2f8b08837887af64ae669c6167efd4d58dcfef34cf62bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fabf31bd7b658b7b2f8b08837887af64ae669c6167efd4d58dcfef34cf62bc->enter($__internal_e7fabf31bd7b658b7b2f8b08837887af64ae669c6167efd4d58dcfef34cf62bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c72f7e3daf2058f761224f792fec94ebe00572359ed915e52e2c9db5a4f1a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c72f7e3daf2058f761224f792fec94ebe00572359ed915e52e2c9db5a4f1a5e->enter($__internal_4c72f7e3daf2058f761224f792fec94ebe00572359ed915e52e2c9db5a4f1a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4c72f7e3daf2058f761224f792fec94ebe00572359ed915e52e2c9db5a4f1a5e->leave($__internal_4c72f7e3daf2058f761224f792fec94ebe00572359ed915e52e2c9db5a4f1a5e_prof);

        
        $__internal_e7fabf31bd7b658b7b2f8b08837887af64ae669c6167efd4d58dcfef34cf62bc->leave($__internal_e7fabf31bd7b658b7b2f8b08837887af64ae669c6167efd4d58dcfef34cf62bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
