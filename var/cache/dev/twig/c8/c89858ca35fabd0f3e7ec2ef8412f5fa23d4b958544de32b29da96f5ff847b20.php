<?php

/* admin/users/edituser.html.twig */
class __TwigTemplate_3f68c92f11a9a0f62562d1bf58d8b9bf51eb947518c79ff32e132dfac1304a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/edituser.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
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
        $__internal_f5a38f6863cc9a433970e574293fb6cff1e8c0da6b324d223a539b8db44de656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a38f6863cc9a433970e574293fb6cff1e8c0da6b324d223a539b8db44de656->enter($__internal_f5a38f6863cc9a433970e574293fb6cff1e8c0da6b324d223a539b8db44de656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/edituser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5a38f6863cc9a433970e574293fb6cff1e8c0da6b324d223a539b8db44de656->leave($__internal_f5a38f6863cc9a433970e574293fb6cff1e8c0da6b324d223a539b8db44de656_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6b2e6684db4bea672ad1a64175ec0aaea05e41fab91b2a29869537aaa630680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b2e6684db4bea672ad1a64175ec0aaea05e41fab91b2a29869537aaa630680->enter($__internal_b6b2e6684db4bea672ad1a64175ec0aaea05e41fab91b2a29869537aaa630680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_b6b2e6684db4bea672ad1a64175ec0aaea05e41fab91b2a29869537aaa630680->leave($__internal_b6b2e6684db4bea672ad1a64175ec0aaea05e41fab91b2a29869537aaa630680_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d22b8579d93858b7a3afedc5a3efd67ea6f4e584a011fcfd4c1a6c8311410d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d22b8579d93858b7a3afedc5a3efd67ea6f4e584a011fcfd4c1a6c8311410d9->enter($__internal_8d22b8579d93858b7a3afedc5a3efd67ea6f4e584a011fcfd4c1a6c8311410d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 36
        echo "

";
        
        $__internal_8d22b8579d93858b7a3afedc5a3efd67ea6f4e584a011fcfd4c1a6c8311410d9->leave($__internal_8d22b8579d93858b7a3afedc5a3efd67ea6f4e584a011fcfd4c1a6c8311410d9_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_fe30883d7b9772dae1d60375d02f07935c1bd583d29aae05e47625a6382868e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe30883d7b9772dae1d60375d02f07935c1bd583d29aae05e47625a6382868e0->enter($__internal_fe30883d7b9772dae1d60375d02f07935c1bd583d29aae05e47625a6382868e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_fe30883d7b9772dae1d60375d02f07935c1bd583d29aae05e47625a6382868e0->leave($__internal_fe30883d7b9772dae1d60375d02f07935c1bd583d29aae05e47625a6382868e0_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_e11a110ee77d2fed59e5107c86af07880bf55419606208d1c9d45b11bf79e675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11a110ee77d2fed59e5107c86af07880bf55419606208d1c9d45b11bf79e675->enter($__internal_e11a110ee77d2fed59e5107c86af07880bf55419606208d1c9d45b11bf79e675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "email", array()), 'row');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "roles", array()), 'row', array("label" => "roles"));
        echo "
                   
                    <button type=\"submit\" class=\"button\" formnovalidate>Save</button>
                ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e11a110ee77d2fed59e5107c86af07880bf55419606208d1c9d45b11bf79e675->leave($__internal_e11a110ee77d2fed59e5107c86af07880bf55419606208d1c9d45b11bf79e675_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_06c16bdd91ac67f854201e72daca4787c3e555fa51768217772578c2a8a1adf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c16bdd91ac67f854201e72daca4787c3e555fa51768217772578c2a8a1adf9->enter($__internal_06c16bdd91ac67f854201e72daca4787c3e555fa51768217772578c2a8a1adf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 32
        echo "
    ";
        // line 33
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_06c16bdd91ac67f854201e72daca4787c3e555fa51768217772578c2a8a1adf9->leave($__internal_06c16bdd91ac67f854201e72daca4787c3e555fa51768217772578c2a8a1adf9_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/edituser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 33,  146 => 32,  140 => 31,  128 => 25,  122 => 22,  118 => 21,  114 => 20,  101 => 14,  91 => 10,  88 => 9,  82 => 8,  73 => 36,  71 => 31,  68 => 30,  66 => 14,  63 => 13,  61 => 8,  55 => 7,  44 => 3,  38 => 2,  11 => 1,);
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
                    {{ form_row(userForm.email) }}
                    {{ form_row(userForm.roles, {'label' : 'roles'}) }}
                   
                    <button type=\"submit\" class=\"button\" formnovalidate>Save</button>
                {{ form_end(userForm) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}

    {{include('generic/footer_page.html.twig')}}
    
{% endblock %}


{% endblock %}

";
    }
}
