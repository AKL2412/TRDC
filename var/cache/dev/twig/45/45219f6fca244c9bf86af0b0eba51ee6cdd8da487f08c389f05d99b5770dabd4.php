<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_000995c61012c03d86b1846b54a49089ff31077375ca3ba3c02e8995b760df52 extends Twig_Template
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
        $__internal_1608f31bbcb359a4b877fced6d479cfd7375696820b2e9cbdd60697b0f5162ea = $this->env->getExtension("native_profiler");
        $__internal_1608f31bbcb359a4b877fced6d479cfd7375696820b2e9cbdd60697b0f5162ea->enter($__internal_1608f31bbcb359a4b877fced6d479cfd7375696820b2e9cbdd60697b0f5162ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1608f31bbcb359a4b877fced6d479cfd7375696820b2e9cbdd60697b0f5162ea->leave($__internal_1608f31bbcb359a4b877fced6d479cfd7375696820b2e9cbdd60697b0f5162ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
