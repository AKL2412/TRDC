<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ef71c4cb2d0d9a0bb57bd756c4437e08f351ac31498cf3d26c9c8a05ae291267 extends Twig_Template
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
        $__internal_a410e918f01e7352a553333c7b879b9a68d5e000024ca33fcf439e5013b6512a = $this->env->getExtension("native_profiler");
        $__internal_a410e918f01e7352a553333c7b879b9a68d5e000024ca33fcf439e5013b6512a->enter($__internal_a410e918f01e7352a553333c7b879b9a68d5e000024ca33fcf439e5013b6512a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a410e918f01e7352a553333c7b879b9a68d5e000024ca33fcf439e5013b6512a->leave($__internal_a410e918f01e7352a553333c7b879b9a68d5e000024ca33fcf439e5013b6512a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_80b78f70129031e96924c001637ddc94b4b085ea47e5ee66de519249881eda5e = $this->env->getExtension("native_profiler");
        $__internal_80b78f70129031e96924c001637ddc94b4b085ea47e5ee66de519249881eda5e->enter($__internal_80b78f70129031e96924c001637ddc94b4b085ea47e5ee66de519249881eda5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_80b78f70129031e96924c001637ddc94b4b085ea47e5ee66de519249881eda5e->leave($__internal_80b78f70129031e96924c001637ddc94b4b085ea47e5ee66de519249881eda5e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_21fc9a73a8ff07adbe4da1dc81b17378fc87205276f624641910763900b0824b = $this->env->getExtension("native_profiler");
        $__internal_21fc9a73a8ff07adbe4da1dc81b17378fc87205276f624641910763900b0824b->enter($__internal_21fc9a73a8ff07adbe4da1dc81b17378fc87205276f624641910763900b0824b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_21fc9a73a8ff07adbe4da1dc81b17378fc87205276f624641910763900b0824b->leave($__internal_21fc9a73a8ff07adbe4da1dc81b17378fc87205276f624641910763900b0824b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b56b413393bc23ef3aa4fe8fb6a7d30e47536e626f8db095afd9a3265252f766 = $this->env->getExtension("native_profiler");
        $__internal_b56b413393bc23ef3aa4fe8fb6a7d30e47536e626f8db095afd9a3265252f766->enter($__internal_b56b413393bc23ef3aa4fe8fb6a7d30e47536e626f8db095afd9a3265252f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b56b413393bc23ef3aa4fe8fb6a7d30e47536e626f8db095afd9a3265252f766->leave($__internal_b56b413393bc23ef3aa4fe8fb6a7d30e47536e626f8db095afd9a3265252f766_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
