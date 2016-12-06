<?php

/* :admin/users:panel.html.twig */
class __TwigTemplate_09b6e154685e324ae7bc286eb04cb706b3dd44a2506be031c210d3738815c72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/users:panel.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_776eafb7386b33fd805d5e02c787a7013caeeed6828cfa28e5d4c41842f158de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776eafb7386b33fd805d5e02c787a7013caeeed6828cfa28e5d4c41842f158de->enter($__internal_776eafb7386b33fd805d5e02c787a7013caeeed6828cfa28e5d4c41842f158de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/users:panel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776eafb7386b33fd805d5e02c787a7013caeeed6828cfa28e5d4c41842f158de->leave($__internal_776eafb7386b33fd805d5e02c787a7013caeeed6828cfa28e5d4c41842f158de_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b8e2f9b9c026dbbf0e314341843fdf6c387cf438490a321e56693934ab4237a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8e2f9b9c026dbbf0e314341843fdf6c387cf438490a321e56693934ab4237a->enter($__internal_9b8e2f9b9c026dbbf0e314341843fdf6c387cf438490a321e56693934ab4237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <section id=\"one\" class=\"wrapper style1 special\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_new");
        echo "\"><i class=\"fa fa-car\" style=\"font-size:48px;color:blueviolet;\"></i></a>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_list");
        echo "\"> <i class=\"fa fa-cloud\" style=\"font-size:48px;color:red;\"></i>
        
    </section>
    
";
        
        $__internal_9b8e2f9b9c026dbbf0e314341843fdf6c387cf438490a321e56693934ab4237a->leave($__internal_9b8e2f9b9c026dbbf0e314341843fdf6c387cf438490a321e56693934ab4237a_prof);

    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a09e2b1b09dc5947530dfa62e9ad6f811556c58bfbb15503f196880a5ea4416f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09e2b1b09dc5947530dfa62e9ad6f811556c58bfbb15503f196880a5ea4416f->enter($__internal_a09e2b1b09dc5947530dfa62e9ad6f811556c58bfbb15503f196880a5ea4416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a09e2b1b09dc5947530dfa62e9ad6f811556c58bfbb15503f196880a5ea4416f->leave($__internal_a09e2b1b09dc5947530dfa62e9ad6f811556c58bfbb15503f196880a5ea4416f_prof);

    }

    public function getTemplateName()
    {
        return ":admin/users:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block content %}
    <section id=\"one\" class=\"wrapper style1 special\">
        <a href=\"{{path('admin_users_new')}}\"><i class=\"fa fa-car\" style=\"font-size:48px;color:blueviolet;\"></i></a>
        <a href=\"{{path('admin_users_list')}}\"> <i class=\"fa fa-cloud\" style=\"font-size:48px;color:red;\"></i>
        
    </section>
    
{% endblock %}

{% block footer %}
{% endblock %}
";
    }
}
