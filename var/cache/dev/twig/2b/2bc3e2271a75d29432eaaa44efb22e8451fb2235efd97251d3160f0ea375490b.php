<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ddc002c10b433e2b5edef4730beb24e93e8b8412a0e3c5aebd29bfa301744cc4 extends Twig_Template
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
        $__internal_8eeeed033c274549dcdc03a53fc328cd0e4181d94409402c9ad040faac32d5a5 = $this->env->getExtension("native_profiler");
        $__internal_8eeeed033c274549dcdc03a53fc328cd0e4181d94409402c9ad040faac32d5a5->enter($__internal_8eeeed033c274549dcdc03a53fc328cd0e4181d94409402c9ad040faac32d5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8eeeed033c274549dcdc03a53fc328cd0e4181d94409402c9ad040faac32d5a5->leave($__internal_8eeeed033c274549dcdc03a53fc328cd0e4181d94409402c9ad040faac32d5a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
