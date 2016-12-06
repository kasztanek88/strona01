<?php

/* :user_account:new_article.html.twig */
class __TwigTemplate_4664e56e8ae6d168e338a6cfe69cc0e19bce0e5d07fb607f797f3e8f063b3390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user_account:new_article.html.twig", 1);
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
        $__internal_c6ccc25a45710dec61d26a4713b8cb7362031bece6ca456f12fa565cbeec98b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ccc25a45710dec61d26a4713b8cb7362031bece6ca456f12fa565cbeec98b5->enter($__internal_c6ccc25a45710dec61d26a4713b8cb7362031bece6ca456f12fa565cbeec98b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user_account:new_article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ccc25a45710dec61d26a4713b8cb7362031bece6ca456f12fa565cbeec98b5->leave($__internal_c6ccc25a45710dec61d26a4713b8cb7362031bece6ca456f12fa565cbeec98b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1cf40a93b464ff84a9e450fe3a167a296bf8e9ffad576841ff0b3c23378cc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cf40a93b464ff84a9e450fe3a167a296bf8e9ffad576841ff0b3c23378cc6c->enter($__internal_c1cf40a93b464ff84a9e450fe3a167a296bf8e9ffad576841ff0b3c23378cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1cf40a93b464ff84a9e450fe3a167a296bf8e9ffad576841ff0b3c23378cc6c->leave($__internal_c1cf40a93b464ff84a9e450fe3a167a296bf8e9ffad576841ff0b3c23378cc6c_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_d498f52d8402ecf0a2a7dd8108cae57f9e6b21c7eefdb3c660536bd34e7d51d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d498f52d8402ecf0a2a7dd8108cae57f9e6b21c7eefdb3c660536bd34e7d51d0->enter($__internal_d498f52d8402ecf0a2a7dd8108cae57f9e6b21c7eefdb3c660536bd34e7d51d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "generic/page_menu.html.twig");
        echo "

    ";
        
        $__internal_d498f52d8402ecf0a2a7dd8108cae57f9e6b21c7eefdb3c660536bd34e7d51d0->leave($__internal_d498f52d8402ecf0a2a7dd8108cae57f9e6b21c7eefdb3c660536bd34e7d51d0_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_52e7e238570c8ca88b5f674d0b82d478ad73a04604d399ef934d4d581cd1421b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e7e238570c8ca88b5f674d0b82d478ad73a04604d399ef934d4d581cd1421b->enter($__internal_52e7e238570c8ca88b5f674d0b82d478ad73a04604d399ef934d4d581cd1421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_52e7e238570c8ca88b5f674d0b82d478ad73a04604d399ef934d4d581cd1421b->leave($__internal_52e7e238570c8ca88b5f674d0b82d478ad73a04604d399ef934d4d581cd1421b_prof);

    }

    // line 12
    public function block_one($context, array $blocks = array())
    {
        $__internal_168e3f9d628789ec396d638502c832a064315cb158990830a2a8c30d10ab5d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168e3f9d628789ec396d638502c832a064315cb158990830a2a8c30d10ab5d40->enter($__internal_168e3f9d628789ec396d638502c832a064315cb158990830a2a8c30d10ab5d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

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
        
        $__internal_168e3f9d628789ec396d638502c832a064315cb158990830a2a8c30d10ab5d40->leave($__internal_168e3f9d628789ec396d638502c832a064315cb158990830a2a8c30d10ab5d40_prof);

    }

    // line 30
    public function block_two($context, array $blocks = array())
    {
        $__internal_75512a8eb37acb963401278ccd53e7fafbc5aab174768c969f83a03e3c6146f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75512a8eb37acb963401278ccd53e7fafbc5aab174768c969f83a03e3c6146f4->enter($__internal_75512a8eb37acb963401278ccd53e7fafbc5aab174768c969f83a03e3c6146f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "two"));

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
        
        $__internal_75512a8eb37acb963401278ccd53e7fafbc5aab174768c969f83a03e3c6146f4->leave($__internal_75512a8eb37acb963401278ccd53e7fafbc5aab174768c969f83a03e3c6146f4_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_944a709c9f29c7459eb8eee9fd59fd08ca2756c3b771738c75130e882fcbc8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944a709c9f29c7459eb8eee9fd59fd08ca2756c3b771738c75130e882fcbc8e5->enter($__internal_944a709c9f29c7459eb8eee9fd59fd08ca2756c3b771738c75130e882fcbc8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "
        ";
        // line 49
        echo twig_include($this->env, $context, "generic/footer_page.html.twig");
        echo "

    ";
        
        $__internal_944a709c9f29c7459eb8eee9fd59fd08ca2756c3b771738c75130e882fcbc8e5->leave($__internal_944a709c9f29c7459eb8eee9fd59fd08ca2756c3b771738c75130e882fcbc8e5_prof);

    }

    public function getTemplateName()
    {
        return ":user_account:new_article.html.twig";
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
