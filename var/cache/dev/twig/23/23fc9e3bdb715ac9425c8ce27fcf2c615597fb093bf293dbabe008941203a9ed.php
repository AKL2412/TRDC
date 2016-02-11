<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_83e1d7ad743d135be71a210e2399e70af10b2222a731186c64f4379a8f4e5815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e31b8bf0e1a3791eefc1ccb1bfa0202c547b0da7f8ff2b8f15d0a0768448263d = $this->env->getExtension("native_profiler");
        $__internal_e31b8bf0e1a3791eefc1ccb1bfa0202c547b0da7f8ff2b8f15d0a0768448263d->enter($__internal_e31b8bf0e1a3791eefc1ccb1bfa0202c547b0da7f8ff2b8f15d0a0768448263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e31b8bf0e1a3791eefc1ccb1bfa0202c547b0da7f8ff2b8f15d0a0768448263d->leave($__internal_e31b8bf0e1a3791eefc1ccb1bfa0202c547b0da7f8ff2b8f15d0a0768448263d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4533ec1137bffce02a340add9da4b7f0b35d65a49561a78d04d0b879a41beb97 = $this->env->getExtension("native_profiler");
        $__internal_4533ec1137bffce02a340add9da4b7f0b35d65a49561a78d04d0b879a41beb97->enter($__internal_4533ec1137bffce02a340add9da4b7f0b35d65a49561a78d04d0b879a41beb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4533ec1137bffce02a340add9da4b7f0b35d65a49561a78d04d0b879a41beb97->leave($__internal_4533ec1137bffce02a340add9da4b7f0b35d65a49561a78d04d0b879a41beb97_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
