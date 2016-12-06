<?php

/* admin/users/edit.html.twig */
class __TwigTemplate_1cb267a2932d08d4a177b6a9e721f1ecde1ec27366e56b3bdd0aec9bcf2bf060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/edit.html.twig", 1);
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
        $__internal_af3b23f124604bc19248c6c5ffb47f4d0ab9c2c4d09d7cf552b52c2d73a8820f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3b23f124604bc19248c6c5ffb47f4d0ab9c2c4d09d7cf552b52c2d73a8820f->enter($__internal_af3b23f124604bc19248c6c5ffb47f4d0ab9c2c4d09d7cf552b52c2d73a8820f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3b23f124604bc19248c6c5ffb47f4d0ab9c2c4d09d7cf552b52c2d73a8820f->leave($__internal_af3b23f124604bc19248c6c5ffb47f4d0ab9c2c4d09d7cf552b52c2d73a8820f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8617b38b58a28f18587d4b4017261750fd3616aaefbb49a923c7faedf000381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8617b38b58a28f18587d4b4017261750fd3616aaefbb49a923c7faedf000381->enter($__internal_b8617b38b58a28f18587d4b4017261750fd3616aaefbb49a923c7faedf000381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_b8617b38b58a28f18587d4b4017261750fd3616aaefbb49a923c7faedf000381->leave($__internal_b8617b38b58a28f18587d4b4017261750fd3616aaefbb49a923c7faedf000381_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_becaa85993536e0ac914adefa5f35d791425eb968997552fa202af59437dd3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becaa85993536e0ac914adefa5f35d791425eb968997552fa202af59437dd3b3->enter($__internal_becaa85993536e0ac914adefa5f35d791425eb968997552fa202af59437dd3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_becaa85993536e0ac914adefa5f35d791425eb968997552fa202af59437dd3b3->leave($__internal_becaa85993536e0ac914adefa5f35d791425eb968997552fa202af59437dd3b3_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_fa1312b9f371650b7462730ef8cdd839c3a463d239eaaeb88f8dcf482e5660d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1312b9f371650b7462730ef8cdd839c3a463d239eaaeb88f8dcf482e5660d4->enter($__internal_fa1312b9f371650b7462730ef8cdd839c3a463d239eaaeb88f8dcf482e5660d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_fa1312b9f371650b7462730ef8cdd839c3a463d239eaaeb88f8dcf482e5660d4->leave($__internal_fa1312b9f371650b7462730ef8cdd839c3a463d239eaaeb88f8dcf482e5660d4_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_8510da71011c0bd333b3f76e156ed0104a6638394b6130542d0a38084e0d2fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8510da71011c0bd333b3f76e156ed0104a6638394b6130542d0a38084e0d2fc9->enter($__internal_8510da71011c0bd333b3f76e156ed0104a6638394b6130542d0a38084e0d2fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8510da71011c0bd333b3f76e156ed0104a6638394b6130542d0a38084e0d2fc9->leave($__internal_8510da71011c0bd333b3f76e156ed0104a6638394b6130542d0a38084e0d2fc9_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_62ba1153ddbd4428f804b726c65be1eaa2a0ab7bd1f906f1e2189b2f3dcd7143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ba1153ddbd4428f804b726c65be1eaa2a0ab7bd1f906f1e2189b2f3dcd7143->enter($__internal_62ba1153ddbd4428f804b726c65be1eaa2a0ab7bd1f906f1e2189b2f3dcd7143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_62ba1153ddbd4428f804b726c65be1eaa2a0ab7bd1f906f1e2189b2f3dcd7143->leave($__internal_62ba1153ddbd4428f804b726c65be1eaa2a0ab7bd1f906f1e2189b2f3dcd7143_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1fd5797d80a760e871f74b42b00d5a31e0b8bd5cdc448c8a98ce382db9a1ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fd5797d80a760e871f74b42b00d5a31e0b8bd5cdc448c8a98ce382db9a1ad1->enter($__internal_d1fd5797d80a760e871f74b42b00d5a31e0b8bd5cdc448c8a98ce382db9a1ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d1fd5797d80a760e871f74b42b00d5a31e0b8bd5cdc448c8a98ce382db9a1ad1->leave($__internal_d1fd5797d80a760e871f74b42b00d5a31e0b8bd5cdc448c8a98ce382db9a1ad1_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/edit.html.twig";
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
