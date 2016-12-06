<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_01659c577eea8ce021273dc4121f2d328e43fdefbd07e9df727f2adb70347d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_122459bb591487190831d73af2c462456853fe1a044bdce5484ac1f99396c641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122459bb591487190831d73af2c462456853fe1a044bdce5484ac1f99396c641->enter($__internal_122459bb591487190831d73af2c462456853fe1a044bdce5484ac1f99396c641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_122459bb591487190831d73af2c462456853fe1a044bdce5484ac1f99396c641->leave($__internal_122459bb591487190831d73af2c462456853fe1a044bdce5484ac1f99396c641_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c15eac42840ca1b6741b72c4d4b34a518e238f7707a410070bd59b5a7863c314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15eac42840ca1b6741b72c4d4b34a518e238f7707a410070bd59b5a7863c314->enter($__internal_c15eac42840ca1b6741b72c4d4b34a518e238f7707a410070bd59b5a7863c314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c15eac42840ca1b6741b72c4d4b34a518e238f7707a410070bd59b5a7863c314->leave($__internal_c15eac42840ca1b6741b72c4d4b34a518e238f7707a410070bd59b5a7863c314_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
