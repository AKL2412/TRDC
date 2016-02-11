<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c83ce92a64c9fffa70db268991447b4eb18e8120de91702a5b6075f0596d1079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_01d3e36263a552a1dba6ab5da2eb11cf35ebfb21fe6e7a412bccf5f1fff7e224 = $this->env->getExtension("native_profiler");
        $__internal_01d3e36263a552a1dba6ab5da2eb11cf35ebfb21fe6e7a412bccf5f1fff7e224->enter($__internal_01d3e36263a552a1dba6ab5da2eb11cf35ebfb21fe6e7a412bccf5f1fff7e224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d3e36263a552a1dba6ab5da2eb11cf35ebfb21fe6e7a412bccf5f1fff7e224->leave($__internal_01d3e36263a552a1dba6ab5da2eb11cf35ebfb21fe6e7a412bccf5f1fff7e224_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc5041a8cb771251cbfe84faf85a44ca38df14bf075c9941d87092a51478c9c1 = $this->env->getExtension("native_profiler");
        $__internal_dc5041a8cb771251cbfe84faf85a44ca38df14bf075c9941d87092a51478c9c1->enter($__internal_dc5041a8cb771251cbfe84faf85a44ca38df14bf075c9941d87092a51478c9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_dc5041a8cb771251cbfe84faf85a44ca38df14bf075c9941d87092a51478c9c1->leave($__internal_dc5041a8cb771251cbfe84faf85a44ca38df14bf075c9941d87092a51478c9c1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
