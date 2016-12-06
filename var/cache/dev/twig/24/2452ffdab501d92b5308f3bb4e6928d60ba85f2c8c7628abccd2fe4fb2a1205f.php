<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_eccd3be4043313e375347c0b303e9227fb0cad15d764231cd033bdaed980873d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_2de368361f9a801c2888cdada085d3b9d9076e0fe300eaffc68ee1d5cc2e7f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de368361f9a801c2888cdada085d3b9d9076e0fe300eaffc68ee1d5cc2e7f1e->enter($__internal_2de368361f9a801c2888cdada085d3b9d9076e0fe300eaffc68ee1d5cc2e7f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de368361f9a801c2888cdada085d3b9d9076e0fe300eaffc68ee1d5cc2e7f1e->leave($__internal_2de368361f9a801c2888cdada085d3b9d9076e0fe300eaffc68ee1d5cc2e7f1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90830f290db356daa05ab7160e0c04ec6bd10bc7a4d7f8a0e0ce0d1a3a1293a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90830f290db356daa05ab7160e0c04ec6bd10bc7a4d7f8a0e0ce0d1a3a1293a8->enter($__internal_90830f290db356daa05ab7160e0c04ec6bd10bc7a4d7f8a0e0ce0d1a3a1293a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_90830f290db356daa05ab7160e0c04ec6bd10bc7a4d7f8a0e0ce0d1a3a1293a8->leave($__internal_90830f290db356daa05ab7160e0c04ec6bd10bc7a4d7f8a0e0ce0d1a3a1293a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ffcb26820262248f1c37aa8b08427939857eeb27674d7aab167607944a28e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffcb26820262248f1c37aa8b08427939857eeb27674d7aab167607944a28e0f->enter($__internal_3ffcb26820262248f1c37aa8b08427939857eeb27674d7aab167607944a28e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ffcb26820262248f1c37aa8b08427939857eeb27674d7aab167607944a28e0f->leave($__internal_3ffcb26820262248f1c37aa8b08427939857eeb27674d7aab167607944a28e0f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
