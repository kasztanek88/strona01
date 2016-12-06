<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_674821053db7538cee42a4691241ca0c81b82fb35d241115a60d787fb67f75a3 extends Twig_Template
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
        $__internal_d1fe66b2e239314db6be8844f4d4b1324c7fd07a59954a7e5300408e6f2ad879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fe66b2e239314db6be8844f4d4b1324c7fd07a59954a7e5300408e6f2ad879->enter($__internal_d1fe66b2e239314db6be8844f4d4b1324c7fd07a59954a7e5300408e6f2ad879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d1fe66b2e239314db6be8844f4d4b1324c7fd07a59954a7e5300408e6f2ad879->leave($__internal_d1fe66b2e239314db6be8844f4d4b1324c7fd07a59954a7e5300408e6f2ad879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
