<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_10702d2c6ae1c5f3481f5db685d48786165b95d34c7bb47a1989fced8d2af9d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_6d89fc7d0218dc8de29cb3c3a9cd91f44ef0e4204cf01ef4e0c770b7d3e09423 = $this->env->getExtension("native_profiler");
        $__internal_6d89fc7d0218dc8de29cb3c3a9cd91f44ef0e4204cf01ef4e0c770b7d3e09423->enter($__internal_6d89fc7d0218dc8de29cb3c3a9cd91f44ef0e4204cf01ef4e0c770b7d3e09423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d89fc7d0218dc8de29cb3c3a9cd91f44ef0e4204cf01ef4e0c770b7d3e09423->leave($__internal_6d89fc7d0218dc8de29cb3c3a9cd91f44ef0e4204cf01ef4e0c770b7d3e09423_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f12a2b6c637b5770cba87712bc2eb5c60787e5627943d149cb5f45f7dbe03193 = $this->env->getExtension("native_profiler");
        $__internal_f12a2b6c637b5770cba87712bc2eb5c60787e5627943d149cb5f45f7dbe03193->enter($__internal_f12a2b6c637b5770cba87712bc2eb5c60787e5627943d149cb5f45f7dbe03193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f12a2b6c637b5770cba87712bc2eb5c60787e5627943d149cb5f45f7dbe03193->leave($__internal_f12a2b6c637b5770cba87712bc2eb5c60787e5627943d149cb5f45f7dbe03193_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
