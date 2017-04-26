<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_45f805d36b797dddeac2e63a762201711a9dd95bc457bbcba6c1c89626392c6c extends Twig_Template
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
        $__internal_fa2b2ea1a74ea211695c0bb0b2fc3f71f5854046eb3b0a6970ac9e2519348fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2b2ea1a74ea211695c0bb0b2fc3f71f5854046eb3b0a6970ac9e2519348fd0->enter($__internal_fa2b2ea1a74ea211695c0bb0b2fc3f71f5854046eb3b0a6970ac9e2519348fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_077248ef3a621db5eae46406baa0d6e5dde68bb13e60d8032eb3bf8872fb4315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077248ef3a621db5eae46406baa0d6e5dde68bb13e60d8032eb3bf8872fb4315->enter($__internal_077248ef3a621db5eae46406baa0d6e5dde68bb13e60d8032eb3bf8872fb4315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fa2b2ea1a74ea211695c0bb0b2fc3f71f5854046eb3b0a6970ac9e2519348fd0->leave($__internal_fa2b2ea1a74ea211695c0bb0b2fc3f71f5854046eb3b0a6970ac9e2519348fd0_prof);

        
        $__internal_077248ef3a621db5eae46406baa0d6e5dde68bb13e60d8032eb3bf8872fb4315->leave($__internal_077248ef3a621db5eae46406baa0d6e5dde68bb13e60d8032eb3bf8872fb4315_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
