<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2c92ce6d2943c724d28c900ada6cc3ae5da72323fa434f27b8b3b287f7bebf11 extends Twig_Template
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
        $__internal_9790548332ea8a819ff6dd277338722b0c475ba1e693d2fca7781852ea0634b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9790548332ea8a819ff6dd277338722b0c475ba1e693d2fca7781852ea0634b1->enter($__internal_9790548332ea8a819ff6dd277338722b0c475ba1e693d2fca7781852ea0634b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9790548332ea8a819ff6dd277338722b0c475ba1e693d2fca7781852ea0634b1->leave($__internal_9790548332ea8a819ff6dd277338722b0c475ba1e693d2fca7781852ea0634b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
