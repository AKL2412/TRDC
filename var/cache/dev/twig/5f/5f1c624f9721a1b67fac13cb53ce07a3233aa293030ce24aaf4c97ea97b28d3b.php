<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8d50df583504a4bd42869f596f79679b37964d4d431c430184ece530b03bce0f extends Twig_Template
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
        $__internal_b813d9b252ec16b27cfbbcc5da8cf6ed4761ebc01a7ba04c24c315f2ed82ce61 = $this->env->getExtension("native_profiler");
        $__internal_b813d9b252ec16b27cfbbcc5da8cf6ed4761ebc01a7ba04c24c315f2ed82ce61->enter($__internal_b813d9b252ec16b27cfbbcc5da8cf6ed4761ebc01a7ba04c24c315f2ed82ce61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b813d9b252ec16b27cfbbcc5da8cf6ed4761ebc01a7ba04c24c315f2ed82ce61->leave($__internal_b813d9b252ec16b27cfbbcc5da8cf6ed4761ebc01a7ba04c24c315f2ed82ce61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
