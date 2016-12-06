<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_10580123c6bd273f8ca8a619641f01b5b98af507618196f8c3c2e37209139a4b extends Twig_Template
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
        $__internal_f0267f5696204c15b4431f63d152cf1de062f309b9bd1166af6bf2fe7ca3c16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0267f5696204c15b4431f63d152cf1de062f309b9bd1166af6bf2fe7ca3c16c->enter($__internal_f0267f5696204c15b4431f63d152cf1de062f309b9bd1166af6bf2fe7ca3c16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f0267f5696204c15b4431f63d152cf1de062f309b9bd1166af6bf2fe7ca3c16c->leave($__internal_f0267f5696204c15b4431f63d152cf1de062f309b9bd1166af6bf2fe7ca3c16c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
