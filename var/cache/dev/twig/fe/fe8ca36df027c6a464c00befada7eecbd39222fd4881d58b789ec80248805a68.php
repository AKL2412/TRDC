<?php

/* TRCAdminBundle:Default:index.html.twig */
class __TwigTemplate_58cc12b46a5c4f00fda0e4140ebf75f94ccf84c97f8a1ca92b66e01d0dea9686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5608bd3ab668a4d4d7400cbb51e73c809c2d5f9db1da8e1af329b787e2d9bca4 = $this->env->getExtension("native_profiler");
        $__internal_5608bd3ab668a4d4d7400cbb51e73c809c2d5f9db1da8e1af329b787e2d9bca4->enter($__internal_5608bd3ab668a4d4d7400cbb51e73c809c2d5f9db1da8e1af329b787e2d9bca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5608bd3ab668a4d4d7400cbb51e73c809c2d5f9db1da8e1af329b787e2d9bca4->leave($__internal_5608bd3ab668a4d4d7400cbb51e73c809c2d5f9db1da8e1af329b787e2d9bca4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbd96db18a77162ce93928d78a3a00216726cd769e9027495d25049cc9826b8a = $this->env->getExtension("native_profiler");
        $__internal_dbd96db18a77162ce93928d78a3a00216726cd769e9027495d25049cc9826b8a->enter($__internal_dbd96db18a77162ce93928d78a3a00216726cd769e9027495d25049cc9826b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Accueil         
";
        
        $__internal_dbd96db18a77162ce93928d78a3a00216726cd769e9027495d25049cc9826b8a->leave($__internal_dbd96db18a77162ce93928d78a3a00216726cd769e9027495d25049cc9826b8a_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* */
/* {%block title%}*/
/*    Accueil         */
/* {%endblock title%}*/
/* */
