<?php

/* transit/projects.html.twig */
class __TwigTemplate_ed76bcbc95a2bdee939a62fb7d622fe93b6f9474807a251af9fc1556a50289f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transit/projects.html.twig", 1);
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
        $__internal_962e578fdf2ac46f57302f6899707fa366cc7a1048ea1bf38a1943d4d13548bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962e578fdf2ac46f57302f6899707fa366cc7a1048ea1bf38a1943d4d13548bb->enter($__internal_962e578fdf2ac46f57302f6899707fa366cc7a1048ea1bf38a1943d4d13548bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transit/projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_962e578fdf2ac46f57302f6899707fa366cc7a1048ea1bf38a1943d4d13548bb->leave($__internal_962e578fdf2ac46f57302f6899707fa366cc7a1048ea1bf38a1943d4d13548bb_prof);

    }

    // line 3
    public function block_one($context, array $blocks = array())
    {
        $__internal_ee0aa38a114280b1e90617318396888268f98bd158b2440d444da688645da438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0aa38a114280b1e90617318396888268f98bd158b2440d444da688645da438->enter($__internal_ee0aa38a114280b1e90617318396888268f98bd158b2440d444da688645da438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

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
        
        $__internal_ee0aa38a114280b1e90617318396888268f98bd158b2440d444da688645da438->leave($__internal_ee0aa38a114280b1e90617318396888268f98bd158b2440d444da688645da438_prof);

    }

    public function getTemplateName()
    {
        return "transit/projects.html.twig";
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
