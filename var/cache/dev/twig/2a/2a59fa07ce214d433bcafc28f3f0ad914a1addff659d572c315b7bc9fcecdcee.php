<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7997ab55e2c9979099c621f26bf8aca5d7e8335db4c06d23380423e5488cf54c extends Twig_Template
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
        $__internal_06035896a5b294ddcea0b07538513617098f33e6a436ff896dd7c3a2da34fb0b = $this->env->getExtension("native_profiler");
        $__internal_06035896a5b294ddcea0b07538513617098f33e6a436ff896dd7c3a2da34fb0b->enter($__internal_06035896a5b294ddcea0b07538513617098f33e6a436ff896dd7c3a2da34fb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_06035896a5b294ddcea0b07538513617098f33e6a436ff896dd7c3a2da34fb0b->leave($__internal_06035896a5b294ddcea0b07538513617098f33e6a436ff896dd7c3a2da34fb0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
