<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_8647b0fbad0d2cc9d9d5c9d3c877ca823469924ea8cb8d72eaf3ac089a2a0431 extends Twig_Template
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
        $__internal_5bf572404c4781eb816bd0e4c1ac18edb55685dc6b425f05b53c0fb2927c058a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf572404c4781eb816bd0e4c1ac18edb55685dc6b425f05b53c0fb2927c058a->enter($__internal_5bf572404c4781eb816bd0e4c1ac18edb55685dc6b425f05b53c0fb2927c058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6a57ae70dcdd1fd41603fdbcdaaa6dab44fc8d851e99403f7a576783e4421a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a57ae70dcdd1fd41603fdbcdaaa6dab44fc8d851e99403f7a576783e4421a77->enter($__internal_6a57ae70dcdd1fd41603fdbcdaaa6dab44fc8d851e99403f7a576783e4421a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5bf572404c4781eb816bd0e4c1ac18edb55685dc6b425f05b53c0fb2927c058a->leave($__internal_5bf572404c4781eb816bd0e4c1ac18edb55685dc6b425f05b53c0fb2927c058a_prof);

        
        $__internal_6a57ae70dcdd1fd41603fdbcdaaa6dab44fc8d851e99403f7a576783e4421a77->leave($__internal_6a57ae70dcdd1fd41603fdbcdaaa6dab44fc8d851e99403f7a576783e4421a77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
