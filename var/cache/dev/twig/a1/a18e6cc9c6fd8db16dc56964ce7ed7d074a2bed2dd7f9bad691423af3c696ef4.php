<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f65ff4d84629362f8a71a3c0849f283f4bd5e54cda1b17782220dc2d2f0e90b6 extends Twig_Template
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
        $__internal_b3995ad3f1b402e9f6086177ffd631f2fa8ac87ad3f240b68e3bb23e0f0b3e5c = $this->env->getExtension("native_profiler");
        $__internal_b3995ad3f1b402e9f6086177ffd631f2fa8ac87ad3f240b68e3bb23e0f0b3e5c->enter($__internal_b3995ad3f1b402e9f6086177ffd631f2fa8ac87ad3f240b68e3bb23e0f0b3e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b3995ad3f1b402e9f6086177ffd631f2fa8ac87ad3f240b68e3bb23e0f0b3e5c->leave($__internal_b3995ad3f1b402e9f6086177ffd631f2fa8ac87ad3f240b68e3bb23e0f0b3e5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
