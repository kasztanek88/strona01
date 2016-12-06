<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_fd8ddac50eda65de8504d61d285630bf7a68266679263784833c0a8e656c65da extends Twig_Template
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
        $__internal_1e5cc7d015c4a1ee5c90d0d5f8ca6bb4c40ed2e45d07ef1b8f08060eaef9edbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5cc7d015c4a1ee5c90d0d5f8ca6bb4c40ed2e45d07ef1b8f08060eaef9edbb->enter($__internal_1e5cc7d015c4a1ee5c90d0d5f8ca6bb4c40ed2e45d07ef1b8f08060eaef9edbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1e5cc7d015c4a1ee5c90d0d5f8ca6bb4c40ed2e45d07ef1b8f08060eaef9edbb->leave($__internal_1e5cc7d015c4a1ee5c90d0d5f8ca6bb4c40ed2e45d07ef1b8f08060eaef9edbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
