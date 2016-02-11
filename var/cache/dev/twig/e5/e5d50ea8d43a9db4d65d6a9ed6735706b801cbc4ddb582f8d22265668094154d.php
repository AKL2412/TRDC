<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b3f024fe6359ec4875c063c3d39f4725d0f60bbc7e0efdec4bfeeccb820baa33 extends Twig_Template
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
        $__internal_ad8f665dd4835239ee90d3c0db349dc9d28006a90dd978bbb65f7015d22fbadc = $this->env->getExtension("native_profiler");
        $__internal_ad8f665dd4835239ee90d3c0db349dc9d28006a90dd978bbb65f7015d22fbadc->enter($__internal_ad8f665dd4835239ee90d3c0db349dc9d28006a90dd978bbb65f7015d22fbadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ad8f665dd4835239ee90d3c0db349dc9d28006a90dd978bbb65f7015d22fbadc->leave($__internal_ad8f665dd4835239ee90d3c0db349dc9d28006a90dd978bbb65f7015d22fbadc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
