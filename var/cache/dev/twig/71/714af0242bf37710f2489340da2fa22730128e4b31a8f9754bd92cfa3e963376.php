<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b92c3478d69ab343956ad5e8bd77af35527127984e09926834bfbf83c65dac63 extends Twig_Template
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
        $__internal_056f9e061372d4b0e9165c6eb2ef2d2ebf2a4343086e322767d9090d1c845ba1 = $this->env->getExtension("native_profiler");
        $__internal_056f9e061372d4b0e9165c6eb2ef2d2ebf2a4343086e322767d9090d1c845ba1->enter($__internal_056f9e061372d4b0e9165c6eb2ef2d2ebf2a4343086e322767d9090d1c845ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_056f9e061372d4b0e9165c6eb2ef2d2ebf2a4343086e322767d9090d1c845ba1->leave($__internal_056f9e061372d4b0e9165c6eb2ef2d2ebf2a4343086e322767d9090d1c845ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */