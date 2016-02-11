<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_5c910906dc3508acd31d3112c8e5a009086d02a66ad896dd1e3835cd535a9876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_454ee22c7d37e15a98af7b59479948de52f8cdc0a82e2d6a78887d2bd6895e34 = $this->env->getExtension("native_profiler");
        $__internal_454ee22c7d37e15a98af7b59479948de52f8cdc0a82e2d6a78887d2bd6895e34->enter($__internal_454ee22c7d37e15a98af7b59479948de52f8cdc0a82e2d6a78887d2bd6895e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_454ee22c7d37e15a98af7b59479948de52f8cdc0a82e2d6a78887d2bd6895e34->leave($__internal_454ee22c7d37e15a98af7b59479948de52f8cdc0a82e2d6a78887d2bd6895e34_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_53d906338de62338192921253d8071066ecb030a0242879c61d722f91c56e506 = $this->env->getExtension("native_profiler");
        $__internal_53d906338de62338192921253d8071066ecb030a0242879c61d722f91c56e506->enter($__internal_53d906338de62338192921253d8071066ecb030a0242879c61d722f91c56e506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_53d906338de62338192921253d8071066ecb030a0242879c61d722f91c56e506->leave($__internal_53d906338de62338192921253d8071066ecb030a0242879c61d722f91c56e506_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3348e4614132b36bcb1ccfaff460e77640115dc37f10f842adb89fa536b53aa6 = $this->env->getExtension("native_profiler");
        $__internal_3348e4614132b36bcb1ccfaff460e77640115dc37f10f842adb89fa536b53aa6->enter($__internal_3348e4614132b36bcb1ccfaff460e77640115dc37f10f842adb89fa536b53aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3348e4614132b36bcb1ccfaff460e77640115dc37f10f842adb89fa536b53aa6->leave($__internal_3348e4614132b36bcb1ccfaff460e77640115dc37f10f842adb89fa536b53aa6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_24646fd91d0089ad5574dc02bfe961798b3b3fcdf8a2c742b5e229097e969c7d = $this->env->getExtension("native_profiler");
        $__internal_24646fd91d0089ad5574dc02bfe961798b3b3fcdf8a2c742b5e229097e969c7d->enter($__internal_24646fd91d0089ad5574dc02bfe961798b3b3fcdf8a2c742b5e229097e969c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_24646fd91d0089ad5574dc02bfe961798b3b3fcdf8a2c742b5e229097e969c7d->leave($__internal_24646fd91d0089ad5574dc02bfe961798b3b3fcdf8a2c742b5e229097e969c7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
