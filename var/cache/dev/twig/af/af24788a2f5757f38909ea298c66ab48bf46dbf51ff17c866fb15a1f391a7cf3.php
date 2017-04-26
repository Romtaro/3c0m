<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2ea39f6d0a62c7cf8578778d3da964a05b2cacff91a6549cce2c2fac2935bee9 extends Twig_Template
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
        $__internal_d3ab320fe43661b7c2b05e636b62d208f848f50f57c89ce120bfb58b859da9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ab320fe43661b7c2b05e636b62d208f848f50f57c89ce120bfb58b859da9a1->enter($__internal_d3ab320fe43661b7c2b05e636b62d208f848f50f57c89ce120bfb58b859da9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f8d3eda6bc85ff221c479234563c7a24308f9b2e5a67f88e92f98d2a889a84e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d3eda6bc85ff221c479234563c7a24308f9b2e5a67f88e92f98d2a889a84e5->enter($__internal_f8d3eda6bc85ff221c479234563c7a24308f9b2e5a67f88e92f98d2a889a84e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d3ab320fe43661b7c2b05e636b62d208f848f50f57c89ce120bfb58b859da9a1->leave($__internal_d3ab320fe43661b7c2b05e636b62d208f848f50f57c89ce120bfb58b859da9a1_prof);

        
        $__internal_f8d3eda6bc85ff221c479234563c7a24308f9b2e5a67f88e92f98d2a889a84e5->leave($__internal_f8d3eda6bc85ff221c479234563c7a24308f9b2e5a67f88e92f98d2a889a84e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
