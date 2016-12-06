<?php

/* :user:register.html.twig */
class __TwigTemplate_ea1a73d2ce30587d3979403b3128f5236443e83ac7db9f643152fd381b5ec2bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:register.html.twig", 1);
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
        $__internal_b15327fb04ade494b9fb8af6f38d79e915f4024eaf8a963014222f2323977e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15327fb04ade494b9fb8af6f38d79e915f4024eaf8a963014222f2323977e85->enter($__internal_b15327fb04ade494b9fb8af6f38d79e915f4024eaf8a963014222f2323977e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b15327fb04ade494b9fb8af6f38d79e915f4024eaf8a963014222f2323977e85->leave($__internal_b15327fb04ade494b9fb8af6f38d79e915f4024eaf8a963014222f2323977e85_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_af7522108df11cb072ba66477d0060ce60da4dae6ed0a698a1d01534ae8f1bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7522108df11cb072ba66477d0060ce60da4dae6ed0a698a1d01534ae8f1bfb->enter($__internal_af7522108df11cb072ba66477d0060ce60da4dae6ed0a698a1d01534ae8f1bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div style=\"padding:15px;\">
    <h1>Register!</h1>
     ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("label" => "Password"));
        echo "
                    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("label" => "Repeat"));
        echo "
                    <button type=\"submit\"  formnovalidate>Register</button>
     ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_af7522108df11cb072ba66477d0060ce60da4dae6ed0a698a1d01534ae8f1bfb->leave($__internal_af7522108df11cb072ba66477d0060ce60da4dae6ed0a698a1d01534ae8f1bfb_prof);

    }

    public function getTemplateName()
    {
        return ":user:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block content %}
    <div style=\"padding:15px;\">
    <h1>Register!</h1>
     {{ form_start(form) }}
                    {{ form_row(form.email) }}
                    {{ form_row(form.plainPassword.first, {'label' : 'Password' }) }}
                    {{ form_row(form.plainPassword.second, {'label' : 'Repeat' }) }}
                    <button type=\"submit\"  formnovalidate>Register</button>
     {{ form_end(form) }}
    </div>
{% endblock %}";
    }
}
