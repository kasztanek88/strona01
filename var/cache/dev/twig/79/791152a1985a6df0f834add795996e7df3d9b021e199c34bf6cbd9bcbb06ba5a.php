<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3b462f4ddbf3c6b9651e2239d19b4a8c95d0697a5cac92308f66a28ffc8c6b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c797f6b24f5b2fbd2f061af9d404146f306e0f45697c1c6f1c5c63f607e21358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c797f6b24f5b2fbd2f061af9d404146f306e0f45697c1c6f1c5c63f607e21358->enter($__internal_c797f6b24f5b2fbd2f061af9d404146f306e0f45697c1c6f1c5c63f607e21358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c797f6b24f5b2fbd2f061af9d404146f306e0f45697c1c6f1c5c63f607e21358->leave($__internal_c797f6b24f5b2fbd2f061af9d404146f306e0f45697c1c6f1c5c63f607e21358_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca0e80121ebd1f8e0fbfac7502ec08b818769df80e3bdd2e08160f5e7f7a442b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0e80121ebd1f8e0fbfac7502ec08b818769df80e3bdd2e08160f5e7f7a442b->enter($__internal_ca0e80121ebd1f8e0fbfac7502ec08b818769df80e3bdd2e08160f5e7f7a442b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ca0e80121ebd1f8e0fbfac7502ec08b818769df80e3bdd2e08160f5e7f7a442b->leave($__internal_ca0e80121ebd1f8e0fbfac7502ec08b818769df80e3bdd2e08160f5e7f7a442b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b007159435f136df9535b45490fc452921a44413b9aea02507c31b526f38c99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b007159435f136df9535b45490fc452921a44413b9aea02507c31b526f38c99a->enter($__internal_b007159435f136df9535b45490fc452921a44413b9aea02507c31b526f38c99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b007159435f136df9535b45490fc452921a44413b9aea02507c31b526f38c99a->leave($__internal_b007159435f136df9535b45490fc452921a44413b9aea02507c31b526f38c99a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8211e2eb4f88b496ceb2da4502565172d4141531ae10ed684f046c08824555a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8211e2eb4f88b496ceb2da4502565172d4141531ae10ed684f046c08824555a8->enter($__internal_8211e2eb4f88b496ceb2da4502565172d4141531ae10ed684f046c08824555a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8211e2eb4f88b496ceb2da4502565172d4141531ae10ed684f046c08824555a8->leave($__internal_8211e2eb4f88b496ceb2da4502565172d4141531ae10ed684f046c08824555a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
