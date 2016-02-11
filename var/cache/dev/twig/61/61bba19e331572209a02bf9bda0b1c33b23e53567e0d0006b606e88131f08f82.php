<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_e6c5de6899fd8c164822519c2f5ad358ebe015340bbfff7360f569aa32a131bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dc24f319b29cba13c4bcba6a57ae0a976f69f5bfd2bf070374ebb3c7c60bedb = $this->env->getExtension("native_profiler");
        $__internal_6dc24f319b29cba13c4bcba6a57ae0a976f69f5bfd2bf070374ebb3c7c60bedb->enter($__internal_6dc24f319b29cba13c4bcba6a57ae0a976f69f5bfd2bf070374ebb3c7c60bedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc24f319b29cba13c4bcba6a57ae0a976f69f5bfd2bf070374ebb3c7c60bedb->leave($__internal_6dc24f319b29cba13c4bcba6a57ae0a976f69f5bfd2bf070374ebb3c7c60bedb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98e87716d44ddf19a25a3e998b785f5f4393daa38a9a3c4e216a9a13bdabaecd = $this->env->getExtension("native_profiler");
        $__internal_98e87716d44ddf19a25a3e998b785f5f4393daa38a9a3c4e216a9a13bdabaecd->enter($__internal_98e87716d44ddf19a25a3e998b785f5f4393daa38a9a3c4e216a9a13bdabaecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_98e87716d44ddf19a25a3e998b785f5f4393daa38a9a3c4e216a9a13bdabaecd->leave($__internal_98e87716d44ddf19a25a3e998b785f5f4393daa38a9a3c4e216a9a13bdabaecd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
