<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_985f6dcdf29456ac90a746c8fa3b8c038596615053b6420f70e050deaf11fbdb extends Twig_Template
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
        $__internal_e67f92b096241aef3e4ed64b25b3dbfe6e9c52934dd35e47253b18dc42b6aafa = $this->env->getExtension("native_profiler");
        $__internal_e67f92b096241aef3e4ed64b25b3dbfe6e9c52934dd35e47253b18dc42b6aafa->enter($__internal_e67f92b096241aef3e4ed64b25b3dbfe6e9c52934dd35e47253b18dc42b6aafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e67f92b096241aef3e4ed64b25b3dbfe6e9c52934dd35e47253b18dc42b6aafa->leave($__internal_e67f92b096241aef3e4ed64b25b3dbfe6e9c52934dd35e47253b18dc42b6aafa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
