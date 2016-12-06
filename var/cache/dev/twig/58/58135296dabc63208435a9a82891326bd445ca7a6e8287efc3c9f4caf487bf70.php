<?php

/* user_account/user_articles.html.twig */
class __TwigTemplate_fb8e7ed0e4d89d2f9230d3d79da6b9e7b50c230bc500b408d70d8fbebadffbfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user_account/user_articles.html.twig", 1);
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
        $__internal_6f4229350574ad1c7c2d384ed008d79cec6bd74ba486874579ff658490b866ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4229350574ad1c7c2d384ed008d79cec6bd74ba486874579ff658490b866ec->enter($__internal_6f4229350574ad1c7c2d384ed008d79cec6bd74ba486874579ff658490b866ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_account/user_articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4229350574ad1c7c2d384ed008d79cec6bd74ba486874579ff658490b866ec->leave($__internal_6f4229350574ad1c7c2d384ed008d79cec6bd74ba486874579ff658490b866ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a1cdfc890e5b12efa364bb8ffb9fdb1810aaddf5ddabe6da80d07760f14269d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1cdfc890e5b12efa364bb8ffb9fdb1810aaddf5ddabe6da80d07760f14269d->enter($__internal_6a1cdfc890e5b12efa364bb8ffb9fdb1810aaddf5ddabe6da80d07760f14269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_6a1cdfc890e5b12efa364bb8ffb9fdb1810aaddf5ddabe6da80d07760f14269d->leave($__internal_6a1cdfc890e5b12efa364bb8ffb9fdb1810aaddf5ddabe6da80d07760f14269d_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_7144a406aad0a5c04de4d44b7e727fd6c570c725cfdd5560a3eede3be79ef90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7144a406aad0a5c04de4d44b7e727fd6c570c725cfdd5560a3eede3be79ef90d->enter($__internal_7144a406aad0a5c04de4d44b7e727fd6c570c725cfdd5560a3eede3be79ef90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_7144a406aad0a5c04de4d44b7e727fd6c570c725cfdd5560a3eede3be79ef90d->leave($__internal_7144a406aad0a5c04de4d44b7e727fd6c570c725cfdd5560a3eede3be79ef90d_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_527671541f9f191f38a4eb7bd566275f6e1df4e7aa1e364f9ffd3e9746d900a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527671541f9f191f38a4eb7bd566275f6e1df4e7aa1e364f9ffd3e9746d900a9->enter($__internal_527671541f9f191f38a4eb7bd566275f6e1df4e7aa1e364f9ffd3e9746d900a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 59
        echo "    ";
        
        $__internal_527671541f9f191f38a4eb7bd566275f6e1df4e7aa1e364f9ffd3e9746d900a9->leave($__internal_527671541f9f191f38a4eb7bd566275f6e1df4e7aa1e364f9ffd3e9746d900a9_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_9c9ceb3f222a44f68c27613ff317e24746bfe8a33ddd75917f2ada56e549e82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9ceb3f222a44f68c27613ff317e24746bfe8a33ddd75917f2ada56e549e82d->enter($__internal_9c9ceb3f222a44f68c27613ff317e24746bfe8a33ddd75917f2ada56e549e82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        // line 13
        echo "            <div class=\"paneluser\" style=\"padding:50px;>
                <p>ARTICLES</p>
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
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_article");
        echo "\"><p>Add Article</p></a>

                <hr>
                <article>
                    <table class=\"table-striped\">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 37
            echo "                            <tr>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "title", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 40
            $context["arti"] = twig_split_filter($this->env, $this->getAttribute($context["art"], "artContent", array()), " ");
            // line 41
            echo "                                   <a href=\"#\"><p>
                                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["arti"]) ? $context["arti"] : $this->getContext($context, "arti")), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 43
                echo "                                            ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                        ...
                                    </p></a>
                                </td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["art"], "updateAt", array()), "Y-m-d"), "html", null, true);
            echo "></td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "author", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>
                </article>

            </div>

        ";
        
        $__internal_9c9ceb3f222a44f68c27613ff317e24746bfe8a33ddd75917f2ada56e549e82d->leave($__internal_9c9ceb3f222a44f68c27613ff317e24746bfe8a33ddd75917f2ada56e549e82d_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2806bb3ce8cc24b1275c45748050ba67ec1855361c19b9a6b870255c880ec61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2806bb3ce8cc24b1275c45748050ba67ec1855361c19b9a6b870255c880ec61e->enter($__internal_2806bb3ce8cc24b1275c45748050ba67ec1855361c19b9a6b870255c880ec61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "
        ";
        // line 63
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_2806bb3ce8cc24b1275c45748050ba67ec1855361c19b9a6b870255c880ec61e->leave($__internal_2806bb3ce8cc24b1275c45748050ba67ec1855361c19b9a6b870255c880ec61e_prof);

    }

    public function getTemplateName()
    {
        return "user_account/user_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 63,  209 => 62,  203 => 61,  190 => 52,  181 => 49,  177 => 48,  172 => 45,  163 => 43,  159 => 42,  156 => 41,  154 => 40,  149 => 38,  146 => 37,  142 => 36,  125 => 22,  119 => 19,  115 => 18,  111 => 17,  105 => 13,  99 => 12,  92 => 59,  90 => 12,  87 => 11,  81 => 10,  71 => 6,  68 => 5,  62 => 4,  55 => 61,  52 => 60,  50 => 10,  47 => 9,  44 => 4,  38 => 3,  11 => 1,);
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
            <div class=\"paneluser\" style=\"padding:50px;>
                <p>ARTICLES</p>
                <nav style=\";\">
                    <ul>
                        <li><a href=\"{{ path('user_account', {'email':app.user.email})}}\">My Profile</a></li>
                        <li><a href=\"{{ path('user_articles')}}\">Articles</a></li>
                        <li><a href=\"{{ path('user_misc')}}\">Misc</a></li>
                    </ul>
                </nav>
            <a href=\"{{ path('new_article') }}\"><p>Add Article</p></a>

                <hr>
                <article>
                    <table class=\"table-striped\">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for art in article %}
                            <tr>
                                <td>{{ art.title }}</td>
                                <td>
                                    {% set arti = art.artContent|split(' ') %}
                                   <a href=\"#\"><p>
                                        {% for i in arti|slice(0, 10) %}
                                            {{ i }}
                                        {% endfor %}
                                        ...
                                    </p></a>
                                </td>
                                <td>{{ art.updateAt|date('Y-m-d')}}></td>
                                <td>{{ art.author }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
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
