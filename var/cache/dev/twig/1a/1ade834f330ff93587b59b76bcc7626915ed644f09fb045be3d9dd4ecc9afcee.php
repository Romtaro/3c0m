<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0e213fa5563e718fec59cf2f25f38fc4328c6b556e03685822352ad336016055 extends Twig_Template
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
        $__internal_8781b848ae9ccf74eccbcdd4c767f2e04bcac887c31b06ba743856c3bd1e5461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8781b848ae9ccf74eccbcdd4c767f2e04bcac887c31b06ba743856c3bd1e5461->enter($__internal_8781b848ae9ccf74eccbcdd4c767f2e04bcac887c31b06ba743856c3bd1e5461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cd57865f61423596dee57bd4b70473b333fde480b7c40c6344fb7f9f5175e0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd57865f61423596dee57bd4b70473b333fde480b7c40c6344fb7f9f5175e0c3->enter($__internal_cd57865f61423596dee57bd4b70473b333fde480b7c40c6344fb7f9f5175e0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8781b848ae9ccf74eccbcdd4c767f2e04bcac887c31b06ba743856c3bd1e5461->leave($__internal_8781b848ae9ccf74eccbcdd4c767f2e04bcac887c31b06ba743856c3bd1e5461_prof);

        
        $__internal_cd57865f61423596dee57bd4b70473b333fde480b7c40c6344fb7f9f5175e0c3->leave($__internal_cd57865f61423596dee57bd4b70473b333fde480b7c40c6344fb7f9f5175e0c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
