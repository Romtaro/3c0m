<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5337e74765082029c4dac36c170d74ab357353bb2059665b6ea22c0914d65600 extends Twig_Template
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
        $__internal_293331d3b8974f60b45742ffa53c3ba2334649269c5ed451a2a67d884647d5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293331d3b8974f60b45742ffa53c3ba2334649269c5ed451a2a67d884647d5a9->enter($__internal_293331d3b8974f60b45742ffa53c3ba2334649269c5ed451a2a67d884647d5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6d53f4e76c674c72debf8c6152a08e70419589d11f9ddca9dd325937dfa74e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d53f4e76c674c72debf8c6152a08e70419589d11f9ddca9dd325937dfa74e9b->enter($__internal_6d53f4e76c674c72debf8c6152a08e70419589d11f9ddca9dd325937dfa74e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_293331d3b8974f60b45742ffa53c3ba2334649269c5ed451a2a67d884647d5a9->leave($__internal_293331d3b8974f60b45742ffa53c3ba2334649269c5ed451a2a67d884647d5a9_prof);

        
        $__internal_6d53f4e76c674c72debf8c6152a08e70419589d11f9ddca9dd325937dfa74e9b->leave($__internal_6d53f4e76c674c72debf8c6152a08e70419589d11f9ddca9dd325937dfa74e9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
