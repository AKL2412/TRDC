<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7f58344ecf99ae7b154b9fcfd9332f95931419dfae1068c5cf9dd9aaaebacd98 extends Twig_Template
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
        $__internal_4d58fd11413ea304a81dc2b2ecc6702584a71f9fe648b660da85ed704cedeb36 = $this->env->getExtension("native_profiler");
        $__internal_4d58fd11413ea304a81dc2b2ecc6702584a71f9fe648b660da85ed704cedeb36->enter($__internal_4d58fd11413ea304a81dc2b2ecc6702584a71f9fe648b660da85ed704cedeb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4d58fd11413ea304a81dc2b2ecc6702584a71f9fe648b660da85ed704cedeb36->leave($__internal_4d58fd11413ea304a81dc2b2ecc6702584a71f9fe648b660da85ed704cedeb36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
