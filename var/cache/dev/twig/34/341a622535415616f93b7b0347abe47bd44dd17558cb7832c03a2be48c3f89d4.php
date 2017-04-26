<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_080893a95eef4bdd2059e2d70ea67bddf46760737d89640625a64bc73febd65a extends Twig_Template
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
        $__internal_821195e4e3bb0e6db5dfe443b0ee8e2fa27aeee73dff65dbd90222eb4ef8c8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821195e4e3bb0e6db5dfe443b0ee8e2fa27aeee73dff65dbd90222eb4ef8c8b1->enter($__internal_821195e4e3bb0e6db5dfe443b0ee8e2fa27aeee73dff65dbd90222eb4ef8c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_827c7e0ba10ce7d5e1b06617e452de3fd311ffbfa85694b3689c25aa6620d728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827c7e0ba10ce7d5e1b06617e452de3fd311ffbfa85694b3689c25aa6620d728->enter($__internal_827c7e0ba10ce7d5e1b06617e452de3fd311ffbfa85694b3689c25aa6620d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_821195e4e3bb0e6db5dfe443b0ee8e2fa27aeee73dff65dbd90222eb4ef8c8b1->leave($__internal_821195e4e3bb0e6db5dfe443b0ee8e2fa27aeee73dff65dbd90222eb4ef8c8b1_prof);

        
        $__internal_827c7e0ba10ce7d5e1b06617e452de3fd311ffbfa85694b3689c25aa6620d728->leave($__internal_827c7e0ba10ce7d5e1b06617e452de3fd311ffbfa85694b3689c25aa6620d728_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
