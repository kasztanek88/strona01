<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_616fb2f4f410d711ee8618748fd68a201ad9b69714585f8ddb2c8c1cf144a401 extends Twig_Template
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
        $__internal_83edd79ca3dec5649700c47644d367cc887dec5b9affaa2436c606be158abdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83edd79ca3dec5649700c47644d367cc887dec5b9affaa2436c606be158abdd8->enter($__internal_83edd79ca3dec5649700c47644d367cc887dec5b9affaa2436c606be158abdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_83edd79ca3dec5649700c47644d367cc887dec5b9affaa2436c606be158abdd8->leave($__internal_83edd79ca3dec5649700c47644d367cc887dec5b9affaa2436c606be158abdd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
