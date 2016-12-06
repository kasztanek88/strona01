<?php

/* main/homepage.html.twig */
class __TwigTemplate_2f159f1eba07085a8c09f331ae194bafa45501c82ffe1f2a50eed43cd8b66e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'one' => array($this, 'block_one'),
            'two' => array($this, 'block_two'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9144b9ab16f0a6d0238fd9e4bac5c899542884c8dcca84c60e3636b9c89e886f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9144b9ab16f0a6d0238fd9e4bac5c899542884c8dcca84c60e3636b9c89e886f->enter($__internal_9144b9ab16f0a6d0238fd9e4bac5c899542884c8dcca84c60e3636b9c89e886f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9144b9ab16f0a6d0238fd9e4bac5c899542884c8dcca84c60e3636b9c89e886f->leave($__internal_9144b9ab16f0a6d0238fd9e4bac5c899542884c8dcca84c60e3636b9c89e886f_prof);

    }

    // line 3
    public function block_one($context, array $blocks = array())
    {
        $__internal_34682d154ae9adb025c7529b94b62fd4ef002883334ce5b129b455af2bce279c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34682d154ae9adb025c7529b94b62fd4ef002883334ce5b129b455af2bce279c->enter($__internal_34682d154ae9adb025c7529b94b62fd4ef002883334ce5b129b455af2bce279c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        echo " 
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array())) : ("User")), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\">
\t\t\t\t\t\t<div class=\"4u 12u\$(medium)\">
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color1 fa-cloud\"></i>
\t\t\t\t\t\t\t\t<h3>Lorem ipsum dolor</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u 12u\$(medium)\">
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color9 fa-desktop\"></i>
\t\t\t\t\t\t\t\t<h3>Consectetur adipisicing</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u\$ 12u\$(medium)\">
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color6 fa-rocket\"></i>
\t\t\t\t\t\t\t\t<h3>Adipisicing elit totam</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
  ";
        
        $__internal_34682d154ae9adb025c7529b94b62fd4ef002883334ce5b129b455af2bce279c->leave($__internal_34682d154ae9adb025c7529b94b62fd4ef002883334ce5b129b455af2bce279c_prof);

    }

    // line 38
    public function block_two($context, array $blocks = array())
    {
        $__internal_7f021e8a926de22a9f7b1dfaa3af21a0afc71d36b14debd601c97cd3140e322b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f021e8a926de22a9f7b1dfaa3af21a0afc71d36b14debd601c97cd3140e322b->enter($__internal_7f021e8a926de22a9f7b1dfaa3af21a0afc71d36b14debd601c97cd3140e322b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "two"));

        echo " 
      <!-- Two -->
\t\t\t<section id=\"two\" class=\"wrapper style2 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Lorem ipsum dolor sit</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p>
\t\t\t\t\t</header>
\t\t\t\t\t<section class=\"profiles\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/profile_placeholder.gif"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Lorem ipsum</h4>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u\$(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/profile_placeholder.gif"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Voluptatem dolores</h4>
\t\t\t\t\t\t\t\t<p>Ullam nihil repudi</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/profile_placeholder.gif"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Doloremque quo</h4>
\t\t\t\t\t\t\t\t<p>Harum corrupti quia</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u\$ 6u\$(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/profile_placeholder.gif"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Voluptatem dicta</h4>
\t\t\t\t\t\t\t\t<p>Et natus sapiente</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<footer>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolore illum, temporibus veritatis eligendi, aliquam, dolor enim itaque veniam aut eaque sequi qui quia vitae pariatur repudiandae ab dignissimos ex!</p>
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button big\">Lorem ipsum dolor sit</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</section>
  ";
        
        $__internal_7f021e8a926de22a9f7b1dfaa3af21a0afc71d36b14debd601c97cd3140e322b->leave($__internal_7f021e8a926de22a9f7b1dfaa3af21a0afc71d36b14debd601c97cd3140e322b_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 64,  117 => 59,  109 => 54,  101 => 49,  83 => 38,  47 => 8,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\"  %}

  {% block one %} 
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>{{ app.user ? app.user.email : 'User'}}</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
\t\t\t\t\t</header>
\t\t\t\t\t<div class=\"row 150%\">
\t\t\t\t\t\t<div class=\"4u 12u\$(medium)\">
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color1 fa-cloud\"></i>
\t\t\t\t\t\t\t\t<h3>Lorem ipsum dolor</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u 12u\$(medium)\">
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color9 fa-desktop\"></i>
\t\t\t\t\t\t\t\t<h3>Consectetur adipisicing</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u\$ 12u\$(medium)\">
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color6 fa-rocket\"></i>
\t\t\t\t\t\t\t\t<h3>Adipisicing elit totam</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
  {% endblock %}
  
  {% block two %} 
      <!-- Two -->
\t\t\t<section id=\"two\" class=\"wrapper style2 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Lorem ipsum dolor sit</h2>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p>
\t\t\t\t\t</header>
\t\t\t\t\t<section class=\"profiles\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/profile_placeholder.gif')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Lorem ipsum</h4>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u\$(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/profile_placeholder.gif')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Voluptatem dolores</h4>
\t\t\t\t\t\t\t\t<p>Ullam nihil repudi</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/profile_placeholder.gif')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Doloremque quo</h4>
\t\t\t\t\t\t\t\t<p>Harum corrupti quia</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u\$ 6u\$(medium) 12u\$(xsmall) profile\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/profile_placeholder.gif')}}\" alt=\"\" />
\t\t\t\t\t\t\t\t<h4>Voluptatem dicta</h4>
\t\t\t\t\t\t\t\t<p>Et natus sapiente</p>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<footer>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolore illum, temporibus veritatis eligendi, aliquam, dolor enim itaque veniam aut eaque sequi qui quia vitae pariatur repudiandae ab dignissimos ex!</p>
\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button big\">Lorem ipsum dolor sit</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</section>
  {% endblock %}";
    }
}
