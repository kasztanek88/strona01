<?php

/* :user_account:user_account.html.twig */
class __TwigTemplate_8af6703dbb68870437a0fa0cbe08771eba1ed6dde07b062ab368d4632867ee31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user_account:user_account.html.twig", 1);
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
        $__internal_b44981734f3beacb124902b339fb0c9152f0bdd90811eb6c49c726bf0e733bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44981734f3beacb124902b339fb0c9152f0bdd90811eb6c49c726bf0e733bb3->enter($__internal_b44981734f3beacb124902b339fb0c9152f0bdd90811eb6c49c726bf0e733bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user_account:user_account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44981734f3beacb124902b339fb0c9152f0bdd90811eb6c49c726bf0e733bb3->leave($__internal_b44981734f3beacb124902b339fb0c9152f0bdd90811eb6c49c726bf0e733bb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6340c9c466f0aff46203068af24a6e9f4c8904040aa0285d81dec649a2592ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6340c9c466f0aff46203068af24a6e9f4c8904040aa0285d81dec649a2592ee1->enter($__internal_6340c9c466f0aff46203068af24a6e9f4c8904040aa0285d81dec649a2592ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6340c9c466f0aff46203068af24a6e9f4c8904040aa0285d81dec649a2592ee1->leave($__internal_6340c9c466f0aff46203068af24a6e9f4c8904040aa0285d81dec649a2592ee1_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_371b6c95b74ee155e5c6ee5cac2133d2e8546996126a3b5da37ed5e870c3b4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371b6c95b74ee155e5c6ee5cac2133d2e8546996126a3b5da37ed5e870c3b4b1->enter($__internal_371b6c95b74ee155e5c6ee5cac2133d2e8546996126a3b5da37ed5e870c3b4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_371b6c95b74ee155e5c6ee5cac2133d2e8546996126a3b5da37ed5e870c3b4b1->leave($__internal_371b6c95b74ee155e5c6ee5cac2133d2e8546996126a3b5da37ed5e870c3b4b1_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_73c0c1940fcaf9d0e4e641350f6bd68a8ca8bf3d451b01f61f2fecb83e5d49b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c0c1940fcaf9d0e4e641350f6bd68a8ca8bf3d451b01f61f2fecb83e5d49b9->enter($__internal_73c0c1940fcaf9d0e4e641350f6bd68a8ca8bf3d451b01f61f2fecb83e5d49b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 30
        echo "    ";
        
        $__internal_73c0c1940fcaf9d0e4e641350f6bd68a8ca8bf3d451b01f61f2fecb83e5d49b9->leave($__internal_73c0c1940fcaf9d0e4e641350f6bd68a8ca8bf3d451b01f61f2fecb83e5d49b9_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_b8e67cc34ea6e2f69bfc15179dc4eadae37a52bda746026c3e727a60afdf7dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e67cc34ea6e2f69bfc15179dc4eadae37a52bda746026c3e727a60afdf7dd7->enter($__internal_b8e67cc34ea6e2f69bfc15179dc4eadae37a52bda746026c3e727a60afdf7dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        // line 13
        echo "            <div class=\"paneluser\">
<p>MY PROFILE</p>
                <nav style=\";\">
                    <ul>
                        <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_account", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\">My Profile</a></li>
                        <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_articles", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\">Articles</a></li>
                        <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_misc", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\">Misc</a></li>
                    </ul>
                </nav>
<hr>
                <article>

                </article>

            </div>

        ";
        
        $__internal_b8e67cc34ea6e2f69bfc15179dc4eadae37a52bda746026c3e727a60afdf7dd7->leave($__internal_b8e67cc34ea6e2f69bfc15179dc4eadae37a52bda746026c3e727a60afdf7dd7_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4169dff684ee22d95ed561ff7a7e40f58965674dc373dff78ab112b63edee2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4169dff684ee22d95ed561ff7a7e40f58965674dc373dff78ab112b63edee2ad->enter($__internal_4169dff684ee22d95ed561ff7a7e40f58965674dc373dff78ab112b63edee2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 33
        echo "
        ";
        // line 34
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_4169dff684ee22d95ed561ff7a7e40f58965674dc373dff78ab112b63edee2ad->leave($__internal_4169dff684ee22d95ed561ff7a7e40f58965674dc373dff78ab112b63edee2ad_prof);

    }

    public function getTemplateName()
    {
        return ":user_account:user_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 34,  143 => 33,  137 => 32,  119 => 19,  115 => 18,  111 => 17,  105 => 13,  99 => 12,  92 => 30,  90 => 12,  87 => 11,  81 => 10,  71 => 6,  68 => 5,  62 => 4,  55 => 32,  52 => 31,  50 => 10,  47 => 9,  44 => 4,  38 => 3,  11 => 1,);
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
            <div class=\"paneluser\">
<p>MY PROFILE</p>
                <nav style=\";\">
                    <ul>
                        <li><a href=\"{{ path('user_account', {'email':app.user.email}) }}\">My Profile</a></li>
                        <li><a href=\"{{ path('user_articles', {'email':app.user.email}) }}\">Articles</a></li>
                        <li><a href=\"{{ path('user_misc', {'email':app.user.email} )}}\">Misc</a></li>
                    </ul>
                </nav>
<hr>
                <article>

                </article>

            </div>

        {% endblock %}
    {% endblock %}

    {% block footer %}

        {{include('generic/footer_page.html.twig')}}

    {% endblock %}
{% endblock %}

";
    }
}
