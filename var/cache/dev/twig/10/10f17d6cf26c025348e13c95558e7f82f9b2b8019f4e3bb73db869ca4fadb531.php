<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_47e0481f5cbe1a2a27bfcae89d5b0bb597b3fe4bec70418938746ac90f4c1a87 extends Twig_Template
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
        $__internal_2d6798321ab1481ef9faf96024d025c84f6e1f3da1a5ec9ed52809ae392c949d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6798321ab1481ef9faf96024d025c84f6e1f3da1a5ec9ed52809ae392c949d->enter($__internal_2d6798321ab1481ef9faf96024d025c84f6e1f3da1a5ec9ed52809ae392c949d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2d6798321ab1481ef9faf96024d025c84f6e1f3da1a5ec9ed52809ae392c949d->leave($__internal_2d6798321ab1481ef9faf96024d025c84f6e1f3da1a5ec9ed52809ae392c949d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
