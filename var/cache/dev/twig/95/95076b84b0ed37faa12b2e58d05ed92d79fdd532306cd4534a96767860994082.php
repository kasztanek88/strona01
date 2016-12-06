<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dc4cac3fbd9884dc88eaf63b91e7eb85d5528d08fb3b02a15b3d57744395b95f extends Twig_Template
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
        $__internal_75a86da32838c6d8edaa2c00c2c57eb6845fb979e8028afd1beb79eed5581997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a86da32838c6d8edaa2c00c2c57eb6845fb979e8028afd1beb79eed5581997->enter($__internal_75a86da32838c6d8edaa2c00c2c57eb6845fb979e8028afd1beb79eed5581997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_75a86da32838c6d8edaa2c00c2c57eb6845fb979e8028afd1beb79eed5581997->leave($__internal_75a86da32838c6d8edaa2c00c2c57eb6845fb979e8028afd1beb79eed5581997_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
