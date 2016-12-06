<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_50adce4655e92c557b016aa619eb8762fd0508f78e6e957826a6d34ec9d5345a extends Twig_Template
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
        $__internal_537ad94c420147c5c90d8bb824c4ac435bf845d05ef0ad0396995d743b6cb70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537ad94c420147c5c90d8bb824c4ac435bf845d05ef0ad0396995d743b6cb70b->enter($__internal_537ad94c420147c5c90d8bb824c4ac435bf845d05ef0ad0396995d743b6cb70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_537ad94c420147c5c90d8bb824c4ac435bf845d05ef0ad0396995d743b6cb70b->leave($__internal_537ad94c420147c5c90d8bb824c4ac435bf845d05ef0ad0396995d743b6cb70b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
