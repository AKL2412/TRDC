<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d8ddfdce415724c54968cd54f5fe0693aa068e0c0d989941a6853c8f5220839a extends Twig_Template
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
        $__internal_6559e5af3e71da0d80272cf5127ff761c7732256b82496e537b11775f005b0ec = $this->env->getExtension("native_profiler");
        $__internal_6559e5af3e71da0d80272cf5127ff761c7732256b82496e537b11775f005b0ec->enter($__internal_6559e5af3e71da0d80272cf5127ff761c7732256b82496e537b11775f005b0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6559e5af3e71da0d80272cf5127ff761c7732256b82496e537b11775f005b0ec->leave($__internal_6559e5af3e71da0d80272cf5127ff761c7732256b82496e537b11775f005b0ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
