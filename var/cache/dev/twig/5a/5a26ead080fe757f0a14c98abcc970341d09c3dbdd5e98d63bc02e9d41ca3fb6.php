<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9d14c3843a9b49100fc1c32dc7cd1223c16c1fcf1ba39be6e14ea41e72cbd104 extends Twig_Template
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
        $__internal_a74b142e9a2d96371f97bd6c71f09908f413767f341c3f1da4a909894149bb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74b142e9a2d96371f97bd6c71f09908f413767f341c3f1da4a909894149bb99->enter($__internal_a74b142e9a2d96371f97bd6c71f09908f413767f341c3f1da4a909894149bb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4f92762f6b14ff94a6ea3a08bb9103622aaa0ae5e3a461111fcca78ac221c4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f92762f6b14ff94a6ea3a08bb9103622aaa0ae5e3a461111fcca78ac221c4c6->enter($__internal_4f92762f6b14ff94a6ea3a08bb9103622aaa0ae5e3a461111fcca78ac221c4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a74b142e9a2d96371f97bd6c71f09908f413767f341c3f1da4a909894149bb99->leave($__internal_a74b142e9a2d96371f97bd6c71f09908f413767f341c3f1da4a909894149bb99_prof);

        
        $__internal_4f92762f6b14ff94a6ea3a08bb9103622aaa0ae5e3a461111fcca78ac221c4c6->leave($__internal_4f92762f6b14ff94a6ea3a08bb9103622aaa0ae5e3a461111fcca78ac221c4c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Synfony_Project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
