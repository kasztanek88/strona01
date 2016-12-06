<?php

/* :transit:contact.html.twig */
class __TwigTemplate_c1df55ee88e06379aa57d3b90b627e458f700d9605767a507d390d80a038fbd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transit:contact.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5237830f4e35eab418183bae245d10230abf90c40fd3b1b923c1241774d314ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5237830f4e35eab418183bae245d10230abf90c40fd3b1b923c1241774d314ec->enter($__internal_5237830f4e35eab418183bae245d10230abf90c40fd3b1b923c1241774d314ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transit:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5237830f4e35eab418183bae245d10230abf90c40fd3b1b923c1241774d314ec->leave($__internal_5237830f4e35eab418183bae245d10230abf90c40fd3b1b923c1241774d314ec_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fafa85573175cf3c862051e8220bbbd51d84ec66504a71ca92dedd98594e987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fafa85573175cf3c862051e8220bbbd51d84ec66504a71ca92dedd98594e987->enter($__internal_3fafa85573175cf3c862051e8220bbbd51d84ec66504a71ca92dedd98594e987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_3fafa85573175cf3c862051e8220bbbd51d84ec66504a71ca92dedd98594e987->leave($__internal_3fafa85573175cf3c862051e8220bbbd51d84ec66504a71ca92dedd98594e987_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d3e4b0a00ee3eb8b3295cedda76a8733489c0d9d14de9b76dff2889afe5b37a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e4b0a00ee3eb8b3295cedda76a8733489c0d9d14de9b76dff2889afe5b37a3->enter($__internal_d3e4b0a00ee3eb8b3295cedda76a8733489c0d9d14de9b76dff2889afe5b37a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

";
        
        $__internal_d3e4b0a00ee3eb8b3295cedda76a8733489c0d9d14de9b76dff2889afe5b37a3->leave($__internal_d3e4b0a00ee3eb8b3295cedda76a8733489c0d9d14de9b76dff2889afe5b37a3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_42c037595a06a2fb0d349f4a759850b81fa30a2d076ffcc4e64985019ce675df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c037595a06a2fb0d349f4a759850b81fa30a2d076ffcc4e64985019ce675df->enter($__internal_42c037595a06a2fb0d349f4a759850b81fa30a2d076ffcc4e64985019ce675df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "


        <div class=\"contactform\" \"></div>
            <div class=\"row uniform 50%\"style=\"padding: 20px;\">
                <div class=\"6u 12u\$(4)\"\">
                <h1>Please leave us massage</h1>
                ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), 'form_start');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), "name", array()), 'row');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), "email", array()), 'row', array("label" => "Email"));
        echo "
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), "phone", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), "subject", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), "text", array()), 'row');
        echo "
                <button type=\"submit\" class=\"button\" formnovalidate>Send Massage</button>
                ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["contactForm"]) ? $context["contactForm"] : $this->getContext($context, "contactForm")), 'form_end');
        echo "
            </div>
        </div>



";
        
        $__internal_42c037595a06a2fb0d349f4a759850b81fa30a2d076ffcc4e64985019ce675df->leave($__internal_42c037595a06a2fb0d349f4a759850b81fa30a2d076ffcc4e64985019ce675df_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8bf05155e631b53efbf3ab81ec8873495d2168db5a845fb3d6fb2eddae734781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf05155e631b53efbf3ab81ec8873495d2168db5a845fb3d6fb2eddae734781->enter($__internal_8bf05155e631b53efbf3ab81ec8873495d2168db5a845fb3d6fb2eddae734781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 31
        echo "
        ";
        // line 32
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_8bf05155e631b53efbf3ab81ec8873495d2168db5a845fb3d6fb2eddae734781->leave($__internal_8bf05155e631b53efbf3ab81ec8873495d2168db5a845fb3d6fb2eddae734781_prof);

    }

    public function getTemplateName()
    {
        return ":transit:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 32,  134 => 31,  128 => 30,  114 => 23,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  80 => 9,  74 => 8,  64 => 5,  61 => 4,  55 => 3,  47 => 30,  45 => 8,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}
{% block body %}
{% block header %}

    {{include('generic/page_menu.html.twig')}}

{% endblock %}
{% block content %}



        <div class=\"contactform\" \"></div>
            <div class=\"row uniform 50%\"style=\"padding: 20px;\">
                <div class=\"6u 12u\$(4)\"\">
                <h1>Please leave us massage</h1>
                {{ form_start(contactForm) }}
                {{ form_row(contactForm.name) }}
                {{ form_row(contactForm.email, {'label' : 'Email'}) }}
                {{ form_row(contactForm.phone) }}
                {{ form_row(contactForm.subject) }}
                {{ form_row(contactForm.text) }}
                <button type=\"submit\" class=\"button\" formnovalidate>Send Massage</button>
                {{ form_end(contactForm) }}
            </div>
        </div>



{% endblock %}
    {% block footer %}

        {{include('generic/footer_page.html.twig')}}

    {% endblock %}
{% endblock %}";
    }
}
