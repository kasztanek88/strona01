<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b3899e21f96a26796be012919432a1a282cc6881352e35f3e95979e358f0e1a2 extends Twig_Template
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
        $__internal_43310a10ee35feb1b749fc553f68a9f9ecc472afb49777f9721ffc7c9b19e77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43310a10ee35feb1b749fc553f68a9f9ecc472afb49777f9721ffc7c9b19e77d->enter($__internal_43310a10ee35feb1b749fc553f68a9f9ecc472afb49777f9721ffc7c9b19e77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_43310a10ee35feb1b749fc553f68a9f9ecc472afb49777f9721ffc7c9b19e77d->leave($__internal_43310a10ee35feb1b749fc553f68a9f9ecc472afb49777f9721ffc7c9b19e77d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
