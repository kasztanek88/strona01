<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_da8f2acc4f9ebf28fc2b0aea64f6dbfebc1454d26f92ee36f3c3a2b46b452de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcc4fd77d7b78ea7b9bfcfe00d6c3194424c2ac59adbd1999e1beca40eeaefee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc4fd77d7b78ea7b9bfcfe00d6c3194424c2ac59adbd1999e1beca40eeaefee->enter($__internal_fcc4fd77d7b78ea7b9bfcfe00d6c3194424c2ac59adbd1999e1beca40eeaefee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc4fd77d7b78ea7b9bfcfe00d6c3194424c2ac59adbd1999e1beca40eeaefee->leave($__internal_fcc4fd77d7b78ea7b9bfcfe00d6c3194424c2ac59adbd1999e1beca40eeaefee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3e58a9045e7c25d2ec890029cd02308e26f2cd2bee97d3ad943c6bf19d2a7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e58a9045e7c25d2ec890029cd02308e26f2cd2bee97d3ad943c6bf19d2a7e8->enter($__internal_f3e58a9045e7c25d2ec890029cd02308e26f2cd2bee97d3ad943c6bf19d2a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f3e58a9045e7c25d2ec890029cd02308e26f2cd2bee97d3ad943c6bf19d2a7e8->leave($__internal_f3e58a9045e7c25d2ec890029cd02308e26f2cd2bee97d3ad943c6bf19d2a7e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb29da3f9c9e6219235ee10708f072da60ba1b44cb61bbb0d56489aac1e26ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb29da3f9c9e6219235ee10708f072da60ba1b44cb61bbb0d56489aac1e26ed0->enter($__internal_eb29da3f9c9e6219235ee10708f072da60ba1b44cb61bbb0d56489aac1e26ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_eb29da3f9c9e6219235ee10708f072da60ba1b44cb61bbb0d56489aac1e26ed0->leave($__internal_eb29da3f9c9e6219235ee10708f072da60ba1b44cb61bbb0d56489aac1e26ed0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
