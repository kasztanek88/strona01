<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d0911623d43516769302b34feb8ef11dd633df9d7313105369a7d5186a58c0bd extends Twig_Template
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
        $__internal_2f4ffa80a93be24c64a1bcbdda5a8707c05ee1e98cb729143caed8523027f4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4ffa80a93be24c64a1bcbdda5a8707c05ee1e98cb729143caed8523027f4c6->enter($__internal_2f4ffa80a93be24c64a1bcbdda5a8707c05ee1e98cb729143caed8523027f4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2f4ffa80a93be24c64a1bcbdda5a8707c05ee1e98cb729143caed8523027f4c6->leave($__internal_2f4ffa80a93be24c64a1bcbdda5a8707c05ee1e98cb729143caed8523027f4c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
