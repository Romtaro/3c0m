<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b9fd4c8bc3f0db723c4cea6ded59b0b275ed10a798fa53e0c50dbb487702bbfd extends Twig_Template
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
        $__internal_5e5dbc881caf4294cd70c04f0631e1b93edfbb49a3d2ff6b21790a65822bf370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5dbc881caf4294cd70c04f0631e1b93edfbb49a3d2ff6b21790a65822bf370->enter($__internal_5e5dbc881caf4294cd70c04f0631e1b93edfbb49a3d2ff6b21790a65822bf370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6326fecd9a2c7ef37815f86bcfbeb606ed8b298faf822c9df2c27c0af6143ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6326fecd9a2c7ef37815f86bcfbeb606ed8b298faf822c9df2c27c0af6143ecd->enter($__internal_6326fecd9a2c7ef37815f86bcfbeb606ed8b298faf822c9df2c27c0af6143ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5e5dbc881caf4294cd70c04f0631e1b93edfbb49a3d2ff6b21790a65822bf370->leave($__internal_5e5dbc881caf4294cd70c04f0631e1b93edfbb49a3d2ff6b21790a65822bf370_prof);

        
        $__internal_6326fecd9a2c7ef37815f86bcfbeb606ed8b298faf822c9df2c27c0af6143ecd->leave($__internal_6326fecd9a2c7ef37815f86bcfbeb606ed8b298faf822c9df2c27c0af6143ecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
