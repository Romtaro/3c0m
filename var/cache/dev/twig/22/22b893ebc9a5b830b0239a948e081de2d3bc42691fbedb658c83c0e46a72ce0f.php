<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_055c1291dcc046254fe01ba6a8695e8cb510bcc0b526bdb6f2dbb9b1686b455d extends Twig_Template
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
        $__internal_e3fe216392dbc6489501f3172e0754d9b313e9525743b19f0f1f8cc1d75e8116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3fe216392dbc6489501f3172e0754d9b313e9525743b19f0f1f8cc1d75e8116->enter($__internal_e3fe216392dbc6489501f3172e0754d9b313e9525743b19f0f1f8cc1d75e8116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_983dc01d8788d990edb04085a268e75c3f3e31df6e6d77c5f97aa988015634ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983dc01d8788d990edb04085a268e75c3f3e31df6e6d77c5f97aa988015634ab->enter($__internal_983dc01d8788d990edb04085a268e75c3f3e31df6e6d77c5f97aa988015634ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e3fe216392dbc6489501f3172e0754d9b313e9525743b19f0f1f8cc1d75e8116->leave($__internal_e3fe216392dbc6489501f3172e0754d9b313e9525743b19f0f1f8cc1d75e8116_prof);

        
        $__internal_983dc01d8788d990edb04085a268e75c3f3e31df6e6d77c5f97aa988015634ab->leave($__internal_983dc01d8788d990edb04085a268e75c3f3e31df6e6d77c5f97aa988015634ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
