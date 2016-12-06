<?php

/* :security:login.html.twig */
class __TwigTemplate_2853a440382406a72adde7f3152bd3d9f96cc401b7524fc80f9f3548e90ef1e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff18d4403e9c3fa0e7948bb8aa741881c0dc836e395d3261fcb48d096935098e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff18d4403e9c3fa0e7948bb8aa741881c0dc836e395d3261fcb48d096935098e->enter($__internal_ff18d4403e9c3fa0e7948bb8aa741881c0dc836e395d3261fcb48d096935098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff18d4403e9c3fa0e7948bb8aa741881c0dc836e395d3261fcb48d096935098e->leave($__internal_ff18d4403e9c3fa0e7948bb8aa741881c0dc836e395d3261fcb48d096935098e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_09ec79efaf356cc175ee0b35be53cf52ebf8706a4e405df0ddc0358d5844fd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ec79efaf356cc175ee0b35be53cf52ebf8706a4e405df0ddc0358d5844fd1c->enter($__internal_09ec79efaf356cc175ee0b35be53cf52ebf8706a4e405df0ddc0358d5844fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\" style=\"padding:15px;\">
        <div class=\"col-xs-12\" >
            <h1>Login!</h1>

            ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 14
        echo "
            ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
                <button type=\"submit\" class=\"btn btn-success\">Login <span class=\"fa fa-lock\"></span></button>
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                 <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\"><h2> I dont have account. Please take me to registration form </h2></a>
        </div>
       
    </div>
</div>
";
        
        $__internal_09ec79efaf356cc175ee0b35be53cf52ebf8706a4e405df0ddc0358d5844fd1c->leave($__internal_09ec79efaf356cc175ee0b35be53cf52ebf8706a4e405df0ddc0358d5844fd1c_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  74 => 19,  69 => 17,  65 => 16,  61 => 15,  58 => 14,  52 => 11,  49 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block content %}
<div class=\"container\">
    <div class=\"row\" style=\"padding:15px;\">
        <div class=\"col-xs-12\" >
            <h1>Login!</h1>

            {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {{ form_start(form) }}
                {{ form_row(form._username) }}
                {{ form_row(form._password) }}
                <button type=\"submit\" class=\"btn btn-success\">Login <span class=\"fa fa-lock\"></span></button>
            {{ form_end(form) }}
                 <a href=\"{{path('user_register')}}\"><h2> I dont have account. Please take me to registration form </h2></a>
        </div>
       
    </div>
</div>
{% endblock %}

";
    }
}
