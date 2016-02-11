<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_83a7aed556c60fe7326cfd856cc30b582b593859b506606e816714b4081dc509 extends Twig_Template
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
        $__internal_8c91c0944919ed2f827cf84d242edfbbf8d464a694c85882362b5c29536f3858 = $this->env->getExtension("native_profiler");
        $__internal_8c91c0944919ed2f827cf84d242edfbbf8d464a694c85882362b5c29536f3858->enter($__internal_8c91c0944919ed2f827cf84d242edfbbf8d464a694c85882362b5c29536f3858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8c91c0944919ed2f827cf84d242edfbbf8d464a694c85882362b5c29536f3858->leave($__internal_8c91c0944919ed2f827cf84d242edfbbf8d464a694c85882362b5c29536f3858_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
