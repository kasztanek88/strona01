<?php

/* :user_account:user_articles.html.twig */
class __TwigTemplate_0871fb4bfcc0b02e408c3c8429e325e575927b0b1a0332a2a7c4e58ba4884fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user_account:user_articles.html.twig", 1);
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
        $__internal_19a328f755d178a1da0083d053763c39731641efb1888de38db2f9a2df382a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a328f755d178a1da0083d053763c39731641efb1888de38db2f9a2df382a7d->enter($__internal_19a328f755d178a1da0083d053763c39731641efb1888de38db2f9a2df382a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user_account:user_articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a328f755d178a1da0083d053763c39731641efb1888de38db2f9a2df382a7d->leave($__internal_19a328f755d178a1da0083d053763c39731641efb1888de38db2f9a2df382a7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b578894da29e5e7fd934fd79f4727c8896dd6788a238a5bd1ad98777ee426db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b578894da29e5e7fd934fd79f4727c8896dd6788a238a5bd1ad98777ee426db->enter($__internal_8b578894da29e5e7fd934fd79f4727c8896dd6788a238a5bd1ad98777ee426db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b578894da29e5e7fd934fd79f4727c8896dd6788a238a5bd1ad98777ee426db->leave($__internal_8b578894da29e5e7fd934fd79f4727c8896dd6788a238a5bd1ad98777ee426db_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_b21472ad230f489e137adcfc4cf16cea4e5919f5a5160913c24b6bd6541b7a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21472ad230f489e137adcfc4cf16cea4e5919f5a5160913c24b6bd6541b7a07->enter($__internal_b21472ad230f489e137adcfc4cf16cea4e5919f5a5160913c24b6bd6541b7a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_b21472ad230f489e137adcfc4cf16cea4e5919f5a5160913c24b6bd6541b7a07->leave($__internal_b21472ad230f489e137adcfc4cf16cea4e5919f5a5160913c24b6bd6541b7a07_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_73dad57303f7801dad6c6758f1e9e9f25c8c9422a3f1b35fdb4c4894bda80b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dad57303f7801dad6c6758f1e9e9f25c8c9422a3f1b35fdb4c4894bda80b1c->enter($__internal_73dad57303f7801dad6c6758f1e9e9f25c8c9422a3f1b35fdb4c4894bda80b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 59
        echo "    ";
        
        $__internal_73dad57303f7801dad6c6758f1e9e9f25c8c9422a3f1b35fdb4c4894bda80b1c->leave($__internal_73dad57303f7801dad6c6758f1e9e9f25c8c9422a3f1b35fdb4c4894bda80b1c_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_67593151002007cedd3d34354801280359617d01173c3c06d3f0593c9c57fe5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67593151002007cedd3d34354801280359617d01173c3c06d3f0593c9c57fe5b->enter($__internal_67593151002007cedd3d34354801280359617d01173c3c06d3f0593c9c57fe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_articles", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\">Articles</a></li>
                        <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_misc", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
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
        
        $__internal_67593151002007cedd3d34354801280359617d01173c3c06d3f0593c9c57fe5b->leave($__internal_67593151002007cedd3d34354801280359617d01173c3c06d3f0593c9c57fe5b_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5060864eff5d8188dfcfcd6daa9460a9498c663d51542b948c85da103248cf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5060864eff5d8188dfcfcd6daa9460a9498c663d51542b948c85da103248cf3d->enter($__internal_5060864eff5d8188dfcfcd6daa9460a9498c663d51542b948c85da103248cf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "
        ";
        // line 63
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_5060864eff5d8188dfcfcd6daa9460a9498c663d51542b948c85da103248cf3d->leave($__internal_5060864eff5d8188dfcfcd6daa9460a9498c663d51542b948c85da103248cf3d_prof);

    }

    public function getTemplateName()
    {
        return ":user_account:user_articles.html.twig";
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
                        <li><a href=\"{{ path('user_account', {'email':app.user.email}) }}\">My Profile</a></li>
                        <li><a href=\"{{ path('user_articles', {'email':app.user.email}) }}\">Articles</a></li>
                        <li><a href=\"{{ path('user_misc', {'email':app.user.email} )}}\">Misc</a></li>
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
