<?php

/* admin/users/new.html.twig */
class __TwigTemplate_2408ba8a66ea88cd42593f637bef11cce396af1ea47cc4cae3ac030be0e3e244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d6914d8b844a34cec8fe0226f5f23466a0de13dfad15794a4dede3c1c484b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6914d8b844a34cec8fe0226f5f23466a0de13dfad15794a4dede3c1c484b4c->enter($__internal_0d6914d8b844a34cec8fe0226f5f23466a0de13dfad15794a4dede3c1c484b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6914d8b844a34cec8fe0226f5f23466a0de13dfad15794a4dede3c1c484b4c->leave($__internal_0d6914d8b844a34cec8fe0226f5f23466a0de13dfad15794a4dede3c1c484b4c_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd58e3544c39314e09292eb78c509bb967bcea7560dceacef7c262c1bc5f1b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd58e3544c39314e09292eb78c509bb967bcea7560dceacef7c262c1bc5f1b96->enter($__internal_dd58e3544c39314e09292eb78c509bb967bcea7560dceacef7c262c1bc5f1b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_dd58e3544c39314e09292eb78c509bb967bcea7560dceacef7c262c1bc5f1b96->leave($__internal_dd58e3544c39314e09292eb78c509bb967bcea7560dceacef7c262c1bc5f1b96_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d31564ef7baef9cc7bf83772c6d6693acea675af116e12772fb271066272ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d31564ef7baef9cc7bf83772c6d6693acea675af116e12772fb271066272ea2->enter($__internal_9d31564ef7baef9cc7bf83772c6d6693acea675af116e12772fb271066272ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
";
        
        $__internal_9d31564ef7baef9cc7bf83772c6d6693acea675af116e12772fb271066272ea2->leave($__internal_9d31564ef7baef9cc7bf83772c6d6693acea675af116e12772fb271066272ea2_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_5c79cdd4819e4a06d235f91ecba8055e48300c6af304597ef0d9b1df93a3a700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c79cdd4819e4a06d235f91ecba8055e48300c6af304597ef0d9b1df93a3a700->enter($__internal_5c79cdd4819e4a06d235f91ecba8055e48300c6af304597ef0d9b1df93a3a700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_5c79cdd4819e4a06d235f91ecba8055e48300c6af304597ef0d9b1df93a3a700->leave($__internal_5c79cdd4819e4a06d235f91ecba8055e48300c6af304597ef0d9b1df93a3a700_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_961fda7a9267cd267960218836ff58d3dd1772bc88943ccb3e5c89453d17d819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961fda7a9267cd267960218836ff58d3dd1772bc88943ccb3e5c89453d17d819->enter($__internal_961fda7a9267cd267960218836ff58d3dd1772bc88943ccb3e5c89453d17d819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    
     <div class=\"container\" style=\"padding:50px;\">
        <div class=\"row uniform 50%\">
            <div class=\"6u 12u\$(4)\"\">
                <h1>New Genus</h1>
                ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_start');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "name", array()), 'row');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "sname", array()), 'row', array("label" => "Surname"));
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "info", array()), 'row');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "email", array()), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "UsersFacts", array()), 'row');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "UsersType", array()), 'row');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "hasFact", array()), 'row');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "image", array()), 'row');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "date", array()), 'row');
        echo "
                    <button type=\"submit\" class=\"button\" formnovalidate>Save</button>
                ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_961fda7a9267cd267960218836ff58d3dd1772bc88943ccb3e5c89453d17d819->leave($__internal_961fda7a9267cd267960218836ff58d3dd1772bc88943ccb3e5c89453d17d819_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3305184e64564a6e67cd6a633b134986fd56ad1e7fcbd81ddab1551c38feffbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3305184e64564a6e67cd6a633b134986fd56ad1e7fcbd81ddab1551c38feffbc->enter($__internal_3305184e64564a6e67cd6a633b134986fd56ad1e7fcbd81ddab1551c38feffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_3305184e64564a6e67cd6a633b134986fd56ad1e7fcbd81ddab1551c38feffbc->leave($__internal_3305184e64564a6e67cd6a633b134986fd56ad1e7fcbd81ddab1551c38feffbc_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d074e74bb3ffe8b8a67f8866b1a4b7bce94f553e79d0eabb3960667cc87733e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d074e74bb3ffe8b8a67f8866b1a4b7bce94f553e79d0eabb3960667cc87733e->enter($__internal_6d074e74bb3ffe8b8a67f8866b1a4b7bce94f553e79d0eabb3960667cc87733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
        jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker();
        });
    </script>
";
        
        $__internal_6d074e74bb3ffe8b8a67f8866b1a4b7bce94f553e79d0eabb3960667cc87733e->leave($__internal_6d074e74bb3ffe8b8a67f8866b1a4b7bce94f553e79d0eabb3960667cc87733e_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 43,  188 => 42,  178 => 39,  175 => 38,  169 => 37,  157 => 31,  152 => 29,  148 => 28,  144 => 27,  140 => 26,  136 => 25,  132 => 24,  128 => 23,  124 => 22,  120 => 21,  116 => 20,  103 => 14,  93 => 10,  90 => 9,  84 => 8,  76 => 51,  74 => 42,  72 => 37,  69 => 36,  67 => 14,  64 => 13,  62 => 8,  56 => 7,  45 => 3,  39 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
{% block header %}

    {{include('generic/page_menu.html.twig')}}
    
{% endblock %}

{% block content %} 
    
     <div class=\"container\" style=\"padding:50px;\">
        <div class=\"row uniform 50%\">
            <div class=\"6u 12u\$(4)\"\">
                <h1>New Genus</h1>
                {{ form_start(userForm) }}
                    {{ form_row(userForm.name) }}
                    {{ form_row(userForm.sname, {'label' : 'Surname'}) }}
                    {{ form_row(userForm.info) }}
                    {{ form_row(userForm.email) }}
                    {{ form_row(userForm.UsersFacts) }}
                    {{ form_row(userForm.UsersType) }}
                    {{ form_row(userForm.hasFact) }}
                    {{ form_row(userForm.image) }}
                    {{ form_row(userForm.date) }}
                    <button type=\"submit\" class=\"button\" formnovalidate>Save</button>
                {{ form_end(userForm) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}

    {{include('generic/footer_page.html.twig')}}
    
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>
    <script>
        jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker();
        });
    </script>
{% endblock %}

{% endblock %}

";
    }
}
