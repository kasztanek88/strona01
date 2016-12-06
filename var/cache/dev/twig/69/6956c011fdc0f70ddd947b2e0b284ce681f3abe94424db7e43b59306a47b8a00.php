<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_736f5a20f7f28cecdf06a81c395179464c113624eea88064b011c26987303afa extends Twig_Template
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
        $__internal_c426c1ff5b7520ad7ef6a893be2c40d6ab7eed8fee38095e374ce9cda9a98ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c426c1ff5b7520ad7ef6a893be2c40d6ab7eed8fee38095e374ce9cda9a98ccc->enter($__internal_c426c1ff5b7520ad7ef6a893be2c40d6ab7eed8fee38095e374ce9cda9a98ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c426c1ff5b7520ad7ef6a893be2c40d6ab7eed8fee38095e374ce9cda9a98ccc->leave($__internal_c426c1ff5b7520ad7ef6a893be2c40d6ab7eed8fee38095e374ce9cda9a98ccc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
