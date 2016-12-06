<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b1ed9d9875e1ec3397a186de02458ae5ced71026c1da040aa9d6317860f5f953 extends Twig_Template
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
        $__internal_3749495bf47cc4ef0b97ca5a4bb0502fb3192dcf07f0472181d5d11da822fb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3749495bf47cc4ef0b97ca5a4bb0502fb3192dcf07f0472181d5d11da822fb09->enter($__internal_3749495bf47cc4ef0b97ca5a4bb0502fb3192dcf07f0472181d5d11da822fb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3749495bf47cc4ef0b97ca5a4bb0502fb3192dcf07f0472181d5d11da822fb09->leave($__internal_3749495bf47cc4ef0b97ca5a4bb0502fb3192dcf07f0472181d5d11da822fb09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
