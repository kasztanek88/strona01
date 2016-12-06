<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b71cb469524905956e188623d62435c776eeacd52a6d6e39507462731438b72e extends Twig_Template
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
        $__internal_064fbdc6849ee5f92a35b3175059536c90907b0a7a74cd7ac249281d24763ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064fbdc6849ee5f92a35b3175059536c90907b0a7a74cd7ac249281d24763ac2->enter($__internal_064fbdc6849ee5f92a35b3175059536c90907b0a7a74cd7ac249281d24763ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_064fbdc6849ee5f92a35b3175059536c90907b0a7a74cd7ac249281d24763ac2->leave($__internal_064fbdc6849ee5f92a35b3175059536c90907b0a7a74cd7ac249281d24763ac2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
