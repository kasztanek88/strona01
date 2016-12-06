<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_deb656bf4311c6b8257df3ddfec4009b19445bd27d03b9a678d10dc32805e2a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6f505f666a6dba6fcde3227d6bbd005e030c4cbb99ba0093813f1c3e2212d8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f505f666a6dba6fcde3227d6bbd005e030c4cbb99ba0093813f1c3e2212d8b7->enter($__internal_6f505f666a6dba6fcde3227d6bbd005e030c4cbb99ba0093813f1c3e2212d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f505f666a6dba6fcde3227d6bbd005e030c4cbb99ba0093813f1c3e2212d8b7->leave($__internal_6f505f666a6dba6fcde3227d6bbd005e030c4cbb99ba0093813f1c3e2212d8b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b140c8aa3820c9f9be5ebf69a19d31c7493c445b85bf7072af9994a2330bfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b140c8aa3820c9f9be5ebf69a19d31c7493c445b85bf7072af9994a2330bfe8->enter($__internal_4b140c8aa3820c9f9be5ebf69a19d31c7493c445b85bf7072af9994a2330bfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b140c8aa3820c9f9be5ebf69a19d31c7493c445b85bf7072af9994a2330bfe8->leave($__internal_4b140c8aa3820c9f9be5ebf69a19d31c7493c445b85bf7072af9994a2330bfe8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f96d6deaf52a939a059ad09a0d52d27b2d8af6079c7bd6231357d339fb814429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96d6deaf52a939a059ad09a0d52d27b2d8af6079c7bd6231357d339fb814429->enter($__internal_f96d6deaf52a939a059ad09a0d52d27b2d8af6079c7bd6231357d339fb814429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f96d6deaf52a939a059ad09a0d52d27b2d8af6079c7bd6231357d339fb814429->leave($__internal_f96d6deaf52a939a059ad09a0d52d27b2d8af6079c7bd6231357d339fb814429_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a97fdbf977c6a0dc3492b446b9bf734500dbffebb74401e35fbba77bd804ad1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97fdbf977c6a0dc3492b446b9bf734500dbffebb74401e35fbba77bd804ad1b->enter($__internal_a97fdbf977c6a0dc3492b446b9bf734500dbffebb74401e35fbba77bd804ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a97fdbf977c6a0dc3492b446b9bf734500dbffebb74401e35fbba77bd804ad1b->leave($__internal_a97fdbf977c6a0dc3492b446b9bf734500dbffebb74401e35fbba77bd804ad1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
