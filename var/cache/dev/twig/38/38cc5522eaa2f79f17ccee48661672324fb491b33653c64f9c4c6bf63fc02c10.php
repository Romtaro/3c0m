<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cbc0c4f032103b5de6886ed7f06cc3794e4c5d1755774fa9824b1e05d679b6af extends Twig_Template
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
        $__internal_bf29ed4bdd45009859fd5c6cbdb528a2f138b91d63112681dce4d6dcad566dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf29ed4bdd45009859fd5c6cbdb528a2f138b91d63112681dce4d6dcad566dd5->enter($__internal_bf29ed4bdd45009859fd5c6cbdb528a2f138b91d63112681dce4d6dcad566dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bf335e4eaffb5160f4a7cdc2f00d30681ffa7115954c3c079acb6b73edda8dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf335e4eaffb5160f4a7cdc2f00d30681ffa7115954c3c079acb6b73edda8dca->enter($__internal_bf335e4eaffb5160f4a7cdc2f00d30681ffa7115954c3c079acb6b73edda8dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bf29ed4bdd45009859fd5c6cbdb528a2f138b91d63112681dce4d6dcad566dd5->leave($__internal_bf29ed4bdd45009859fd5c6cbdb528a2f138b91d63112681dce4d6dcad566dd5_prof);

        
        $__internal_bf335e4eaffb5160f4a7cdc2f00d30681ffa7115954c3c079acb6b73edda8dca->leave($__internal_bf335e4eaffb5160f4a7cdc2f00d30681ffa7115954c3c079acb6b73edda8dca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
