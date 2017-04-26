<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_20db46d6e14662e4d2c83ad26d19299996553a1fb3d7f5d8f0a074bbe5492933 extends Twig_Template
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
        $__internal_894168b2668132c1a3dfd63fce7b2c9cdb3e23791f859964c1907481ecec4ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894168b2668132c1a3dfd63fce7b2c9cdb3e23791f859964c1907481ecec4ae9->enter($__internal_894168b2668132c1a3dfd63fce7b2c9cdb3e23791f859964c1907481ecec4ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7d78f14a503937c8f6e05852fee053faaaf096355488cdc9a24e712bc63edeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d78f14a503937c8f6e05852fee053faaaf096355488cdc9a24e712bc63edeaa->enter($__internal_7d78f14a503937c8f6e05852fee053faaaf096355488cdc9a24e712bc63edeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_894168b2668132c1a3dfd63fce7b2c9cdb3e23791f859964c1907481ecec4ae9->leave($__internal_894168b2668132c1a3dfd63fce7b2c9cdb3e23791f859964c1907481ecec4ae9_prof);

        
        $__internal_7d78f14a503937c8f6e05852fee053faaaf096355488cdc9a24e712bc63edeaa->leave($__internal_7d78f14a503937c8f6e05852fee053faaaf096355488cdc9a24e712bc63edeaa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
