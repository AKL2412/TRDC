<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_b9074dc847c49cfc7a9382c78bd44ff9131b1c26385c244a705fd3dc358f0a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_7d26b029f64a3a0160897b26de841c44550852632c1662c81c737551509beab6 = $this->env->getExtension("native_profiler");
        $__internal_7d26b029f64a3a0160897b26de841c44550852632c1662c81c737551509beab6->enter($__internal_7d26b029f64a3a0160897b26de841c44550852632c1662c81c737551509beab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d26b029f64a3a0160897b26de841c44550852632c1662c81c737551509beab6->leave($__internal_7d26b029f64a3a0160897b26de841c44550852632c1662c81c737551509beab6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e4607bd462a89621bf3a21cd77aabe282397a0e0e4ab83b6cff8c1ffa0ada2b = $this->env->getExtension("native_profiler");
        $__internal_7e4607bd462a89621bf3a21cd77aabe282397a0e0e4ab83b6cff8c1ffa0ada2b->enter($__internal_7e4607bd462a89621bf3a21cd77aabe282397a0e0e4ab83b6cff8c1ffa0ada2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7e4607bd462a89621bf3a21cd77aabe282397a0e0e4ab83b6cff8c1ffa0ada2b->leave($__internal_7e4607bd462a89621bf3a21cd77aabe282397a0e0e4ab83b6cff8c1ffa0ada2b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
