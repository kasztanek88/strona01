<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7fb1bdc2b3c8292905e7a5a412e35475049e511beb65276f169e1cbced99892d extends Twig_Template
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
        $__internal_eb0e0dc394c990299fd06931813978d3d9dd8039b9e8b661819a619235cabf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0e0dc394c990299fd06931813978d3d9dd8039b9e8b661819a619235cabf36->enter($__internal_eb0e0dc394c990299fd06931813978d3d9dd8039b9e8b661819a619235cabf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_eb0e0dc394c990299fd06931813978d3d9dd8039b9e8b661819a619235cabf36->leave($__internal_eb0e0dc394c990299fd06931813978d3d9dd8039b9e8b661819a619235cabf36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
