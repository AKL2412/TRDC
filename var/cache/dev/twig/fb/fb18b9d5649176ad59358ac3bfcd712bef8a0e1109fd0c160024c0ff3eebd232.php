<?php

/* TRCAdminBundle:Default:index.html.twig */
class __TwigTemplate_7f8662629db59caf8597775ad2b8d6d34982fe2e1a10e9c53070640670f9168a extends Twig_Template
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
        $__internal_1d5aee066136393b044324d36fbf0ba1db686c8ae8789a04f0d5eb2646a726db = $this->env->getExtension("native_profiler");
        $__internal_1d5aee066136393b044324d36fbf0ba1db686c8ae8789a04f0d5eb2646a726db->enter($__internal_1d5aee066136393b044324d36fbf0ba1db686c8ae8789a04f0d5eb2646a726db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5aee066136393b044324d36fbf0ba1db686c8ae8789a04f0d5eb2646a726db->leave($__internal_1d5aee066136393b044324d36fbf0ba1db686c8ae8789a04f0d5eb2646a726db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80741bfaa5f168c4a5555e4a342f50ddf3717a044f3890d50b4a5b47226e5a9b = $this->env->getExtension("native_profiler");
        $__internal_80741bfaa5f168c4a5555e4a342f50ddf3717a044f3890d50b4a5b47226e5a9b->enter($__internal_80741bfaa5f168c4a5555e4a342f50ddf3717a044f3890d50b4a5b47226e5a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Accueil         
";
        
        $__internal_80741bfaa5f168c4a5555e4a342f50ddf3717a044f3890d50b4a5b47226e5a9b->leave($__internal_80741bfaa5f168c4a5555e4a342f50ddf3717a044f3890d50b4a5b47226e5a9b_prof);

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
