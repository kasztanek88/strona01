<?php

/* :transit:projects.html.twig */
class __TwigTemplate_d823210aae01ab804f67dc38066e2a7f84c15d4308effa72b41c730e54a4a16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":transit:projects.html.twig", 1);
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
        $__internal_4b8227ee8888a37ca1565a86f894b19597ae9d3ad899fc072c48b1549288f0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8227ee8888a37ca1565a86f894b19597ae9d3ad899fc072c48b1549288f0fa->enter($__internal_4b8227ee8888a37ca1565a86f894b19597ae9d3ad899fc072c48b1549288f0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":transit:projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8227ee8888a37ca1565a86f894b19597ae9d3ad899fc072c48b1549288f0fa->leave($__internal_4b8227ee8888a37ca1565a86f894b19597ae9d3ad899fc072c48b1549288f0fa_prof);

    }

    // line 3
    public function block_one($context, array $blocks = array())
    {
        $__internal_dd88aa43eb8dfae2e1743f9612b67a27809990e3b30921416c0aef649208cb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd88aa43eb8dfae2e1743f9612b67a27809990e3b30921416c0aef649208cb35->enter($__internal_dd88aa43eb8dfae2e1743f9612b67a27809990e3b30921416c0aef649208cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        echo " 
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Our Projects</h2>
\t\t\t\t\t\t<p>This is list of projects realized by ours employees</p>
\t\t\t\t\t</header>
                                    
\t\t\t\t\t<div class=\"row 150%\">
                                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")));
        foreach ($context['_seq'] as $context["_key"] => $context["projects"]) {
            // line 14
            echo "\t\t\t\t\t\t<div class=\"4u 12u\$(medium)\">
                                                    
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color1 fa-cloud\"></i>
                                                                
\t\t\t\t\t\t\t\t<h3>Project ";
            // line 19
            echo twig_escape_filter($this->env, $context["projects"], "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
                                                                
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projects'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t</div>
                                      
\t\t\t\t</div>
\t\t\t</section>
  ";
        
        $__internal_dd88aa43eb8dfae2e1743f9612b67a27809990e3b30921416c0aef649208cb35->leave($__internal_dd88aa43eb8dfae2e1743f9612b67a27809990e3b30921416c0aef649208cb35_prof);

    }

    public function getTemplateName()
    {
        return ":transit:projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  62 => 19,  55 => 14,  51 => 13,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}

{% block one %} 
      <!-- One -->
\t\t\t<section id=\"one\" class=\"wrapper style1 special\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>Our Projects</h2>
\t\t\t\t\t\t<p>This is list of projects realized by ours employees</p>
\t\t\t\t\t</header>
                                    
\t\t\t\t\t<div class=\"row 150%\">
                                            {% for projects in project %}
\t\t\t\t\t\t<div class=\"4u 12u\$(medium)\">
                                                    
\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t<i class=\"icon big rounded color1 fa-cloud\"></i>
                                                                
\t\t\t\t\t\t\t\t<h3>Project {{projects}}</h3>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
                                                                
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
                                      
\t\t\t\t</div>
\t\t\t</section>
  {% endblock %}
";
    }
}
