<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5c068e518f0edc0acc303bc75d878390a628db6148131cbc95793b9a91964dfa extends Twig_Template
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
        $__internal_cece55a65b522f45328a2169a2c098b18bcff2a881f7fded6d7b6710f46bd374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cece55a65b522f45328a2169a2c098b18bcff2a881f7fded6d7b6710f46bd374->enter($__internal_cece55a65b522f45328a2169a2c098b18bcff2a881f7fded6d7b6710f46bd374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cece55a65b522f45328a2169a2c098b18bcff2a881f7fded6d7b6710f46bd374->leave($__internal_cece55a65b522f45328a2169a2c098b18bcff2a881f7fded6d7b6710f46bd374_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
