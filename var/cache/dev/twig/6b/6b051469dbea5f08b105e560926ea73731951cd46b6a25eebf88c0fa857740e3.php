<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_99522dbb888ffe4ac6de1e65ce4771204d4a9a4e2189c19eccf6f510ebf27ef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_08594a9761c7c7b6bc1c0cf90e359e6477db6ac3989e71a039f2f9c4f4b5dfe8 = $this->env->getExtension("native_profiler");
        $__internal_08594a9761c7c7b6bc1c0cf90e359e6477db6ac3989e71a039f2f9c4f4b5dfe8->enter($__internal_08594a9761c7c7b6bc1c0cf90e359e6477db6ac3989e71a039f2f9c4f4b5dfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08594a9761c7c7b6bc1c0cf90e359e6477db6ac3989e71a039f2f9c4f4b5dfe8->leave($__internal_08594a9761c7c7b6bc1c0cf90e359e6477db6ac3989e71a039f2f9c4f4b5dfe8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49f2aae805918cda2da7b4e7c3bb148f28eed5b5bb6ef85d6a81b6fbe9114458 = $this->env->getExtension("native_profiler");
        $__internal_49f2aae805918cda2da7b4e7c3bb148f28eed5b5bb6ef85d6a81b6fbe9114458->enter($__internal_49f2aae805918cda2da7b4e7c3bb148f28eed5b5bb6ef85d6a81b6fbe9114458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_49f2aae805918cda2da7b4e7c3bb148f28eed5b5bb6ef85d6a81b6fbe9114458->leave($__internal_49f2aae805918cda2da7b4e7c3bb148f28eed5b5bb6ef85d6a81b6fbe9114458_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
