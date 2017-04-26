<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9b4738065b66994ac3a4dc995d551a3157f6839a7f170ebc23d5da8ab6a61b44 extends Twig_Template
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
        $__internal_457b0e164f99a928b3ab5097037dff58a77a7f5dc59565d441170a5df9c8c996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457b0e164f99a928b3ab5097037dff58a77a7f5dc59565d441170a5df9c8c996->enter($__internal_457b0e164f99a928b3ab5097037dff58a77a7f5dc59565d441170a5df9c8c996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8a4bd0082e7b696e82122ada6e77201c48c6f09d134913e8b1a11ade93839a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4bd0082e7b696e82122ada6e77201c48c6f09d134913e8b1a11ade93839a65->enter($__internal_8a4bd0082e7b696e82122ada6e77201c48c6f09d134913e8b1a11ade93839a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_457b0e164f99a928b3ab5097037dff58a77a7f5dc59565d441170a5df9c8c996->leave($__internal_457b0e164f99a928b3ab5097037dff58a77a7f5dc59565d441170a5df9c8c996_prof);

        
        $__internal_8a4bd0082e7b696e82122ada6e77201c48c6f09d134913e8b1a11ade93839a65->leave($__internal_8a4bd0082e7b696e82122ada6e77201c48c6f09d134913e8b1a11ade93839a65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
