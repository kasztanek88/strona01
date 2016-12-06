<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1a03adc41a8af318936402097bbc6240cd9182e1a351c4a1bb0153500bd27eaf extends Twig_Template
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
        $__internal_af37bdcb716132942c64a29a70aae31021343ae226a5d6f7b5d1e93e27c27be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af37bdcb716132942c64a29a70aae31021343ae226a5d6f7b5d1e93e27c27be8->enter($__internal_af37bdcb716132942c64a29a70aae31021343ae226a5d6f7b5d1e93e27c27be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_af37bdcb716132942c64a29a70aae31021343ae226a5d6f7b5d1e93e27c27be8->leave($__internal_af37bdcb716132942c64a29a70aae31021343ae226a5d6f7b5d1e93e27c27be8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa31da38a01de1a2384b9d56a4289dd9624b16f0d9daeb5dc26f72de2c7d2088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa31da38a01de1a2384b9d56a4289dd9624b16f0d9daeb5dc26f72de2c7d2088->enter($__internal_fa31da38a01de1a2384b9d56a4289dd9624b16f0d9daeb5dc26f72de2c7d2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fa31da38a01de1a2384b9d56a4289dd9624b16f0d9daeb5dc26f72de2c7d2088->leave($__internal_fa31da38a01de1a2384b9d56a4289dd9624b16f0d9daeb5dc26f72de2c7d2088_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
