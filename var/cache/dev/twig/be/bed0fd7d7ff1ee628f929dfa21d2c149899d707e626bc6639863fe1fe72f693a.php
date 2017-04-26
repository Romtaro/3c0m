<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fb40f1a64ef602f5c3821ff4201e417d69a16f12e3e36ccbb8208f5b0579c12b extends Twig_Template
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
        $__internal_d8b335ef1f8ca181e52d296f040700c311559a67a92bdc0bb1454f75849b3c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b335ef1f8ca181e52d296f040700c311559a67a92bdc0bb1454f75849b3c0d->enter($__internal_d8b335ef1f8ca181e52d296f040700c311559a67a92bdc0bb1454f75849b3c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6ccf0609622a8998fec62a433ea19e389669330cec64daf6f304e15c9bae33fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccf0609622a8998fec62a433ea19e389669330cec64daf6f304e15c9bae33fe->enter($__internal_6ccf0609622a8998fec62a433ea19e389669330cec64daf6f304e15c9bae33fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d8b335ef1f8ca181e52d296f040700c311559a67a92bdc0bb1454f75849b3c0d->leave($__internal_d8b335ef1f8ca181e52d296f040700c311559a67a92bdc0bb1454f75849b3c0d_prof);

        
        $__internal_6ccf0609622a8998fec62a433ea19e389669330cec64daf6f304e15c9bae33fe->leave($__internal_6ccf0609622a8998fec62a433ea19e389669330cec64daf6f304e15c9bae33fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
