<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0efb0f443f18e2cf78e9a8c674fb0a69f0d1a43a0331ca2f27cb7c5a2e9cecc9 extends Twig_Template
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
        $__internal_ef551ddf75039de897818abc23cb922c8e0338bb814b72a476b29d3c175186b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef551ddf75039de897818abc23cb922c8e0338bb814b72a476b29d3c175186b6->enter($__internal_ef551ddf75039de897818abc23cb922c8e0338bb814b72a476b29d3c175186b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_72d54685a823aea9736afcadfee8a9cd71dd62f011ce4d393d703f95ab889739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d54685a823aea9736afcadfee8a9cd71dd62f011ce4d393d703f95ab889739->enter($__internal_72d54685a823aea9736afcadfee8a9cd71dd62f011ce4d393d703f95ab889739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ef551ddf75039de897818abc23cb922c8e0338bb814b72a476b29d3c175186b6->leave($__internal_ef551ddf75039de897818abc23cb922c8e0338bb814b72a476b29d3c175186b6_prof);

        
        $__internal_72d54685a823aea9736afcadfee8a9cd71dd62f011ce4d393d703f95ab889739->leave($__internal_72d54685a823aea9736afcadfee8a9cd71dd62f011ce4d393d703f95ab889739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
