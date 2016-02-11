<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_fef3075a1eaecc154f4bfcd2a469f31ad3669f497fec78c26787c61a90f6b26c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_61f479c1abda18781ad44c7ca64ef9411510c7d5ec1c4995e117780c235b1717 = $this->env->getExtension("native_profiler");
        $__internal_61f479c1abda18781ad44c7ca64ef9411510c7d5ec1c4995e117780c235b1717->enter($__internal_61f479c1abda18781ad44c7ca64ef9411510c7d5ec1c4995e117780c235b1717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f479c1abda18781ad44c7ca64ef9411510c7d5ec1c4995e117780c235b1717->leave($__internal_61f479c1abda18781ad44c7ca64ef9411510c7d5ec1c4995e117780c235b1717_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d280c0041c45f4305925b7ec233d3259ae77dbbca0b79a82a8a82250191e263 = $this->env->getExtension("native_profiler");
        $__internal_3d280c0041c45f4305925b7ec233d3259ae77dbbca0b79a82a8a82250191e263->enter($__internal_3d280c0041c45f4305925b7ec233d3259ae77dbbca0b79a82a8a82250191e263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3d280c0041c45f4305925b7ec233d3259ae77dbbca0b79a82a8a82250191e263->leave($__internal_3d280c0041c45f4305925b7ec233d3259ae77dbbca0b79a82a8a82250191e263_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
