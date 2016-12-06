<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_76fc8e415c3f760dada3556d9228b455dd3b569380ee56bc1ce419c96ea86f1b extends Twig_Template
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
        $__internal_400e541349da22dfbb541c819b4b9bb7dd3d656e70fbe5df8c83d025a3b3d4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400e541349da22dfbb541c819b4b9bb7dd3d656e70fbe5df8c83d025a3b3d4d6->enter($__internal_400e541349da22dfbb541c819b4b9bb7dd3d656e70fbe5df8c83d025a3b3d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_400e541349da22dfbb541c819b4b9bb7dd3d656e70fbe5df8c83d025a3b3d4d6->leave($__internal_400e541349da22dfbb541c819b4b9bb7dd3d656e70fbe5df8c83d025a3b3d4d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
