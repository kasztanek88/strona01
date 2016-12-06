<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2e91eda8d14ed2312a3ce4eeb5c96d5510a74309fec5d5c775f0f91ee52046fe extends Twig_Template
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
        $__internal_c30c7619a4a7a7cab72cf19e9ccafffc993014d20914ac0e30dfdb53c68deebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30c7619a4a7a7cab72cf19e9ccafffc993014d20914ac0e30dfdb53c68deebf->enter($__internal_c30c7619a4a7a7cab72cf19e9ccafffc993014d20914ac0e30dfdb53c68deebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c30c7619a4a7a7cab72cf19e9ccafffc993014d20914ac0e30dfdb53c68deebf->leave($__internal_c30c7619a4a7a7cab72cf19e9ccafffc993014d20914ac0e30dfdb53c68deebf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
