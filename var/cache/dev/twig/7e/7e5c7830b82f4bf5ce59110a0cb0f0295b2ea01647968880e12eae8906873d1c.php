<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0476b7474e5035e0b665d8b1489cc74926f2aec46e18e5bc1e257e301f963230 extends Twig_Template
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
        $__internal_8cc41633e9ecabe80deab7402265ea63912d239320b8a720a9b34378fd31d720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc41633e9ecabe80deab7402265ea63912d239320b8a720a9b34378fd31d720->enter($__internal_8cc41633e9ecabe80deab7402265ea63912d239320b8a720a9b34378fd31d720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8cc41633e9ecabe80deab7402265ea63912d239320b8a720a9b34378fd31d720->leave($__internal_8cc41633e9ecabe80deab7402265ea63912d239320b8a720a9b34378fd31d720_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
