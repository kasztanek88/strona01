<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5d87f02a6c31000853953d5c1ff6233f1105710452e441e3a1a92f284b2d6abe extends Twig_Template
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
        $__internal_9391604c463aec02d4f75b17dcc9bb9ac166a39efe1dc41b7fd01c7785d449be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9391604c463aec02d4f75b17dcc9bb9ac166a39efe1dc41b7fd01c7785d449be->enter($__internal_9391604c463aec02d4f75b17dcc9bb9ac166a39efe1dc41b7fd01c7785d449be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9391604c463aec02d4f75b17dcc9bb9ac166a39efe1dc41b7fd01c7785d449be->leave($__internal_9391604c463aec02d4f75b17dcc9bb9ac166a39efe1dc41b7fd01c7785d449be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
