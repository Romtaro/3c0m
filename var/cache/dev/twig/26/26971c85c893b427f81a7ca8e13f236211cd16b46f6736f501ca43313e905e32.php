<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1a1d26203c8ce95ecab95a3377cdc0d207e50cc9d812d7b2318134e4fdb6dcbd extends Twig_Template
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
        $__internal_122a6c37b9507f3e693c2fffdfb9e2d2694fe7cd9f063044ae0e3a3eefef9d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122a6c37b9507f3e693c2fffdfb9e2d2694fe7cd9f063044ae0e3a3eefef9d8c->enter($__internal_122a6c37b9507f3e693c2fffdfb9e2d2694fe7cd9f063044ae0e3a3eefef9d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c9687da0de6caee9453ac2d68dbd61e2169beeeae996657f17d41e641ad65171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9687da0de6caee9453ac2d68dbd61e2169beeeae996657f17d41e641ad65171->enter($__internal_c9687da0de6caee9453ac2d68dbd61e2169beeeae996657f17d41e641ad65171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_122a6c37b9507f3e693c2fffdfb9e2d2694fe7cd9f063044ae0e3a3eefef9d8c->leave($__internal_122a6c37b9507f3e693c2fffdfb9e2d2694fe7cd9f063044ae0e3a3eefef9d8c_prof);

        
        $__internal_c9687da0de6caee9453ac2d68dbd61e2169beeeae996657f17d41e641ad65171->leave($__internal_c9687da0de6caee9453ac2d68dbd61e2169beeeae996657f17d41e641ad65171_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
