<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_874421eff23dd41c49ac479a5f139a558d6ad2f82d05c870892abef964a6dc10 extends Twig_Template
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
        $__internal_96862c76cd00ac51e41dbb7b36471aa3a923d6c919303aa9d52f58f5c4049ad6 = $this->env->getExtension("native_profiler");
        $__internal_96862c76cd00ac51e41dbb7b36471aa3a923d6c919303aa9d52f58f5c4049ad6->enter($__internal_96862c76cd00ac51e41dbb7b36471aa3a923d6c919303aa9d52f58f5c4049ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_96862c76cd00ac51e41dbb7b36471aa3a923d6c919303aa9d52f58f5c4049ad6->leave($__internal_96862c76cd00ac51e41dbb7b36471aa3a923d6c919303aa9d52f58f5c4049ad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
