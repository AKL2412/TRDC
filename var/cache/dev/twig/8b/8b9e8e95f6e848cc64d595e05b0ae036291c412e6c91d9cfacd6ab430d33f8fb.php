<?php

/* TRCDDCBundle::ddc.html.twig */
class __TwigTemplate_f0f749bdafc945fbd28792f2f5a9e6d9a93fb7a88965a3bb03e8b806aa4b4741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCDDCBundle::ddc.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f65fe51db6e89b198ae8cd89304d30e8446d6ad5ad4d816102b7738e61b6af = $this->env->getExtension("native_profiler");
        $__internal_d8f65fe51db6e89b198ae8cd89304d30e8446d6ad5ad4d816102b7738e61b6af->enter($__internal_d8f65fe51db6e89b198ae8cd89304d30e8446d6ad5ad4d816102b7738e61b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle::ddc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f65fe51db6e89b198ae8cd89304d30e8446d6ad5ad4d816102b7738e61b6af->leave($__internal_d8f65fe51db6e89b198ae8cd89304d30e8446d6ad5ad4d816102b7738e61b6af_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da357c253704d6c115191ddb78caa7b344d453c2183c2a4806f77e1f9d3054a4 = $this->env->getExtension("native_profiler");
        $__internal_da357c253704d6c115191ddb78caa7b344d453c2183c2a4806f77e1f9d3054a4->enter($__internal_da357c253704d6c115191ddb78caa7b344d453c2183c2a4806f77e1f9d3054a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t   DDC         
\t";
        
        $__internal_da357c253704d6c115191ddb78caa7b344d453c2183c2a4806f77e1f9d3054a4->leave($__internal_da357c253704d6c115191ddb78caa7b344d453c2183c2a4806f77e1f9d3054a4_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c75f731f8b3331816e1d197344039489fb02ad88c34f544bc7b37ce6fc78063e = $this->env->getExtension("native_profiler");
        $__internal_c75f731f8b3331816e1d197344039489fb02ad88c34f544bc7b37ce6fc78063e->enter($__internal_c75f731f8b3331816e1d197344039489fb02ad88c34f544bc7b37ce6fc78063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "        DDC
    ";
        
        $__internal_c75f731f8b3331816e1d197344039489fb02ad88c34f544bc7b37ce6fc78063e->leave($__internal_c75f731f8b3331816e1d197344039489fb02ad88c34f544bc7b37ce6fc78063e_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_8e79027c7e2e9f50c8ea803087acc5a72fd9b85af10b31c2781753aa134583cc = $this->env->getExtension("native_profiler");
        $__internal_8e79027c7e2e9f50c8ea803087acc5a72fd9b85af10b31c2781753aa134583cc->enter($__internal_8e79027c7e2e9f50c8ea803087acc5a72fd9b85af10b31c2781753aa134583cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 11
        echo "    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-book\"></i>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("trcddc_homepage");
        echo "\">
            \tDDC
            </a>
        </li>
        
    ";
        
        $__internal_8e79027c7e2e9f50c8ea803087acc5a72fd9b85af10b31c2781753aa134583cc->leave($__internal_8e79027c7e2e9f50c8ea803087acc5a72fd9b85af10b31c2781753aa134583cc_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a6a4d8c977e64b3027c9a051d807d8b9c36b5b07c4ea8ff497614c8980c57d4 = $this->env->getExtension("native_profiler");
        $__internal_7a6a4d8c977e64b3027c9a051d807d8b9c36b5b07c4ea8ff497614c8980c57d4->enter($__internal_7a6a4d8c977e64b3027c9a051d807d8b9c36b5b07c4ea8ff497614c8980c57d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "   ";
        
        $__internal_7a6a4d8c977e64b3027c9a051d807d8b9c36b5b07c4ea8ff497614c8980c57d4->leave($__internal_7a6a4d8c977e64b3027c9a051d807d8b9c36b5b07c4ea8ff497614c8980c57d4_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle::ddc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  89 => 21,  76 => 14,  71 => 11,  65 => 10,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* 	{%block title%}*/
/* 	   DDC         */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         DDC*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-book"></i>*/
/*             <a href="{{url('trcddc_homepage')}}">*/
/*             	DDC*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/*    {%block content %}*/
/*    {%endblock content %}*/
