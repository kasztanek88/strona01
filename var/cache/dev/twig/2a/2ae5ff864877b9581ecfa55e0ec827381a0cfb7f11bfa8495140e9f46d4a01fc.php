<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a7999eb83e8868465eb07f5ae1a51d99206788702e784ffdd403fa71c4d13e39 extends Twig_Template
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
        $__internal_828cbe27b68f0beb94b4cf576dcd805d1ac876f3effa593e046186ae7e43a417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828cbe27b68f0beb94b4cf576dcd805d1ac876f3effa593e046186ae7e43a417->enter($__internal_828cbe27b68f0beb94b4cf576dcd805d1ac876f3effa593e046186ae7e43a417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_828cbe27b68f0beb94b4cf576dcd805d1ac876f3effa593e046186ae7e43a417->leave($__internal_828cbe27b68f0beb94b4cf576dcd805d1ac876f3effa593e046186ae7e43a417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
