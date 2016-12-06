<?php

/* security/login.html.twig */
class __TwigTemplate_e9379cbb03d6d55d9b2195bacbd694e1a1eb16ed5a2f09f0e4ac5dcf0b8176bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_82765717a9964d178fde5eae9ead97ccfb71250767bcce81d74bdfebe78a14e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82765717a9964d178fde5eae9ead97ccfb71250767bcce81d74bdfebe78a14e6->enter($__internal_82765717a9964d178fde5eae9ead97ccfb71250767bcce81d74bdfebe78a14e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82765717a9964d178fde5eae9ead97ccfb71250767bcce81d74bdfebe78a14e6->leave($__internal_82765717a9964d178fde5eae9ead97ccfb71250767bcce81d74bdfebe78a14e6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_de2ebc3bda97fb2751fe469b6e679f4fc3d74633c1a958273a091b73c0af25cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2ebc3bda97fb2751fe469b6e679f4fc3d74633c1a958273a091b73c0af25cc->enter($__internal_de2ebc3bda97fb2751fe469b6e679f4fc3d74633c1a958273a091b73c0af25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_de2ebc3bda97fb2751fe469b6e679f4fc3d74633c1a958273a091b73c0af25cc->leave($__internal_de2ebc3bda97fb2751fe469b6e679f4fc3d74633c1a958273a091b73c0af25cc_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
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
