<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9c9f300a98337d8a1fd4012bb2a5cb92ba4874500f4bb8b09063b2a38d5cc6d2 extends Twig_Template
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
        $__internal_ba14a29e0ed924b63582ed29b4f89ea209b8141e784aa2c664b828ef49d573d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba14a29e0ed924b63582ed29b4f89ea209b8141e784aa2c664b828ef49d573d7->enter($__internal_ba14a29e0ed924b63582ed29b4f89ea209b8141e784aa2c664b828ef49d573d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ba14a29e0ed924b63582ed29b4f89ea209b8141e784aa2c664b828ef49d573d7->leave($__internal_ba14a29e0ed924b63582ed29b4f89ea209b8141e784aa2c664b828ef49d573d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
