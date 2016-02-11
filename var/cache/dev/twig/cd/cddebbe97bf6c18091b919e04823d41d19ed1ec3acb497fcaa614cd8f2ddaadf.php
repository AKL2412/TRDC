<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_ef9dbf2a76a73d6a6c1e5f383ac177269e8dbcc4aa4ee080e9542cfe3984bd9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_eb976325c9d47157c35a7824181332b743dc6330991840480535198495015098 = $this->env->getExtension("native_profiler");
        $__internal_eb976325c9d47157c35a7824181332b743dc6330991840480535198495015098->enter($__internal_eb976325c9d47157c35a7824181332b743dc6330991840480535198495015098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb976325c9d47157c35a7824181332b743dc6330991840480535198495015098->leave($__internal_eb976325c9d47157c35a7824181332b743dc6330991840480535198495015098_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_421eedc0a8d9e8ab72f6ececb1b200f11690f0c5bb7a21263fff0fbeab16273b = $this->env->getExtension("native_profiler");
        $__internal_421eedc0a8d9e8ab72f6ececb1b200f11690f0c5bb7a21263fff0fbeab16273b->enter($__internal_421eedc0a8d9e8ab72f6ececb1b200f11690f0c5bb7a21263fff0fbeab16273b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_421eedc0a8d9e8ab72f6ececb1b200f11690f0c5bb7a21263fff0fbeab16273b->leave($__internal_421eedc0a8d9e8ab72f6ececb1b200f11690f0c5bb7a21263fff0fbeab16273b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
