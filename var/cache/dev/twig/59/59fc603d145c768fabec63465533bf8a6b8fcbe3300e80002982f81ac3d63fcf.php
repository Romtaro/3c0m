<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_68b380597c54b3486bc7ce0e9e063105dcfab4ce44f36e166babd999b05edfb2 extends Twig_Template
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
        $__internal_8992f1ce8a81e42ad62a60f9ffe917f82d9019cb1f0c8b7d56ff621a3c2f2d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8992f1ce8a81e42ad62a60f9ffe917f82d9019cb1f0c8b7d56ff621a3c2f2d0e->enter($__internal_8992f1ce8a81e42ad62a60f9ffe917f82d9019cb1f0c8b7d56ff621a3c2f2d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_affb271176aad7ae3910fe99bdefb4238697c3207dc5b80b6ce4a57a022674e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affb271176aad7ae3910fe99bdefb4238697c3207dc5b80b6ce4a57a022674e9->enter($__internal_affb271176aad7ae3910fe99bdefb4238697c3207dc5b80b6ce4a57a022674e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8992f1ce8a81e42ad62a60f9ffe917f82d9019cb1f0c8b7d56ff621a3c2f2d0e->leave($__internal_8992f1ce8a81e42ad62a60f9ffe917f82d9019cb1f0c8b7d56ff621a3c2f2d0e_prof);

        
        $__internal_affb271176aad7ae3910fe99bdefb4238697c3207dc5b80b6ce4a57a022674e9->leave($__internal_affb271176aad7ae3910fe99bdefb4238697c3207dc5b80b6ce4a57a022674e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
