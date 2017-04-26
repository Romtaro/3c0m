<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_11a443b10b139a1824c73f8415d7b4398da4ceb26b9939de9be58777feb6c3e7 extends Twig_Template
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
        $__internal_765624d2e56661a46cc9358ade617641e4fd72c93dd9f73c9ec69d697336b8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765624d2e56661a46cc9358ade617641e4fd72c93dd9f73c9ec69d697336b8ce->enter($__internal_765624d2e56661a46cc9358ade617641e4fd72c93dd9f73c9ec69d697336b8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2424674db79f9d4d59f995f276baf21e5f213e934b0c2318b641351bc691c891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2424674db79f9d4d59f995f276baf21e5f213e934b0c2318b641351bc691c891->enter($__internal_2424674db79f9d4d59f995f276baf21e5f213e934b0c2318b641351bc691c891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_765624d2e56661a46cc9358ade617641e4fd72c93dd9f73c9ec69d697336b8ce->leave($__internal_765624d2e56661a46cc9358ade617641e4fd72c93dd9f73c9ec69d697336b8ce_prof);

        
        $__internal_2424674db79f9d4d59f995f276baf21e5f213e934b0c2318b641351bc691c891->leave($__internal_2424674db79f9d4d59f995f276baf21e5f213e934b0c2318b641351bc691c891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
