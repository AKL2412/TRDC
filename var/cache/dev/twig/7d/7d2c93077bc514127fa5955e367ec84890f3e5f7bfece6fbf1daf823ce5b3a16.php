<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d55511d94971501d24c98bbef6e8ded062682c0c488ef3f1ce40f8f9d921fc88 extends Twig_Template
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
        $__internal_484d6825185a313bd5f5669093e4e2e2e62b9b28a0381b5d0781eb3859387970 = $this->env->getExtension("native_profiler");
        $__internal_484d6825185a313bd5f5669093e4e2e2e62b9b28a0381b5d0781eb3859387970->enter($__internal_484d6825185a313bd5f5669093e4e2e2e62b9b28a0381b5d0781eb3859387970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_484d6825185a313bd5f5669093e4e2e2e62b9b28a0381b5d0781eb3859387970->leave($__internal_484d6825185a313bd5f5669093e4e2e2e62b9b28a0381b5d0781eb3859387970_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
