<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7e8d2a36decff1a21abf2d6097594a8286141d8bc4db23a9501126a2f425dd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e25552ff45ff9b0d56b58b67389a7cffd8865263f0d466189eff20786ab86413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25552ff45ff9b0d56b58b67389a7cffd8865263f0d466189eff20786ab86413->enter($__internal_e25552ff45ff9b0d56b58b67389a7cffd8865263f0d466189eff20786ab86413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25552ff45ff9b0d56b58b67389a7cffd8865263f0d466189eff20786ab86413->leave($__internal_e25552ff45ff9b0d56b58b67389a7cffd8865263f0d466189eff20786ab86413_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a17edfc3bfa452ff209d1a4b88dbcb89c340a0f2c2ef5e8f2b8fe932da2871a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a17edfc3bfa452ff209d1a4b88dbcb89c340a0f2c2ef5e8f2b8fe932da2871a->enter($__internal_9a17edfc3bfa452ff209d1a4b88dbcb89c340a0f2c2ef5e8f2b8fe932da2871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9a17edfc3bfa452ff209d1a4b88dbcb89c340a0f2c2ef5e8f2b8fe932da2871a->leave($__internal_9a17edfc3bfa452ff209d1a4b88dbcb89c340a0f2c2ef5e8f2b8fe932da2871a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_743b9eb5e4fef9a54da00333b46a57049c7d0426f700ed17628a8f1bdd9ba16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b9eb5e4fef9a54da00333b46a57049c7d0426f700ed17628a8f1bdd9ba16e->enter($__internal_743b9eb5e4fef9a54da00333b46a57049c7d0426f700ed17628a8f1bdd9ba16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_743b9eb5e4fef9a54da00333b46a57049c7d0426f700ed17628a8f1bdd9ba16e->leave($__internal_743b9eb5e4fef9a54da00333b46a57049c7d0426f700ed17628a8f1bdd9ba16e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75291e4b7f1b7a749ca1a8234de949bf26af844bfb182ee42f0ff9c7b8d34d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75291e4b7f1b7a749ca1a8234de949bf26af844bfb182ee42f0ff9c7b8d34d8d->enter($__internal_75291e4b7f1b7a749ca1a8234de949bf26af844bfb182ee42f0ff9c7b8d34d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_75291e4b7f1b7a749ca1a8234de949bf26af844bfb182ee42f0ff9c7b8d34d8d->leave($__internal_75291e4b7f1b7a749ca1a8234de949bf26af844bfb182ee42f0ff9c7b8d34d8d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
