<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_21b241e88ef824f207e7d7aece77e8804a8bbd4c0c27245fa318f57939c7baa0 extends Twig_Template
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
        $__internal_5fb8d55c0eae45f6e3586811f729f5daa0517b4e4223edeb72967c0a47db5a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb8d55c0eae45f6e3586811f729f5daa0517b4e4223edeb72967c0a47db5a25->enter($__internal_5fb8d55c0eae45f6e3586811f729f5daa0517b4e4223edeb72967c0a47db5a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2e8dee57595f24bfd9992b97c6f6839f29495dcd8290ff7c7db24661005e1457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8dee57595f24bfd9992b97c6f6839f29495dcd8290ff7c7db24661005e1457->enter($__internal_2e8dee57595f24bfd9992b97c6f6839f29495dcd8290ff7c7db24661005e1457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5fb8d55c0eae45f6e3586811f729f5daa0517b4e4223edeb72967c0a47db5a25->leave($__internal_5fb8d55c0eae45f6e3586811f729f5daa0517b4e4223edeb72967c0a47db5a25_prof);

        
        $__internal_2e8dee57595f24bfd9992b97c6f6839f29495dcd8290ff7c7db24661005e1457->leave($__internal_2e8dee57595f24bfd9992b97c6f6839f29495dcd8290ff7c7db24661005e1457_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
