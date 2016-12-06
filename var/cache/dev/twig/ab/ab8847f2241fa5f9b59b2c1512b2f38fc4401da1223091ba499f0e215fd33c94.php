<?php

/* transit/contact.html.twig */
class __TwigTemplate_98b240c52c95e47a5c531566e3f1ddeb12eca8995998eb7178487919abfbfb65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transit/contact.html.twig", 1);
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
        $__internal_199cf8da0f71b9a2f9031e8dc335105051407bccff99a72e8364986bcd2f055c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199cf8da0f71b9a2f9031e8dc335105051407bccff99a72e8364986bcd2f055c->enter($__internal_199cf8da0f71b9a2f9031e8dc335105051407bccff99a72e8364986bcd2f055c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transit/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199cf8da0f71b9a2f9031e8dc335105051407bccff99a72e8364986bcd2f055c->leave($__internal_199cf8da0f71b9a2f9031e8dc335105051407bccff99a72e8364986bcd2f055c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0f3faeed9e5d2282b6b1f6b53bb0770186f5cf792a849a3092057064c82002a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f3faeed9e5d2282b6b1f6b53bb0770186f5cf792a849a3092057064c82002a->enter($__internal_d0f3faeed9e5d2282b6b1f6b53bb0770186f5cf792a849a3092057064c82002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_d0f3faeed9e5d2282b6b1f6b53bb0770186f5cf792a849a3092057064c82002a->leave($__internal_d0f3faeed9e5d2282b6b1f6b53bb0770186f5cf792a849a3092057064c82002a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_dc865d49e4919e16d48b19336b7bdb90dff08178d97331d36645b5cd352c5d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc865d49e4919e16d48b19336b7bdb90dff08178d97331d36645b5cd352c5d88->enter($__internal_dc865d49e4919e16d48b19336b7bdb90dff08178d97331d36645b5cd352c5d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

";
        
        $__internal_dc865d49e4919e16d48b19336b7bdb90dff08178d97331d36645b5cd352c5d88->leave($__internal_dc865d49e4919e16d48b19336b7bdb90dff08178d97331d36645b5cd352c5d88_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e9dbe9ea44dd63b58b0afc1456153efdc05e8b249e647902d0d78d12ebd12c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9dbe9ea44dd63b58b0afc1456153efdc05e8b249e647902d0d78d12ebd12c0->enter($__internal_6e9dbe9ea44dd63b58b0afc1456153efdc05e8b249e647902d0d78d12ebd12c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6e9dbe9ea44dd63b58b0afc1456153efdc05e8b249e647902d0d78d12ebd12c0->leave($__internal_6e9dbe9ea44dd63b58b0afc1456153efdc05e8b249e647902d0d78d12ebd12c0_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_26beadc7350834b1dd8cfbf8face4f44010638f7e15939eed98adee730a84050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26beadc7350834b1dd8cfbf8face4f44010638f7e15939eed98adee730a84050->enter($__internal_26beadc7350834b1dd8cfbf8face4f44010638f7e15939eed98adee730a84050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 31
        echo "
        ";
        // line 32
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_26beadc7350834b1dd8cfbf8face4f44010638f7e15939eed98adee730a84050->leave($__internal_26beadc7350834b1dd8cfbf8face4f44010638f7e15939eed98adee730a84050_prof);

    }

    public function getTemplateName()
    {
        return "transit/contact.html.twig";
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
