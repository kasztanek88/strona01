<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_671d83f47cb891a96d6485a3c675f78187d0838a0c58362be00e2bb675a0411a extends Twig_Template
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
        $__internal_48ec510da4642373d3d511f1a9980fc1746ffda52959091627b8e1c6fac9f27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ec510da4642373d3d511f1a9980fc1746ffda52959091627b8e1c6fac9f27b->enter($__internal_48ec510da4642373d3d511f1a9980fc1746ffda52959091627b8e1c6fac9f27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_48ec510da4642373d3d511f1a9980fc1746ffda52959091627b8e1c6fac9f27b->leave($__internal_48ec510da4642373d3d511f1a9980fc1746ffda52959091627b8e1c6fac9f27b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
