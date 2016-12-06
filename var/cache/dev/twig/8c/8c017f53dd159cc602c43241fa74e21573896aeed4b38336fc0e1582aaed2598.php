<?php

/* admin/users/userlist.html.twig */
class __TwigTemplate_f07f2b75f935116786ed6ee71279c1a9ce48ee6dca2a0e9487288cc675684573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/userlist.html.twig", 1);
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
        $__internal_f766e11ddcc980abe046f743d5d851bfe5ea0d0a1c0a6e4180c555c71eb67285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f766e11ddcc980abe046f743d5d851bfe5ea0d0a1c0a6e4180c555c71eb67285->enter($__internal_f766e11ddcc980abe046f743d5d851bfe5ea0d0a1c0a6e4180c555c71eb67285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/userlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f766e11ddcc980abe046f743d5d851bfe5ea0d0a1c0a6e4180c555c71eb67285->leave($__internal_f766e11ddcc980abe046f743d5d851bfe5ea0d0a1c0a6e4180c555c71eb67285_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40dc5e455478188c7e52c4c0d9c6066ceab937e6a0715aa58535a88b40511998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dc5e455478188c7e52c4c0d9c6066ceab937e6a0715aa58535a88b40511998->enter($__internal_40dc5e455478188c7e52c4c0d9c6066ceab937e6a0715aa58535a88b40511998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_40dc5e455478188c7e52c4c0d9c6066ceab937e6a0715aa58535a88b40511998->leave($__internal_40dc5e455478188c7e52c4c0d9c6066ceab937e6a0715aa58535a88b40511998_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_f29d00c19a09fea4a96da35cb4af0ebb9c0c6b74033079d64e841fbc7a41794e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29d00c19a09fea4a96da35cb4af0ebb9c0c6b74033079d64e841fbc7a41794e->enter($__internal_f29d00c19a09fea4a96da35cb4af0ebb9c0c6b74033079d64e841fbc7a41794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_f29d00c19a09fea4a96da35cb4af0ebb9c0c6b74033079d64e841fbc7a41794e->leave($__internal_f29d00c19a09fea4a96da35cb4af0ebb9c0c6b74033079d64e841fbc7a41794e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef612c6bec7b3d4d97211eda88da2f9cff7bcbc6ebc4655e876670ad9c6df5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef612c6bec7b3d4d97211eda88da2f9cff7bcbc6ebc4655e876670ad9c6df5fa->enter($__internal_ef612c6bec7b3d4d97211eda88da2f9cff7bcbc6ebc4655e876670ad9c6df5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t\t\t\t\t<h2>Admin USER Lists</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\" style=\"padding:50px;\">
\t\t\t\t\t\t
                                            <table class=\"table-striped\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Role</th>
                ";
        // line 32
        echo "                
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_user_url", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
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
        // line 45
        echo "        </tbody>
    </table> 
                                            
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
  ";
        
        $__internal_ef612c6bec7b3d4d97211eda88da2f9cff7bcbc6ebc4655e876670ad9c6df5fa->leave($__internal_ef612c6bec7b3d4d97211eda88da2f9cff7bcbc6ebc4655e876670ad9c6df5fa_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9e88095167b450cdda82387a11761ed783fdd29d8599f57a07ce8da0edc74819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e88095167b450cdda82387a11761ed783fdd29d8599f57a07ce8da0edc74819->enter($__internal_9e88095167b450cdda82387a11761ed783fdd29d8599f57a07ce8da0edc74819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "
    ";
        // line 55
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_9e88095167b450cdda82387a11761ed783fdd29d8599f57a07ce8da0edc74819->leave($__internal_9e88095167b450cdda82387a11761ed783fdd29d8599f57a07ce8da0edc74819_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/userlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 55,  172 => 54,  166 => 53,  153 => 45,  141 => 41,  136 => 39,  132 => 38,  129 => 37,  125 => 36,  119 => 32,  104 => 18,  95 => 16,  91 => 15,  79 => 10,  69 => 6,  66 => 5,  60 => 4,  53 => 53,  50 => 52,  48 => 10,  45 => 9,  43 => 4,  37 => 3,  11 => 1,);
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
\t\t\t\t\t\t<h2>Admin USER Lists</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\" style=\"padding:50px;\">
\t\t\t\t\t\t
                                            <table class=\"table-striped\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Role</th>
                {#<th>Edit</th>#}
                
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td>{{ user.email }}</td>
                    <td>{{ user.roles.0 }}</td>
                    <td>
                        <a href=\"{{path('edit_user_url', {'id':user.id})}}\" ><img src=\"{{asset('images/edits.png')}}\" class=\"btnedt\"></a>
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
