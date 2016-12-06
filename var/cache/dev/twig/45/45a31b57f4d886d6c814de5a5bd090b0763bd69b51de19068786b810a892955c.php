<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fb5eb41b5c4870d56e2dc9079735a0fc3141da16a1b0262fa790a80ac13b6954 extends Twig_Template
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
        $__internal_3e60997f80fe36567a9311f4bcd04629fb9bfe75bedff9be16b6f6ff7061413d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e60997f80fe36567a9311f4bcd04629fb9bfe75bedff9be16b6f6ff7061413d->enter($__internal_3e60997f80fe36567a9311f4bcd04629fb9bfe75bedff9be16b6f6ff7061413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3e60997f80fe36567a9311f4bcd04629fb9bfe75bedff9be16b6f6ff7061413d->leave($__internal_3e60997f80fe36567a9311f4bcd04629fb9bfe75bedff9be16b6f6ff7061413d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
