<?php

/* transit/users.html.twig */
class __TwigTemplate_fbe71714edd84fad98d7caf2ca84fb5d1636440fbd37a204f93a65275f8278e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transit/users.html.twig", 1);
        $this->blocks = array(
            'one' => array($this, 'block_one'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_508a7d24493c6564cb087e17a348285b3edabbd5434ad46335cf7a2a9c500976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508a7d24493c6564cb087e17a348285b3edabbd5434ad46335cf7a2a9c500976->enter($__internal_508a7d24493c6564cb087e17a348285b3edabbd5434ad46335cf7a2a9c500976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transit/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_508a7d24493c6564cb087e17a348285b3edabbd5434ad46335cf7a2a9c500976->leave($__internal_508a7d24493c6564cb087e17a348285b3edabbd5434ad46335cf7a2a9c500976_prof);

    }

    // line 3
    public function block_one($context, array $blocks = array())
    {
        $__internal_a9969cbb0a0c2f87a1483923420e7e0efc337efde3ec740ecc735e3a25fc9b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9969cbb0a0c2f87a1483923420e7e0efc337efde3ec740ecc735e3a25fc9b65->enter($__internal_a9969cbb0a0c2f87a1483923420e7e0efc337efde3ec740ecc735e3a25fc9b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        echo " 
    
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Consectetur adipisicing elit</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\">
\t\t\t\t\t\t
                                            <table class=\"table-striped\">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Info</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                <tr>
                    <td><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["user"], "image", array())), "html", null, true);
            echo "\" width=\"42\" height=\"42\"></td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show_url", array("user_name" => $this->getAttribute($context["user"], "name", array()))), "html", null, true);
            echo "\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sname", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "info", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table> 
                                            
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
  ";
        
        $__internal_a9969cbb0a0c2f87a1483923420e7e0efc337efde3ec740ecc735e3a25fc9b65->leave($__internal_a9969cbb0a0c2f87a1483923420e7e0efc337efde3ec740ecc735e3a25fc9b65_prof);

    }

    public function getTemplateName()
    {
        return "transit/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  93 => 35,  89 => 34,  85 => 33,  79 => 30,  75 => 29,  70 => 27,  67 => 26,  63 => 25,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}

{% block one %} 
    
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Consectetur adipisicing elit</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\">
\t\t\t\t\t\t
                                            <table class=\"table-striped\">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Info</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td><img src=\"{{asset( user.image)}}\" width=\"42\" height=\"42\"></td>
                    <td>
                        <a href=\"{{path('user_show_url', {'user_name':user.name})}}\">
                            {{ user.name }}
                        </a>
                    </td>
                    <td>{{ user.sname }}</td>
                    <td>{{ user.info }}</td>
                    <td>{{ user.email }}</td>
                </tr>
           {% endfor %}
        </tbody>
    </table> 
                                            
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
  {% endblock %}";
    }
}
