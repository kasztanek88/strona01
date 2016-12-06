<?php

/* ::base.html.twig */
class __TwigTemplate_3b8f0d59c525db5942b84c0f4fc1c8acc7445a04c7d66c4f117716a333c495aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'one' => array($this, 'block_one'),
            'two' => array($this, 'block_two'),
            'three' => array($this, 'block_three'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9ccd913c3a6ab9ad240c7f13577db240630c77d7447c4f75dafc46af0d8250c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ccd913c3a6ab9ad240c7f13577db240630c77d7447c4f75dafc46af0d8250c->enter($__internal_c9ccd913c3a6ab9ad240c7f13577db240630c77d7447c4f75dafc46af0d8250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"description\" content=\"\" />
\t<meta name=\"keywords\" content=\"\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
   
        
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 160
        echo "</html>
";
        
        $__internal_c9ccd913c3a6ab9ad240c7f13577db240630c77d7447c4f75dafc46af0d8250c->leave($__internal_c9ccd913c3a6ab9ad240c7f13577db240630c77d7447c4f75dafc46af0d8250c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dce6a1c6053f8272b76d43f89005cdcdcd9efce2bc1f8363e742000750ba9775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce6a1c6053f8272b76d43f89005cdcdcd9efce2bc1f8363e742000750ba9775->enter($__internal_dce6a1c6053f8272b76d43f89005cdcdcd9efce2bc1f8363e742000750ba9775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dce6a1c6053f8272b76d43f89005cdcdcd9efce2bc1f8363e742000750ba9775->leave($__internal_dce6a1c6053f8272b76d43f89005cdcdcd9efce2bc1f8363e742000750ba9775_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0592ec058e28788ae3a047a369c63933a54ef4f81c4f6537f1050b206d2a4875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0592ec058e28788ae3a047a369c63933a54ef4f81c4f6537f1050b206d2a4875->enter($__internal_0592ec058e28788ae3a047a369c63933a54ef4f81c4f6537f1050b206d2a4875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/skel.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-xlarge.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
        ";
        
        $__internal_0592ec058e28788ae3a047a369c63933a54ef4f81c4f6537f1050b206d2a4875->leave($__internal_0592ec058e28788ae3a047a369c63933a54ef4f81c4f6537f1050b206d2a4875_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_78fb99ff7a8c95d09fa0350750d3fd249b3a5fb5ecfa6d0ef2da7c2127bba078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fb99ff7a8c95d09fa0350750d3fd249b3a5fb5ecfa6d0ef2da7c2127bba078->enter($__internal_78fb99ff7a8c95d09fa0350750d3fd249b3a5fb5ecfa6d0ef2da7c2127bba078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
             <body class=\"landing\">
        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "  
        
        ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "        
        ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 150
        echo "        
        
        ";
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "    </body>
    ";
        
        $__internal_78fb99ff7a8c95d09fa0350750d3fd249b3a5fb5ecfa6d0ef2da7c2127bba078->leave($__internal_78fb99ff7a8c95d09fa0350750d3fd249b3a5fb5ecfa6d0ef2da7c2127bba078_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_c9228a74e69486b0a15de06d9f7bd88709eb4cb224f480913ef08b196f1bc501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9228a74e69486b0a15de06d9f7bd88709eb4cb224f480913ef08b196f1bc501->enter($__internal_c9228a74e69486b0a15de06d9f7bd88709eb4cb224f480913ef08b196f1bc501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " 
            <!-- Header -->
\t\t\t<header id=\"header\">
\t\t\t\t
                                <h1><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Homepage</a></h1>
\t\t\t\t
\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t<ul>\t\t\t\t\t\t
                                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects_url");
        echo "\">Projects</a></li>
                                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_url");
        echo "\">Services</a></li>       
\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_url");
        echo "\">Our Users</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articels_url");
        echo "\">Articels</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact_url");
        echo "\">Contact</a></li>
\t\t\t\t\t\t
                                                ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("paneladmin_url");
            echo "\">Admin Panel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_account", array("email" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))), "html", null, true);
            echo "\">My Account</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_account");
            echo "\">My Account</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo "
                                                ";
        }
        // line 44
        echo "
\t\t\t\t\t\t";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 46
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\" class=\"button special\">Logout</a></li>
\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\" class=\"button special\">Login</a></li>
\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</header>

\t\t<!-- Banner -->
\t\t\t<section id=\"banner\">
\t\t\t\t<h2>Hi. This is Transit.</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"button big\">Lorem ipsum dolor</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</section>
        ";
        
        $__internal_c9228a74e69486b0a15de06d9f7bd88709eb4cb224f480913ef08b196f1bc501->leave($__internal_c9228a74e69486b0a15de06d9f7bd88709eb4cb224f480913ef08b196f1bc501_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_52db119561db149a3b7d7b35f793b1d38b5bfb44d0672fc531e89da1c66c7c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52db119561db149a3b7d7b35f793b1d38b5bfb44d0672fc531e89da1c66c7c7a->enter($__internal_52db119561db149a3b7d7b35f793b1d38b5bfb44d0672fc531e89da1c66c7c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
            
        ";
        // line 68
        $this->displayBlock('one', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('two', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('three', $context, $blocks);
        // line 71
        echo "        
        ";
        
        $__internal_52db119561db149a3b7d7b35f793b1d38b5bfb44d0672fc531e89da1c66c7c7a->leave($__internal_52db119561db149a3b7d7b35f793b1d38b5bfb44d0672fc531e89da1c66c7c7a_prof);

    }

    // line 68
    public function block_one($context, array $blocks = array())
    {
        $__internal_4d3d9e0ce4ec35279479c6377331a9e23791654ec34aba146727cd690532a7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3d9e0ce4ec35279479c6377331a9e23791654ec34aba146727cd690532a7a5->enter($__internal_4d3d9e0ce4ec35279479c6377331a9e23791654ec34aba146727cd690532a7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "one"));

        echo " ";
        
        $__internal_4d3d9e0ce4ec35279479c6377331a9e23791654ec34aba146727cd690532a7a5->leave($__internal_4d3d9e0ce4ec35279479c6377331a9e23791654ec34aba146727cd690532a7a5_prof);

    }

    // line 69
    public function block_two($context, array $blocks = array())
    {
        $__internal_07934e76e2d72ac6d9909d371b9e77762eb7dc1c821f22cbef823c8b757c74d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07934e76e2d72ac6d9909d371b9e77762eb7dc1c821f22cbef823c8b757c74d9->enter($__internal_07934e76e2d72ac6d9909d371b9e77762eb7dc1c821f22cbef823c8b757c74d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "two"));

        echo " ";
        
        $__internal_07934e76e2d72ac6d9909d371b9e77762eb7dc1c821f22cbef823c8b757c74d9->leave($__internal_07934e76e2d72ac6d9909d371b9e77762eb7dc1c821f22cbef823c8b757c74d9_prof);

    }

    // line 70
    public function block_three($context, array $blocks = array())
    {
        $__internal_f4128529760fc467e06515a181f8c3ecf346552b491472001d3d694449341494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4128529760fc467e06515a181f8c3ecf346552b491472001d3d694449341494->enter($__internal_f4128529760fc467e06515a181f8c3ecf346552b491472001d3d694449341494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "three"));

        echo " ";
        
        $__internal_f4128529760fc467e06515a181f8c3ecf346552b491472001d3d694449341494->leave($__internal_f4128529760fc467e06515a181f8c3ecf346552b491472001d3d694449341494_prof);

    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        $__internal_94487a77fd1b453328845b272bf82b28905e5322cc86098edc161351c7fc1b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94487a77fd1b453328845b272bf82b28905e5322cc86098edc161351c7fc1b5a->enter($__internal_94487a77fd1b453328845b272bf82b28905e5322cc86098edc161351c7fc1b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " 
            <!-- Footer -->
\t\t\t<footer id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<section class=\"links\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Lorem ipsum dolor</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nesciunt itaque, alias possimus</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Optio rerum beatae autem</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nostrum nemo dolorum facilis</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Quo fugit dolor totam</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u\$(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Culpa quia, nesciunt</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Reiciendis dicta laboriosam enim</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Corporis, non aut rerum</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Laboriosam nulla voluptas, harum</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Facere eligendi, inventore dolor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Neque, dolore, facere</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Distinctio, inventore quidem nesciunt</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Explicabo inventore itaque autem</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Aperiam harum, sint quibusdam</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Labore excepturi assumenda</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u\$ 6u\$(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Illum, tempori, saepe</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Recusandae, culpa necessita nam</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Cupiditate, debitis adipisci blandi</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Tempore nam, enim quia</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Explicabo molestiae dolor labore</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"8u 12u\$(medium)\">
\t\t\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t\t\t<li>&copy; Untitled. All rights reserved.</li>
\t\t\t\t\t\t\t\t<li>Design: <a href=\"http://templated.co\">TEMPLATED</a></li>
\t\t\t\t\t\t\t\t<li>Images: <a href=\"http://unsplash.com\">Unsplash</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u\$ 12u\$(medium)\">
\t\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-facebook\"><span class=\"label\">Facebook</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-twitter\"><span class=\"label\">Twitter</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-google-plus\"><span class=\"label\">Google+</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-linkedin\"><span class=\"label\">LinkedIn</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
        ";
        
        $__internal_94487a77fd1b453328845b272bf82b28905e5322cc86098edc161351c7fc1b5a->leave($__internal_94487a77fd1b453328845b272bf82b28905e5322cc86098edc161351c7fc1b5a_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0166c0df7b11017b1d9460d2b29f3ecb644dce886ef78d8a160b7468d073bd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0166c0df7b11017b1d9460d2b29f3ecb644dce886ef78d8a160b7468d073bd70->enter($__internal_0166c0df7b11017b1d9460d2b29f3ecb644dce886ef78d8a160b7468d073bd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/skel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/skel-layers.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>
                    ";
        
        $__internal_0166c0df7b11017b1d9460d2b29f3ecb644dce886ef78d8a160b7468d073bd70->leave($__internal_0166c0df7b11017b1d9460d2b29f3ecb644dce886ef78d8a160b7468d073bd70_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 156,  401 => 155,  397 => 154,  392 => 153,  386 => 152,  299 => 74,  287 => 70,  275 => 69,  263 => 68,  255 => 71,  252 => 70,  249 => 69,  247 => 68,  238 => 66,  217 => 50,  211 => 48,  205 => 46,  203 => 45,  200 => 44,  196 => 42,  190 => 40,  184 => 37,  179 => 36,  177 => 35,  172 => 33,  168 => 32,  164 => 31,  160 => 30,  156 => 29,  149 => 25,  138 => 21,  130 => 158,  128 => 152,  124 => 150,  122 => 74,  119 => 73,  117 => 66,  113 => 64,  111 => 21,  102 => 19,  92 => 12,  88 => 11,  83 => 10,  77 => 9,  65 => 5,  57 => 160,  55 => 19,  47 => 15,  45 => 9,  38 => 5,  32 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<meta name=\"description\" content=\"\" />
\t<meta name=\"keywords\" content=\"\" />
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/skel.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style-xlarge.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
   
        
        {% block body %} 
             <body class=\"landing\">
        {% block header %} 
            <!-- Header -->
\t\t\t<header id=\"header\">
\t\t\t\t
                                <h1><a href=\"{{ path('homepage') }}\">Homepage</a></h1>
\t\t\t\t
\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t<ul>\t\t\t\t\t\t
                                                <li><a href=\"{{ path('projects_url') }}\">Projects</a></li>
                                                <li><a href=\"{{ path('services_url') }}\">Services</a></li>       
\t\t\t\t\t\t<li><a href=\"{{ path('users_url') }}\">Our Users</a></li>
\t\t\t\t\t\t<li><a href=\"{{ path('articels_url') }}\">Articels</a></li>
\t\t\t\t\t\t<li><a href=\"{{ path('contact_url') }}\">Contact</a></li>
\t\t\t\t\t\t
                                                {% if is_granted('ROLE_ADMIN')%}
                                                    <li><a href=\"{{ path('paneladmin_url') }}\">Admin Panel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('user_account', {'email':app.user.email}) }}\">My Account</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t{% elseif is_granted('ROLE_USER')%}
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('user_account') }}\">My Account</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}

                                                {% endif %}

\t\t\t\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t\t\t<li><a href=\"{{path('security_logout')}}\" class=\"button special\">Logout</a></li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li><a href=\"{{path('security_login')}}\" class=\"button special\">Login</a></li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</header>

\t\t<!-- Banner -->
\t\t\t<section id=\"banner\">
\t\t\t\t<h2>Hi. This is Transit.</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"button big\">Lorem ipsum dolor</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</section>
        {% endblock %}  
        
        {% block content %} 
            
        {% block one %} {% endblock %}
        {% block two %} {% endblock %}
        {% block three %} {% endblock %}
        
        {% endblock %}
        
        {% block footer %} 
            <!-- Footer -->
\t\t\t<footer id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<section class=\"links\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Lorem ipsum dolor</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nesciunt itaque, alias possimus</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Optio rerum beatae autem</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Nostrum nemo dolorum facilis</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Quo fugit dolor totam</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u\$(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Culpa quia, nesciunt</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Reiciendis dicta laboriosam enim</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Corporis, non aut rerum</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Laboriosam nulla voluptas, harum</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Facere eligendi, inventore dolor</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u 6u(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Neque, dolore, facere</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Distinctio, inventore quidem nesciunt</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Explicabo inventore itaque autem</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Aperiam harum, sint quibusdam</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Labore excepturi assumenda</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"3u\$ 6u\$(medium) 12u\$(small)\">
\t\t\t\t\t\t\t\t<h3>Illum, tempori, saepe</h3>
\t\t\t\t\t\t\t\t<ul class=\"unstyled\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor sit</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Recusandae, culpa necessita nam</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Cupiditate, debitis adipisci blandi</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Tempore nam, enim quia</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Explicabo molestiae dolor labore</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"8u 12u\$(medium)\">
\t\t\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t\t\t<li>&copy; Untitled. All rights reserved.</li>
\t\t\t\t\t\t\t\t<li>Design: <a href=\"http://templated.co\">TEMPLATED</a></li>
\t\t\t\t\t\t\t\t<li>Images: <a href=\"http://unsplash.com\">Unsplash</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"4u\$ 12u\$(medium)\">
\t\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-facebook\"><span class=\"label\">Facebook</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-twitter\"><span class=\"label\">Twitter</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-google-plus\"><span class=\"label\">Google+</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"icon rounded fa-linkedin\"><span class=\"label\">LinkedIn</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
        {% endblock %}
        
        
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/skel.min.js') }}\"></script>
            <script src=\"{{ asset('js/skel-layers.min.js') }}\"></script>
            <script src=\"{{ asset('js/init.js') }}\"></script>
                    {% endblock %}
    </body>
    {% endblock %}
</html>
";
    }
}
