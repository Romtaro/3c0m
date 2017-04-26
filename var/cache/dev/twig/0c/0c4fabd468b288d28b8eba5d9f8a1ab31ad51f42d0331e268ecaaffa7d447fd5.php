<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37174e2ebb406be0b282c8fc54129a044ce3708e78188dd91571d7fa6226303a extends Twig_Template
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
        $__internal_8c81f843a75c5d32a429e4edfbfbc639930a8458a8e8b395c4f3cd56ec63c0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c81f843a75c5d32a429e4edfbfbc639930a8458a8e8b395c4f3cd56ec63c0f2->enter($__internal_8c81f843a75c5d32a429e4edfbfbc639930a8458a8e8b395c4f3cd56ec63c0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8d2e4ef31beae3c8733a0ba180854a3ac0cdb6d4f03ca7d042dee9edb8733915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d2e4ef31beae3c8733a0ba180854a3ac0cdb6d4f03ca7d042dee9edb8733915->enter($__internal_8d2e4ef31beae3c8733a0ba180854a3ac0cdb6d4f03ca7d042dee9edb8733915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8c81f843a75c5d32a429e4edfbfbc639930a8458a8e8b395c4f3cd56ec63c0f2->leave($__internal_8c81f843a75c5d32a429e4edfbfbc639930a8458a8e8b395c4f3cd56ec63c0f2_prof);

        
        $__internal_8d2e4ef31beae3c8733a0ba180854a3ac0cdb6d4f03ca7d042dee9edb8733915->leave($__internal_8d2e4ef31beae3c8733a0ba180854a3ac0cdb6d4f03ca7d042dee9edb8733915_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
