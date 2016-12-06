<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3a42582b51d551f91e2988e63f8828a319a49405857234102771aeeb7477beda extends Twig_Template
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
        $__internal_ab89b5fa99dc0bfc4265c511c5bb4e3d010373a4bf61b037cc77825009d83331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab89b5fa99dc0bfc4265c511c5bb4e3d010373a4bf61b037cc77825009d83331->enter($__internal_ab89b5fa99dc0bfc4265c511c5bb4e3d010373a4bf61b037cc77825009d83331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ab89b5fa99dc0bfc4265c511c5bb4e3d010373a4bf61b037cc77825009d83331->leave($__internal_ab89b5fa99dc0bfc4265c511c5bb4e3d010373a4bf61b037cc77825009d83331_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
