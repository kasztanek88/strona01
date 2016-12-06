<?php

/* transit/articels.html.twig */
class __TwigTemplate_7b49523d4b3d04c48ad908212eb12915981ae7b7815aa89480f279b95d8b51f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transit/articels.html.twig", 1);
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
        $__internal_1b7c15d9c12cf937329a7681cf2b418a43305fbee65675423d5583fe473462c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7c15d9c12cf937329a7681cf2b418a43305fbee65675423d5583fe473462c5->enter($__internal_1b7c15d9c12cf937329a7681cf2b418a43305fbee65675423d5583fe473462c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transit/articels.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7c15d9c12cf937329a7681cf2b418a43305fbee65675423d5583fe473462c5->leave($__internal_1b7c15d9c12cf937329a7681cf2b418a43305fbee65675423d5583fe473462c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7b8bf3f3257fe370b15b10c7d325b576bd19b1e3aef5cda9bf6ef3763452c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b8bf3f3257fe370b15b10c7d325b576bd19b1e3aef5cda9bf6ef3763452c0c->enter($__internal_a7b8bf3f3257fe370b15b10c7d325b576bd19b1e3aef5cda9bf6ef3763452c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_a7b8bf3f3257fe370b15b10c7d325b576bd19b1e3aef5cda9bf6ef3763452c0c->leave($__internal_a7b8bf3f3257fe370b15b10c7d325b576bd19b1e3aef5cda9bf6ef3763452c0c_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_1836ad8597e0483e880aba5eccadd3fc5d5a1a78e578963248a2c1660d584b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1836ad8597e0483e880aba5eccadd3fc5d5a1a78e578963248a2c1660d584b5c->enter($__internal_1836ad8597e0483e880aba5eccadd3fc5d5a1a78e578963248a2c1660d584b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_1836ad8597e0483e880aba5eccadd3fc5d5a1a78e578963248a2c1660d584b5c->leave($__internal_1836ad8597e0483e880aba5eccadd3fc5d5a1a78e578963248a2c1660d584b5c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_5adf2c94923980c7158fab00d8c742fb28b63af5bd43e525df0ead48e795b293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adf2c94923980c7158fab00d8c742fb28b63af5bd43e525df0ead48e795b293->enter($__internal_5adf2c94923980c7158fab00d8c742fb28b63af5bd43e525df0ead48e795b293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 40
        echo "    ";
        
        $__internal_5adf2c94923980c7158fab00d8c742fb28b63af5bd43e525df0ead48e795b293->leave($__internal_5adf2c94923980c7158fab00d8c742fb28b63af5bd43e525df0ead48e795b293_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_b42ea9737aa69b115e5ccd00ddbdb54d741afbd4dea55e4d7ce204867a5b172d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42ea9737aa69b115e5ccd00ddbdb54d741afbd4dea55e4d7ce204867a5b172d->enter($__internal_b42ea9737aa69b115e5ccd00ddbdb54d741afbd4dea55e4d7ce204867a5b172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        // line 13
        echo "            <!-- Main -->
            <section id=\"main\" class=\"wrapper\">
                <div class=\"content\">

                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 18
            echo "                    <header class=\"major\">
                        <h2>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "title", array()), "html", null, true);
            echo "</h2>
                        <p>Intro</p>
                    </header>

                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pobrane.jpg"), "html", null, true);
            echo "\">
                        ";
            // line 24
            $context["arti"] = twig_split_filter($this->env, $this->getAttribute($context["art"], "artContent", array()), " ");
            // line 25
            echo "                        <p>
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["arti"]) ? $context["arti"] : $this->getContext($context, "arti")), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "                                ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                            ...
                        </p>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_article", array("id" => $this->getAttribute($context["art"], "id", array()))), "html", null, true);
            echo "\"><p>Read more</p></a>

                    <hr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </div>

            </section>

        ";
        
        $__internal_b42ea9737aa69b115e5ccd00ddbdb54d741afbd4dea55e4d7ce204867a5b172d->leave($__internal_b42ea9737aa69b115e5ccd00ddbdb54d741afbd4dea55e4d7ce204867a5b172d_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9e4260a2fa52e5cd49ce8ab8802310dbd648c230b6bbbf72ae46b55f0cf41559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4260a2fa52e5cd49ce8ab8802310dbd648c230b6bbbf72ae46b55f0cf41559->enter($__internal_9e4260a2fa52e5cd49ce8ab8802310dbd648c230b6bbbf72ae46b55f0cf41559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "
        ";
        // line 44
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_9e4260a2fa52e5cd49ce8ab8802310dbd648c230b6bbbf72ae46b55f0cf41559->leave($__internal_9e4260a2fa52e5cd49ce8ab8802310dbd648c230b6bbbf72ae46b55f0cf41559_prof);

    }

    public function getTemplateName()
    {
        return "transit/articels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 44,  178 => 43,  172 => 42,  161 => 35,  151 => 31,  147 => 29,  138 => 27,  134 => 26,  131 => 25,  129 => 24,  125 => 23,  118 => 19,  115 => 18,  111 => 17,  105 => 13,  99 => 12,  92 => 40,  90 => 12,  87 => 11,  81 => 10,  71 => 6,  68 => 5,  62 => 4,  55 => 42,  52 => 41,  50 => 10,  47 => 9,  44 => 4,  38 => 3,  11 => 1,);
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
                <div class=\"content\">

                    {% for art in article %}
                    <header class=\"major\">
                        <h2>{{ art.title }}</h2>
                        <p>Intro</p>
                    </header>

                    <img src=\"{{ asset('images/pobrane.jpg') }}\">
                        {% set arti = art.artContent|split(' ') %}
                        <p>
                            {% for i in arti|slice(0, 10) %}
                                {{ i }}
                            {% endfor %}
                            ...
                        </p>
                    <a href=\"{{ path('read_article', {'id':art.id}) }}\"><p>Read more</p></a>

                    <hr>
                    {% endfor %}
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
