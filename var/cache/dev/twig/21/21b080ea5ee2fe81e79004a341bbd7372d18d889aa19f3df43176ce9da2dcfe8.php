<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_782da321e0fcb444d1f6e4775d24fc3591292ca39723a318611976953fe6ed74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a7b5df957f5b139564dc355af3f2911db1395dfaa2ce988b25b60efed2b37416 = $this->env->getExtension("native_profiler");
        $__internal_a7b5df957f5b139564dc355af3f2911db1395dfaa2ce988b25b60efed2b37416->enter($__internal_a7b5df957f5b139564dc355af3f2911db1395dfaa2ce988b25b60efed2b37416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b5df957f5b139564dc355af3f2911db1395dfaa2ce988b25b60efed2b37416->leave($__internal_a7b5df957f5b139564dc355af3f2911db1395dfaa2ce988b25b60efed2b37416_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36999a2689136500eb2c6719e85f7ded6fc065c9a50ae9a62b69d2ef93831719 = $this->env->getExtension("native_profiler");
        $__internal_36999a2689136500eb2c6719e85f7ded6fc065c9a50ae9a62b69d2ef93831719->enter($__internal_36999a2689136500eb2c6719e85f7ded6fc065c9a50ae9a62b69d2ef93831719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_36999a2689136500eb2c6719e85f7ded6fc065c9a50ae9a62b69d2ef93831719->leave($__internal_36999a2689136500eb2c6719e85f7ded6fc065c9a50ae9a62b69d2ef93831719_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
