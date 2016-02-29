<?php

/* TRCAdminBundle:Entites:entitesVoirUne.html.twig */
class __TwigTemplate_12fac1cf382083575e4826a278482f9f7b91cc7f3c05a8e552338b3030459fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Entites/entitesParCategorie.html.twig", "TRCAdminBundle:Entites:entitesVoirUne.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Entites/entitesParCategorie.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9629c7fb67bc0ffd9fc8311f3270ec54e1fec1f708b8714e34509ee75d8ffe1 = $this->env->getExtension("native_profiler");
        $__internal_d9629c7fb67bc0ffd9fc8311f3270ec54e1fec1f708b8714e34509ee75d8ffe1->enter($__internal_d9629c7fb67bc0ffd9fc8311f3270ec54e1fec1f708b8714e34509ee75d8ffe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entitesVoirUne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9629c7fb67bc0ffd9fc8311f3270ec54e1fec1f708b8714e34509ee75d8ffe1->leave($__internal_d9629c7fb67bc0ffd9fc8311f3270ec54e1fec1f708b8714e34509ee75d8ffe1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e547db859f2d1a49c9f25bb55801d373a13470f2ad7d0f2a3c8d6bd2566ec82a = $this->env->getExtension("native_profiler");
        $__internal_e547db859f2d1a49c9f25bb55801d373a13470f2ad7d0f2a3c8d6bd2566ec82a->enter($__internal_e547db859f2d1a49c9f25bb55801d373a13470f2ad7d0f2a3c8d6bd2566ec82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " |
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "nom", array()), "html", null, true);
        echo "
\t";
        
        $__internal_e547db859f2d1a49c9f25bb55801d373a13470f2ad7d0f2a3c8d6bd2566ec82a->leave($__internal_e547db859f2d1a49c9f25bb55801d373a13470f2ad7d0f2a3c8d6bd2566ec82a_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_ea2a8883ed30677f83cd4a2d575867353283d9dceb92cb1e7e1c4de4469b6ce6 = $this->env->getExtension("native_profiler");
        $__internal_ea2a8883ed30677f83cd4a2d575867353283d9dceb92cb1e7e1c4de4469b6ce6->enter($__internal_ea2a8883ed30677f83cd4a2d575867353283d9dceb92cb1e7e1c4de4469b6ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "        <i class=\"fa fa-eye\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
        echo " :: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "nom", array()), "html", null, true);
        echo " 
        <small>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_modifier", array("entite" => (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "matricule" => $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()))), "html", null, true);
        echo " \">
            <i class=\"fa-edit fa\"></i>
            modifier
        </a>
        </small>
    ";
        
        $__internal_ea2a8883ed30677f83cd4a2d575867353283d9dceb92cb1e7e1c4de4469b6ce6->leave($__internal_ea2a8883ed30677f83cd4a2d575867353283d9dceb92cb1e7e1c4de4469b6ce6_prof);

    }

    // line 17
    public function block_position($context, array $blocks = array())
    {
        $__internal_bbf3ee1b08aaedc968b1f45699d4c12443e5ecf250db57727f50bbf7b11aa027 = $this->env->getExtension("native_profiler");
        $__internal_bbf3ee1b08aaedc968b1f45699d4c12443e5ecf250db57727f50bbf7b11aa027->enter($__internal_bbf3ee1b08aaedc968b1f45699d4c12443e5ecf250db57727f50bbf7b11aa027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 18
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-eye\"></i>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_ajouter", array("entite" => (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "matricule" => $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()))), "html", null, true);
        echo "\">
            \t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "code", array()), "html", null, true);
        echo "
            </a>
        </li>
        
    ";
        
        $__internal_bbf3ee1b08aaedc968b1f45699d4c12443e5ecf250db57727f50bbf7b11aa027->leave($__internal_bbf3ee1b08aaedc968b1f45699d4c12443e5ecf250db57727f50bbf7b11aa027_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9d690ca7625ef411721b99616badba9a384e2907380d8c0b416a9a620f9aa41 = $this->env->getExtension("native_profiler");
        $__internal_c9d690ca7625ef411721b99616badba9a384e2907380d8c0b416a9a620f9aa41->enter($__internal_c9d690ca7625ef411721b99616badba9a384e2907380d8c0b416a9a620f9aa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "    \t";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")));
        echo "
        <hr>
        ";
        // line 31
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
        echo "
    ";
        
        $__internal_c9d690ca7625ef411721b99616badba9a384e2907380d8c0b416a9a620f9aa41->leave($__internal_c9d690ca7625ef411721b99616badba9a384e2907380d8c0b416a9a620f9aa41_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Entites:entitesVoirUne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  122 => 29,  116 => 28,  104 => 23,  100 => 22,  92 => 18,  86 => 17,  73 => 10,  66 => 8,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Entites/entitesParCategorie.html.twig'%}*/
/* 	{%block title%}*/
/* 	   {{parent()}} |*/
/*        {{objet.nom}}*/
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         <i class="fa fa-eye"></i>*/
/*         {{entite}} :: {{objet.nom}} */
/*         <small>*/
/*             <a href="{{url('trc_admin_entites_modifier',{entite:entite,matricule:objet.matricule})}} ">*/
/*             <i class="fa-edit fa"></i>*/
/*             modifier*/
/*         </a>*/
/*         </small>*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         {{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-eye"></i>*/
/*             <a href="{{url('trc_admin_entites_ajouter',{entite:entite,matricule:objet.matricule})}}">*/
/*             	{{objet.code}}*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/*     	{{dump(objet)}}*/
/*         <hr>*/
/*         {{dump(profils)}}*/
/*     {%endblock content%}*/
