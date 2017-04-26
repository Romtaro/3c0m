<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4b2e67e67f929b599b9ebf88a3935fd6b248cff0b64206afd465ab8ab4b2ee9d extends Twig_Template
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
        $__internal_ccc3beccb413972fb6e491c1cd572e2d6f74c2a852f7b96b1bac766a393b923c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc3beccb413972fb6e491c1cd572e2d6f74c2a852f7b96b1bac766a393b923c->enter($__internal_ccc3beccb413972fb6e491c1cd572e2d6f74c2a852f7b96b1bac766a393b923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7a96c2e3a5d95769b7b655ebecfb62eb6b34ece7e6b8e5abe136b71329b0df8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a96c2e3a5d95769b7b655ebecfb62eb6b34ece7e6b8e5abe136b71329b0df8b->enter($__internal_7a96c2e3a5d95769b7b655ebecfb62eb6b34ece7e6b8e5abe136b71329b0df8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ccc3beccb413972fb6e491c1cd572e2d6f74c2a852f7b96b1bac766a393b923c->leave($__internal_ccc3beccb413972fb6e491c1cd572e2d6f74c2a852f7b96b1bac766a393b923c_prof);

        
        $__internal_7a96c2e3a5d95769b7b655ebecfb62eb6b34ece7e6b8e5abe136b71329b0df8b->leave($__internal_7a96c2e3a5d95769b7b655ebecfb62eb6b34ece7e6b8e5abe136b71329b0df8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
