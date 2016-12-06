<?php

/* :admin/users:adminlist.html.twig */
class __TwigTemplate_662fe744a4a7977f826e956326681c57c688ae31236372a0091f2d92f59a04d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/users:adminlist.html.twig", 1);
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
        $__internal_3a6e2c0d80ae0855680400015714c25da4f87f1569dadadadbf24236684ce089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6e2c0d80ae0855680400015714c25da4f87f1569dadadadbf24236684ce089->enter($__internal_3a6e2c0d80ae0855680400015714c25da4f87f1569dadadadbf24236684ce089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/users:adminlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a6e2c0d80ae0855680400015714c25da4f87f1569dadadadbf24236684ce089->leave($__internal_3a6e2c0d80ae0855680400015714c25da4f87f1569dadadadbf24236684ce089_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e30562675aed32ac35b6a4354a810abf914f27ff2dc6c797866d37675293b961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30562675aed32ac35b6a4354a810abf914f27ff2dc6c797866d37675293b961->enter($__internal_e30562675aed32ac35b6a4354a810abf914f27ff2dc6c797866d37675293b961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_e30562675aed32ac35b6a4354a810abf914f27ff2dc6c797866d37675293b961->leave($__internal_e30562675aed32ac35b6a4354a810abf914f27ff2dc6c797866d37675293b961_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_65829bc9324bc28cc3cd7621449c6b98ca168c70e3478b48cee1f2f528b75482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65829bc9324bc28cc3cd7621449c6b98ca168c70e3478b48cee1f2f528b75482->enter($__internal_65829bc9324bc28cc3cd7621449c6b98ca168c70e3478b48cee1f2f528b75482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_65829bc9324bc28cc3cd7621449c6b98ca168c70e3478b48cee1f2f528b75482->leave($__internal_65829bc9324bc28cc3cd7621449c6b98ca168c70e3478b48cee1f2f528b75482_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6b2743f37e346b04342d7fb9d1092894455f58738c4d25fe058015cf13ed918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b2743f37e346b04342d7fb9d1092894455f58738c4d25fe058015cf13ed918->enter($__internal_f6b2743f37e346b04342d7fb9d1092894455f58738c4d25fe058015cf13ed918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
                            <div class=\"alert\">
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 16
            echo "                                <p class=\"green\" style=\"color:green;\"> ";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo " </p>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                            </div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Admin Panel Lists</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\" style=\"padding:50px;\">
\t\t\t\t\t\t
                                            <table class=\"table-striped\">
        <thead>
            <tr>
                <th>Who?</th>
                <th>Wer?</th>
                <th>Info</th>
                <th>email</th>
                <th>Avatar</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "                <tr>
                    <td>
                       
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show_url", array("user_name" => $this->getAttribute($context["user"], "sname", array()))), "html", null, true);
            echo "\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "info", array()), "html", null, true);
            echo "</td>
                    <td> <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["user"], "image", array())), "html", null, true);
            echo "\" width=\"42\" height=\"42\"></td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/edits.png"), "html", null, true);
            echo "\" class=\"btnedt\"></a>
                    </td>
                </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table> 
                                            
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
  ";
        
        $__internal_f6b2743f37e346b04342d7fb9d1092894455f58738c4d25fe058015cf13ed918->leave($__internal_f6b2743f37e346b04342d7fb9d1092894455f58738c4d25fe058015cf13ed918_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9dc1ce7a8ff9136cf0ef6891d687f436cd96c325b4a540e6d213f92eb9420f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc1ce7a8ff9136cf0ef6891d687f436cd96c325b4a540e6d213f92eb9420f2e->enter($__internal_9dc1ce7a8ff9136cf0ef6891d687f436cd96c325b4a540e6d213f92eb9420f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "
    ";
        // line 65
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_9dc1ce7a8ff9136cf0ef6891d687f436cd96c325b4a540e6d213f92eb9420f2e->leave($__internal_9dc1ce7a8ff9136cf0ef6891d687f436cd96c325b4a540e6d213f92eb9420f2e_prof);

    }

    public function getTemplateName()
    {
        return ":admin/users:adminlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 65,  193 => 64,  187 => 63,  174 => 55,  162 => 51,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  139 => 43,  135 => 42,  130 => 39,  126 => 38,  104 => 18,  95 => 16,  91 => 15,  79 => 10,  69 => 6,  66 => 5,  60 => 4,  53 => 63,  50 => 62,  48 => 10,  45 => 9,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}

{% block body %}
{% block header %}

    {{include('generic/page_menu.html.twig')}}
    
{% endblock %}

{% block content %} 
    
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
                            <div class=\"alert\">
                            {% for msg in app.session.flashBag.get('success') %}
                                <p class=\"green\" style=\"color:green;\"> {{msg}} </p>
                            {% endfor %}
                            </div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Admin Panel Lists</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\" style=\"padding:50px;\">
\t\t\t\t\t\t
                                            <table class=\"table-striped\">
        <thead>
            <tr>
                <th>Who?</th>
                <th>Wer?</th>
                <th>Info</th>
                <th>email</th>
                <th>Avatar</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td>
                       
                        <a href=\"{{path('user_show_url', {'user_name':user.sname})}}\">
                            {{ user.name }}
                        </a>
                    </td>
                    <td>{{ user.sname }}</td>
                    <td>{{ user.info }}</td>
                    <td> <img src=\"{{asset( user.image)}}\" width=\"42\" height=\"42\"></td>
                    <td>{{ user.email }}</td>
                    <td>
                        <a href=\"{{path('admin_users_edit', {'id':user.id})}}\" ><img src=\"{{asset('images/edits.png')}}\" class=\"btnedt\"></a>
                    </td>
                </tr>
           {% endfor %}
        </tbody>
    </table> 
                                            
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
  {% endblock %}

{% block footer %}

    {{include('generic/footer_page.html.twig')}}
    
{% endblock %}
{% endblock %}

";
    }
}
