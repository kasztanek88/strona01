<?php

/* :admin/users:new.html.twig */
class __TwigTemplate_c7925389634f4ceca2b60c87d7ba9c39c0b4b9dd426c85daf53d7c0ccd25f2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/users:new.html.twig", 1);
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
        $__internal_fb37c89e7a4264eb514765737bb41c5fc1aca7014e8e1d4a26f56994452057c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb37c89e7a4264eb514765737bb41c5fc1aca7014e8e1d4a26f56994452057c1->enter($__internal_fb37c89e7a4264eb514765737bb41c5fc1aca7014e8e1d4a26f56994452057c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/users:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb37c89e7a4264eb514765737bb41c5fc1aca7014e8e1d4a26f56994452057c1->leave($__internal_fb37c89e7a4264eb514765737bb41c5fc1aca7014e8e1d4a26f56994452057c1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_242b6756a3e7f4b007f4a8721b92950cea7ad58847438f89894f8e79ffea58eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242b6756a3e7f4b007f4a8721b92950cea7ad58847438f89894f8e79ffea58eb->enter($__internal_242b6756a3e7f4b007f4a8721b92950cea7ad58847438f89894f8e79ffea58eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_242b6756a3e7f4b007f4a8721b92950cea7ad58847438f89894f8e79ffea58eb->leave($__internal_242b6756a3e7f4b007f4a8721b92950cea7ad58847438f89894f8e79ffea58eb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e79434a14a6e6244ee12817641c3906f0fccb4b9fdff17b913cf048f2d69b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e79434a14a6e6244ee12817641c3906f0fccb4b9fdff17b913cf048f2d69b55->enter($__internal_8e79434a14a6e6244ee12817641c3906f0fccb4b9fdff17b913cf048f2d69b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e79434a14a6e6244ee12817641c3906f0fccb4b9fdff17b913cf048f2d69b55->leave($__internal_8e79434a14a6e6244ee12817641c3906f0fccb4b9fdff17b913cf048f2d69b55_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_7a21e213ef99e43d3e3d32bd67505d4a9ba7083a0eb0c721b8a2bc792afdf934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a21e213ef99e43d3e3d32bd67505d4a9ba7083a0eb0c721b8a2bc792afdf934->enter($__internal_7a21e213ef99e43d3e3d32bd67505d4a9ba7083a0eb0c721b8a2bc792afdf934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_7a21e213ef99e43d3e3d32bd67505d4a9ba7083a0eb0c721b8a2bc792afdf934->leave($__internal_7a21e213ef99e43d3e3d32bd67505d4a9ba7083a0eb0c721b8a2bc792afdf934_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffbcf0eaddc096e3ee064e9839b4d5ff774b7825d99cf0e33eaf90f2af5f7cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbcf0eaddc096e3ee064e9839b4d5ff774b7825d99cf0e33eaf90f2af5f7cfd->enter($__internal_ffbcf0eaddc096e3ee064e9839b4d5ff774b7825d99cf0e33eaf90f2af5f7cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ffbcf0eaddc096e3ee064e9839b4d5ff774b7825d99cf0e33eaf90f2af5f7cfd->leave($__internal_ffbcf0eaddc096e3ee064e9839b4d5ff774b7825d99cf0e33eaf90f2af5f7cfd_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0e62ef4d96cebe6fc535cc2fd7ae5f4607723e187d2cc20ad3c884f4e9b0e6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e62ef4d96cebe6fc535cc2fd7ae5f4607723e187d2cc20ad3c884f4e9b0e6d4->enter($__internal_0e62ef4d96cebe6fc535cc2fd7ae5f4607723e187d2cc20ad3c884f4e9b0e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_0e62ef4d96cebe6fc535cc2fd7ae5f4607723e187d2cc20ad3c884f4e9b0e6d4->leave($__internal_0e62ef4d96cebe6fc535cc2fd7ae5f4607723e187d2cc20ad3c884f4e9b0e6d4_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8d75a3201c9aa718f8a6da399a02583bab4894af02d5471332becbdf1976ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d75a3201c9aa718f8a6da399a02583bab4894af02d5471332becbdf1976ab9->enter($__internal_e8d75a3201c9aa718f8a6da399a02583bab4894af02d5471332becbdf1976ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e8d75a3201c9aa718f8a6da399a02583bab4894af02d5471332becbdf1976ab9->leave($__internal_e8d75a3201c9aa718f8a6da399a02583bab4894af02d5471332becbdf1976ab9_prof);

    }

    public function getTemplateName()
    {
        return ":admin/users:new.html.twig";
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
