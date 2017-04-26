<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d0b8250f4f97b9964a1b573db62f905019121c6ff7678fda168fd5e1e0886284 extends Twig_Template
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
        $__internal_68c544adc6a98c4273217582a10d0cf97c8ae0a8a0e4fe2b8ab8becd006cb541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c544adc6a98c4273217582a10d0cf97c8ae0a8a0e4fe2b8ab8becd006cb541->enter($__internal_68c544adc6a98c4273217582a10d0cf97c8ae0a8a0e4fe2b8ab8becd006cb541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fde64b221f5f56e58036b8d871f681182fb1cf67fc9f5e6cff62e061f6e24934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde64b221f5f56e58036b8d871f681182fb1cf67fc9f5e6cff62e061f6e24934->enter($__internal_fde64b221f5f56e58036b8d871f681182fb1cf67fc9f5e6cff62e061f6e24934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_68c544adc6a98c4273217582a10d0cf97c8ae0a8a0e4fe2b8ab8becd006cb541->leave($__internal_68c544adc6a98c4273217582a10d0cf97c8ae0a8a0e4fe2b8ab8becd006cb541_prof);

        
        $__internal_fde64b221f5f56e58036b8d871f681182fb1cf67fc9f5e6cff62e061f6e24934->leave($__internal_fde64b221f5f56e58036b8d871f681182fb1cf67fc9f5e6cff62e061f6e24934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
