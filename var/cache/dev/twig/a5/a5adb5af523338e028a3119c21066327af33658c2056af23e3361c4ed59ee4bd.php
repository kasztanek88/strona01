<?php

/* :articles:layout.html.twig */
class __TwigTemplate_ca18148a70bfd0f1a51b15b0adb2f2302e838171f11ab9531d149abca8c21bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'one' => array($this, 'block_one'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f8739f7846468c580d5c4bf59e2dbe1163eee6f2e07e4b42b76f02ef397e87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8739f7846468c580d5c4bf59e2dbe1163eee6f2e07e4b42b76f02ef397e87a->enter($__internal_4f8739f7846468c580d5c4bf59e2dbe1163eee6f2e07e4b42b76f02ef397e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8739f7846468c580d5c4bf59e2dbe1163eee6f2e07e4b42b76f02ef397e87a->leave($__internal_4f8739f7846468c580d5c4bf59e2dbe1163eee6f2e07e4b42b76f02ef397e87a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2b9e205050122baf571c7beba1fc6ff6893571a011ccd59e5cdee2b01f049fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b9e205050122baf571c7beba1fc6ff6893571a011ccd59e5cdee2b01f049fa->enter($__internal_c2b9e205050122baf571c7beba1fc6ff6893571a011ccd59e5cdee2b01f049fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "
    ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_c2b9e205050122baf571c7beba1fc6ff6893571a011ccd59e5cdee2b01f049fa->leave($__internal_c2b9e205050122baf571c7beba1fc6ff6893571a011ccd59e5cdee2b01f049fa_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_5c77fcf63a06310ba91b825faaa04b2dc7daa9c8cabfeebcfdfc5eb7f539fb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c77fcf63a06310ba91b825faaa04b2dc7daa9c8cabfeebcfdfc5eb7f539fb6f->enter($__internal_5c77fcf63a06310ba91b825faaa04b2dc7daa9c8cabfeebcfdfc5eb7f539fb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_5c77fcf63a06310ba91b825faaa04b2dc7daa9c8cabfeebcfdfc5eb7f539fb6f->leave($__internal_5c77fcf63a06310ba91b825faaa04b2dc7daa9c8cabfeebcfdfc5eb7f539fb6f_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb4a027dc8bd29701f1cb13e337cfebcbe3aa4dfe2957ccd5328904245e51c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4a027dc8bd29701f1cb13e337cfebcbe3aa4dfe2957ccd5328904245e51c9a->enter($__internal_cb4a027dc8bd29701f1cb13e337cfebcbe3aa4dfe2957ccd5328904245e51c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 30
        echo "    ";
        
        $__internal_cb4a027dc8bd29701f1cb13e337cfebcbe3aa4dfe2957ccd5328904245e51c9a->leave($__internal_cb4a027dc8bd29701f1cb13e337cfebcbe3aa4dfe2957ccd5328904245e51c9a_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_e9804ef6226ec04e452160c9cdc9dfe03f811e8200b5f5094de85e86974facf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9804ef6226ec04e452160c9cdc9dfe03f811e8200b5f5094de85e86974facf3->enter($__internal_e9804ef6226ec04e452160c9cdc9dfe03f811e8200b5f5094de85e86974facf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        // line 13
        echo "            <!-- Main -->
            <section id=\"main\" class=\"wrapper\">
                <div class=\"container\">

                    <header class=\"major\">
                        <h2>Articles Title</h2>
                        <p>Intro</p>
                    </header>
                    <h4>Name of image</h4>
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pobrane.jpeg"), "html", null, true);
        echo "\">

                    <p>Body of article</p>

                </div>
            </section>

        ";
        
        $__internal_e9804ef6226ec04e452160c9cdc9dfe03f811e8200b5f5094de85e86974facf3->leave($__internal_e9804ef6226ec04e452160c9cdc9dfe03f811e8200b5f5094de85e86974facf3_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ea29267c4f2146b28af59971270985a0194e3653909f301930cefede84254b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea29267c4f2146b28af59971270985a0194e3653909f301930cefede84254b44->enter($__internal_ea29267c4f2146b28af59971270985a0194e3653909f301930cefede84254b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 33
        echo "
        ";
        // line 34
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_ea29267c4f2146b28af59971270985a0194e3653909f301930cefede84254b44->leave($__internal_ea29267c4f2146b28af59971270985a0194e3653909f301930cefede84254b44_prof);

    }

    public function getTemplateName()
    {
        return ":articles:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 34,  137 => 33,  131 => 32,  116 => 22,  105 => 13,  99 => 12,  92 => 30,  90 => 12,  87 => 11,  81 => 10,  71 => 6,  68 => 5,  62 => 4,  55 => 32,  52 => 31,  50 => 10,  47 => 9,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}

{% block body %}
    {% block header %}

        {{include('generic/page_menu.html.twig')}}

    {% endblock %}

    {% block content %}

        {% block one %}
            <!-- Main -->
            <section id=\"main\" class=\"wrapper\">
                <div class=\"container\">

                    <header class=\"major\">
                        <h2>Articles Title</h2>
                        <p>Intro</p>
                    </header>
                    <h4>Name of image</h4>
                    <img src=\"{{ asset('images/pobrane.jpeg') }}\">

                    <p>Body of article</p>

                </div>
            </section>

        {% endblock %}
    {% endblock %}

    {% block footer %}

        {{include('generic/footer_page.html.twig')}}

    {% endblock %}
{% endblock %}

";
    }
}
