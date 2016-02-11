<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_62bc4a38b8744b0fe910406831457541c6c03120cc37fce636079d2895d3d27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_85398e3f12f8c84c85f0e275d692f432e479da642161f9757085f9970cb7a30c = $this->env->getExtension("native_profiler");
        $__internal_85398e3f12f8c84c85f0e275d692f432e479da642161f9757085f9970cb7a30c->enter($__internal_85398e3f12f8c84c85f0e275d692f432e479da642161f9757085f9970cb7a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85398e3f12f8c84c85f0e275d692f432e479da642161f9757085f9970cb7a30c->leave($__internal_85398e3f12f8c84c85f0e275d692f432e479da642161f9757085f9970cb7a30c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3c1977ab10ef3227e2c4251e608bc01932fa96742a51a3d6b21daaca9f12b59 = $this->env->getExtension("native_profiler");
        $__internal_f3c1977ab10ef3227e2c4251e608bc01932fa96742a51a3d6b21daaca9f12b59->enter($__internal_f3c1977ab10ef3227e2c4251e608bc01932fa96742a51a3d6b21daaca9f12b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f3c1977ab10ef3227e2c4251e608bc01932fa96742a51a3d6b21daaca9f12b59->leave($__internal_f3c1977ab10ef3227e2c4251e608bc01932fa96742a51a3d6b21daaca9f12b59_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
