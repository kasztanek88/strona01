<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3380bbf5afb5bb41ba9d36eaee2e55e1eda30753fee45e97e81a98a4d3cfc1a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_9773ef501596525ea0eaca60c329de53a5162070c1b59264e7bd9ec59e9a7920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9773ef501596525ea0eaca60c329de53a5162070c1b59264e7bd9ec59e9a7920->enter($__internal_9773ef501596525ea0eaca60c329de53a5162070c1b59264e7bd9ec59e9a7920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9773ef501596525ea0eaca60c329de53a5162070c1b59264e7bd9ec59e9a7920->leave($__internal_9773ef501596525ea0eaca60c329de53a5162070c1b59264e7bd9ec59e9a7920_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f58e58b433f996c4dac4c22d34f6620c91f1bcad10790f164d8073d1e83f8497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58e58b433f996c4dac4c22d34f6620c91f1bcad10790f164d8073d1e83f8497->enter($__internal_f58e58b433f996c4dac4c22d34f6620c91f1bcad10790f164d8073d1e83f8497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f58e58b433f996c4dac4c22d34f6620c91f1bcad10790f164d8073d1e83f8497->leave($__internal_f58e58b433f996c4dac4c22d34f6620c91f1bcad10790f164d8073d1e83f8497_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98ebe134dfbb1aea01a093952167ceeba4f9516012dcc7223a63e09d7cf742e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ebe134dfbb1aea01a093952167ceeba4f9516012dcc7223a63e09d7cf742e5->enter($__internal_98ebe134dfbb1aea01a093952167ceeba4f9516012dcc7223a63e09d7cf742e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_98ebe134dfbb1aea01a093952167ceeba4f9516012dcc7223a63e09d7cf742e5->leave($__internal_98ebe134dfbb1aea01a093952167ceeba4f9516012dcc7223a63e09d7cf742e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21ac11cb72523c1ead636f80b8996fddb52e0c352db8cf9d44e5055fc2fc7795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ac11cb72523c1ead636f80b8996fddb52e0c352db8cf9d44e5055fc2fc7795->enter($__internal_21ac11cb72523c1ead636f80b8996fddb52e0c352db8cf9d44e5055fc2fc7795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_21ac11cb72523c1ead636f80b8996fddb52e0c352db8cf9d44e5055fc2fc7795->leave($__internal_21ac11cb72523c1ead636f80b8996fddb52e0c352db8cf9d44e5055fc2fc7795_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
