<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_8661f7e2ff565f61c88d6399937d9ff415225b1004b3734cdb917d49db03f158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f42b328cf9a8395b488f4486544ba4cc111fe70420f9df306e4084a5586921ff = $this->env->getExtension("native_profiler");
        $__internal_f42b328cf9a8395b488f4486544ba4cc111fe70420f9df306e4084a5586921ff->enter($__internal_f42b328cf9a8395b488f4486544ba4cc111fe70420f9df306e4084a5586921ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f42b328cf9a8395b488f4486544ba4cc111fe70420f9df306e4084a5586921ff->leave($__internal_f42b328cf9a8395b488f4486544ba4cc111fe70420f9df306e4084a5586921ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49f43c92817bf5b75775ddfc679caf0cc416f977a280665b7c7639dd76744f1b = $this->env->getExtension("native_profiler");
        $__internal_49f43c92817bf5b75775ddfc679caf0cc416f977a280665b7c7639dd76744f1b->enter($__internal_49f43c92817bf5b75775ddfc679caf0cc416f977a280665b7c7639dd76744f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_49f43c92817bf5b75775ddfc679caf0cc416f977a280665b7c7639dd76744f1b->leave($__internal_49f43c92817bf5b75775ddfc679caf0cc416f977a280665b7c7639dd76744f1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
