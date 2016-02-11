<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_27d1e55a0027925b67cf86957984452f1e7b7ef70a561ae312b01766ee2b3cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5aaf418bfc94969fe0ed5b33f3d2f258bfcda8937d8a7c2b1700942971dbc02 = $this->env->getExtension("native_profiler");
        $__internal_c5aaf418bfc94969fe0ed5b33f3d2f258bfcda8937d8a7c2b1700942971dbc02->enter($__internal_c5aaf418bfc94969fe0ed5b33f3d2f258bfcda8937d8a7c2b1700942971dbc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c5aaf418bfc94969fe0ed5b33f3d2f258bfcda8937d8a7c2b1700942971dbc02->leave($__internal_c5aaf418bfc94969fe0ed5b33f3d2f258bfcda8937d8a7c2b1700942971dbc02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
