<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fb1ec2697ed6462b310d7fc8a35a389921796f7cb8571637c3dbbb2089040aeb extends Twig_Template
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
        $__internal_1c3b8ce963c4a7ef7ac74bf7ba2f8f29729d2b44012851c6a2f959a85aca0971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3b8ce963c4a7ef7ac74bf7ba2f8f29729d2b44012851c6a2f959a85aca0971->enter($__internal_1c3b8ce963c4a7ef7ac74bf7ba2f8f29729d2b44012851c6a2f959a85aca0971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1c3b8ce963c4a7ef7ac74bf7ba2f8f29729d2b44012851c6a2f959a85aca0971->leave($__internal_1c3b8ce963c4a7ef7ac74bf7ba2f8f29729d2b44012851c6a2f959a85aca0971_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
