<?php

/* TRCDDCBundle::ddc.html.twig */
class __TwigTemplate_3742f598aad6235298deb34feda637bc8ede1536afcb22f7020b7e378ad701c4 extends Twig_Template
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
        $__internal_ba708be2f952ad7394e2e65adebec07f2cbcf56beb412a6de306337a5eaa885f = $this->env->getExtension("native_profiler");
        $__internal_ba708be2f952ad7394e2e65adebec07f2cbcf56beb412a6de306337a5eaa885f->enter($__internal_ba708be2f952ad7394e2e65adebec07f2cbcf56beb412a6de306337a5eaa885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle::ddc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba708be2f952ad7394e2e65adebec07f2cbcf56beb412a6de306337a5eaa885f->leave($__internal_ba708be2f952ad7394e2e65adebec07f2cbcf56beb412a6de306337a5eaa885f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ab0bd3928d430bcecea2c0b54cea7fc05583a3bdf430fd52121a508fee21927 = $this->env->getExtension("native_profiler");
        $__internal_2ab0bd3928d430bcecea2c0b54cea7fc05583a3bdf430fd52121a508fee21927->enter($__internal_2ab0bd3928d430bcecea2c0b54cea7fc05583a3bdf430fd52121a508fee21927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t   DDC         
\t";
        
        $__internal_2ab0bd3928d430bcecea2c0b54cea7fc05583a3bdf430fd52121a508fee21927->leave($__internal_2ab0bd3928d430bcecea2c0b54cea7fc05583a3bdf430fd52121a508fee21927_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d22a272cb86e256b7f402fbe07306d27ca5ebee50aef09ce2452229e1e47efad = $this->env->getExtension("native_profiler");
        $__internal_d22a272cb86e256b7f402fbe07306d27ca5ebee50aef09ce2452229e1e47efad->enter($__internal_d22a272cb86e256b7f402fbe07306d27ca5ebee50aef09ce2452229e1e47efad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "        DDC
    ";
        
        $__internal_d22a272cb86e256b7f402fbe07306d27ca5ebee50aef09ce2452229e1e47efad->leave($__internal_d22a272cb86e256b7f402fbe07306d27ca5ebee50aef09ce2452229e1e47efad_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_1d9f97fc2a60c99dd8fb7e1ecfb66aeb26ecf63beb9f52b26f5d45ff565e209f = $this->env->getExtension("native_profiler");
        $__internal_1d9f97fc2a60c99dd8fb7e1ecfb66aeb26ecf63beb9f52b26f5d45ff565e209f->enter($__internal_1d9f97fc2a60c99dd8fb7e1ecfb66aeb26ecf63beb9f52b26f5d45ff565e209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_1d9f97fc2a60c99dd8fb7e1ecfb66aeb26ecf63beb9f52b26f5d45ff565e209f->leave($__internal_1d9f97fc2a60c99dd8fb7e1ecfb66aeb26ecf63beb9f52b26f5d45ff565e209f_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_13a3d2ee897bb5b6fc3daf88913ab649ddaf9fa981b0bd93fd237e5b36a4d94e = $this->env->getExtension("native_profiler");
        $__internal_13a3d2ee897bb5b6fc3daf88913ab649ddaf9fa981b0bd93fd237e5b36a4d94e->enter($__internal_13a3d2ee897bb5b6fc3daf88913ab649ddaf9fa981b0bd93fd237e5b36a4d94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "   ";
        
        $__internal_13a3d2ee897bb5b6fc3daf88913ab649ddaf9fa981b0bd93fd237e5b36a4d94e->leave($__internal_13a3d2ee897bb5b6fc3daf88913ab649ddaf9fa981b0bd93fd237e5b36a4d94e_prof);

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
