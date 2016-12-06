<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_91429de9ee44794a4e2d0f7de0e213bbf511bc6a677b6cc5a73ce86dc51f162c extends Twig_Template
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
        $__internal_d40c181048ee9e1856a8c5eccda9249956ab2d8f7445eba44e9fced28dd85e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40c181048ee9e1856a8c5eccda9249956ab2d8f7445eba44e9fced28dd85e4e->enter($__internal_d40c181048ee9e1856a8c5eccda9249956ab2d8f7445eba44e9fced28dd85e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d40c181048ee9e1856a8c5eccda9249956ab2d8f7445eba44e9fced28dd85e4e->leave($__internal_d40c181048ee9e1856a8c5eccda9249956ab2d8f7445eba44e9fced28dd85e4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
