<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_530abaeead083f7d4dcbedfb01c647b5082f9dd2f89588175293efb3ae232b9b extends Twig_Template
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
        $__internal_4eac5dbbb04e52e5648da6ffa42b61c0d00cc0e6e7cf8676e94b28241fc61b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eac5dbbb04e52e5648da6ffa42b61c0d00cc0e6e7cf8676e94b28241fc61b2c->enter($__internal_4eac5dbbb04e52e5648da6ffa42b61c0d00cc0e6e7cf8676e94b28241fc61b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_38749a0b4050bc3d3dfa07d6d69fc873e8e15fb37cc0fa0fc06281561ebbfd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38749a0b4050bc3d3dfa07d6d69fc873e8e15fb37cc0fa0fc06281561ebbfd77->enter($__internal_38749a0b4050bc3d3dfa07d6d69fc873e8e15fb37cc0fa0fc06281561ebbfd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4eac5dbbb04e52e5648da6ffa42b61c0d00cc0e6e7cf8676e94b28241fc61b2c->leave($__internal_4eac5dbbb04e52e5648da6ffa42b61c0d00cc0e6e7cf8676e94b28241fc61b2c_prof);

        
        $__internal_38749a0b4050bc3d3dfa07d6d69fc873e8e15fb37cc0fa0fc06281561ebbfd77->leave($__internal_38749a0b4050bc3d3dfa07d6d69fc873e8e15fb37cc0fa0fc06281561ebbfd77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
