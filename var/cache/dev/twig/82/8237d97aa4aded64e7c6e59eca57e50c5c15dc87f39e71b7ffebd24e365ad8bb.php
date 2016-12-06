<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5207ccb786b9196981f84457741afdbc13c90c5d1d06bff46461e5c09f1fb627 extends Twig_Template
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
        $__internal_9ce58476953ffcb034ff3311edb0af4e4031f60ee997cc4292e391da5ec67551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce58476953ffcb034ff3311edb0af4e4031f60ee997cc4292e391da5ec67551->enter($__internal_9ce58476953ffcb034ff3311edb0af4e4031f60ee997cc4292e391da5ec67551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9ce58476953ffcb034ff3311edb0af4e4031f60ee997cc4292e391da5ec67551->leave($__internal_9ce58476953ffcb034ff3311edb0af4e4031f60ee997cc4292e391da5ec67551_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
