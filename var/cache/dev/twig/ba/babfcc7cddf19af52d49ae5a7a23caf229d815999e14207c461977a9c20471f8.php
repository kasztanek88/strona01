<?php

/* :generic:blank_page.html.twig */
class __TwigTemplate_5485289af3469f1225901772c07bf216b9e22b831c3665608308ccbe2a58a8c3 extends Twig_Template
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
        $__internal_3aa83bb13a1bd16435ccf2e4b17ba76ec6847f1d75d97cbeecc4859724abce0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa83bb13a1bd16435ccf2e4b17ba76ec6847f1d75d97cbeecc4859724abce0f->enter($__internal_3aa83bb13a1bd16435ccf2e4b17ba76ec6847f1d75d97cbeecc4859724abce0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":generic:blank_page.html.twig"));

        // line 1
        echo "<!-- Main -->
\t\t\t<section id=\"main\" class=\"wrapper\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "info", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t</header>

\t\t\t\t\t<h4>Left &amp; Right</h4>


\t\t\t\t\t\t\t<p><span class=\"image left\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array())), "html", null, true);
        echo "\" width=\"2150\" height=\"250\" alt=\"\" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>

\t\t\t\t</div>
\t\t\t</section>
";
        
        $__internal_3aa83bb13a1bd16435ccf2e4b17ba76ec6847f1d75d97cbeecc4859724abce0f->leave($__internal_3aa83bb13a1bd16435ccf2e4b17ba76ec6847f1d75d97cbeecc4859724abce0f_prof);

    }

    public function getTemplateName()
    {
        return ":generic:blank_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  33 => 7,  29 => 6,  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- Main -->
\t\t\t<section id=\"main\" class=\"wrapper\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t<h2>{{user.name}}</h2>
\t\t\t\t\t\t<p>{{user.info}}</p>
\t\t\t\t\t</header>

\t\t\t\t\t<h4>Left &amp; Right</h4>


\t\t\t\t\t\t\t<p><span class=\"image left\"><img src=\"{{asset(user.image )}}\" width=\"2150\" height=\"250\" alt=\"\" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>

\t\t\t\t</div>
\t\t\t</section>
";
    }
}
