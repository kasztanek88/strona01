<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e2044bb0cb71cde210e19e84144113d05abb9dfe9b0cd736dceeddd09e937632 extends Twig_Template
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
        $__internal_fbbbd7b893ecab09a6e923adb7ced00d97300c2de33faf5397b166eeee7b8ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbbd7b893ecab09a6e923adb7ced00d97300c2de33faf5397b166eeee7b8ff9->enter($__internal_fbbbd7b893ecab09a6e923adb7ced00d97300c2de33faf5397b166eeee7b8ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fbbbd7b893ecab09a6e923adb7ced00d97300c2de33faf5397b166eeee7b8ff9->leave($__internal_fbbbd7b893ecab09a6e923adb7ced00d97300c2de33faf5397b166eeee7b8ff9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
