<?php

/* test/test.html.twig */
class __TwigTemplate_37c01f39018d5916a14a1bbab01dac5fc7870dd4d74e38415f51c4c90cad9027 extends Twig_Template
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
        $__internal_a7b54dd38cb70fa25cfbbbb97eb0c9ff531a56365eadefe1c44f0dc49b3b3f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b54dd38cb70fa25cfbbbb97eb0c9ff531a56365eadefe1c44f0dc49b3b3f20->enter($__internal_a7b54dd38cb70fa25cfbbbb97eb0c9ff531a56365eadefe1c44f0dc49b3b3f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/test.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
";
        
        $__internal_a7b54dd38cb70fa25cfbbbb97eb0c9ff531a56365eadefe1c44f0dc49b3b3f20->leave($__internal_a7b54dd38cb70fa25cfbbbb97eb0c9ff531a56365eadefe1c44f0dc49b3b3f20_prof);

    }

    public function getTemplateName()
    {
        return "test/test.html.twig";
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
        return "{{ dump() }}
";
    }
}
