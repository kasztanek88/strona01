<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6aa33a88333827bc0e95218c2fa6cad378b311ad272e6f9344644b6ef385a27e extends Twig_Template
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
        $__internal_c90bc9ac64b7569507bfa5f9cbcbff3f5b2d9c587dfdecd2e59728b95cf1ad51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90bc9ac64b7569507bfa5f9cbcbff3f5b2d9c587dfdecd2e59728b95cf1ad51->enter($__internal_c90bc9ac64b7569507bfa5f9cbcbff3f5b2d9c587dfdecd2e59728b95cf1ad51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c90bc9ac64b7569507bfa5f9cbcbff3f5b2d9c587dfdecd2e59728b95cf1ad51->leave($__internal_c90bc9ac64b7569507bfa5f9cbcbff3f5b2d9c587dfdecd2e59728b95cf1ad51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
