<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e928f0244882147a0fa0380ca3fad68a597ea27e0bb589a611a018e4041b4363 extends Twig_Template
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
        $__internal_2b99e3458ff2b4a6c1e09c8cc7ec5a895940d9c4a8e8c1b3cd7f60fe0f681b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b99e3458ff2b4a6c1e09c8cc7ec5a895940d9c4a8e8c1b3cd7f60fe0f681b07->enter($__internal_2b99e3458ff2b4a6c1e09c8cc7ec5a895940d9c4a8e8c1b3cd7f60fe0f681b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2b99e3458ff2b4a6c1e09c8cc7ec5a895940d9c4a8e8c1b3cd7f60fe0f681b07->leave($__internal_2b99e3458ff2b4a6c1e09c8cc7ec5a895940d9c4a8e8c1b3cd7f60fe0f681b07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
