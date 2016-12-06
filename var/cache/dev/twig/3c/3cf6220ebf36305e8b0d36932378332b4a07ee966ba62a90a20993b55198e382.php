<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cb9f94158e53b1d56f3f8ff4ccba1d56b871e5b1624eebdb49cc77c3b46ab516 extends Twig_Template
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
        $__internal_162c0c8a57aa7779f4a6910eb54743b0b69cee269788dae39dbfcc18727295fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162c0c8a57aa7779f4a6910eb54743b0b69cee269788dae39dbfcc18727295fe->enter($__internal_162c0c8a57aa7779f4a6910eb54743b0b69cee269788dae39dbfcc18727295fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_162c0c8a57aa7779f4a6910eb54743b0b69cee269788dae39dbfcc18727295fe->leave($__internal_162c0c8a57aa7779f4a6910eb54743b0b69cee269788dae39dbfcc18727295fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
