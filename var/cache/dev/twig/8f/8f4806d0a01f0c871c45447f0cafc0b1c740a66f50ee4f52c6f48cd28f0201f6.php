<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c7890b628647bd7eb236b13170229cc4a133de431a0236181df53e662b7f50bb extends Twig_Template
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
        $__internal_a26bec0ab71b2e4ad871012e184928cc55f1143f65d316715a06186d76b88cdf = $this->env->getExtension("native_profiler");
        $__internal_a26bec0ab71b2e4ad871012e184928cc55f1143f65d316715a06186d76b88cdf->enter($__internal_a26bec0ab71b2e4ad871012e184928cc55f1143f65d316715a06186d76b88cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a26bec0ab71b2e4ad871012e184928cc55f1143f65d316715a06186d76b88cdf->leave($__internal_a26bec0ab71b2e4ad871012e184928cc55f1143f65d316715a06186d76b88cdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
