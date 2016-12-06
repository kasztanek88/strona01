<?php

/* :articles:show_articles.html.twig */
class __TwigTemplate_9ae19b749d57d37f32d1a9a695e5e92024d03133813129893451c1b60ccc379a extends Twig_Template
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
        $__internal_d11ec55b7e220efe39a9b49cee3560d01d8a107c34b9c5bba9fce20eeecaaeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11ec55b7e220efe39a9b49cee3560d01d8a107c34b9c5bba9fce20eeecaaeb9->enter($__internal_d11ec55b7e220efe39a9b49cee3560d01d8a107c34b9c5bba9fce20eeecaaeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:show_articles.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        
        $__internal_d11ec55b7e220efe39a9b49cee3560d01d8a107c34b9c5bba9fce20eeecaaeb9->leave($__internal_d11ec55b7e220efe39a9b49cee3560d01d8a107c34b9c5bba9fce20eeecaaeb9_prof);

    }

    public function getTemplateName()
    {
        return ":articles:show_articles.html.twig";
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
        return "{{ dump(article) }}";
    }
}
