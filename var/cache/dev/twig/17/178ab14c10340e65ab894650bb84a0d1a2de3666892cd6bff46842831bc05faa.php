<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9b1f7252d338eddaa200de9650ddb87738c862d736a05f288140bb4951871a24 extends Twig_Template
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
        $__internal_9a71a6d5aaf62b445f31519516d1e50c13a8acf93097ddf0233995318b2a194e = $this->env->getExtension("native_profiler");
        $__internal_9a71a6d5aaf62b445f31519516d1e50c13a8acf93097ddf0233995318b2a194e->enter($__internal_9a71a6d5aaf62b445f31519516d1e50c13a8acf93097ddf0233995318b2a194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9a71a6d5aaf62b445f31519516d1e50c13a8acf93097ddf0233995318b2a194e->leave($__internal_9a71a6d5aaf62b445f31519516d1e50c13a8acf93097ddf0233995318b2a194e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
