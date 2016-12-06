<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b6b93f117503a23b8eab61d11c45368b04d6078f0a2034e2ec96130c88414db7 extends Twig_Template
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
        $__internal_e951e42df53bbfd18f7660ef694703827bd2529f8139f8decb481283a4665f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e951e42df53bbfd18f7660ef694703827bd2529f8139f8decb481283a4665f93->enter($__internal_e951e42df53bbfd18f7660ef694703827bd2529f8139f8decb481283a4665f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e951e42df53bbfd18f7660ef694703827bd2529f8139f8decb481283a4665f93->leave($__internal_e951e42df53bbfd18f7660ef694703827bd2529f8139f8decb481283a4665f93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
