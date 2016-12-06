<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_06c05023148bd6293681610e78394c96a2a8a6f9c11240ab856a6f06b626afa2 extends Twig_Template
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
        $__internal_1727678f2bcf31bfebc1ac0e2a7173d706026fdcd6e70fee096d3ebc45e4aa38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1727678f2bcf31bfebc1ac0e2a7173d706026fdcd6e70fee096d3ebc45e4aa38->enter($__internal_1727678f2bcf31bfebc1ac0e2a7173d706026fdcd6e70fee096d3ebc45e4aa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1727678f2bcf31bfebc1ac0e2a7173d706026fdcd6e70fee096d3ebc45e4aa38->leave($__internal_1727678f2bcf31bfebc1ac0e2a7173d706026fdcd6e70fee096d3ebc45e4aa38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
