<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f1f61eab3660c6093b245660118f4c654ee97ead9c67eeb736d307f8c9026de4 extends Twig_Template
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
        $__internal_e0dce786a54c8dd66a2ded19db8ea094d58a003167231e11aca99b217376003a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dce786a54c8dd66a2ded19db8ea094d58a003167231e11aca99b217376003a->enter($__internal_e0dce786a54c8dd66a2ded19db8ea094d58a003167231e11aca99b217376003a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e0dce786a54c8dd66a2ded19db8ea094d58a003167231e11aca99b217376003a->leave($__internal_e0dce786a54c8dd66a2ded19db8ea094d58a003167231e11aca99b217376003a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
