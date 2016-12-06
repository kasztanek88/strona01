<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_641dcb1c475bd918333e2aabc4a6682cc46e7f45cce1abf17b1eaf1e2a6f1460 extends Twig_Template
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
        $__internal_8b53ac66b7a661a252546878a8e1af9582b3300eb0774a27557d2c9b70328fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b53ac66b7a661a252546878a8e1af9582b3300eb0774a27557d2c9b70328fb7->enter($__internal_8b53ac66b7a661a252546878a8e1af9582b3300eb0774a27557d2c9b70328fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8b53ac66b7a661a252546878a8e1af9582b3300eb0774a27557d2c9b70328fb7->leave($__internal_8b53ac66b7a661a252546878a8e1af9582b3300eb0774a27557d2c9b70328fb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
