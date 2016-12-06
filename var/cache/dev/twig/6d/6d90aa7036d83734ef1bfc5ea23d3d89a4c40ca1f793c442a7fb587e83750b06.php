<?php

/* articles/layout.html.twig */
class __TwigTemplate_ad1d58420ddeba27f96307493fabe9b954742ea46fd95fb576e5c3577c99d429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/layout.html.twig", 1);
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
        $__internal_b5b85e2e2cfa4bb86b5c2b1c52529555502dcc89659f0420489f1bd95f8bc929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b85e2e2cfa4bb86b5c2b1c52529555502dcc89659f0420489f1bd95f8bc929->enter($__internal_b5b85e2e2cfa4bb86b5c2b1c52529555502dcc89659f0420489f1bd95f8bc929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b85e2e2cfa4bb86b5c2b1c52529555502dcc89659f0420489f1bd95f8bc929->leave($__internal_b5b85e2e2cfa4bb86b5c2b1c52529555502dcc89659f0420489f1bd95f8bc929_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b090e20e922dc21f61e6d188dd9769c0b71c8c54c98d291914f313c40ec5cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b090e20e922dc21f61e6d188dd9769c0b71c8c54c98d291914f313c40ec5cfc->enter($__internal_0b090e20e922dc21f61e6d188dd9769c0b71c8c54c98d291914f313c40ec5cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b090e20e922dc21f61e6d188dd9769c0b71c8c54c98d291914f313c40ec5cfc->leave($__internal_0b090e20e922dc21f61e6d188dd9769c0b71c8c54c98d291914f313c40ec5cfc_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_41bc5440f37ef1cfc458df31c0c6c534b4f2529bfb97ef6101c83d47955e9eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bc5440f37ef1cfc458df31c0c6c534b4f2529bfb97ef6101c83d47955e9eb3->enter($__internal_41bc5440f37ef1cfc458df31c0c6c534b4f2529bfb97ef6101c83d47955e9eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_41bc5440f37ef1cfc458df31c0c6c534b4f2529bfb97ef6101c83d47955e9eb3->leave($__internal_41bc5440f37ef1cfc458df31c0c6c534b4f2529bfb97ef6101c83d47955e9eb3_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_34cecfa0dcf0facfa7f8d2e8d868324214903a574a6a24cacf980c4dc33d1fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34cecfa0dcf0facfa7f8d2e8d868324214903a574a6a24cacf980c4dc33d1fc2->enter($__internal_34cecfa0dcf0facfa7f8d2e8d868324214903a574a6a24cacf980c4dc33d1fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 30
        echo "    ";
        
        $__internal_34cecfa0dcf0facfa7f8d2e8d868324214903a574a6a24cacf980c4dc33d1fc2->leave($__internal_34cecfa0dcf0facfa7f8d2e8d868324214903a574a6a24cacf980c4dc33d1fc2_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_84d87390726a31e6b926fa41c0973e3bdd85d6c4777d8c08376a22fc197f8a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d87390726a31e6b926fa41c0973e3bdd85d6c4777d8c08376a22fc197f8a32->enter($__internal_84d87390726a31e6b926fa41c0973e3bdd85d6c4777d8c08376a22fc197f8a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

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
        
        $__internal_84d87390726a31e6b926fa41c0973e3bdd85d6c4777d8c08376a22fc197f8a32->leave($__internal_84d87390726a31e6b926fa41c0973e3bdd85d6c4777d8c08376a22fc197f8a32_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_70ce53b0734f147a22d1684e05953d74f3bece9af491cfa6895e01c084067703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ce53b0734f147a22d1684e05953d74f3bece9af491cfa6895e01c084067703->enter($__internal_70ce53b0734f147a22d1684e05953d74f3bece9af491cfa6895e01c084067703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 33
        echo "
        ";
        // line 34
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_70ce53b0734f147a22d1684e05953d74f3bece9af491cfa6895e01c084067703->leave($__internal_70ce53b0734f147a22d1684e05953d74f3bece9af491cfa6895e01c084067703_prof);

    }

    public function getTemplateName()
    {
        return "articles/layout.html.twig";
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
