<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_50f99473ac97eb5b15c6e4e094f4fd82e69f99e3a82d67b47f11d717ecef88f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_34aee7d779e96b3f8cde4312a547027d275b658cd73ce2c5bac6d4ea9e684ec2 = $this->env->getExtension("native_profiler");
        $__internal_34aee7d779e96b3f8cde4312a547027d275b658cd73ce2c5bac6d4ea9e684ec2->enter($__internal_34aee7d779e96b3f8cde4312a547027d275b658cd73ce2c5bac6d4ea9e684ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34aee7d779e96b3f8cde4312a547027d275b658cd73ce2c5bac6d4ea9e684ec2->leave($__internal_34aee7d779e96b3f8cde4312a547027d275b658cd73ce2c5bac6d4ea9e684ec2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d687c722125696781ea5f9dd69d6a19428da5d960a98db41b6ae11bafe0c7cdc = $this->env->getExtension("native_profiler");
        $__internal_d687c722125696781ea5f9dd69d6a19428da5d960a98db41b6ae11bafe0c7cdc->enter($__internal_d687c722125696781ea5f9dd69d6a19428da5d960a98db41b6ae11bafe0c7cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d687c722125696781ea5f9dd69d6a19428da5d960a98db41b6ae11bafe0c7cdc->leave($__internal_d687c722125696781ea5f9dd69d6a19428da5d960a98db41b6ae11bafe0c7cdc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
