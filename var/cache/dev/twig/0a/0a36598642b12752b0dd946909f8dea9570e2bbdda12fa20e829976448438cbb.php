<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ffcc8b48aed6dcf092b5f649e4d1fa23c18bdb4ee54f6cc355522b05914df959 extends Twig_Template
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
        $__internal_79fc88acd073899e84526233662e4ee72da2902ad8cc3fc9efc0870873527e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fc88acd073899e84526233662e4ee72da2902ad8cc3fc9efc0870873527e17->enter($__internal_79fc88acd073899e84526233662e4ee72da2902ad8cc3fc9efc0870873527e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_79fc88acd073899e84526233662e4ee72da2902ad8cc3fc9efc0870873527e17->leave($__internal_79fc88acd073899e84526233662e4ee72da2902ad8cc3fc9efc0870873527e17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
