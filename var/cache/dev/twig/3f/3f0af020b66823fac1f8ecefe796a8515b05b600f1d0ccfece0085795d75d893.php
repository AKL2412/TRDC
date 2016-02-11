<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_149cbbcc0c916bf5cbab8102cd8769bee34c0caee45169e183417e598d1df593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_63128954255bdb7cddb4cc70a68b3b327a797fa1445bcc3f9bea9a47cec5d407 = $this->env->getExtension("native_profiler");
        $__internal_63128954255bdb7cddb4cc70a68b3b327a797fa1445bcc3f9bea9a47cec5d407->enter($__internal_63128954255bdb7cddb4cc70a68b3b327a797fa1445bcc3f9bea9a47cec5d407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63128954255bdb7cddb4cc70a68b3b327a797fa1445bcc3f9bea9a47cec5d407->leave($__internal_63128954255bdb7cddb4cc70a68b3b327a797fa1445bcc3f9bea9a47cec5d407_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dc868b17ae6c25c120a6ad7f9af2a4f0c0cf80735d6683b692f9dd472e1a13d = $this->env->getExtension("native_profiler");
        $__internal_0dc868b17ae6c25c120a6ad7f9af2a4f0c0cf80735d6683b692f9dd472e1a13d->enter($__internal_0dc868b17ae6c25c120a6ad7f9af2a4f0c0cf80735d6683b692f9dd472e1a13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0dc868b17ae6c25c120a6ad7f9af2a4f0c0cf80735d6683b692f9dd472e1a13d->leave($__internal_0dc868b17ae6c25c120a6ad7f9af2a4f0c0cf80735d6683b692f9dd472e1a13d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
