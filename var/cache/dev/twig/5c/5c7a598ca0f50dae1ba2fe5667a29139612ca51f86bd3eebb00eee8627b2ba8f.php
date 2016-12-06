<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6c87b021aa63ea39a85a11afae474c721e68cb5a605ceb924433916fb93ce7c4 extends Twig_Template
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
        $__internal_3107f1c2b4fb43da5bf4c0d65668254d5c4b75fe26f20ac445df2da971fd4c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3107f1c2b4fb43da5bf4c0d65668254d5c4b75fe26f20ac445df2da971fd4c64->enter($__internal_3107f1c2b4fb43da5bf4c0d65668254d5c4b75fe26f20ac445df2da971fd4c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3107f1c2b4fb43da5bf4c0d65668254d5c4b75fe26f20ac445df2da971fd4c64->leave($__internal_3107f1c2b4fb43da5bf4c0d65668254d5c4b75fe26f20ac445df2da971fd4c64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
