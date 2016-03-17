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
        $__internal_d597c639a723fcc4faff2215720addc538bfd81589a11c5506b07844a472980d = $this->env->getExtension("native_profiler");
        $__internal_d597c639a723fcc4faff2215720addc538bfd81589a11c5506b07844a472980d->enter($__internal_d597c639a723fcc4faff2215720addc538bfd81589a11c5506b07844a472980d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entitesVoirUne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d597c639a723fcc4faff2215720addc538bfd81589a11c5506b07844a472980d->leave($__internal_d597c639a723fcc4faff2215720addc538bfd81589a11c5506b07844a472980d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_416c90cab6c29793985c2e1311fb7d758312ec25a21b5982525482350a414bc0 = $this->env->getExtension("native_profiler");
        $__internal_416c90cab6c29793985c2e1311fb7d758312ec25a21b5982525482350a414bc0->enter($__internal_416c90cab6c29793985c2e1311fb7d758312ec25a21b5982525482350a414bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " |
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "nom", array()), "html", null, true);
        echo "
\t";
        
        $__internal_416c90cab6c29793985c2e1311fb7d758312ec25a21b5982525482350a414bc0->leave($__internal_416c90cab6c29793985c2e1311fb7d758312ec25a21b5982525482350a414bc0_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d907369000c9fd819910cb228fe1e5a50c63aa324d237ebc9daf851ce0e36da6 = $this->env->getExtension("native_profiler");
        $__internal_d907369000c9fd819910cb228fe1e5a50c63aa324d237ebc9daf851ce0e36da6->enter($__internal_d907369000c9fd819910cb228fe1e5a50c63aa324d237ebc9daf851ce0e36da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

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
        
        $__internal_d907369000c9fd819910cb228fe1e5a50c63aa324d237ebc9daf851ce0e36da6->leave($__internal_d907369000c9fd819910cb228fe1e5a50c63aa324d237ebc9daf851ce0e36da6_prof);

    }

    // line 17
    public function block_position($context, array $blocks = array())
    {
        $__internal_d2d263250a6ab7060bf214bd41c9d981806c41ba4289b465fa3b39ea908aa2cc = $this->env->getExtension("native_profiler");
        $__internal_d2d263250a6ab7060bf214bd41c9d981806c41ba4289b465fa3b39ea908aa2cc->enter($__internal_d2d263250a6ab7060bf214bd41c9d981806c41ba4289b465fa3b39ea908aa2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_d2d263250a6ab7060bf214bd41c9d981806c41ba4289b465fa3b39ea908aa2cc->leave($__internal_d2d263250a6ab7060bf214bd41c9d981806c41ba4289b465fa3b39ea908aa2cc_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c7cca60b454ecad18937e23e3f9571fdeffe3beb8a3bce3f55a0ed9caeefb9a = $this->env->getExtension("native_profiler");
        $__internal_2c7cca60b454ecad18937e23e3f9571fdeffe3beb8a3bce3f55a0ed9caeefb9a->enter($__internal_2c7cca60b454ecad18937e23e3f9571fdeffe3beb8a3bce3f55a0ed9caeefb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2c7cca60b454ecad18937e23e3f9571fdeffe3beb8a3bce3f55a0ed9caeefb9a->leave($__internal_2c7cca60b454ecad18937e23e3f9571fdeffe3beb8a3bce3f55a0ed9caeefb9a_prof);

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
