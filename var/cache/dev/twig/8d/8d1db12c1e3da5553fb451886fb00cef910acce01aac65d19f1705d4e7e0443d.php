<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_693ad4b360f9b1b52390049ee1c1b6b2ed5e1af5dd2c6b1541a426fe7d2f1188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_13ea0cacd5fd07c7fd5e03c3ec3c74d3f0246b5828947e8ab71dee79db3f9aec = $this->env->getExtension("native_profiler");
        $__internal_13ea0cacd5fd07c7fd5e03c3ec3c74d3f0246b5828947e8ab71dee79db3f9aec->enter($__internal_13ea0cacd5fd07c7fd5e03c3ec3c74d3f0246b5828947e8ab71dee79db3f9aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ea0cacd5fd07c7fd5e03c3ec3c74d3f0246b5828947e8ab71dee79db3f9aec->leave($__internal_13ea0cacd5fd07c7fd5e03c3ec3c74d3f0246b5828947e8ab71dee79db3f9aec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27454be812049d3954a47cb6c7785c3c3ce13914abf30a08811fda7a4c844500 = $this->env->getExtension("native_profiler");
        $__internal_27454be812049d3954a47cb6c7785c3c3ce13914abf30a08811fda7a4c844500->enter($__internal_27454be812049d3954a47cb6c7785c3c3ce13914abf30a08811fda7a4c844500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_27454be812049d3954a47cb6c7785c3c3ce13914abf30a08811fda7a4c844500->leave($__internal_27454be812049d3954a47cb6c7785c3c3ce13914abf30a08811fda7a4c844500_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
