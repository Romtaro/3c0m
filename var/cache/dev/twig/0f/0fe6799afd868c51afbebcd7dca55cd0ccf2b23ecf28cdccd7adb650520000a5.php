<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4ac8201660450102ae40f5b761bff033bc9e18c809d1da7419f8b53a5f7bb5cf extends Twig_Template
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
        $__internal_64ce5af2220c65c3f9073136d6f483e127e83c5f8f543f50ddbcdbb765612a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ce5af2220c65c3f9073136d6f483e127e83c5f8f543f50ddbcdbb765612a0a->enter($__internal_64ce5af2220c65c3f9073136d6f483e127e83c5f8f543f50ddbcdbb765612a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_91b4ab7a2592070e7576f8749cd1985df3baf897b6aea127824ec4ffd4f301a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b4ab7a2592070e7576f8749cd1985df3baf897b6aea127824ec4ffd4f301a7->enter($__internal_91b4ab7a2592070e7576f8749cd1985df3baf897b6aea127824ec4ffd4f301a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_64ce5af2220c65c3f9073136d6f483e127e83c5f8f543f50ddbcdbb765612a0a->leave($__internal_64ce5af2220c65c3f9073136d6f483e127e83c5f8f543f50ddbcdbb765612a0a_prof);

        
        $__internal_91b4ab7a2592070e7576f8749cd1985df3baf897b6aea127824ec4ffd4f301a7->leave($__internal_91b4ab7a2592070e7576f8749cd1985df3baf897b6aea127824ec4ffd4f301a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
