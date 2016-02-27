<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_45f211a095a9af99d0d675f508729eb48166f88512ef5d4acf86934ebee446e2 extends Twig_Template
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
        $__internal_86646c2391b060dce861ec861efb717c090a86b5b68b47339b9c10d12138f59f = $this->env->getExtension("native_profiler");
        $__internal_86646c2391b060dce861ec861efb717c090a86b5b68b47339b9c10d12138f59f->enter($__internal_86646c2391b060dce861ec861efb717c090a86b5b68b47339b9c10d12138f59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86646c2391b060dce861ec861efb717c090a86b5b68b47339b9c10d12138f59f->leave($__internal_86646c2391b060dce861ec861efb717c090a86b5b68b47339b9c10d12138f59f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc7446c601ff7d5573a0a56fd63d04887eb527c163d2d56674f36cc79a234401 = $this->env->getExtension("native_profiler");
        $__internal_cc7446c601ff7d5573a0a56fd63d04887eb527c163d2d56674f36cc79a234401->enter($__internal_cc7446c601ff7d5573a0a56fd63d04887eb527c163d2d56674f36cc79a234401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cc7446c601ff7d5573a0a56fd63d04887eb527c163d2d56674f36cc79a234401->leave($__internal_cc7446c601ff7d5573a0a56fd63d04887eb527c163d2d56674f36cc79a234401_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_403aff09310926b8b607498c7203c785e4d42d1380c4ad94385c37867364fa30 = $this->env->getExtension("native_profiler");
        $__internal_403aff09310926b8b607498c7203c785e4d42d1380c4ad94385c37867364fa30->enter($__internal_403aff09310926b8b607498c7203c785e4d42d1380c4ad94385c37867364fa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_403aff09310926b8b607498c7203c785e4d42d1380c4ad94385c37867364fa30->leave($__internal_403aff09310926b8b607498c7203c785e4d42d1380c4ad94385c37867364fa30_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c761d4f462a7451b150cf5b9d43112c7114e37ea206d116cde1f93c93a43a6ff = $this->env->getExtension("native_profiler");
        $__internal_c761d4f462a7451b150cf5b9d43112c7114e37ea206d116cde1f93c93a43a6ff->enter($__internal_c761d4f462a7451b150cf5b9d43112c7114e37ea206d116cde1f93c93a43a6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c761d4f462a7451b150cf5b9d43112c7114e37ea206d116cde1f93c93a43a6ff->leave($__internal_c761d4f462a7451b150cf5b9d43112c7114e37ea206d116cde1f93c93a43a6ff_prof);

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
