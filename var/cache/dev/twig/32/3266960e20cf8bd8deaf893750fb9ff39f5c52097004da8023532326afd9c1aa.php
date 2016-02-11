<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_1d355171d6b3ac9ebcd390dafa02c657a47ea53139605b5408d64ea4e96a1ca9 extends Twig_Template
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
        $__internal_d38ade8d01a65c3fb276f7ffb78f56b1798dad505e6af56ab46bb022abd2a0c6 = $this->env->getExtension("native_profiler");
        $__internal_d38ade8d01a65c3fb276f7ffb78f56b1798dad505e6af56ab46bb022abd2a0c6->enter($__internal_d38ade8d01a65c3fb276f7ffb78f56b1798dad505e6af56ab46bb022abd2a0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d38ade8d01a65c3fb276f7ffb78f56b1798dad505e6af56ab46bb022abd2a0c6->leave($__internal_d38ade8d01a65c3fb276f7ffb78f56b1798dad505e6af56ab46bb022abd2a0c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c18413d2cfc0db964e5cfac44dce10aae94a7f3085b3e5337170dcebe3b9846b = $this->env->getExtension("native_profiler");
        $__internal_c18413d2cfc0db964e5cfac44dce10aae94a7f3085b3e5337170dcebe3b9846b->enter($__internal_c18413d2cfc0db964e5cfac44dce10aae94a7f3085b3e5337170dcebe3b9846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c18413d2cfc0db964e5cfac44dce10aae94a7f3085b3e5337170dcebe3b9846b->leave($__internal_c18413d2cfc0db964e5cfac44dce10aae94a7f3085b3e5337170dcebe3b9846b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c3d902f4eb3f6c70825bb44969d72ac7efe261b0e6f515c7141ac57169c2532c = $this->env->getExtension("native_profiler");
        $__internal_c3d902f4eb3f6c70825bb44969d72ac7efe261b0e6f515c7141ac57169c2532c->enter($__internal_c3d902f4eb3f6c70825bb44969d72ac7efe261b0e6f515c7141ac57169c2532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c3d902f4eb3f6c70825bb44969d72ac7efe261b0e6f515c7141ac57169c2532c->leave($__internal_c3d902f4eb3f6c70825bb44969d72ac7efe261b0e6f515c7141ac57169c2532c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d1b1aefab1014cb8d12233d55dd12f22c2b3f2b024f289040f34035b497411ad = $this->env->getExtension("native_profiler");
        $__internal_d1b1aefab1014cb8d12233d55dd12f22c2b3f2b024f289040f34035b497411ad->enter($__internal_d1b1aefab1014cb8d12233d55dd12f22c2b3f2b024f289040f34035b497411ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d1b1aefab1014cb8d12233d55dd12f22c2b3f2b024f289040f34035b497411ad->leave($__internal_d1b1aefab1014cb8d12233d55dd12f22c2b3f2b024f289040f34035b497411ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
