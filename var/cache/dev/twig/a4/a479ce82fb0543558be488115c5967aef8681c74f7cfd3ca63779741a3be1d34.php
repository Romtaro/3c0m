<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7a59177340ef57fe19a38c7bdd81f45e0a0df7fbda3ed148a7b4a90a72de6bc8 extends Twig_Template
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
        $__internal_e2b211b69d05c442da74d0bc806524c16551c686f78535c5013aee7de9c5baa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b211b69d05c442da74d0bc806524c16551c686f78535c5013aee7de9c5baa2->enter($__internal_e2b211b69d05c442da74d0bc806524c16551c686f78535c5013aee7de9c5baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d45b191708aa24ee83f3040d528c12a6581c9f11cf9a6e01108219e45ba17926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45b191708aa24ee83f3040d528c12a6581c9f11cf9a6e01108219e45ba17926->enter($__internal_d45b191708aa24ee83f3040d528c12a6581c9f11cf9a6e01108219e45ba17926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e2b211b69d05c442da74d0bc806524c16551c686f78535c5013aee7de9c5baa2->leave($__internal_e2b211b69d05c442da74d0bc806524c16551c686f78535c5013aee7de9c5baa2_prof);

        
        $__internal_d45b191708aa24ee83f3040d528c12a6581c9f11cf9a6e01108219e45ba17926->leave($__internal_d45b191708aa24ee83f3040d528c12a6581c9f11cf9a6e01108219e45ba17926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
