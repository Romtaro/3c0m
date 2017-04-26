<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4894bf112205b3a460b82ba8f405ea3fc82cc75b5a8d10ca6c8b76b508664f76 extends Twig_Template
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
        $__internal_459dd51e0d56478046d4ea9127b9cf297f51d5285e7fd43c2cbdd3f01dd9d586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459dd51e0d56478046d4ea9127b9cf297f51d5285e7fd43c2cbdd3f01dd9d586->enter($__internal_459dd51e0d56478046d4ea9127b9cf297f51d5285e7fd43c2cbdd3f01dd9d586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e34f303ed04d6b80e2b4e6495ce5757f1ac0d861ead20833e30f421bd97f8200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34f303ed04d6b80e2b4e6495ce5757f1ac0d861ead20833e30f421bd97f8200->enter($__internal_e34f303ed04d6b80e2b4e6495ce5757f1ac0d861ead20833e30f421bd97f8200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_459dd51e0d56478046d4ea9127b9cf297f51d5285e7fd43c2cbdd3f01dd9d586->leave($__internal_459dd51e0d56478046d4ea9127b9cf297f51d5285e7fd43c2cbdd3f01dd9d586_prof);

        
        $__internal_e34f303ed04d6b80e2b4e6495ce5757f1ac0d861ead20833e30f421bd97f8200->leave($__internal_e34f303ed04d6b80e2b4e6495ce5757f1ac0d861ead20833e30f421bd97f8200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
