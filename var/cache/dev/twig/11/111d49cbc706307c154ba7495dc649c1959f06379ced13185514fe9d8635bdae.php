<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a13b895913fdfb95f975b45163a8c993e0845eabcebc5ce213130330b18b87f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_467da75858497fa1751ddbde3e4fabd5caba00964cc01df5e16e3c777c221568 = $this->env->getExtension("native_profiler");
        $__internal_467da75858497fa1751ddbde3e4fabd5caba00964cc01df5e16e3c777c221568->enter($__internal_467da75858497fa1751ddbde3e4fabd5caba00964cc01df5e16e3c777c221568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467da75858497fa1751ddbde3e4fabd5caba00964cc01df5e16e3c777c221568->leave($__internal_467da75858497fa1751ddbde3e4fabd5caba00964cc01df5e16e3c777c221568_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96222826600c82b7a53cd1189611fa5ec99990a0dc818ed46375ac2e9d64ada4 = $this->env->getExtension("native_profiler");
        $__internal_96222826600c82b7a53cd1189611fa5ec99990a0dc818ed46375ac2e9d64ada4->enter($__internal_96222826600c82b7a53cd1189611fa5ec99990a0dc818ed46375ac2e9d64ada4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_96222826600c82b7a53cd1189611fa5ec99990a0dc818ed46375ac2e9d64ada4->leave($__internal_96222826600c82b7a53cd1189611fa5ec99990a0dc818ed46375ac2e9d64ada4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8f7623d26aa76d38dcab28ebd1b8b98f4074bbb6c9fc63f638109eee8b0d80a = $this->env->getExtension("native_profiler");
        $__internal_e8f7623d26aa76d38dcab28ebd1b8b98f4074bbb6c9fc63f638109eee8b0d80a->enter($__internal_e8f7623d26aa76d38dcab28ebd1b8b98f4074bbb6c9fc63f638109eee8b0d80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8f7623d26aa76d38dcab28ebd1b8b98f4074bbb6c9fc63f638109eee8b0d80a->leave($__internal_e8f7623d26aa76d38dcab28ebd1b8b98f4074bbb6c9fc63f638109eee8b0d80a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd4f364a52726088b2dd3e430b609ec02854861156059df47335595f9447286d = $this->env->getExtension("native_profiler");
        $__internal_fd4f364a52726088b2dd3e430b609ec02854861156059df47335595f9447286d->enter($__internal_fd4f364a52726088b2dd3e430b609ec02854861156059df47335595f9447286d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fd4f364a52726088b2dd3e430b609ec02854861156059df47335595f9447286d->leave($__internal_fd4f364a52726088b2dd3e430b609ec02854861156059df47335595f9447286d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
