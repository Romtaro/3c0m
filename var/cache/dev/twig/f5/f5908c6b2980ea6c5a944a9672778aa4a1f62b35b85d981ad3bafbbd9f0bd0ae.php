<?php

/* ::base.html.twig */
class __TwigTemplate_dcbdaf93735b5bc8de218ea0d068d55f653223179d8a8ba7f91fb80474077e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af322c8461bfe0aff0ed5b3f5ef8a5ba8862de1f2d9f17255930fe73181b9777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af322c8461bfe0aff0ed5b3f5ef8a5ba8862de1f2d9f17255930fe73181b9777->enter($__internal_af322c8461bfe0aff0ed5b3f5ef8a5ba8862de1f2d9f17255930fe73181b9777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9e0ebd5dd94976d13d74d2e92682a43ffeffb3b5854a0e10dd5a46729e214f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0ebd5dd94976d13d74d2e92682a43ffeffb3b5854a0e10dd5a46729e214f61->enter($__internal_9e0ebd5dd94976d13d74d2e92682a43ffeffb3b5854a0e10dd5a46729e214f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_af322c8461bfe0aff0ed5b3f5ef8a5ba8862de1f2d9f17255930fe73181b9777->leave($__internal_af322c8461bfe0aff0ed5b3f5ef8a5ba8862de1f2d9f17255930fe73181b9777_prof);

        
        $__internal_9e0ebd5dd94976d13d74d2e92682a43ffeffb3b5854a0e10dd5a46729e214f61->leave($__internal_9e0ebd5dd94976d13d74d2e92682a43ffeffb3b5854a0e10dd5a46729e214f61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f8ba483f54f08fc714f9b5b44c50be2f71a01a30b8dd282ccac658e9c4289ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8ba483f54f08fc714f9b5b44c50be2f71a01a30b8dd282ccac658e9c4289ac->enter($__internal_6f8ba483f54f08fc714f9b5b44c50be2f71a01a30b8dd282ccac658e9c4289ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1eb747d8b96ecba07211ad03a9c0a21235708ba76bc7047f34d32aa53d520a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb747d8b96ecba07211ad03a9c0a21235708ba76bc7047f34d32aa53d520a3b->enter($__internal_1eb747d8b96ecba07211ad03a9c0a21235708ba76bc7047f34d32aa53d520a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1eb747d8b96ecba07211ad03a9c0a21235708ba76bc7047f34d32aa53d520a3b->leave($__internal_1eb747d8b96ecba07211ad03a9c0a21235708ba76bc7047f34d32aa53d520a3b_prof);

        
        $__internal_6f8ba483f54f08fc714f9b5b44c50be2f71a01a30b8dd282ccac658e9c4289ac->leave($__internal_6f8ba483f54f08fc714f9b5b44c50be2f71a01a30b8dd282ccac658e9c4289ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f326305c37196821ec8fd96879dd1abc911547545a921e3a953c2aa7edd879f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f326305c37196821ec8fd96879dd1abc911547545a921e3a953c2aa7edd879f2->enter($__internal_f326305c37196821ec8fd96879dd1abc911547545a921e3a953c2aa7edd879f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0efae72569851e0f66c799d9f7dfad186be9ff0827bb59d344b094853b2ba32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efae72569851e0f66c799d9f7dfad186be9ff0827bb59d344b094853b2ba32f->enter($__internal_0efae72569851e0f66c799d9f7dfad186be9ff0827bb59d344b094853b2ba32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0efae72569851e0f66c799d9f7dfad186be9ff0827bb59d344b094853b2ba32f->leave($__internal_0efae72569851e0f66c799d9f7dfad186be9ff0827bb59d344b094853b2ba32f_prof);

        
        $__internal_f326305c37196821ec8fd96879dd1abc911547545a921e3a953c2aa7edd879f2->leave($__internal_f326305c37196821ec8fd96879dd1abc911547545a921e3a953c2aa7edd879f2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_362be88931c11dff4631d6b5873319dc2f349496626934a775a2644052b2de6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362be88931c11dff4631d6b5873319dc2f349496626934a775a2644052b2de6b->enter($__internal_362be88931c11dff4631d6b5873319dc2f349496626934a775a2644052b2de6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15bf6f647180e22e3bb3acf68359a377c68989db884e4803c530357747f79b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bf6f647180e22e3bb3acf68359a377c68989db884e4803c530357747f79b85->enter($__internal_15bf6f647180e22e3bb3acf68359a377c68989db884e4803c530357747f79b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15bf6f647180e22e3bb3acf68359a377c68989db884e4803c530357747f79b85->leave($__internal_15bf6f647180e22e3bb3acf68359a377c68989db884e4803c530357747f79b85_prof);

        
        $__internal_362be88931c11dff4631d6b5873319dc2f349496626934a775a2644052b2de6b->leave($__internal_362be88931c11dff4631d6b5873319dc2f349496626934a775a2644052b2de6b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3237b58f7e3be59aaa2d1ab9b604d84cb75324e223af0ccda7035ef6325dfb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3237b58f7e3be59aaa2d1ab9b604d84cb75324e223af0ccda7035ef6325dfb8->enter($__internal_c3237b58f7e3be59aaa2d1ab9b604d84cb75324e223af0ccda7035ef6325dfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ae25d265720a1719fc3e406118f560b6ddf05788fd44838a3e8be21d3c2a124d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae25d265720a1719fc3e406118f560b6ddf05788fd44838a3e8be21d3c2a124d->enter($__internal_ae25d265720a1719fc3e406118f560b6ddf05788fd44838a3e8be21d3c2a124d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ae25d265720a1719fc3e406118f560b6ddf05788fd44838a3e8be21d3c2a124d->leave($__internal_ae25d265720a1719fc3e406118f560b6ddf05788fd44838a3e8be21d3c2a124d_prof);

        
        $__internal_c3237b58f7e3be59aaa2d1ab9b604d84cb75324e223af0ccda7035ef6325dfb8->leave($__internal_c3237b58f7e3be59aaa2d1ab9b604d84cb75324e223af0ccda7035ef6325dfb8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Synfony_Project\\app/Resources\\views/base.html.twig");
    }
}
