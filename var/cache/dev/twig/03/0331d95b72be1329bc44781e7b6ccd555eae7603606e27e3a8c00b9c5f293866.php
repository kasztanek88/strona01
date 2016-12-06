<?php

/* generic/blank_page.html.twig */
class __TwigTemplate_b2760b93f49d0bd0a1c51786ac2716bc1a794aefd2eade8bac9ca21176ecf017 extends Twig_Template
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
        $__internal_d739af06a61a0eb925284daf8074e1cd6b659fb54b471734d18cfbfd19ceb62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d739af06a61a0eb925284daf8074e1cd6b659fb54b471734d18cfbfd19ceb62f->enter($__internal_d739af06a61a0eb925284daf8074e1cd6b659fb54b471734d18cfbfd19ceb62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "generic/blank_page.html.twig"));

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
        
        $__internal_d739af06a61a0eb925284daf8074e1cd6b659fb54b471734d18cfbfd19ceb62f->leave($__internal_d739af06a61a0eb925284daf8074e1cd6b659fb54b471734d18cfbfd19ceb62f_prof);

    }

    public function getTemplateName()
    {
        return "generic/blank_page.html.twig";
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
