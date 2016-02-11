<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2e966f1f1ccd64215c021a67de7326c59ded8dd731de841880dae377822a853a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e91823359a31b8680954d953971105be9072890cde0a88dd809d5a8b8689f275 = $this->env->getExtension("native_profiler");
        $__internal_e91823359a31b8680954d953971105be9072890cde0a88dd809d5a8b8689f275->enter($__internal_e91823359a31b8680954d953971105be9072890cde0a88dd809d5a8b8689f275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91823359a31b8680954d953971105be9072890cde0a88dd809d5a8b8689f275->leave($__internal_e91823359a31b8680954d953971105be9072890cde0a88dd809d5a8b8689f275_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db61d33b35d10966035d20aec3d44c6571908146101437a0dbb4364b97b08cd3 = $this->env->getExtension("native_profiler");
        $__internal_db61d33b35d10966035d20aec3d44c6571908146101437a0dbb4364b97b08cd3->enter($__internal_db61d33b35d10966035d20aec3d44c6571908146101437a0dbb4364b97b08cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_db61d33b35d10966035d20aec3d44c6571908146101437a0dbb4364b97b08cd3->leave($__internal_db61d33b35d10966035d20aec3d44c6571908146101437a0dbb4364b97b08cd3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
