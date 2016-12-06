<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a06776ade8f48af3465d45143b0cd009ce2ab3b15aa3554ee1e7ce29d3cd6393 extends Twig_Template
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
        $__internal_1797a0044190b44869e44169a544f0c717e7e3732e3c5aa9a3046e44ff0cea3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1797a0044190b44869e44169a544f0c717e7e3732e3c5aa9a3046e44ff0cea3a->enter($__internal_1797a0044190b44869e44169a544f0c717e7e3732e3c5aa9a3046e44ff0cea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1797a0044190b44869e44169a544f0c717e7e3732e3c5aa9a3046e44ff0cea3a->leave($__internal_1797a0044190b44869e44169a544f0c717e7e3732e3c5aa9a3046e44ff0cea3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
