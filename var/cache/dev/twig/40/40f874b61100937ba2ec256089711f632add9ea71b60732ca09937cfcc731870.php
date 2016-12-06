<?php

/* user_account/new_article.html.twig */
class __TwigTemplate_85265a4cd4734e55e4c2efca1d2c9e680a21f0c1965bde996a790e427376cf5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user_account/new_article.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'one' => array($this, 'block_one'),
            'two' => array($this, 'block_two'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d0ce3ef489d8de9a14582bf6660d0b5fccdc8f3302fbb3edc99c101ca8206bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0ce3ef489d8de9a14582bf6660d0b5fccdc8f3302fbb3edc99c101ca8206bf->enter($__internal_3d0ce3ef489d8de9a14582bf6660d0b5fccdc8f3302fbb3edc99c101ca8206bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_account/new_article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0ce3ef489d8de9a14582bf6660d0b5fccdc8f3302fbb3edc99c101ca8206bf->leave($__internal_3d0ce3ef489d8de9a14582bf6660d0b5fccdc8f3302fbb3edc99c101ca8206bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_329583e8d2efa7961ca1400787334c7f9058d6b0f503c99922d6a59f8d12cb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329583e8d2efa7961ca1400787334c7f9058d6b0f503c99922d6a59f8d12cb08->enter($__internal_329583e8d2efa7961ca1400787334c7f9058d6b0f503c99922d6a59f8d12cb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_329583e8d2efa7961ca1400787334c7f9058d6b0f503c99922d6a59f8d12cb08->leave($__internal_329583e8d2efa7961ca1400787334c7f9058d6b0f503c99922d6a59f8d12cb08_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_8da47fa288d0c9d72bd86847c9070fb697a337da6b86712d2ad8c7bfd3ed37e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da47fa288d0c9d72bd86847c9070fb697a337da6b86712d2ad8c7bfd3ed37e9->enter($__internal_8da47fa288d0c9d72bd86847c9070fb697a337da6b86712d2ad8c7bfd3ed37e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_8da47fa288d0c9d72bd86847c9070fb697a337da6b86712d2ad8c7bfd3ed37e9->leave($__internal_8da47fa288d0c9d72bd86847c9070fb697a337da6b86712d2ad8c7bfd3ed37e9_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_25779faa6709376ceaad91c762bbd9b22219222c2e4f1e55c5e986e3b6b35caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25779faa6709376ceaad91c762bbd9b22219222c2e4f1e55c5e986e3b6b35caf->enter($__internal_25779faa6709376ceaad91c762bbd9b22219222c2e4f1e55c5e986e3b6b35caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('one', $context, $blocks);
        // line 30
        echo "        ";
        $this->displayBlock('two', $context, $blocks);
        // line 45
        echo "    ";
        
        $__internal_25779faa6709376ceaad91c762bbd9b22219222c2e4f1e55c5e986e3b6b35caf->leave($__internal_25779faa6709376ceaad91c762bbd9b22219222c2e4f1e55c5e986e3b6b35caf_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_7ae7be242e0c332cee4b39028d5bbf8125f8230389e42695408bb01289c48718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae7be242e0c332cee4b39028d5bbf8125f8230389e42695408bb01289c48718->enter($__internal_7ae7be242e0c332cee4b39028d5bbf8125f8230389e42695408bb01289c48718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        // line 13
        echo "            <div class=\"paneluser\" style=\"padding:50px;>
                <p>ARTICLES</p>
                <nav style=\";\">
            <ul>
                <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_account", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\">My Profile</a></li>
                <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_articles", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\">Articles</a></li>
                <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_misc", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\">Misc</a></li>
            </ul>
            </nav>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_article", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
        echo "\"><p>Add Article</p></a>

            <hr>
            <p>Welcome, ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>

            </div>

        ";
        
        $__internal_7ae7be242e0c332cee4b39028d5bbf8125f8230389e42695408bb01289c48718->leave($__internal_7ae7be242e0c332cee4b39028d5bbf8125f8230389e42695408bb01289c48718_prof);

    }

    // line 30
    public function block_two($context, array $blocks = array())
    {
        $__internal_7863dc32a7d4d42a752461872afa9b78e29de7a6e04fa293e39d155407adca19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7863dc32a7d4d42a752461872afa9b78e29de7a6e04fa293e39d155407adca19->enter($__internal_7863dc32a7d4d42a752461872afa9b78e29de7a6e04fa293e39d155407adca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "two"));

        // line 31
        echo "
        <div class=\"container\" style=\"padding:50px;\">
            <div class=\"row uniform 50%\">
                <div class=\"6u 12u\$(4)\"\">
                <h1>New Article</h1>
                ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newart"]) ? $context["newart"] : $this->getContext($context, "newart")), 'form_start');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newart"]) ? $context["newart"] : $this->getContext($context, "newart")), "title", array()), 'row');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["newart"]) ? $context["newart"] : $this->getContext($context, "newart")), "artContent", array()), 'row', array("label" => "Enter the text"));
        echo "
                <button type=\"submit\" class=\"button\" formnovalidate>Save</button>
                ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["newart"]) ? $context["newart"] : $this->getContext($context, "newart")), 'form_end');
        echo "
            </div>
        </div>
        </div>
    ";
        
        $__internal_7863dc32a7d4d42a752461872afa9b78e29de7a6e04fa293e39d155407adca19->leave($__internal_7863dc32a7d4d42a752461872afa9b78e29de7a6e04fa293e39d155407adca19_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2aaeb41d02e1e5353bac22b4f9a41c1a4be3f00ebf0bc5907db5b24a009ad259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaeb41d02e1e5353bac22b4f9a41c1a4be3f00ebf0bc5907db5b24a009ad259->enter($__internal_2aaeb41d02e1e5353bac22b4f9a41c1a4be3f00ebf0bc5907db5b24a009ad259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "
        ";
        // line 49
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_2aaeb41d02e1e5353bac22b4f9a41c1a4be3f00ebf0bc5907db5b24a009ad259->leave($__internal_2aaeb41d02e1e5353bac22b4f9a41c1a4be3f00ebf0bc5907db5b24a009ad259_prof);

    }

    public function getTemplateName()
    {
        return "user_account/new_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 49,  191 => 48,  185 => 47,  173 => 40,  168 => 38,  164 => 37,  160 => 36,  153 => 31,  147 => 30,  135 => 25,  129 => 22,  123 => 19,  119 => 18,  115 => 17,  109 => 13,  103 => 12,  96 => 45,  93 => 30,  91 => 12,  88 => 11,  82 => 10,  72 => 6,  69 => 5,  63 => 4,  56 => 47,  53 => 46,  51 => 10,  48 => 9,  45 => 4,  39 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.html.twig\" %}

{% block body %}
    {% block header %}

        {{include('generic/page_menu.html.twig')}}

    {% endblock %}

    {% block content %}

        {% block one %}
            <div class=\"paneluser\" style=\"padding:50px;>
                <p>ARTICLES</p>
                <nav style=\";\">
            <ul>
                <li><a href=\"{{ path('user_account', {'email':app.user.email}) }}\">My Profile</a></li>
                <li><a href=\"{{ path('user_articles', {'email':app.user.email}) }}\">Articles</a></li>
                <li><a href=\"{{ path('user_misc', {'email':app.user.email} )}}\">Misc</a></li>
            </ul>
            </nav>
            <a href=\"{{ path('new_article', {'email':app.user.email}) }}\"><p>Add Article</p></a>

            <hr>
            <p>Welcome, {{ app.user.email }}</p>

            </div>

        {% endblock %}
        {% block two %}

        <div class=\"container\" style=\"padding:50px;\">
            <div class=\"row uniform 50%\">
                <div class=\"6u 12u\$(4)\"\">
                <h1>New Article</h1>
                {{ form_start(newart) }}
                {{ form_row(newart.title) }}
                {{ form_row(newart.artContent, {'label' : 'Enter the text'}) }}
                <button type=\"submit\" class=\"button\" formnovalidate>Save</button>
                {{ form_end(newart) }}
            </div>
        </div>
        </div>
    {% endblock %}
    {% endblock %}

    {% block footer %}

        {{include('generic/footer_page.html.twig')}}

    {% endblock %}
{% endblock %}

";
    }
}
