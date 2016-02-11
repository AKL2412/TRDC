<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f7a95078ea08aec54c5c813ad9cdd463f4301c504f4d56e5366ca698cb067dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e774fc1f1de2ad7f5435fa33d9708af0cc77eb7246c2ffa1a2c3fd160953536b = $this->env->getExtension("native_profiler");
        $__internal_e774fc1f1de2ad7f5435fa33d9708af0cc77eb7246c2ffa1a2c3fd160953536b->enter($__internal_e774fc1f1de2ad7f5435fa33d9708af0cc77eb7246c2ffa1a2c3fd160953536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e774fc1f1de2ad7f5435fa33d9708af0cc77eb7246c2ffa1a2c3fd160953536b->leave($__internal_e774fc1f1de2ad7f5435fa33d9708af0cc77eb7246c2ffa1a2c3fd160953536b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3973c4de35a33c0b7a41b99503ff3cb3f52b8c5228873765ce6df91d99fb5cb = $this->env->getExtension("native_profiler");
        $__internal_e3973c4de35a33c0b7a41b99503ff3cb3f52b8c5228873765ce6df91d99fb5cb->enter($__internal_e3973c4de35a33c0b7a41b99503ff3cb3f52b8c5228873765ce6df91d99fb5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e3973c4de35a33c0b7a41b99503ff3cb3f52b8c5228873765ce6df91d99fb5cb->leave($__internal_e3973c4de35a33c0b7a41b99503ff3cb3f52b8c5228873765ce6df91d99fb5cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
