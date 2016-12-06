<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_512396d293fee7b4ae7ddcb292b03442939fc7e19e1e382adcd84530b733eeb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_03997d3b6476fd896c7a3f30600d7eaebad5264345ff2ccf0864f690eb0ece11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03997d3b6476fd896c7a3f30600d7eaebad5264345ff2ccf0864f690eb0ece11->enter($__internal_03997d3b6476fd896c7a3f30600d7eaebad5264345ff2ccf0864f690eb0ece11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03997d3b6476fd896c7a3f30600d7eaebad5264345ff2ccf0864f690eb0ece11->leave($__internal_03997d3b6476fd896c7a3f30600d7eaebad5264345ff2ccf0864f690eb0ece11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b225f046c199b604c807c5951c0eada1b460fd80eefcf9c68003eef8179a1110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b225f046c199b604c807c5951c0eada1b460fd80eefcf9c68003eef8179a1110->enter($__internal_b225f046c199b604c807c5951c0eada1b460fd80eefcf9c68003eef8179a1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b225f046c199b604c807c5951c0eada1b460fd80eefcf9c68003eef8179a1110->leave($__internal_b225f046c199b604c807c5951c0eada1b460fd80eefcf9c68003eef8179a1110_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_435459bd266193e939694ccedeb2880cf99689e96eb0781c3e71bf0dbc0f7b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435459bd266193e939694ccedeb2880cf99689e96eb0781c3e71bf0dbc0f7b71->enter($__internal_435459bd266193e939694ccedeb2880cf99689e96eb0781c3e71bf0dbc0f7b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_435459bd266193e939694ccedeb2880cf99689e96eb0781c3e71bf0dbc0f7b71->leave($__internal_435459bd266193e939694ccedeb2880cf99689e96eb0781c3e71bf0dbc0f7b71_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46bff1983e6805b56f46c568471f4d7be7e3a7f80e4a4d31f907ebc7a1f83e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bff1983e6805b56f46c568471f4d7be7e3a7f80e4a4d31f907ebc7a1f83e3f->enter($__internal_46bff1983e6805b56f46c568471f4d7be7e3a7f80e4a4d31f907ebc7a1f83e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_46bff1983e6805b56f46c568471f4d7be7e3a7f80e4a4d31f907ebc7a1f83e3f->leave($__internal_46bff1983e6805b56f46c568471f4d7be7e3a7f80e4a4d31f907ebc7a1f83e3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
