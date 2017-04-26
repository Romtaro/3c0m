<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fb5be64e80b9572126134ac5ed13eef8cc712716f8cfa1343dfde7531984aa80 extends Twig_Template
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
        $__internal_1797f2950db8120b69be761ec81f2e75b22042678f6fdcb62832fd757b0ebbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1797f2950db8120b69be761ec81f2e75b22042678f6fdcb62832fd757b0ebbd2->enter($__internal_1797f2950db8120b69be761ec81f2e75b22042678f6fdcb62832fd757b0ebbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_00679e828442858b053a90511133c0e68a3cd1894807ae8bf9c8fcb355ef4f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00679e828442858b053a90511133c0e68a3cd1894807ae8bf9c8fcb355ef4f84->enter($__internal_00679e828442858b053a90511133c0e68a3cd1894807ae8bf9c8fcb355ef4f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1797f2950db8120b69be761ec81f2e75b22042678f6fdcb62832fd757b0ebbd2->leave($__internal_1797f2950db8120b69be761ec81f2e75b22042678f6fdcb62832fd757b0ebbd2_prof);

        
        $__internal_00679e828442858b053a90511133c0e68a3cd1894807ae8bf9c8fcb355ef4f84->leave($__internal_00679e828442858b053a90511133c0e68a3cd1894807ae8bf9c8fcb355ef4f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
