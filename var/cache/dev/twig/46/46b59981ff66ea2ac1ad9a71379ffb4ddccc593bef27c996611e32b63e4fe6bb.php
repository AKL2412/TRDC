<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ecb19c81b8ace9ced10c90bbb1d874f681ba9dd66e7b8decf39c21c7a3d324ea extends Twig_Template
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
        $__internal_72cc29569267b039e10b9f67f32f3dc5ac31691ad678cf282647cf5bf49bfbcb = $this->env->getExtension("native_profiler");
        $__internal_72cc29569267b039e10b9f67f32f3dc5ac31691ad678cf282647cf5bf49bfbcb->enter($__internal_72cc29569267b039e10b9f67f32f3dc5ac31691ad678cf282647cf5bf49bfbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_72cc29569267b039e10b9f67f32f3dc5ac31691ad678cf282647cf5bf49bfbcb->leave($__internal_72cc29569267b039e10b9f67f32f3dc5ac31691ad678cf282647cf5bf49bfbcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
