<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ff5d2831c4a80f724b5afcc8afd42f680c2d06048613efc3258362d37932a522 extends Twig_Template
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
        $__internal_29f264657d00dfe4f1180acf253376ead75333079e2a5ae58f3a4324a75ecbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f264657d00dfe4f1180acf253376ead75333079e2a5ae58f3a4324a75ecbfd->enter($__internal_29f264657d00dfe4f1180acf253376ead75333079e2a5ae58f3a4324a75ecbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3f5706bd7663ac068f42a84c0c482efac28cb9e23b9435cb078850fb0b7541c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5706bd7663ac068f42a84c0c482efac28cb9e23b9435cb078850fb0b7541c4->enter($__internal_3f5706bd7663ac068f42a84c0c482efac28cb9e23b9435cb078850fb0b7541c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_29f264657d00dfe4f1180acf253376ead75333079e2a5ae58f3a4324a75ecbfd->leave($__internal_29f264657d00dfe4f1180acf253376ead75333079e2a5ae58f3a4324a75ecbfd_prof);

        
        $__internal_3f5706bd7663ac068f42a84c0c482efac28cb9e23b9435cb078850fb0b7541c4->leave($__internal_3f5706bd7663ac068f42a84c0c482efac28cb9e23b9435cb078850fb0b7541c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
