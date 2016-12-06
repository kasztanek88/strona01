<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1cc870b3b39cb4934a9c22c3c215fa4e2d9ddaf662a109c18f2d95b0aaf30762 extends Twig_Template
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
        $__internal_e9127a5aede0ed0301025d493c36c851fcb124c90d1377d3c07244496e441e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9127a5aede0ed0301025d493c36c851fcb124c90d1377d3c07244496e441e5d->enter($__internal_e9127a5aede0ed0301025d493c36c851fcb124c90d1377d3c07244496e441e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e9127a5aede0ed0301025d493c36c851fcb124c90d1377d3c07244496e441e5d->leave($__internal_e9127a5aede0ed0301025d493c36c851fcb124c90d1377d3c07244496e441e5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
