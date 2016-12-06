<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3c8da0b8478bb9e0482e825c6f39fce7163d018cd567cc674b9a2977b3b96840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3eadd161a88de966f046b451a165d2d2a6335bbc5c78ea4c535a429be1bb478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eadd161a88de966f046b451a165d2d2a6335bbc5c78ea4c535a429be1bb478a->enter($__internal_3eadd161a88de966f046b451a165d2d2a6335bbc5c78ea4c535a429be1bb478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eadd161a88de966f046b451a165d2d2a6335bbc5c78ea4c535a429be1bb478a->leave($__internal_3eadd161a88de966f046b451a165d2d2a6335bbc5c78ea4c535a429be1bb478a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6124fbe2c1631a8ef40fa2acc159d10f0aef69f337be622abb2cf660e73b67ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6124fbe2c1631a8ef40fa2acc159d10f0aef69f337be622abb2cf660e73b67ec->enter($__internal_6124fbe2c1631a8ef40fa2acc159d10f0aef69f337be622abb2cf660e73b67ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6124fbe2c1631a8ef40fa2acc159d10f0aef69f337be622abb2cf660e73b67ec->leave($__internal_6124fbe2c1631a8ef40fa2acc159d10f0aef69f337be622abb2cf660e73b67ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcea50ad688885229bb858f547e85f3865e64204e897145edc71aebe59839dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcea50ad688885229bb858f547e85f3865e64204e897145edc71aebe59839dab->enter($__internal_fcea50ad688885229bb858f547e85f3865e64204e897145edc71aebe59839dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fcea50ad688885229bb858f547e85f3865e64204e897145edc71aebe59839dab->leave($__internal_fcea50ad688885229bb858f547e85f3865e64204e897145edc71aebe59839dab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96e5133e16fa37174c2501b0767c7704992387888da30a5ec8ac5f104939e637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e5133e16fa37174c2501b0767c7704992387888da30a5ec8ac5f104939e637->enter($__internal_96e5133e16fa37174c2501b0767c7704992387888da30a5ec8ac5f104939e637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96e5133e16fa37174c2501b0767c7704992387888da30a5ec8ac5f104939e637->leave($__internal_96e5133e16fa37174c2501b0767c7704992387888da30a5ec8ac5f104939e637_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
