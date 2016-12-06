<?php

/* generic/page_menu.html.twig */
class __TwigTemplate_ad094d0d21121932afa2b1993d46039ad9d51aaade2b1f02c0793717764616f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff752ac3dcadb3e0c2ffccf9a0db8bddac0b7afc29fd18f4e5cf8db7d30a90cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff752ac3dcadb3e0c2ffccf9a0db8bddac0b7afc29fd18f4e5cf8db7d30a90cb->enter($__internal_ff752ac3dcadb3e0c2ffccf9a0db8bddac0b7afc29fd18f4e5cf8db7d30a90cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "generic/page_menu.html.twig"));

        // line 1
        echo "<!-- Header -->
<header id=\"header\">

\t<h1><a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Homepage</a></h1>

\t<nav id=\"nav\">
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects_url");
        echo "\">Projects</a></li>
\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_url");
        echo "\">Services</a></li>
\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_url");
        echo "\">Our Users</a></li>
\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articels_url");
        echo "\">Articels</a></li>
\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_url");
        echo "\">Contact</a></li>

\t\t\t";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paneladmin_url");
            echo "\">Admin Panel</a></li>
\t\t\t\t<li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_account", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
            echo "\">My Account</a></li>

\t\t\t";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 19
            echo "\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_account");
            echo "\">My Account</a></li>
\t\t\t";
        } else {
            // line 21
            echo "
\t\t\t";
        }
        // line 23
        echo "
\t\t\t";
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 25
            echo "\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\" class=\"button special\">Logout</a></li>
\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\" class=\"button special\">Login</a></li>
\t\t\t";
        }
        // line 29
        echo "\t\t</ul>
\t</nav>
</header>";
        
        $__internal_ff752ac3dcadb3e0c2ffccf9a0db8bddac0b7afc29fd18f4e5cf8db7d30a90cb->leave($__internal_ff752ac3dcadb3e0c2ffccf9a0db8bddac0b7afc29fd18f4e5cf8db7d30a90cb_prof);

    }

    public function getTemplateName()
    {
        return "generic/page_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  89 => 27,  83 => 25,  81 => 24,  78 => 23,  74 => 21,  68 => 19,  62 => 16,  57 => 15,  55 => 14,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- Header -->
<header id=\"header\">

\t<h1><a href=\"{{ path('homepage') }}\">Homepage</a></h1>

\t<nav id=\"nav\">
\t\t<ul>
\t\t\t<li><a href=\"{{ path('projects_url') }}\">Projects</a></li>
\t\t\t<li><a href=\"{{ path('services_url') }}\">Services</a></li>
\t\t\t<li><a href=\"{{ path('users_url') }}\">Our Users</a></li>
\t\t\t<li><a href=\"{{ path('articels_url') }}\">Articels</a></li>
\t\t\t<li><a href=\"{{ path('contact_url') }}\">Contact</a></li>

\t\t\t{% if is_granted('ROLE_ADMIN')%}
\t\t\t\t<li><a href=\"{{ path('paneladmin_url') }}\">Admin Panel</a></li>
\t\t\t\t<li><a href=\"{{ path('user_account', {'email':app.user.email}) }}\">My Account</a></li>

\t\t\t{% elseif is_granted('ROLE_USER')%}
\t\t\t\t<li><a href=\"{{ path('user_account') }}\">My Account</a></li>
\t\t\t{% else %}

\t\t\t{% endif %}

\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t<li><a href=\"{{path('security_logout')}}\" class=\"button special\">Logout</a></li>
\t\t\t{% else %}
\t\t\t\t<li><a href=\"{{path('security_login')}}\" class=\"button special\">Login</a></li>
\t\t\t{% endif %}
\t\t</ul>
\t</nav>
</header>";
    }
}
