<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d8dc21ec47587d88f9e6b1adb1a1ab8ca554a7c28b93995053ba8e4e856b0989 extends Twig_Template
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
        $__internal_a8fcd5705c513db75ed7397c55a49b4affda770156e5bfa9f54ee63bffc975fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fcd5705c513db75ed7397c55a49b4affda770156e5bfa9f54ee63bffc975fd->enter($__internal_a8fcd5705c513db75ed7397c55a49b4affda770156e5bfa9f54ee63bffc975fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a8fcd5705c513db75ed7397c55a49b4affda770156e5bfa9f54ee63bffc975fd->leave($__internal_a8fcd5705c513db75ed7397c55a49b4affda770156e5bfa9f54ee63bffc975fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
