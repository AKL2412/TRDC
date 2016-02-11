<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5514d2293a96862fe2e0194dd54f885ca69292e57ffd0ba9ef9f67aff1aa184f extends Twig_Template
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
        $__internal_2eecb9b1f5874ef8070de044e3157109e2650c4fc4c9d306c63e352a62e9d57a = $this->env->getExtension("native_profiler");
        $__internal_2eecb9b1f5874ef8070de044e3157109e2650c4fc4c9d306c63e352a62e9d57a->enter($__internal_2eecb9b1f5874ef8070de044e3157109e2650c4fc4c9d306c63e352a62e9d57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2eecb9b1f5874ef8070de044e3157109e2650c4fc4c9d306c63e352a62e9d57a->leave($__internal_2eecb9b1f5874ef8070de044e3157109e2650c4fc4c9d306c63e352a62e9d57a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4231a667fd34a7d7845df271150a9583d7a7c04d928de65e663f69a3263b6d35 = $this->env->getExtension("native_profiler");
        $__internal_4231a667fd34a7d7845df271150a9583d7a7c04d928de65e663f69a3263b6d35->enter($__internal_4231a667fd34a7d7845df271150a9583d7a7c04d928de65e663f69a3263b6d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4231a667fd34a7d7845df271150a9583d7a7c04d928de65e663f69a3263b6d35->leave($__internal_4231a667fd34a7d7845df271150a9583d7a7c04d928de65e663f69a3263b6d35_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e043fe680b819db6e2b5a2e1e814df13e1f7c579e8b7929a84e01a9490faa904 = $this->env->getExtension("native_profiler");
        $__internal_e043fe680b819db6e2b5a2e1e814df13e1f7c579e8b7929a84e01a9490faa904->enter($__internal_e043fe680b819db6e2b5a2e1e814df13e1f7c579e8b7929a84e01a9490faa904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e043fe680b819db6e2b5a2e1e814df13e1f7c579e8b7929a84e01a9490faa904->leave($__internal_e043fe680b819db6e2b5a2e1e814df13e1f7c579e8b7929a84e01a9490faa904_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b2f2aa9946f99a39b68b06423ae9114c76904b63b9e6faca97afbdab979b60c3 = $this->env->getExtension("native_profiler");
        $__internal_b2f2aa9946f99a39b68b06423ae9114c76904b63b9e6faca97afbdab979b60c3->enter($__internal_b2f2aa9946f99a39b68b06423ae9114c76904b63b9e6faca97afbdab979b60c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b2f2aa9946f99a39b68b06423ae9114c76904b63b9e6faca97afbdab979b60c3->leave($__internal_b2f2aa9946f99a39b68b06423ae9114c76904b63b9e6faca97afbdab979b60c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
