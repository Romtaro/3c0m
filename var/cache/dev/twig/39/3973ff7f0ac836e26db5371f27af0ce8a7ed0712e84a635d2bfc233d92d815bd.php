<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d33c8d21ceb6be9ed47eae3e34c2443d8807401725e5aa048ca284fa276fcc6e extends Twig_Template
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
        $__internal_ce3c49fb64332027264ea6629e44e63309a68f2890cf47cab630a12035d8a381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3c49fb64332027264ea6629e44e63309a68f2890cf47cab630a12035d8a381->enter($__internal_ce3c49fb64332027264ea6629e44e63309a68f2890cf47cab630a12035d8a381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fa0ef377fdae39ed0796d910bdd594ab3a247168af67d6f0e274a84b93aac266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0ef377fdae39ed0796d910bdd594ab3a247168af67d6f0e274a84b93aac266->enter($__internal_fa0ef377fdae39ed0796d910bdd594ab3a247168af67d6f0e274a84b93aac266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ce3c49fb64332027264ea6629e44e63309a68f2890cf47cab630a12035d8a381->leave($__internal_ce3c49fb64332027264ea6629e44e63309a68f2890cf47cab630a12035d8a381_prof);

        
        $__internal_fa0ef377fdae39ed0796d910bdd594ab3a247168af67d6f0e274a84b93aac266->leave($__internal_fa0ef377fdae39ed0796d910bdd594ab3a247168af67d6f0e274a84b93aac266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
