<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4f17b795d34de7667cd49d5b19a42f2cd7164d0feebc86d92e1996c1513581d5 extends Twig_Template
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
        $__internal_effef6086ab05ef815436b66cb894c480a91d3b0db8429a1c52fec6cecefc42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effef6086ab05ef815436b66cb894c480a91d3b0db8429a1c52fec6cecefc42e->enter($__internal_effef6086ab05ef815436b66cb894c480a91d3b0db8429a1c52fec6cecefc42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_effef6086ab05ef815436b66cb894c480a91d3b0db8429a1c52fec6cecefc42e->leave($__internal_effef6086ab05ef815436b66cb894c480a91d3b0db8429a1c52fec6cecefc42e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
