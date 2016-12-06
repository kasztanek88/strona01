<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_5ee4462e45c0d37c0597d26750fcf36576e721a818294506a9d600ce45bc29c5 extends Twig_Template
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
        $__internal_5aac0434ff8bd3935b449cb59f2b68f4b9d27c4c33ded8b497d60fda5305ead0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aac0434ff8bd3935b449cb59f2b68f4b9d27c4c33ded8b497d60fda5305ead0->enter($__internal_5aac0434ff8bd3935b449cb59f2b68f4b9d27c4c33ded8b497d60fda5305ead0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5aac0434ff8bd3935b449cb59f2b68f4b9d27c4c33ded8b497d60fda5305ead0->leave($__internal_5aac0434ff8bd3935b449cb59f2b68f4b9d27c4c33ded8b497d60fda5305ead0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
