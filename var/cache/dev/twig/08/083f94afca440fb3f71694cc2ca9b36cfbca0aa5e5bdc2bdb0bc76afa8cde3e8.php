<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_646f564c843ac65d6c50a6d0674bd0574df9596d7121e6140ac428c22c03d3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0020d5dcb8fc871caaeac9d726e9c8f1c1b72bbe4f93270b93f8a85c684e879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0020d5dcb8fc871caaeac9d726e9c8f1c1b72bbe4f93270b93f8a85c684e879->enter($__internal_a0020d5dcb8fc871caaeac9d726e9c8f1c1b72bbe4f93270b93f8a85c684e879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e3885e07b008830d6aab64cd3902b72aab0738ad912328614d012023866d2fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3885e07b008830d6aab64cd3902b72aab0738ad912328614d012023866d2fd4->enter($__internal_e3885e07b008830d6aab64cd3902b72aab0738ad912328614d012023866d2fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0020d5dcb8fc871caaeac9d726e9c8f1c1b72bbe4f93270b93f8a85c684e879->leave($__internal_a0020d5dcb8fc871caaeac9d726e9c8f1c1b72bbe4f93270b93f8a85c684e879_prof);

        
        $__internal_e3885e07b008830d6aab64cd3902b72aab0738ad912328614d012023866d2fd4->leave($__internal_e3885e07b008830d6aab64cd3902b72aab0738ad912328614d012023866d2fd4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbd395d0a2a1f06ca55c0b8208b819c342fc6c28ba261bf499cd8f56c4bc254f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd395d0a2a1f06ca55c0b8208b819c342fc6c28ba261bf499cd8f56c4bc254f->enter($__internal_cbd395d0a2a1f06ca55c0b8208b819c342fc6c28ba261bf499cd8f56c4bc254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f2a74414ef3c2966788667fddd9843f2b7dbe7a536ec129c27404536742dbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2a74414ef3c2966788667fddd9843f2b7dbe7a536ec129c27404536742dbb4->enter($__internal_3f2a74414ef3c2966788667fddd9843f2b7dbe7a536ec129c27404536742dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3f2a74414ef3c2966788667fddd9843f2b7dbe7a536ec129c27404536742dbb4->leave($__internal_3f2a74414ef3c2966788667fddd9843f2b7dbe7a536ec129c27404536742dbb4_prof);

        
        $__internal_cbd395d0a2a1f06ca55c0b8208b819c342fc6c28ba261bf499cd8f56c4bc254f->leave($__internal_cbd395d0a2a1f06ca55c0b8208b819c342fc6c28ba261bf499cd8f56c4bc254f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d03d0220e1a367f731f636e422732e5e1973739718cf4c72a6bd40850d2d3d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03d0220e1a367f731f636e422732e5e1973739718cf4c72a6bd40850d2d3d21->enter($__internal_d03d0220e1a367f731f636e422732e5e1973739718cf4c72a6bd40850d2d3d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d77596a16249407fc3dc7d09106630910238cbab6c5b22aa3b7a3548702b340f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77596a16249407fc3dc7d09106630910238cbab6c5b22aa3b7a3548702b340f->enter($__internal_d77596a16249407fc3dc7d09106630910238cbab6c5b22aa3b7a3548702b340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d77596a16249407fc3dc7d09106630910238cbab6c5b22aa3b7a3548702b340f->leave($__internal_d77596a16249407fc3dc7d09106630910238cbab6c5b22aa3b7a3548702b340f_prof);

        
        $__internal_d03d0220e1a367f731f636e422732e5e1973739718cf4c72a6bd40850d2d3d21->leave($__internal_d03d0220e1a367f731f636e422732e5e1973739718cf4c72a6bd40850d2d3d21_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8fd0a0d785e22ad224f3aaeb104622c25f7f452f991c9ef3925c7e352efd052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fd0a0d785e22ad224f3aaeb104622c25f7f452f991c9ef3925c7e352efd052->enter($__internal_a8fd0a0d785e22ad224f3aaeb104622c25f7f452f991c9ef3925c7e352efd052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13d6f329015f30955a211c89846bcb87905cd342443e6bd070eadbf4a43960e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d6f329015f30955a211c89846bcb87905cd342443e6bd070eadbf4a43960e6->enter($__internal_13d6f329015f30955a211c89846bcb87905cd342443e6bd070eadbf4a43960e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_13d6f329015f30955a211c89846bcb87905cd342443e6bd070eadbf4a43960e6->leave($__internal_13d6f329015f30955a211c89846bcb87905cd342443e6bd070eadbf4a43960e6_prof);

        
        $__internal_a8fd0a0d785e22ad224f3aaeb104622c25f7f452f991c9ef3925c7e352efd052->leave($__internal_a8fd0a0d785e22ad224f3aaeb104622c25f7f452f991c9ef3925c7e352efd052_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
