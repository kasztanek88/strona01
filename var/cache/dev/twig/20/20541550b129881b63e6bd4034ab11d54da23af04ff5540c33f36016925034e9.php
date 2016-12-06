<?php

/* articles/show_articles.html.twig */
class __TwigTemplate_fd2fb71152cd68be2cd013fb6b07a9ded6a7e4ab9cb137ab8e38bd3f2e50769b extends Twig_Template
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
        $__internal_df5c3b5a2a1f209fd9f4fb3a6e500d70d997dcb6eaf5def25d3fe7193331061e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5c3b5a2a1f209fd9f4fb3a6e500d70d997dcb6eaf5def25d3fe7193331061e->enter($__internal_df5c3b5a2a1f209fd9f4fb3a6e500d70d997dcb6eaf5def25d3fe7193331061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show_articles.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        
        $__internal_df5c3b5a2a1f209fd9f4fb3a6e500d70d997dcb6eaf5def25d3fe7193331061e->leave($__internal_df5c3b5a2a1f209fd9f4fb3a6e500d70d997dcb6eaf5def25d3fe7193331061e_prof);

    }

    public function getTemplateName()
    {
        return "articles/show_articles.html.twig";
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
