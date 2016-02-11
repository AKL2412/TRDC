<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_fdd678193ff842151030856be116f03b743825e3fa788ab3f484d7ee95043cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_82eb28b256e2f543fd2de3bde09954a8cbc2ab944f9f54a19fdd5acd20c08a8d = $this->env->getExtension("native_profiler");
        $__internal_82eb28b256e2f543fd2de3bde09954a8cbc2ab944f9f54a19fdd5acd20c08a8d->enter($__internal_82eb28b256e2f543fd2de3bde09954a8cbc2ab944f9f54a19fdd5acd20c08a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82eb28b256e2f543fd2de3bde09954a8cbc2ab944f9f54a19fdd5acd20c08a8d->leave($__internal_82eb28b256e2f543fd2de3bde09954a8cbc2ab944f9f54a19fdd5acd20c08a8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b36f6146689df194f1e31538e2c6d106f03bad21c8fa7f85c0a149a1ccc6c835 = $this->env->getExtension("native_profiler");
        $__internal_b36f6146689df194f1e31538e2c6d106f03bad21c8fa7f85c0a149a1ccc6c835->enter($__internal_b36f6146689df194f1e31538e2c6d106f03bad21c8fa7f85c0a149a1ccc6c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b36f6146689df194f1e31538e2c6d106f03bad21c8fa7f85c0a149a1ccc6c835->leave($__internal_b36f6146689df194f1e31538e2c6d106f03bad21c8fa7f85c0a149a1ccc6c835_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
