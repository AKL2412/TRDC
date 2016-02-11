<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_4fb220b6ca6d751b9bafea0bd80f14c8d7576ae21eb145b4f7ac42cce2e7a992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3bd0159daeff2579ed9c5d7fe8ac579b5eae019730e3dc130e8a4db9cc54f8ce = $this->env->getExtension("native_profiler");
        $__internal_3bd0159daeff2579ed9c5d7fe8ac579b5eae019730e3dc130e8a4db9cc54f8ce->enter($__internal_3bd0159daeff2579ed9c5d7fe8ac579b5eae019730e3dc130e8a4db9cc54f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd0159daeff2579ed9c5d7fe8ac579b5eae019730e3dc130e8a4db9cc54f8ce->leave($__internal_3bd0159daeff2579ed9c5d7fe8ac579b5eae019730e3dc130e8a4db9cc54f8ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ee4fbaac97e9f03a06bf00e29dd79525f387b087b7a7c9b5ee54f66a049a812 = $this->env->getExtension("native_profiler");
        $__internal_9ee4fbaac97e9f03a06bf00e29dd79525f387b087b7a7c9b5ee54f66a049a812->enter($__internal_9ee4fbaac97e9f03a06bf00e29dd79525f387b087b7a7c9b5ee54f66a049a812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_9ee4fbaac97e9f03a06bf00e29dd79525f387b087b7a7c9b5ee54f66a049a812->leave($__internal_9ee4fbaac97e9f03a06bf00e29dd79525f387b087b7a7c9b5ee54f66a049a812_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
