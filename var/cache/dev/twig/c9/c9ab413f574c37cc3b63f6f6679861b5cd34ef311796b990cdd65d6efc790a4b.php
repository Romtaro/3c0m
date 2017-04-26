<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_82922d3e6310996b5a63f1601ed4306c821f2198b95703a88e1cef73a253edba extends Twig_Template
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
        $__internal_f472370dd6f84598a873e7855a24322086e9cdaf80825f61780ca7aad7263554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f472370dd6f84598a873e7855a24322086e9cdaf80825f61780ca7aad7263554->enter($__internal_f472370dd6f84598a873e7855a24322086e9cdaf80825f61780ca7aad7263554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_dc4a4d2f249953c2448abf259f39bd52d84dd1d2eb8b229d81ae0a98a1f0f85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4a4d2f249953c2448abf259f39bd52d84dd1d2eb8b229d81ae0a98a1f0f85a->enter($__internal_dc4a4d2f249953c2448abf259f39bd52d84dd1d2eb8b229d81ae0a98a1f0f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f472370dd6f84598a873e7855a24322086e9cdaf80825f61780ca7aad7263554->leave($__internal_f472370dd6f84598a873e7855a24322086e9cdaf80825f61780ca7aad7263554_prof);

        
        $__internal_dc4a4d2f249953c2448abf259f39bd52d84dd1d2eb8b229d81ae0a98a1f0f85a->leave($__internal_dc4a4d2f249953c2448abf259f39bd52d84dd1d2eb8b229d81ae0a98a1f0f85a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
