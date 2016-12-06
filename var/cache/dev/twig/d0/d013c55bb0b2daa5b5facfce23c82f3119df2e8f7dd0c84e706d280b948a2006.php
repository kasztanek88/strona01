<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2b88b01f779c14ab703de1ec3e66d3ef9f295adcf4e8161f8a5a4da5de60ab62 extends Twig_Template
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
        $__internal_1f960bfee5ddb608952143086c2cf8c96ec0b4b7f32b3d4fc5e46c10a7418d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f960bfee5ddb608952143086c2cf8c96ec0b4b7f32b3d4fc5e46c10a7418d29->enter($__internal_1f960bfee5ddb608952143086c2cf8c96ec0b4b7f32b3d4fc5e46c10a7418d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_1f960bfee5ddb608952143086c2cf8c96ec0b4b7f32b3d4fc5e46c10a7418d29->leave($__internal_1f960bfee5ddb608952143086c2cf8c96ec0b4b7f32b3d4fc5e46c10a7418d29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
