<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_17f222ee2d007e99093a760c50df6a760c23d3b95f159d3f7fdb97aaa72bdae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27bc7d6dc97bb2395c55ab1ef1be65c2df67ad4aa0ff8319a79f4df3b66bd6e9 = $this->env->getExtension("native_profiler");
        $__internal_27bc7d6dc97bb2395c55ab1ef1be65c2df67ad4aa0ff8319a79f4df3b66bd6e9->enter($__internal_27bc7d6dc97bb2395c55ab1ef1be65c2df67ad4aa0ff8319a79f4df3b66bd6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27bc7d6dc97bb2395c55ab1ef1be65c2df67ad4aa0ff8319a79f4df3b66bd6e9->leave($__internal_27bc7d6dc97bb2395c55ab1ef1be65c2df67ad4aa0ff8319a79f4df3b66bd6e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb46d3858007656ea8da9beff147c1ea581eb5ce96b898db9367ac8ad9b3b6da = $this->env->getExtension("native_profiler");
        $__internal_bb46d3858007656ea8da9beff147c1ea581eb5ce96b898db9367ac8ad9b3b6da->enter($__internal_bb46d3858007656ea8da9beff147c1ea581eb5ce96b898db9367ac8ad9b3b6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb46d3858007656ea8da9beff147c1ea581eb5ce96b898db9367ac8ad9b3b6da->leave($__internal_bb46d3858007656ea8da9beff147c1ea581eb5ce96b898db9367ac8ad9b3b6da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e3e9800ea99379ed2a3b64b73b0762601b6214fa860b855adae3e61ae9ad408 = $this->env->getExtension("native_profiler");
        $__internal_7e3e9800ea99379ed2a3b64b73b0762601b6214fa860b855adae3e61ae9ad408->enter($__internal_7e3e9800ea99379ed2a3b64b73b0762601b6214fa860b855adae3e61ae9ad408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e3e9800ea99379ed2a3b64b73b0762601b6214fa860b855adae3e61ae9ad408->leave($__internal_7e3e9800ea99379ed2a3b64b73b0762601b6214fa860b855adae3e61ae9ad408_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ec5de6948b8e2332fec55d94aee5a2e524c24aa3a6c27a4cc38440323200c0 = $this->env->getExtension("native_profiler");
        $__internal_44ec5de6948b8e2332fec55d94aee5a2e524c24aa3a6c27a4cc38440323200c0->enter($__internal_44ec5de6948b8e2332fec55d94aee5a2e524c24aa3a6c27a4cc38440323200c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_44ec5de6948b8e2332fec55d94aee5a2e524c24aa3a6c27a4cc38440323200c0->leave($__internal_44ec5de6948b8e2332fec55d94aee5a2e524c24aa3a6c27a4cc38440323200c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
