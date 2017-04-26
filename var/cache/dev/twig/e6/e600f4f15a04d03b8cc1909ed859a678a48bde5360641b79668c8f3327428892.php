<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a5f1b1ecb00272c2e61513bb8f23b020490dbf7385968e0a150d04f10ec19c06 extends Twig_Template
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
        $__internal_3f5eb8981dea66725a9f2f457ecc78f9ad9eca9704c83ac6081fc5072609bb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5eb8981dea66725a9f2f457ecc78f9ad9eca9704c83ac6081fc5072609bb9d->enter($__internal_3f5eb8981dea66725a9f2f457ecc78f9ad9eca9704c83ac6081fc5072609bb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5d1fd807e0696bb364fe7946278cbac6ac454773c6a013306276e985dc8c1b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1fd807e0696bb364fe7946278cbac6ac454773c6a013306276e985dc8c1b20->enter($__internal_5d1fd807e0696bb364fe7946278cbac6ac454773c6a013306276e985dc8c1b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3f5eb8981dea66725a9f2f457ecc78f9ad9eca9704c83ac6081fc5072609bb9d->leave($__internal_3f5eb8981dea66725a9f2f457ecc78f9ad9eca9704c83ac6081fc5072609bb9d_prof);

        
        $__internal_5d1fd807e0696bb364fe7946278cbac6ac454773c6a013306276e985dc8c1b20->leave($__internal_5d1fd807e0696bb364fe7946278cbac6ac454773c6a013306276e985dc8c1b20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
