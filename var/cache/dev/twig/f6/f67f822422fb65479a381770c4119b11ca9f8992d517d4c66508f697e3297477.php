<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_908458875b9e50336638f0b4963d94b5246df99ea689c1a9998552510c3ab802 extends Twig_Template
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
        $__internal_6338f3c4454a7e238c1a2c0fd8d17e990521a47dbac7ed7b4addeead74523d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6338f3c4454a7e238c1a2c0fd8d17e990521a47dbac7ed7b4addeead74523d35->enter($__internal_6338f3c4454a7e238c1a2c0fd8d17e990521a47dbac7ed7b4addeead74523d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6338f3c4454a7e238c1a2c0fd8d17e990521a47dbac7ed7b4addeead74523d35->leave($__internal_6338f3c4454a7e238c1a2c0fd8d17e990521a47dbac7ed7b4addeead74523d35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
