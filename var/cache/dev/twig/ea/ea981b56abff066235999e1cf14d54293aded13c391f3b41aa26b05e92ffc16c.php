<?php

/* :test:test.html.twig */
class __TwigTemplate_cf9ac8d5b9c465eeba4218b1b0c14f949c945f78ebb6ff15a66a935ffe6e54a1 extends Twig_Template
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
        $__internal_3bed075a3e5418ed4e97e0bf3bd3e6b28bd69ef5fb65480e0a70c653e80d267d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bed075a3e5418ed4e97e0bf3bd3e6b28bd69ef5fb65480e0a70c653e80d267d->enter($__internal_3bed075a3e5418ed4e97e0bf3bd3e6b28bd69ef5fb65480e0a70c653e80d267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test:test.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
";
        
        $__internal_3bed075a3e5418ed4e97e0bf3bd3e6b28bd69ef5fb65480e0a70c653e80d267d->leave($__internal_3bed075a3e5418ed4e97e0bf3bd3e6b28bd69ef5fb65480e0a70c653e80d267d_prof);

    }

    public function getTemplateName()
    {
        return ":test:test.html.twig";
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
