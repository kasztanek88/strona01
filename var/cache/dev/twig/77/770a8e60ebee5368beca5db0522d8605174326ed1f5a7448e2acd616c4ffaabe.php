<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_0e712c977f1c46583dd2c37e64e0b6b9a2cc01ba1175a993bfd39ec5b9d99cde extends Twig_Template
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
        $__internal_07bfa6aab43dd668bd966c138ea6194136acf4b135aff98dab27e6fe2dc798de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bfa6aab43dd668bd966c138ea6194136acf4b135aff98dab27e6fe2dc798de->enter($__internal_07bfa6aab43dd668bd966c138ea6194136acf4b135aff98dab27e6fe2dc798de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_07bfa6aab43dd668bd966c138ea6194136acf4b135aff98dab27e6fe2dc798de->leave($__internal_07bfa6aab43dd668bd966c138ea6194136acf4b135aff98dab27e6fe2dc798de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
