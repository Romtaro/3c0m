<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_181dc42bc29dcb63f51c3df810aa54ca81d7abfb98e0d5e6f86815399d09f3d8 extends Twig_Template
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
        $__internal_65b13e94589edf1378880bd1a134a0951d6e7f1f7c07aebe99c737e20dac4ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b13e94589edf1378880bd1a134a0951d6e7f1f7c07aebe99c737e20dac4ce9->enter($__internal_65b13e94589edf1378880bd1a134a0951d6e7f1f7c07aebe99c737e20dac4ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c5bc61760ccdfaa985dc73af7c388c5b8fd9040179903c2d1f7f029eb42a4e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bc61760ccdfaa985dc73af7c388c5b8fd9040179903c2d1f7f029eb42a4e59->enter($__internal_c5bc61760ccdfaa985dc73af7c388c5b8fd9040179903c2d1f7f029eb42a4e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_65b13e94589edf1378880bd1a134a0951d6e7f1f7c07aebe99c737e20dac4ce9->leave($__internal_65b13e94589edf1378880bd1a134a0951d6e7f1f7c07aebe99c737e20dac4ce9_prof);

        
        $__internal_c5bc61760ccdfaa985dc73af7c388c5b8fd9040179903c2d1f7f029eb42a4e59->leave($__internal_c5bc61760ccdfaa985dc73af7c388c5b8fd9040179903c2d1f7f029eb42a4e59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
