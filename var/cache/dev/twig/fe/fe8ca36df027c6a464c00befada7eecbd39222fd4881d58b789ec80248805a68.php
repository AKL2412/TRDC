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
        $__internal_075f3080ae2624b2a7a66cf436a53e45b77dfb81b8b08a9c79ece801078d8a14 = $this->env->getExtension("native_profiler");
        $__internal_075f3080ae2624b2a7a66cf436a53e45b77dfb81b8b08a9c79ece801078d8a14->enter($__internal_075f3080ae2624b2a7a66cf436a53e45b77dfb81b8b08a9c79ece801078d8a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075f3080ae2624b2a7a66cf436a53e45b77dfb81b8b08a9c79ece801078d8a14->leave($__internal_075f3080ae2624b2a7a66cf436a53e45b77dfb81b8b08a9c79ece801078d8a14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28a9bf65346dcd89a1684494c083df9f1ff35e6b061278d93a03c5228ec38d94 = $this->env->getExtension("native_profiler");
        $__internal_28a9bf65346dcd89a1684494c083df9f1ff35e6b061278d93a03c5228ec38d94->enter($__internal_28a9bf65346dcd89a1684494c083df9f1ff35e6b061278d93a03c5228ec38d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Accueil         
";
        
        $__internal_28a9bf65346dcd89a1684494c083df9f1ff35e6b061278d93a03c5228ec38d94->leave($__internal_28a9bf65346dcd89a1684494c083df9f1ff35e6b061278d93a03c5228ec38d94_prof);

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
