<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f6fbbd6594a28faa24cc2c4548c5ea408f045a6b98e66ce4746882ad2d4e4740 extends Twig_Template
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
        $__internal_fc4b52c279ecc5e836a350bfa924a1368c185c4ed521db3d42ee820906240956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4b52c279ecc5e836a350bfa924a1368c185c4ed521db3d42ee820906240956->enter($__internal_fc4b52c279ecc5e836a350bfa924a1368c185c4ed521db3d42ee820906240956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5168fa441ff85bc3a358d92f2e8690cdfe2f4c987dea76691470b3d8554f2152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5168fa441ff85bc3a358d92f2e8690cdfe2f4c987dea76691470b3d8554f2152->enter($__internal_5168fa441ff85bc3a358d92f2e8690cdfe2f4c987dea76691470b3d8554f2152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fc4b52c279ecc5e836a350bfa924a1368c185c4ed521db3d42ee820906240956->leave($__internal_fc4b52c279ecc5e836a350bfa924a1368c185c4ed521db3d42ee820906240956_prof);

        
        $__internal_5168fa441ff85bc3a358d92f2e8690cdfe2f4c987dea76691470b3d8554f2152->leave($__internal_5168fa441ff85bc3a358d92f2e8690cdfe2f4c987dea76691470b3d8554f2152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
