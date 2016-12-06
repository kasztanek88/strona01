<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_48e06abfd4ea4bf82e38d341efbc6110f6038fcd511d4ecaf22f112a8fcff2d6 extends Twig_Template
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
        $__internal_64d621e3fdc698279f40dd74a04ea80e463b9f4ef08d1065df7ba11d42839308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d621e3fdc698279f40dd74a04ea80e463b9f4ef08d1065df7ba11d42839308->enter($__internal_64d621e3fdc698279f40dd74a04ea80e463b9f4ef08d1065df7ba11d42839308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64d621e3fdc698279f40dd74a04ea80e463b9f4ef08d1065df7ba11d42839308->leave($__internal_64d621e3fdc698279f40dd74a04ea80e463b9f4ef08d1065df7ba11d42839308_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
