<?php

/* :security:resetting.html.twig */
class __TwigTemplate_a71527a8aabdac9d5648b2dace9a890eccc839714b552be32b2f3dd29d2acaec extends Twig_Template
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
        $__internal_bbe9f60bfdfb07d7b0cf4ead3d093f2e0539628d4f6b275f8b27db38cf62f988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe9f60bfdfb07d7b0cf4ead3d093f2e0539628d4f6b275f8b27db38cf62f988->enter($__internal_bbe9f60bfdfb07d7b0cf4ead3d093f2e0539628d4f6b275f8b27db38cf62f988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:resetting.html.twig"));

        // line 1
        echo "<div class=\"container\" style=\"padding:50px;\">
    <div class=\"row uniform 50%\">
        <div class=\"6u 12u\$(4)\"\">
        <h1>New Genus</h1>
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "email", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "birthdate", array()), 'row');
        echo "
        ";
        // line 9
        echo "
        <button type=\"submit\" class=\"button\" formnovalidate>Send me a new password</button>
        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_end');
        echo "
    </div>
</div>
</div>";
        
        $__internal_bbe9f60bfdfb07d7b0cf4ead3d093f2e0539628d4f6b275f8b27db38cf62f988->leave($__internal_bbe9f60bfdfb07d7b0cf4ead3d093f2e0539628d4f6b275f8b27db38cf62f988_prof);

    }

    public function getTemplateName()
    {
        return ":security:resetting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  40 => 9,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\" style=\"padding:50px;\">
    <div class=\"row uniform 50%\">
        <div class=\"6u 12u\$(4)\"\">
        <h1>New Genus</h1>
        {{ form_start(userForm) }}
        {{ form_row(userForm.email) }}
        {{ form_row(userForm.birthdate) }}
        {# form_row(userForm.sname, {'label' : 'Surname'}) #}

        <button type=\"submit\" class=\"button\" formnovalidate>Send me a new password</button>
        {{ form_end(userForm) }}
    </div>
</div>
</div>";
    }
}
