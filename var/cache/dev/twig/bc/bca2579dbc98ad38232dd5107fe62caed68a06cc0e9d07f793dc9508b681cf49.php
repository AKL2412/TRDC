<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_87000cbe587d2a3a447cc9ba532a94226231f315ef4732dc7d9fc64ba8511a52 extends Twig_Template
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
        $__internal_fb8bf5e1d751bc860536f36fd46d00587b5fb8bb9a8afdbe37559b2fec4c6caa = $this->env->getExtension("native_profiler");
        $__internal_fb8bf5e1d751bc860536f36fd46d00587b5fb8bb9a8afdbe37559b2fec4c6caa->enter($__internal_fb8bf5e1d751bc860536f36fd46d00587b5fb8bb9a8afdbe37559b2fec4c6caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fb8bf5e1d751bc860536f36fd46d00587b5fb8bb9a8afdbe37559b2fec4c6caa->leave($__internal_fb8bf5e1d751bc860536f36fd46d00587b5fb8bb9a8afdbe37559b2fec4c6caa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
