<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d7ebd663ee1e532fec173367e85b3e67329219791244ffb386b94a646f0fca69 extends Twig_Template
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
        $__internal_a54fde2e153ace553f3ea566679441775caca936be808f213cdc7341befb9741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54fde2e153ace553f3ea566679441775caca936be808f213cdc7341befb9741->enter($__internal_a54fde2e153ace553f3ea566679441775caca936be808f213cdc7341befb9741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_22c2ef5532911c3920f9d0d644b273319e594fe3dbdd0dfbbb360eb2c5816ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c2ef5532911c3920f9d0d644b273319e594fe3dbdd0dfbbb360eb2c5816ba3->enter($__internal_22c2ef5532911c3920f9d0d644b273319e594fe3dbdd0dfbbb360eb2c5816ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a54fde2e153ace553f3ea566679441775caca936be808f213cdc7341befb9741->leave($__internal_a54fde2e153ace553f3ea566679441775caca936be808f213cdc7341befb9741_prof);

        
        $__internal_22c2ef5532911c3920f9d0d644b273319e594fe3dbdd0dfbbb360eb2c5816ba3->leave($__internal_22c2ef5532911c3920f9d0d644b273319e594fe3dbdd0dfbbb360eb2c5816ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
