<?php

/* :admin/users:edituser.html.twig */
class __TwigTemplate_4cf6876348fc585a7f3689fe8c8bc9632d4f83c7db115bb02401dd258d3a566b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/users:edituser.html.twig", 1);
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
        $__internal_61449ecfc0e6c7bcce6ad5b19105edaf8d05a0000acd9f8062cf95864f86cad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61449ecfc0e6c7bcce6ad5b19105edaf8d05a0000acd9f8062cf95864f86cad0->enter($__internal_61449ecfc0e6c7bcce6ad5b19105edaf8d05a0000acd9f8062cf95864f86cad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/users:edituser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61449ecfc0e6c7bcce6ad5b19105edaf8d05a0000acd9f8062cf95864f86cad0->leave($__internal_61449ecfc0e6c7bcce6ad5b19105edaf8d05a0000acd9f8062cf95864f86cad0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18cb337badf940deb4260c0545aea51ff34942a758a62d6701b84eed4de4652f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cb337badf940deb4260c0545aea51ff34942a758a62d6701b84eed4de4652f->enter($__internal_18cb337badf940deb4260c0545aea51ff34942a758a62d6701b84eed4de4652f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_18cb337badf940deb4260c0545aea51ff34942a758a62d6701b84eed4de4652f->leave($__internal_18cb337badf940deb4260c0545aea51ff34942a758a62d6701b84eed4de4652f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3f995d9759113659134ade695698035489f58674a22813f368a953d8d8adf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f995d9759113659134ade695698035489f58674a22813f368a953d8d8adf62->enter($__internal_b3f995d9759113659134ade695698035489f58674a22813f368a953d8d8adf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3f995d9759113659134ade695698035489f58674a22813f368a953d8d8adf62->leave($__internal_b3f995d9759113659134ade695698035489f58674a22813f368a953d8d8adf62_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_52222cdb6856f8fbcdc02da850d1a1ef0d2e408d0b2c6333f13a28680ee4d3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52222cdb6856f8fbcdc02da850d1a1ef0d2e408d0b2c6333f13a28680ee4d3c3->enter($__internal_52222cdb6856f8fbcdc02da850d1a1ef0d2e408d0b2c6333f13a28680ee4d3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "
    ";
        // line 10
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_52222cdb6856f8fbcdc02da850d1a1ef0d2e408d0b2c6333f13a28680ee4d3c3->leave($__internal_52222cdb6856f8fbcdc02da850d1a1ef0d2e408d0b2c6333f13a28680ee4d3c3_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_1039c49065ab64d40203a9fcfde563182836640775e9d776f7314247773b28e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1039c49065ab64d40203a9fcfde563182836640775e9d776f7314247773b28e3->enter($__internal_1039c49065ab64d40203a9fcfde563182836640775e9d776f7314247773b28e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1039c49065ab64d40203a9fcfde563182836640775e9d776f7314247773b28e3->leave($__internal_1039c49065ab64d40203a9fcfde563182836640775e9d776f7314247773b28e3_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_57a163ff941eaf24689bba27553d66dca31cc552626c729441956d0f3ca009d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a163ff941eaf24689bba27553d66dca31cc552626c729441956d0f3ca009d0->enter($__internal_57a163ff941eaf24689bba27553d66dca31cc552626c729441956d0f3ca009d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 32
        echo "
    ";
        // line 33
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_57a163ff941eaf24689bba27553d66dca31cc552626c729441956d0f3ca009d0->leave($__internal_57a163ff941eaf24689bba27553d66dca31cc552626c729441956d0f3ca009d0_prof);

    }

    public function getTemplateName()
    {
        return ":admin/users:edituser.html.twig";
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
