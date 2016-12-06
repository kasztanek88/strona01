<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b6a077c637f0cad0e143355222a6e44d277b205952779cebe66024a751e757c4 extends Twig_Template
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
        $__internal_9ee3940d6897d4fa1dc11e98bee5f680de43b0ac686e68c2cbf67f615b3bdb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee3940d6897d4fa1dc11e98bee5f680de43b0ac686e68c2cbf67f615b3bdb67->enter($__internal_9ee3940d6897d4fa1dc11e98bee5f680de43b0ac686e68c2cbf67f615b3bdb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9ee3940d6897d4fa1dc11e98bee5f680de43b0ac686e68c2cbf67f615b3bdb67->leave($__internal_9ee3940d6897d4fa1dc11e98bee5f680de43b0ac686e68c2cbf67f615b3bdb67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
