<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b5dfa38b0cfe0f24bc2077cf7c030ad37cad5e4c9353d55d8fd6fce7359ebd7e extends Twig_Template
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
        $__internal_6995aa4f1592a6fbeda3bf752d5653cb885ba2c7a357c2ea7e3d833c4743c0db = $this->env->getExtension("native_profiler");
        $__internal_6995aa4f1592a6fbeda3bf752d5653cb885ba2c7a357c2ea7e3d833c4743c0db->enter($__internal_6995aa4f1592a6fbeda3bf752d5653cb885ba2c7a357c2ea7e3d833c4743c0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6995aa4f1592a6fbeda3bf752d5653cb885ba2c7a357c2ea7e3d833c4743c0db->leave($__internal_6995aa4f1592a6fbeda3bf752d5653cb885ba2c7a357c2ea7e3d833c4743c0db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
