<?php

/* admin/users/panel.html.twig */
class __TwigTemplate_359574e5370cc28de760f4a7a4e6a1abf44193a85b58a8bc5b36e89345260828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/panel.html.twig", 1);
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
        $__internal_9ebc4d56fb0c734362ccab1cf1bb9045b73e5113d80f7f7dd5d1a070de70860a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebc4d56fb0c734362ccab1cf1bb9045b73e5113d80f7f7dd5d1a070de70860a->enter($__internal_9ebc4d56fb0c734362ccab1cf1bb9045b73e5113d80f7f7dd5d1a070de70860a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/panel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ebc4d56fb0c734362ccab1cf1bb9045b73e5113d80f7f7dd5d1a070de70860a->leave($__internal_9ebc4d56fb0c734362ccab1cf1bb9045b73e5113d80f7f7dd5d1a070de70860a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_aa976085636590e5e9cbf156ba9fbb5f453aa9720e1466a68a1ade4fbb2e424d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa976085636590e5e9cbf156ba9fbb5f453aa9720e1466a68a1ade4fbb2e424d->enter($__internal_aa976085636590e5e9cbf156ba9fbb5f453aa9720e1466a68a1ade4fbb2e424d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_aa976085636590e5e9cbf156ba9fbb5f453aa9720e1466a68a1ade4fbb2e424d->leave($__internal_aa976085636590e5e9cbf156ba9fbb5f453aa9720e1466a68a1ade4fbb2e424d_prof);

    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        $__internal_eea4de9b6d1ad189473d7ee396098aad1edd6b94566ef534e777136b423f872e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea4de9b6d1ad189473d7ee396098aad1edd6b94566ef534e777136b423f872e->enter($__internal_eea4de9b6d1ad189473d7ee396098aad1edd6b94566ef534e777136b423f872e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_eea4de9b6d1ad189473d7ee396098aad1edd6b94566ef534e777136b423f872e->leave($__internal_eea4de9b6d1ad189473d7ee396098aad1edd6b94566ef534e777136b423f872e_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/panel.html.twig";
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
