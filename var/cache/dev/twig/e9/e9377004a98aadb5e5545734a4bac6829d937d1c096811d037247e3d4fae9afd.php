<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_6f01fcd815cb645547fe3465379829d14fbbef1ce03b1924ca2c287f9d15e351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_88c7ef6f0819a52f888c4262f74f48c2ad7b80fa742e4656f488d848e6556a4f = $this->env->getExtension("native_profiler");
        $__internal_88c7ef6f0819a52f888c4262f74f48c2ad7b80fa742e4656f488d848e6556a4f->enter($__internal_88c7ef6f0819a52f888c4262f74f48c2ad7b80fa742e4656f488d848e6556a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c7ef6f0819a52f888c4262f74f48c2ad7b80fa742e4656f488d848e6556a4f->leave($__internal_88c7ef6f0819a52f888c4262f74f48c2ad7b80fa742e4656f488d848e6556a4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20775515c447ff64ab08678e244c4b04b5a0795a823170c3b4aa305c06970f3e = $this->env->getExtension("native_profiler");
        $__internal_20775515c447ff64ab08678e244c4b04b5a0795a823170c3b4aa305c06970f3e->enter($__internal_20775515c447ff64ab08678e244c4b04b5a0795a823170c3b4aa305c06970f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_20775515c447ff64ab08678e244c4b04b5a0795a823170c3b4aa305c06970f3e->leave($__internal_20775515c447ff64ab08678e244c4b04b5a0795a823170c3b4aa305c06970f3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
