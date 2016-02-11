<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_772d81d03276b5c351061583b204a33d7f3faf6b90be0e9143eb51106d0e55ab extends Twig_Template
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
        $__internal_6688ba1c46b75feeb4f5283af096b1f75a904549a0feeb036d16a4ea44919146 = $this->env->getExtension("native_profiler");
        $__internal_6688ba1c46b75feeb4f5283af096b1f75a904549a0feeb036d16a4ea44919146->enter($__internal_6688ba1c46b75feeb4f5283af096b1f75a904549a0feeb036d16a4ea44919146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6688ba1c46b75feeb4f5283af096b1f75a904549a0feeb036d16a4ea44919146->leave($__internal_6688ba1c46b75feeb4f5283af096b1f75a904549a0feeb036d16a4ea44919146_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
