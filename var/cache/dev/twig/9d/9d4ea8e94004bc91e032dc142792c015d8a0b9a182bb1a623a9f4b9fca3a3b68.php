<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3fedc6166ff5820fcbdf4a53aaae01efeee70ec9de28b1a869ce464b0ffd8837 extends Twig_Template
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
        $__internal_939d649def952167c4bcdf8dab5ab14e20fde8584b16df880a6a5cc637fb142a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939d649def952167c4bcdf8dab5ab14e20fde8584b16df880a6a5cc637fb142a->enter($__internal_939d649def952167c4bcdf8dab5ab14e20fde8584b16df880a6a5cc637fb142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_939d649def952167c4bcdf8dab5ab14e20fde8584b16df880a6a5cc637fb142a->leave($__internal_939d649def952167c4bcdf8dab5ab14e20fde8584b16df880a6a5cc637fb142a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
