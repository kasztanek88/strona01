<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9914c2e92e30e9867b2178d683063d630577d82ea38371ed7451242b731a07d4 extends Twig_Template
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
        $__internal_77b5f4bcb4041e090fcf0a05f8d0914edfdb830c1678cfaa7ffff19c5b4fa12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b5f4bcb4041e090fcf0a05f8d0914edfdb830c1678cfaa7ffff19c5b4fa12b->enter($__internal_77b5f4bcb4041e090fcf0a05f8d0914edfdb830c1678cfaa7ffff19c5b4fa12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_77b5f4bcb4041e090fcf0a05f8d0914edfdb830c1678cfaa7ffff19c5b4fa12b->leave($__internal_77b5f4bcb4041e090fcf0a05f8d0914edfdb830c1678cfaa7ffff19c5b4fa12b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
