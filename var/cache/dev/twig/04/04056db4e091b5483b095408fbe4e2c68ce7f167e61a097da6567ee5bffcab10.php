<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6e42b61849b57cdee0ba6515d3199e4daba3660bbd154022abe74452f63ad11b extends Twig_Template
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
        $__internal_dd8edfbc52fa76e0a276c203b60967f67c90c02d7386950cdca700a513912d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8edfbc52fa76e0a276c203b60967f67c90c02d7386950cdca700a513912d12->enter($__internal_dd8edfbc52fa76e0a276c203b60967f67c90c02d7386950cdca700a513912d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dd8edfbc52fa76e0a276c203b60967f67c90c02d7386950cdca700a513912d12->leave($__internal_dd8edfbc52fa76e0a276c203b60967f67c90c02d7386950cdca700a513912d12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
