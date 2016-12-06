<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9ee9e62a304d9313b5c4fd9aa7f919c59b4312b058db5702abf60c1d31fbcbfd extends Twig_Template
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
        $__internal_2ae0e7f483c134d72c8b614f3cd494b9ae51a3f891e940d71d038656cbd3a558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae0e7f483c134d72c8b614f3cd494b9ae51a3f891e940d71d038656cbd3a558->enter($__internal_2ae0e7f483c134d72c8b614f3cd494b9ae51a3f891e940d71d038656cbd3a558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2ae0e7f483c134d72c8b614f3cd494b9ae51a3f891e940d71d038656cbd3a558->leave($__internal_2ae0e7f483c134d72c8b614f3cd494b9ae51a3f891e940d71d038656cbd3a558_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
