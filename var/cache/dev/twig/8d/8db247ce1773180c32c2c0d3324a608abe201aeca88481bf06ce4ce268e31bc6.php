<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_136a9c897e3b9dc3b738048c24e9b63e4cd252366748eac9c526f29ecf83228a extends Twig_Template
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
        $__internal_297d45cc651eb4814642ccabb23f84875c16f76998c11cefa8d0a84fd27db2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297d45cc651eb4814642ccabb23f84875c16f76998c11cefa8d0a84fd27db2e9->enter($__internal_297d45cc651eb4814642ccabb23f84875c16f76998c11cefa8d0a84fd27db2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_297d45cc651eb4814642ccabb23f84875c16f76998c11cefa8d0a84fd27db2e9->leave($__internal_297d45cc651eb4814642ccabb23f84875c16f76998c11cefa8d0a84fd27db2e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
