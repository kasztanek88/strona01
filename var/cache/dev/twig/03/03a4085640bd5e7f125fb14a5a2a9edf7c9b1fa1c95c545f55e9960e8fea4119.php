<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b5a0da430f1fff9a1231fda42edcbf53a5c996297cc6699a821becec949c7733 extends Twig_Template
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
        $__internal_e4257bdde74953c37840d1bd53365d24acd758eb0cd3b5ee54666bcd6bdd8202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4257bdde74953c37840d1bd53365d24acd758eb0cd3b5ee54666bcd6bdd8202->enter($__internal_e4257bdde74953c37840d1bd53365d24acd758eb0cd3b5ee54666bcd6bdd8202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e4257bdde74953c37840d1bd53365d24acd758eb0cd3b5ee54666bcd6bdd8202->leave($__internal_e4257bdde74953c37840d1bd53365d24acd758eb0cd3b5ee54666bcd6bdd8202_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
