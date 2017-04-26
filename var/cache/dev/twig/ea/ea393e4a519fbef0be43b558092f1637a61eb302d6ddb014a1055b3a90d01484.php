<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9e073c7816358a460177a55c525719ba67020529a2c43f1cae2b17efbef100a3 extends Twig_Template
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
        $__internal_b70875ebb512110306af4d61a7a10dfa7b59e55aaa721212597a3eee3ef3ccfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70875ebb512110306af4d61a7a10dfa7b59e55aaa721212597a3eee3ef3ccfb->enter($__internal_b70875ebb512110306af4d61a7a10dfa7b59e55aaa721212597a3eee3ef3ccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ab67939ea3933004810d8ac81c531008838d1638c8a074664e7bc2107646de57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab67939ea3933004810d8ac81c531008838d1638c8a074664e7bc2107646de57->enter($__internal_ab67939ea3933004810d8ac81c531008838d1638c8a074664e7bc2107646de57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b70875ebb512110306af4d61a7a10dfa7b59e55aaa721212597a3eee3ef3ccfb->leave($__internal_b70875ebb512110306af4d61a7a10dfa7b59e55aaa721212597a3eee3ef3ccfb_prof);

        
        $__internal_ab67939ea3933004810d8ac81c531008838d1638c8a074664e7bc2107646de57->leave($__internal_ab67939ea3933004810d8ac81c531008838d1638c8a074664e7bc2107646de57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
