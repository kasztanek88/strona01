<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_01bef754b97d55110b41c1685d2f3865d20294955e6f3cdcb6b0b12d9580482c extends Twig_Template
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
        $__internal_6b65e1f1e5e246aecd384c55ce5d50b83b920463c95ece8b4e79e596c7a989fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b65e1f1e5e246aecd384c55ce5d50b83b920463c95ece8b4e79e596c7a989fb->enter($__internal_6b65e1f1e5e246aecd384c55ce5d50b83b920463c95ece8b4e79e596c7a989fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6b65e1f1e5e246aecd384c55ce5d50b83b920463c95ece8b4e79e596c7a989fb->leave($__internal_6b65e1f1e5e246aecd384c55ce5d50b83b920463c95ece8b4e79e596c7a989fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
