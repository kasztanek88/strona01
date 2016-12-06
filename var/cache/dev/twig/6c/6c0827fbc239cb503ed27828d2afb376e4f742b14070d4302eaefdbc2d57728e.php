<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4b462ade6076130319998c055799950e27b6f7bb8ed1901b654d9d85ef835c94 extends Twig_Template
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
        $__internal_90463184fb954696c1b4cfde62b0267b49a6cba4e654479c4a1ee86ee9fc618c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90463184fb954696c1b4cfde62b0267b49a6cba4e654479c4a1ee86ee9fc618c->enter($__internal_90463184fb954696c1b4cfde62b0267b49a6cba4e654479c4a1ee86ee9fc618c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_90463184fb954696c1b4cfde62b0267b49a6cba4e654479c4a1ee86ee9fc618c->leave($__internal_90463184fb954696c1b4cfde62b0267b49a6cba4e654479c4a1ee86ee9fc618c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
