<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_dd9697b6a1c43c841239e060f3f086e2c3517df2e4342437f6ff35fc6165e048 extends Twig_Template
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
        $__internal_335882e4937c3b1c569779a1be07dcfdd796ece7d85d4c9d419a75be7b3dba9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335882e4937c3b1c569779a1be07dcfdd796ece7d85d4c9d419a75be7b3dba9d->enter($__internal_335882e4937c3b1c569779a1be07dcfdd796ece7d85d4c9d419a75be7b3dba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_335882e4937c3b1c569779a1be07dcfdd796ece7d85d4c9d419a75be7b3dba9d->leave($__internal_335882e4937c3b1c569779a1be07dcfdd796ece7d85d4c9d419a75be7b3dba9d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
