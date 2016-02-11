<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f56ab66c1eba5e136bf576cdbb51247e1cbcff9703ff84e8580a4d91fb54642a extends Twig_Template
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
        $__internal_48da18d83639417e0e68a42d83d3ae0ddb95188e062aeb4b60984054d03a81aa = $this->env->getExtension("native_profiler");
        $__internal_48da18d83639417e0e68a42d83d3ae0ddb95188e062aeb4b60984054d03a81aa->enter($__internal_48da18d83639417e0e68a42d83d3ae0ddb95188e062aeb4b60984054d03a81aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_48da18d83639417e0e68a42d83d3ae0ddb95188e062aeb4b60984054d03a81aa->leave($__internal_48da18d83639417e0e68a42d83d3ae0ddb95188e062aeb4b60984054d03a81aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
