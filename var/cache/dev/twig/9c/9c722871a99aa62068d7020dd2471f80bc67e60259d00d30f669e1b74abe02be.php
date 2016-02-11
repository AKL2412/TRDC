<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_be7e0052d691a9a28ab9c8f1039e121dac39554bd25cf30af44aaa856bc96032 extends Twig_Template
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
        $__internal_ffd4630dcb25d49790de00921b4af2cc0039629ec21024d1ad50a73a02585d61 = $this->env->getExtension("native_profiler");
        $__internal_ffd4630dcb25d49790de00921b4af2cc0039629ec21024d1ad50a73a02585d61->enter($__internal_ffd4630dcb25d49790de00921b4af2cc0039629ec21024d1ad50a73a02585d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ffd4630dcb25d49790de00921b4af2cc0039629ec21024d1ad50a73a02585d61->leave($__internal_ffd4630dcb25d49790de00921b4af2cc0039629ec21024d1ad50a73a02585d61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
