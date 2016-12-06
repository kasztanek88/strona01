<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d7bab00142acf23d7df9a659698764de0e2882a8126cd8c883447a6a7a223fe0 extends Twig_Template
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
        $__internal_83d0f5589b28b854e887bc6320e2c6c9e084208ce89703be2ffad47d5fe5a24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d0f5589b28b854e887bc6320e2c6c9e084208ce89703be2ffad47d5fe5a24a->enter($__internal_83d0f5589b28b854e887bc6320e2c6c9e084208ce89703be2ffad47d5fe5a24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_83d0f5589b28b854e887bc6320e2c6c9e084208ce89703be2ffad47d5fe5a24a->leave($__internal_83d0f5589b28b854e887bc6320e2c6c9e084208ce89703be2ffad47d5fe5a24a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
