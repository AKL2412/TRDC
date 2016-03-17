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
        $__internal_bd9588d33f8390139de572c24b0cd00d437c6293e8eefee1238a9bae9a4097fa = $this->env->getExtension("native_profiler");
        $__internal_bd9588d33f8390139de572c24b0cd00d437c6293e8eefee1238a9bae9a4097fa->enter($__internal_bd9588d33f8390139de572c24b0cd00d437c6293e8eefee1238a9bae9a4097fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd9588d33f8390139de572c24b0cd00d437c6293e8eefee1238a9bae9a4097fa->leave($__internal_bd9588d33f8390139de572c24b0cd00d437c6293e8eefee1238a9bae9a4097fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a1bf2e7dc1296cbf3449e733b97ebcd7d244b081f6df28207aad0555f23da59 = $this->env->getExtension("native_profiler");
        $__internal_4a1bf2e7dc1296cbf3449e733b97ebcd7d244b081f6df28207aad0555f23da59->enter($__internal_4a1bf2e7dc1296cbf3449e733b97ebcd7d244b081f6df28207aad0555f23da59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4a1bf2e7dc1296cbf3449e733b97ebcd7d244b081f6df28207aad0555f23da59->leave($__internal_4a1bf2e7dc1296cbf3449e733b97ebcd7d244b081f6df28207aad0555f23da59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf27f533e21da4c6bfdc7bcf3db18be86e65f9e106e6e236f6a3e70fc24c278f = $this->env->getExtension("native_profiler");
        $__internal_cf27f533e21da4c6bfdc7bcf3db18be86e65f9e106e6e236f6a3e70fc24c278f->enter($__internal_cf27f533e21da4c6bfdc7bcf3db18be86e65f9e106e6e236f6a3e70fc24c278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf27f533e21da4c6bfdc7bcf3db18be86e65f9e106e6e236f6a3e70fc24c278f->leave($__internal_cf27f533e21da4c6bfdc7bcf3db18be86e65f9e106e6e236f6a3e70fc24c278f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2c7ee1a1bd5f7729958eb009510b94783a3f4891d24070532c8f6c4d139acf5 = $this->env->getExtension("native_profiler");
        $__internal_c2c7ee1a1bd5f7729958eb009510b94783a3f4891d24070532c8f6c4d139acf5->enter($__internal_c2c7ee1a1bd5f7729958eb009510b94783a3f4891d24070532c8f6c4d139acf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c2c7ee1a1bd5f7729958eb009510b94783a3f4891d24070532c8f6c4d139acf5->leave($__internal_c2c7ee1a1bd5f7729958eb009510b94783a3f4891d24070532c8f6c4d139acf5_prof);

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
