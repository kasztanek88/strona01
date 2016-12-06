<?php

/* user_account/user_account.html.twig */
class __TwigTemplate_fa3bd411bcf4b35b42f42fcdb02f157311c2740749ddbe5a3cd03e2257b3f383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user_account/user_account.html.twig", 1);
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
        $__internal_0da0f6fdb1b5d0895f7cd0b1634ffbf2afc0666fa06c2e48cea9f02bc4614d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da0f6fdb1b5d0895f7cd0b1634ffbf2afc0666fa06c2e48cea9f02bc4614d1e->enter($__internal_0da0f6fdb1b5d0895f7cd0b1634ffbf2afc0666fa06c2e48cea9f02bc4614d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_account/user_account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da0f6fdb1b5d0895f7cd0b1634ffbf2afc0666fa06c2e48cea9f02bc4614d1e->leave($__internal_0da0f6fdb1b5d0895f7cd0b1634ffbf2afc0666fa06c2e48cea9f02bc4614d1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5c05f04833d99f4f390436472e9ff49f2abca88a9059ffda84852337cd6937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5c05f04833d99f4f390436472e9ff49f2abca88a9059ffda84852337cd6937->enter($__internal_5d5c05f04833d99f4f390436472e9ff49f2abca88a9059ffda84852337cd6937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5d5c05f04833d99f4f390436472e9ff49f2abca88a9059ffda84852337cd6937->leave($__internal_5d5c05f04833d99f4f390436472e9ff49f2abca88a9059ffda84852337cd6937_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_5d378c4194d6a157754efc2a47300d56716d8bcec4774e06f4a42fa7f3bb279c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d378c4194d6a157754efc2a47300d56716d8bcec4774e06f4a42fa7f3bb279c->enter($__internal_5d378c4194d6a157754efc2a47300d56716d8bcec4774e06f4a42fa7f3bb279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_5d378c4194d6a157754efc2a47300d56716d8bcec4774e06f4a42fa7f3bb279c->leave($__internal_5d378c4194d6a157754efc2a47300d56716d8bcec4774e06f4a42fa7f3bb279c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_86b775cbe65bdd8113cd7296f73aa028c10b5444e8fcf74b32e91d8caf7e38ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b775cbe65bdd8113cd7296f73aa028c10b5444e8fcf74b32e91d8caf7e38ff->enter($__internal_86b775cbe65bdd8113cd7296f73aa028c10b5444e8fcf74b32e91d8caf7e38ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 30
        echo "    ";
        
        $__internal_86b775cbe65bdd8113cd7296f73aa028c10b5444e8fcf74b32e91d8caf7e38ff->leave($__internal_86b775cbe65bdd8113cd7296f73aa028c10b5444e8fcf74b32e91d8caf7e38ff_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_324fb0460f6e61c7a586aa42b2376be8c609b52150949267f512b68db0f08c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324fb0460f6e61c7a586aa42b2376be8c609b52150949267f512b68db0f08c83->enter($__internal_324fb0460f6e61c7a586aa42b2376be8c609b52150949267f512b68db0f08c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_articles");
        echo "\">Articles</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_misc");
        echo "\">Misc</a></li>
                    </ul>
                </nav>
<hr>
                <article>

                </article>

            </div>

        ";
        
        $__internal_324fb0460f6e61c7a586aa42b2376be8c609b52150949267f512b68db0f08c83->leave($__internal_324fb0460f6e61c7a586aa42b2376be8c609b52150949267f512b68db0f08c83_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2c123e8e0f38b6df7c8a3caf4833d9d73ec199e962c4556efdb22f89467b07ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c123e8e0f38b6df7c8a3caf4833d9d73ec199e962c4556efdb22f89467b07ae->enter($__internal_2c123e8e0f38b6df7c8a3caf4833d9d73ec199e962c4556efdb22f89467b07ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 33
        echo "
        ";
        // line 34
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_2c123e8e0f38b6df7c8a3caf4833d9d73ec199e962c4556efdb22f89467b07ae->leave($__internal_2c123e8e0f38b6df7c8a3caf4833d9d73ec199e962c4556efdb22f89467b07ae_prof);

    }

    public function getTemplateName()
    {
        return "user_account/user_account.html.twig";
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
                        <li><a href=\"{{ path('user_account', {'email':app.user.email})}}\">My Profile</a></li>
                        <li><a href=\"{{ path('user_articles')}}\">Articles</a></li>
                        <li><a href=\"{{ path('user_misc')}}\">Misc</a></li>
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
