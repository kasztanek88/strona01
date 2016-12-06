<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1d7247014875239de8a3eb119d7f92255e89574407d434caed0d361b61b526a2 extends Twig_Template
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
        $__internal_4f83ffe29299f639295ffb9a17384ae6f338160899a25a249cb6d0727b0f761d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f83ffe29299f639295ffb9a17384ae6f338160899a25a249cb6d0727b0f761d->enter($__internal_4f83ffe29299f639295ffb9a17384ae6f338160899a25a249cb6d0727b0f761d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4f83ffe29299f639295ffb9a17384ae6f338160899a25a249cb6d0727b0f761d->leave($__internal_4f83ffe29299f639295ffb9a17384ae6f338160899a25a249cb6d0727b0f761d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
