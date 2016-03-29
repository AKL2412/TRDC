<?php

/* TRCAdminBundle:Entites:entitesVoirUne.html.twig */
class __TwigTemplate_95f099dca7fa28f8efd52ba79f2727367b73661a910775e97b5cf5f169788b4e extends Twig_Template
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
        $__internal_ae3c51392ac0f90100b92ee5bb33a2facab195c167d81699987d7702256ec59f = $this->env->getExtension("native_profiler");
        $__internal_ae3c51392ac0f90100b92ee5bb33a2facab195c167d81699987d7702256ec59f->enter($__internal_ae3c51392ac0f90100b92ee5bb33a2facab195c167d81699987d7702256ec59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entitesVoirUne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3c51392ac0f90100b92ee5bb33a2facab195c167d81699987d7702256ec59f->leave($__internal_ae3c51392ac0f90100b92ee5bb33a2facab195c167d81699987d7702256ec59f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b4a9296dc41c61e0951871fe1e9061be377b9172e6f9e2affbd3a3a8d5e60df = $this->env->getExtension("native_profiler");
        $__internal_2b4a9296dc41c61e0951871fe1e9061be377b9172e6f9e2affbd3a3a8d5e60df->enter($__internal_2b4a9296dc41c61e0951871fe1e9061be377b9172e6f9e2affbd3a3a8d5e60df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " |
       ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "nom", array()), "html", null, true);
        echo "
\t";
        
        $__internal_2b4a9296dc41c61e0951871fe1e9061be377b9172e6f9e2affbd3a3a8d5e60df->leave($__internal_2b4a9296dc41c61e0951871fe1e9061be377b9172e6f9e2affbd3a3a8d5e60df_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5bf7c7607afb52216b8c80b7b3100bf156a4171f0993962949d0faacda048659 = $this->env->getExtension("native_profiler");
        $__internal_5bf7c7607afb52216b8c80b7b3100bf156a4171f0993962949d0faacda048659->enter($__internal_5bf7c7607afb52216b8c80b7b3100bf156a4171f0993962949d0faacda048659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

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
        
        $__internal_5bf7c7607afb52216b8c80b7b3100bf156a4171f0993962949d0faacda048659->leave($__internal_5bf7c7607afb52216b8c80b7b3100bf156a4171f0993962949d0faacda048659_prof);

    }

    // line 17
    public function block_position($context, array $blocks = array())
    {
        $__internal_c3b57a5fdeaeb03dd17e432f96e46b26bae27483da29ed177c7786e93342edde = $this->env->getExtension("native_profiler");
        $__internal_c3b57a5fdeaeb03dd17e432f96e46b26bae27483da29ed177c7786e93342edde->enter($__internal_c3b57a5fdeaeb03dd17e432f96e46b26bae27483da29ed177c7786e93342edde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_c3b57a5fdeaeb03dd17e432f96e46b26bae27483da29ed177c7786e93342edde->leave($__internal_c3b57a5fdeaeb03dd17e432f96e46b26bae27483da29ed177c7786e93342edde_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_703ef9a0010e34b62ee28e04db346b2aed6938a1e0b24cdcca1ca4fd4f3ce95d = $this->env->getExtension("native_profiler");
        $__internal_703ef9a0010e34b62ee28e04db346b2aed6938a1e0b24cdcca1ca4fd4f3ce95d->enter($__internal_703ef9a0010e34b62ee28e04db346b2aed6938a1e0b24cdcca1ca4fd4f3ce95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "        <div class=\"row\">
            <div class=\"col-md-8\"></div>
            <div class=\"col-md-4\">
            <table>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fonction"]) {
            // line 34
            echo "                    ";
            $context["util"] = $this->env->getExtension('TwigExtension')->getParentActeur($this->getAttribute($context["fonction"], "acteur", array()));
            // line 35
            echo "                    ";
            $context["profil"] = $this->getAttribute($context["fonction"], "profil", array());
            // line 36
            echo "                    ";
            if ( !(null === (isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")))) {
                // line 37
                echo "                        <tr>
                            <td>
                            <img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "image", array())), "html", null, true);
                echo " \" class=\" img-circle\" height=\"40\">
                            </td>
                            <td>
                            ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "prenom", array()), "html", null, true);
                echo "
                            ";
                // line 43
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "nom", array())), "html", null, true);
                echo "
                            </td>
                            <td>
                            ";
                // line 46
                if ( !(null === (isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")))) {
                    // line 47
                    echo "                                ";
                    if ($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "responsable", array())) {
                        // line 48
                        echo "                                    <p class=\"label label-primary\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
                        echo "</p>
                                ";
                    } else {
                        // line 50
                        echo "                                    <p class=\"label label-default\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
                        echo "</p>
                                ";
                    }
                    // line 52
                    echo "                            
                            ";
                } else {
                    // line 54
                    echo "                                ###
                            ";
                }
                // line 56
                echo "                            </td>
                        </tr>
                    ";
            }
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fonction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </table>
            </div>
        </div>
    \t";
        // line 63
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")));
        echo "
        <hr>
        
    ";
        
        $__internal_703ef9a0010e34b62ee28e04db346b2aed6938a1e0b24cdcca1ca4fd4f3ce95d->leave($__internal_703ef9a0010e34b62ee28e04db346b2aed6938a1e0b24cdcca1ca4fd4f3ce95d_prof);

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
        return array (  202 => 63,  197 => 60,  191 => 59,  186 => 56,  182 => 54,  178 => 52,  172 => 50,  166 => 48,  163 => 47,  161 => 46,  155 => 43,  151 => 42,  145 => 39,  141 => 37,  138 => 36,  135 => 35,  132 => 34,  128 => 33,  122 => 29,  116 => 28,  104 => 23,  100 => 22,  92 => 18,  86 => 17,  73 => 10,  66 => 8,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*         <div class="row">*/
/*             <div class="col-md-8"></div>*/
/*             <div class="col-md-4">*/
/*             <table>*/
/*                 {%for fonction in acteurs %}*/
/*                     {%set util = getParentActeur(fonction.acteur) %}*/
/*                     {%set profil = fonction.profil %}*/
/*                     {%if util is not null %}*/
/*                         <tr>*/
/*                             <td>*/
/*                             <img src="{{asset(util.image)}} " class=" img-circle" height="40">*/
/*                             </td>*/
/*                             <td>*/
/*                             {{util.prenom}}*/
/*                             {{util.nom|upper}}*/
/*                             </td>*/
/*                             <td>*/
/*                             {%if profil is not null %}*/
/*                                 {%if profil.responsable %}*/
/*                                     <p class="label label-primary">{{profil.nom}}</p>*/
/*                                 {%else%}*/
/*                                     <p class="label label-default">{{profil.nom}}</p>*/
/*                                 {%endif%}*/
/*                             */
/*                             {%else%}*/
/*                                 ###*/
/*                             {%endif%}*/
/*                             </td>*/
/*                         </tr>*/
/*                     {%endif%}*/
/*                 {%endfor%}*/
/*             </table>*/
/*             </div>*/
/*         </div>*/
/*     	{{dump(objet)}}*/
/*         <hr>*/
/*         */
/*     {%endblock content%}*/
