<?php

/* :admin/users:userlist.html.twig */
class __TwigTemplate_d140f858a1c071c54458fb26ce60bae0719ba4745866223fde2ee803de5b724d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin/users:userlist.html.twig", 1);
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
        $__internal_9dcf4dd930566d826471068e14051980dd8c5cc1bf0ad9ccf467e261ee3d3b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcf4dd930566d826471068e14051980dd8c5cc1bf0ad9ccf467e261ee3d3b5f->enter($__internal_9dcf4dd930566d826471068e14051980dd8c5cc1bf0ad9ccf467e261ee3d3b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/users:userlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dcf4dd930566d826471068e14051980dd8c5cc1bf0ad9ccf467e261ee3d3b5f->leave($__internal_9dcf4dd930566d826471068e14051980dd8c5cc1bf0ad9ccf467e261ee3d3b5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e80fbfae6498f24e63a5b82388fc7b19ffc45c667c9efb2cb8deaa2d3c2c73ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80fbfae6498f24e63a5b82388fc7b19ffc45c667c9efb2cb8deaa2d3c2c73ff->enter($__internal_e80fbfae6498f24e63a5b82388fc7b19ffc45c667c9efb2cb8deaa2d3c2c73ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e80fbfae6498f24e63a5b82388fc7b19ffc45c667c9efb2cb8deaa2d3c2c73ff->leave($__internal_e80fbfae6498f24e63a5b82388fc7b19ffc45c667c9efb2cb8deaa2d3c2c73ff_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_efb0c072ae25ed4b9ea9cc5d326cc01e4cbb78db1c4b6026315292b7b807261c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb0c072ae25ed4b9ea9cc5d326cc01e4cbb78db1c4b6026315292b7b807261c->enter($__internal_efb0c072ae25ed4b9ea9cc5d326cc01e4cbb78db1c4b6026315292b7b807261c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
    ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "
    
";
        
        $__internal_efb0c072ae25ed4b9ea9cc5d326cc01e4cbb78db1c4b6026315292b7b807261c->leave($__internal_efb0c072ae25ed4b9ea9cc5d326cc01e4cbb78db1c4b6026315292b7b807261c_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_d512136f6c16caee181adae038737e720d58b434ad9cf1287b6db5368ba2ef33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d512136f6c16caee181adae038737e720d58b434ad9cf1287b6db5368ba2ef33->enter($__internal_d512136f6c16caee181adae038737e720d58b434ad9cf1287b6db5368ba2ef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d512136f6c16caee181adae038737e720d58b434ad9cf1287b6db5368ba2ef33->leave($__internal_d512136f6c16caee181adae038737e720d58b434ad9cf1287b6db5368ba2ef33_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_724d2f2a92321ae422010abab6e9194b91dfec827ebd6d0653e5461909f0a645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724d2f2a92321ae422010abab6e9194b91dfec827ebd6d0653e5461909f0a645->enter($__internal_724d2f2a92321ae422010abab6e9194b91dfec827ebd6d0653e5461909f0a645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "
    ";
        // line 55
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "
    
";
        
        $__internal_724d2f2a92321ae422010abab6e9194b91dfec827ebd6d0653e5461909f0a645->leave($__internal_724d2f2a92321ae422010abab6e9194b91dfec827ebd6d0653e5461909f0a645_prof);

    }

    public function getTemplateName()
    {
        return ":admin/users:userlist.html.twig";
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
