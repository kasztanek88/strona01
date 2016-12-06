<?php

/* :admin/users:test.html.twig */
class __TwigTemplate_907846a165ee355c7fcf40daa0e0cf36abeed305b570ba5baacfa195ccdf3418 extends Twig_Template
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
        $__internal_c31f6ab3d31d3d9eae7677a40ef4c295244e08dd8aad52d5899ec44fa92fe466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31f6ab3d31d3d9eae7677a40ef4c295244e08dd8aad52d5899ec44fa92fe466->enter($__internal_c31f6ab3d31d3d9eae7677a40ef4c295244e08dd8aad52d5899ec44fa92fe466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/users:test.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), 0, array()), "image", array()), "html", null, true);
        echo "

<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), 0, array()), "image", array())), "html", null, true);
        echo "\">";
        
        $__internal_c31f6ab3d31d3d9eae7677a40ef4c295244e08dd8aad52d5899ec44fa92fe466->leave($__internal_c31f6ab3d31d3d9eae7677a40ef4c295244e08dd8aad52d5899ec44fa92fe466_prof);

    }

    public function getTemplateName()
    {
        return ":admin/users:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
{{users.0.image}}

<img src=\"{{ asset(users.0.image) }}\">";
    }
}
