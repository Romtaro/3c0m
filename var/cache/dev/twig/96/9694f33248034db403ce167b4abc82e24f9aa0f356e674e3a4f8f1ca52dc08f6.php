<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c995560b59d841638fe4e6eb53f8e347f9fde1284165842d3f0e199dc28de136 extends Twig_Template
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
        $__internal_43e11f5613c8de45b42bae966b35ba34313dccb8a4242287e847e876d565b1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e11f5613c8de45b42bae966b35ba34313dccb8a4242287e847e876d565b1cd->enter($__internal_43e11f5613c8de45b42bae966b35ba34313dccb8a4242287e847e876d565b1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e223444f4a0617832d50d0627a77ea207a7108d5485469cde86a4c4872ef6156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e223444f4a0617832d50d0627a77ea207a7108d5485469cde86a4c4872ef6156->enter($__internal_e223444f4a0617832d50d0627a77ea207a7108d5485469cde86a4c4872ef6156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_43e11f5613c8de45b42bae966b35ba34313dccb8a4242287e847e876d565b1cd->leave($__internal_43e11f5613c8de45b42bae966b35ba34313dccb8a4242287e847e876d565b1cd_prof);

        
        $__internal_e223444f4a0617832d50d0627a77ea207a7108d5485469cde86a4c4872ef6156->leave($__internal_e223444f4a0617832d50d0627a77ea207a7108d5485469cde86a4c4872ef6156_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
