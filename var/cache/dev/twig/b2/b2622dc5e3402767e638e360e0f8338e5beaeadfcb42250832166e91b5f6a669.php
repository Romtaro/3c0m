<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f9f61ad5a20ec2db40c8d157fcf12284b5c9ab4a5548b9addc305e24cc676f96 extends Twig_Template
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
        $__internal_38c2d25ee2b336be1757fb49c52d994c61e7ce49ce806da9217fe8da748513a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c2d25ee2b336be1757fb49c52d994c61e7ce49ce806da9217fe8da748513a4->enter($__internal_38c2d25ee2b336be1757fb49c52d994c61e7ce49ce806da9217fe8da748513a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c497c1b51099fa795bbc8d74f6984cd25c63aa221ff65850e5bafd9ee4b03884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c497c1b51099fa795bbc8d74f6984cd25c63aa221ff65850e5bafd9ee4b03884->enter($__internal_c497c1b51099fa795bbc8d74f6984cd25c63aa221ff65850e5bafd9ee4b03884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_38c2d25ee2b336be1757fb49c52d994c61e7ce49ce806da9217fe8da748513a4->leave($__internal_38c2d25ee2b336be1757fb49c52d994c61e7ce49ce806da9217fe8da748513a4_prof);

        
        $__internal_c497c1b51099fa795bbc8d74f6984cd25c63aa221ff65850e5bafd9ee4b03884->leave($__internal_c497c1b51099fa795bbc8d74f6984cd25c63aa221ff65850e5bafd9ee4b03884_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
