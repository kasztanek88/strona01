<?php

/* :transit:users.html.twig */
class __TwigTemplate_9badf8dc04d1a79ee23eeb0afbc227e62c362f2952babdbc66df5153e7e3188a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transit:users.html.twig", 1);
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
        $__internal_7b34ae9d59c247711612507c4d26431bd2fd50fdae0ed6ca9ca6e46c0c4d2d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b34ae9d59c247711612507c4d26431bd2fd50fdae0ed6ca9ca6e46c0c4d2d5b->enter($__internal_7b34ae9d59c247711612507c4d26431bd2fd50fdae0ed6ca9ca6e46c0c4d2d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transit:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b34ae9d59c247711612507c4d26431bd2fd50fdae0ed6ca9ca6e46c0c4d2d5b->leave($__internal_7b34ae9d59c247711612507c4d26431bd2fd50fdae0ed6ca9ca6e46c0c4d2d5b_prof);

    }

    // line 3
    public function block_one($context, array $blocks = array())
    {
        $__internal_e1a0ee8df984d4d0067d03c7bc44137e821bf376df25397d6b4040c7ff1d2915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a0ee8df984d4d0067d03c7bc44137e821bf376df25397d6b4040c7ff1d2915->enter($__internal_e1a0ee8df984d4d0067d03c7bc44137e821bf376df25397d6b4040c7ff1d2915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

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
        
        $__internal_e1a0ee8df984d4d0067d03c7bc44137e821bf376df25397d6b4040c7ff1d2915->leave($__internal_e1a0ee8df984d4d0067d03c7bc44137e821bf376df25397d6b4040c7ff1d2915_prof);

    }

    public function getTemplateName()
    {
        return ":transit:users.html.twig";
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
