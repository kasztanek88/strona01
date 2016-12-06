<?php

/* :admin/users:edit.html.twig */
class __TwigTemplate_b5415d651b56f378299b8f22184c30c0d134638b4becb70f5105c923180d8105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/users:edit.html.twig", 1);
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
        $__internal_b6a831bb2307426b29f264cd6b36699bf8ac29a8df8d21d7c186d599f6447ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a831bb2307426b29f264cd6b36699bf8ac29a8df8d21d7c186d599f6447ea1->enter($__internal_b6a831bb2307426b29f264cd6b36699bf8ac29a8df8d21d7c186d599f6447ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/users:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a831bb2307426b29f264cd6b36699bf8ac29a8df8d21d7c186d599f6447ea1->leave($__internal_b6a831bb2307426b29f264cd6b36699bf8ac29a8df8d21d7c186d599f6447ea1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1181f47181f7d9ba37dc2ec402ee64a0420c710429d948d39b2114b5df5d2fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1181f47181f7d9ba37dc2ec402ee64a0420c710429d948d39b2114b5df5d2fcf->enter($__internal_1181f47181f7d9ba37dc2ec402ee64a0420c710429d948d39b2114b5df5d2fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_1181f47181f7d9ba37dc2ec402ee64a0420c710429d948d39b2114b5df5d2fcf->leave($__internal_1181f47181f7d9ba37dc2ec402ee64a0420c710429d948d39b2114b5df5d2fcf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_34e3cafea889c1bc9c0e510899f61e2092291f748cce033d5ff7c99ff27e42ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e3cafea889c1bc9c0e510899f61e2092291f748cce033d5ff7c99ff27e42ec->enter($__internal_34e3cafea889c1bc9c0e510899f61e2092291f748cce033d5ff7c99ff27e42ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34e3cafea889c1bc9c0e510899f61e2092291f748cce033d5ff7c99ff27e42ec->leave($__internal_34e3cafea889c1bc9c0e510899f61e2092291f748cce033d5ff7c99ff27e42ec_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_413d74075a1d4c03d130d0aa154c2afb63a84dc9816bbad5f9bb3574458d41d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413d74075a1d4c03d130d0aa154c2afb63a84dc9816bbad5f9bb3574458d41d9->enter($__internal_413d74075a1d4c03d130d0aa154c2afb63a84dc9816bbad5f9bb3574458d41d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_413d74075a1d4c03d130d0aa154c2afb63a84dc9816bbad5f9bb3574458d41d9->leave($__internal_413d74075a1d4c03d130d0aa154c2afb63a84dc9816bbad5f9bb3574458d41d9_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_643d9ba998f30fa508b0f8a8d8791d0d8e8d9306cfd4e8826f7b07af4b74eb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643d9ba998f30fa508b0f8a8d8791d0d8e8d9306cfd4e8826f7b07af4b74eb44->enter($__internal_643d9ba998f30fa508b0f8a8d8791d0d8e8d9306cfd4e8826f7b07af4b74eb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    
     <div class=\"container\" style=\"padding:50px;\">
        <div class=\"row uniform 50%\">
            <div class=\"6u 12u\$(4)\"\">
                <h1>Edit User</h1>
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
        
        $__internal_643d9ba998f30fa508b0f8a8d8791d0d8e8d9306cfd4e8826f7b07af4b74eb44->leave($__internal_643d9ba998f30fa508b0f8a8d8791d0d8e8d9306cfd4e8826f7b07af4b74eb44_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5dda6ddc88b5bc4150b3051d24b20e7c3f1ba2c7d592bff50658b4ed031bf0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dda6ddc88b5bc4150b3051d24b20e7c3f1ba2c7d592bff50658b4ed031bf0ed->enter($__internal_5dda6ddc88b5bc4150b3051d24b20e7c3f1ba2c7d592bff50658b4ed031bf0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_5dda6ddc88b5bc4150b3051d24b20e7c3f1ba2c7d592bff50658b4ed031bf0ed->leave($__internal_5dda6ddc88b5bc4150b3051d24b20e7c3f1ba2c7d592bff50658b4ed031bf0ed_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_419c6a1e6c4035f1d60f270ff10a30014ee83f2791a4b6b1897b30319ff799fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419c6a1e6c4035f1d60f270ff10a30014ee83f2791a4b6b1897b30319ff799fb->enter($__internal_419c6a1e6c4035f1d60f270ff10a30014ee83f2791a4b6b1897b30319ff799fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_419c6a1e6c4035f1d60f270ff10a30014ee83f2791a4b6b1897b30319ff799fb->leave($__internal_419c6a1e6c4035f1d60f270ff10a30014ee83f2791a4b6b1897b30319ff799fb_prof);

    }

    public function getTemplateName()
    {
        return ":admin/users:edit.html.twig";
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
                <h1>Edit User</h1>
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
