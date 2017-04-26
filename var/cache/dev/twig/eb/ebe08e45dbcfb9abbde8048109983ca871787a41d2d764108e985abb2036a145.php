<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8c1852051c51889d58e8d84864177fc05f879626f27bd9210e907831d4579d00 extends Twig_Template
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
        $__internal_e6f60fda215c970f91e43196de1049aa6e446ce82353c06fad49adc0d2407d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f60fda215c970f91e43196de1049aa6e446ce82353c06fad49adc0d2407d44->enter($__internal_e6f60fda215c970f91e43196de1049aa6e446ce82353c06fad49adc0d2407d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a77da9e67a9cd8c7123fe0c5266998b274c44aaf317e8530eaf41d426798f5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77da9e67a9cd8c7123fe0c5266998b274c44aaf317e8530eaf41d426798f5ad->enter($__internal_a77da9e67a9cd8c7123fe0c5266998b274c44aaf317e8530eaf41d426798f5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e6f60fda215c970f91e43196de1049aa6e446ce82353c06fad49adc0d2407d44->leave($__internal_e6f60fda215c970f91e43196de1049aa6e446ce82353c06fad49adc0d2407d44_prof);

        
        $__internal_a77da9e67a9cd8c7123fe0c5266998b274c44aaf317e8530eaf41d426798f5ad->leave($__internal_a77da9e67a9cd8c7123fe0c5266998b274c44aaf317e8530eaf41d426798f5ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
