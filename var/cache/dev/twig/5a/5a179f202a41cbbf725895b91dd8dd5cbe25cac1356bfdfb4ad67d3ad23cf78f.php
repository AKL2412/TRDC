<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_f686fcb047b74c30699124e3880fe07317312a184f38831f7897d25a11768d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_0c032eb68a67aeaded5d4edf0b7c831a08cfbb827430181a3b73e9d06c2e99eb = $this->env->getExtension("native_profiler");
        $__internal_0c032eb68a67aeaded5d4edf0b7c831a08cfbb827430181a3b73e9d06c2e99eb->enter($__internal_0c032eb68a67aeaded5d4edf0b7c831a08cfbb827430181a3b73e9d06c2e99eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c032eb68a67aeaded5d4edf0b7c831a08cfbb827430181a3b73e9d06c2e99eb->leave($__internal_0c032eb68a67aeaded5d4edf0b7c831a08cfbb827430181a3b73e9d06c2e99eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_986963a52817660ed43be73fcf324bae4e1ef80f0f83ddb7579af9eb17fd0247 = $this->env->getExtension("native_profiler");
        $__internal_986963a52817660ed43be73fcf324bae4e1ef80f0f83ddb7579af9eb17fd0247->enter($__internal_986963a52817660ed43be73fcf324bae4e1ef80f0f83ddb7579af9eb17fd0247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_986963a52817660ed43be73fcf324bae4e1ef80f0f83ddb7579af9eb17fd0247->leave($__internal_986963a52817660ed43be73fcf324bae4e1ef80f0f83ddb7579af9eb17fd0247_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
