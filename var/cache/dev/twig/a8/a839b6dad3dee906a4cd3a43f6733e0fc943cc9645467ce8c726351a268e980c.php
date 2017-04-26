<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d493eda50e983016a33921b1d6cca9eb4fd3c4986862226447ee4083a31c825c extends Twig_Template
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
        $__internal_f89f6cd987b959b465991f442d19c72d6295ffa0a4bcc3f74f5383fd884e980d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89f6cd987b959b465991f442d19c72d6295ffa0a4bcc3f74f5383fd884e980d->enter($__internal_f89f6cd987b959b465991f442d19c72d6295ffa0a4bcc3f74f5383fd884e980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6f51e7195e462df4743f20be782a19215aa60b915486e03937b6385a4d63bf9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f51e7195e462df4743f20be782a19215aa60b915486e03937b6385a4d63bf9b->enter($__internal_6f51e7195e462df4743f20be782a19215aa60b915486e03937b6385a4d63bf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f89f6cd987b959b465991f442d19c72d6295ffa0a4bcc3f74f5383fd884e980d->leave($__internal_f89f6cd987b959b465991f442d19c72d6295ffa0a4bcc3f74f5383fd884e980d_prof);

        
        $__internal_6f51e7195e462df4743f20be782a19215aa60b915486e03937b6385a4d63bf9b->leave($__internal_6f51e7195e462df4743f20be782a19215aa60b915486e03937b6385a4d63bf9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
