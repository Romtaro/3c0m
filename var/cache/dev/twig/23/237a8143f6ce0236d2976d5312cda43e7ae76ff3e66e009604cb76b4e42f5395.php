<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_dba3c46a1a5175e107331f197961bcae1b4a1183e0f3319e62c82c671f614434 extends Twig_Template
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
        $__internal_130a73699d2e208cc2e9a17534b95802c4a72145bc01bc4f6d59965b5e8d0416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130a73699d2e208cc2e9a17534b95802c4a72145bc01bc4f6d59965b5e8d0416->enter($__internal_130a73699d2e208cc2e9a17534b95802c4a72145bc01bc4f6d59965b5e8d0416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_513c80b402fc604b3ffdf2b111912b0a896ba54a8387e2acda0ba4af83621fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513c80b402fc604b3ffdf2b111912b0a896ba54a8387e2acda0ba4af83621fe2->enter($__internal_513c80b402fc604b3ffdf2b111912b0a896ba54a8387e2acda0ba4af83621fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_130a73699d2e208cc2e9a17534b95802c4a72145bc01bc4f6d59965b5e8d0416->leave($__internal_130a73699d2e208cc2e9a17534b95802c4a72145bc01bc4f6d59965b5e8d0416_prof);

        
        $__internal_513c80b402fc604b3ffdf2b111912b0a896ba54a8387e2acda0ba4af83621fe2->leave($__internal_513c80b402fc604b3ffdf2b111912b0a896ba54a8387e2acda0ba4af83621fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
