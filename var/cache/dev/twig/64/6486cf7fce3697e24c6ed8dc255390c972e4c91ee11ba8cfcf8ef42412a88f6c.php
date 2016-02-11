<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_42a8b87077a6689a3c93b6247633ccd68cb5b7c00f9fb057b4db17a042235395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_a4b035aeaf7efa68e5899bc45d6d54ad54ed878f4b2dd70c657bb87d95ec7f58 = $this->env->getExtension("native_profiler");
        $__internal_a4b035aeaf7efa68e5899bc45d6d54ad54ed878f4b2dd70c657bb87d95ec7f58->enter($__internal_a4b035aeaf7efa68e5899bc45d6d54ad54ed878f4b2dd70c657bb87d95ec7f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b035aeaf7efa68e5899bc45d6d54ad54ed878f4b2dd70c657bb87d95ec7f58->leave($__internal_a4b035aeaf7efa68e5899bc45d6d54ad54ed878f4b2dd70c657bb87d95ec7f58_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd2e8ded139c0a0cc8e048e3aeab4a8b02eb8142e8e565dc3ffd8afc9d918a3e = $this->env->getExtension("native_profiler");
        $__internal_fd2e8ded139c0a0cc8e048e3aeab4a8b02eb8142e8e565dc3ffd8afc9d918a3e->enter($__internal_fd2e8ded139c0a0cc8e048e3aeab4a8b02eb8142e8e565dc3ffd8afc9d918a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fd2e8ded139c0a0cc8e048e3aeab4a8b02eb8142e8e565dc3ffd8afc9d918a3e->leave($__internal_fd2e8ded139c0a0cc8e048e3aeab4a8b02eb8142e8e565dc3ffd8afc9d918a3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
