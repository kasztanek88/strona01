<?php

/* security/resetting.html.twig */
class __TwigTemplate_adbb71288636bc66c29324d59aed813dc8201faf2dcec3e062e63ea0c6e1c49b extends Twig_Template
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
        $__internal_a89ec6f320a0d7979a2d38306defc5929dab1edba76cc70d8d739c18cfc12702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89ec6f320a0d7979a2d38306defc5929dab1edba76cc70d8d739c18cfc12702->enter($__internal_a89ec6f320a0d7979a2d38306defc5929dab1edba76cc70d8d739c18cfc12702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/resetting.html.twig"));

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
        
        $__internal_a89ec6f320a0d7979a2d38306defc5929dab1edba76cc70d8d739c18cfc12702->leave($__internal_a89ec6f320a0d7979a2d38306defc5929dab1edba76cc70d8d739c18cfc12702_prof);

    }

    public function getTemplateName()
    {
        return "security/resetting.html.twig";
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
