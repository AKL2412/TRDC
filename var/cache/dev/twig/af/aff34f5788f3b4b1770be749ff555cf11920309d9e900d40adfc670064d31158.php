<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_524c4158e271a6b1b20163a27774c2c84ede6ab490769ced9b5224e691127a5d extends Twig_Template
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
        $__internal_f0d322d52a15938c85e87a3e4e559cdb98e6aa9b53b4099835b796cf21b9c5ec = $this->env->getExtension("native_profiler");
        $__internal_f0d322d52a15938c85e87a3e4e559cdb98e6aa9b53b4099835b796cf21b9c5ec->enter($__internal_f0d322d52a15938c85e87a3e4e559cdb98e6aa9b53b4099835b796cf21b9c5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f0d322d52a15938c85e87a3e4e559cdb98e6aa9b53b4099835b796cf21b9c5ec->leave($__internal_f0d322d52a15938c85e87a3e4e559cdb98e6aa9b53b4099835b796cf21b9c5ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
