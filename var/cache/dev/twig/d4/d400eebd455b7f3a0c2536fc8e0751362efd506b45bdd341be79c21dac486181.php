<?php

/* admin/users/test.html.twig */
class __TwigTemplate_e8665a3292e29512f18284c2b48b6492fc66653767e7885ecd814a421aac12a9 extends Twig_Template
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
        $__internal_49b5b5f055a8840d57f77a2e5ace3161354a74c1384eb97ae3ef830232d457e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b5b5f055a8840d57f77a2e5ace3161354a74c1384eb97ae3ef830232d457e0->enter($__internal_49b5b5f055a8840d57f77a2e5ace3161354a74c1384eb97ae3ef830232d457e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/test.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), 0, array()), "image", array()), "html", null, true);
        echo "

<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), 0, array()), "image", array())), "html", null, true);
        echo "\">";
        
        $__internal_49b5b5f055a8840d57f77a2e5ace3161354a74c1384eb97ae3ef830232d457e0->leave($__internal_49b5b5f055a8840d57f77a2e5ace3161354a74c1384eb97ae3ef830232d457e0_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
{{users.0.image}}

<img src=\"{{ asset(users.0.image) }}\">";
    }
}
