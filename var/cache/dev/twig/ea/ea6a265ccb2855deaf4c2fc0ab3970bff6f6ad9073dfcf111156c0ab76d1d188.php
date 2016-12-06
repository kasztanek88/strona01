<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_262e96fd615cb5103a5ca3baf47f619eba0ea1a5c74ae451f4be1551d4165074 extends Twig_Template
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
        $__internal_eaf6ead97f9249f48a1aca811e182aaf4baaaf6f15d159e58f3c817dd74029fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf6ead97f9249f48a1aca811e182aaf4baaaf6f15d159e58f3c817dd74029fc->enter($__internal_eaf6ead97f9249f48a1aca811e182aaf4baaaf6f15d159e58f3c817dd74029fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_eaf6ead97f9249f48a1aca811e182aaf4baaaf6f15d159e58f3c817dd74029fc->leave($__internal_eaf6ead97f9249f48a1aca811e182aaf4baaaf6f15d159e58f3c817dd74029fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
