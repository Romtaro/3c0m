<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1ae272360117f178cb6fe9c50a138a618c6f7c4baf21b539f58eda93bffcc498 extends Twig_Template
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
        $__internal_3b4940df7f50bcc88af5e3fc16011e2f7dd01e4113939e4896f679441912ef9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4940df7f50bcc88af5e3fc16011e2f7dd01e4113939e4896f679441912ef9b->enter($__internal_3b4940df7f50bcc88af5e3fc16011e2f7dd01e4113939e4896f679441912ef9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a70cda07c9d03661cd730f4c9e744a519f8ac6ffcde5fe361512d70187522b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70cda07c9d03661cd730f4c9e744a519f8ac6ffcde5fe361512d70187522b66->enter($__internal_a70cda07c9d03661cd730f4c9e744a519f8ac6ffcde5fe361512d70187522b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3b4940df7f50bcc88af5e3fc16011e2f7dd01e4113939e4896f679441912ef9b->leave($__internal_3b4940df7f50bcc88af5e3fc16011e2f7dd01e4113939e4896f679441912ef9b_prof);

        
        $__internal_a70cda07c9d03661cd730f4c9e744a519f8ac6ffcde5fe361512d70187522b66->leave($__internal_a70cda07c9d03661cd730f4c9e744a519f8ac6ffcde5fe361512d70187522b66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
