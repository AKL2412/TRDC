<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_69397ab3d4f2e05afd355eaf1b34c27e3d18b8b3f0c238a1127a3c8d9d1a33ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_97ee5588c47e671143f635775827ab4bd082ff79f1c3f36414ec6c485762ff1c = $this->env->getExtension("native_profiler");
        $__internal_97ee5588c47e671143f635775827ab4bd082ff79f1c3f36414ec6c485762ff1c->enter($__internal_97ee5588c47e671143f635775827ab4bd082ff79f1c3f36414ec6c485762ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ee5588c47e671143f635775827ab4bd082ff79f1c3f36414ec6c485762ff1c->leave($__internal_97ee5588c47e671143f635775827ab4bd082ff79f1c3f36414ec6c485762ff1c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc87b77b876bb920de481963f5726f9a728862efd041b81549dbc1c37b9b0889 = $this->env->getExtension("native_profiler");
        $__internal_dc87b77b876bb920de481963f5726f9a728862efd041b81549dbc1c37b9b0889->enter($__internal_dc87b77b876bb920de481963f5726f9a728862efd041b81549dbc1c37b9b0889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dc87b77b876bb920de481963f5726f9a728862efd041b81549dbc1c37b9b0889->leave($__internal_dc87b77b876bb920de481963f5726f9a728862efd041b81549dbc1c37b9b0889_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
