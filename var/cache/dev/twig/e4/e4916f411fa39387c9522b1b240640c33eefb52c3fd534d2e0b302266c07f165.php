<?php

/* TRCAdminBundle:Profils:voir.html.twig */
class __TwigTemplate_10ef3ee9b7b47de39359cdb1a2c6ce8d31cd86e326ae44fc19483084cc4c9f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Profils/ajouter.html.twig", "TRCAdminBundle:Profils:voir.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Profils/ajouter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32db39cbf872505fba781385acf5aa38c16f4bb7a343a74f7777006bc1268561 = $this->env->getExtension("native_profiler");
        $__internal_32db39cbf872505fba781385acf5aa38c16f4bb7a343a74f7777006bc1268561->enter($__internal_32db39cbf872505fba781385acf5aa38c16f4bb7a343a74f7777006bc1268561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Profils:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32db39cbf872505fba781385acf5aa38c16f4bb7a343a74f7777006bc1268561->leave($__internal_32db39cbf872505fba781385acf5aa38c16f4bb7a343a74f7777006bc1268561_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_09785fc2931675f375f6c5983860a345b25306311a69f6f2672f750387585068 = $this->env->getExtension("native_profiler");
        $__internal_09785fc2931675f375f6c5983860a345b25306311a69f6f2672f750387585068->enter($__internal_09785fc2931675f375f6c5983860a345b25306311a69f6f2672f750387585068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "         ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "code", array()), "html", null, true);
        echo "
         |
\t   ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "       
\t";
        
        $__internal_09785fc2931675f375f6c5983860a345b25306311a69f6f2672f750387585068->leave($__internal_09785fc2931675f375f6c5983860a345b25306311a69f6f2672f750387585068_prof);

    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a69ec83696c48fb9114dd922dd13e5652894a82ff83516416d1fd95602b9a5b7 = $this->env->getExtension("native_profiler");
        $__internal_a69ec83696c48fb9114dd922dd13e5652894a82ff83516416d1fd95602b9a5b7->enter($__internal_a69ec83696c48fb9114dd922dd13e5652894a82ff83516416d1fd95602b9a5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
        echo "
    ";
        
        $__internal_a69ec83696c48fb9114dd922dd13e5652894a82ff83516416d1fd95602b9a5b7->leave($__internal_a69ec83696c48fb9114dd922dd13e5652894a82ff83516416d1fd95602b9a5b7_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_5e826029dcbdc8f51d150fc409105c4331d8bd7307b84fd2997a2a752d5c1fd0 = $this->env->getExtension("native_profiler");
        $__internal_5e826029dcbdc8f51d150fc409105c4331d8bd7307b84fd2997a2a752d5c1fd0->enter($__internal_5e826029dcbdc8f51d150fc409105c4331d8bd7307b84fd2997a2a752d5c1fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 12
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-star\"></i>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_profils_voir", array("matricule" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "matricule", array()))), "html", null, true);
        echo "\">
            \t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "code", array()), "html", null, true);
        echo "
            </a>
        </li>
        
    ";
        
        $__internal_5e826029dcbdc8f51d150fc409105c4331d8bd7307b84fd2997a2a752d5c1fd0->leave($__internal_5e826029dcbdc8f51d150fc409105c4331d8bd7307b84fd2997a2a752d5c1fd0_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_ade4e9e8a3f23b8758a925c7883039892d45b517722b66755c3debf3470cc2b5 = $this->env->getExtension("native_profiler");
        $__internal_ade4e9e8a3f23b8758a925c7883039892d45b517722b66755c3debf3470cc2b5->enter($__internal_ade4e9e8a3f23b8758a925c7883039892d45b517722b66755c3debf3470cc2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")));
        echo "
    ";
        
        $__internal_ade4e9e8a3f23b8758a925c7883039892d45b517722b66755c3debf3470cc2b5->leave($__internal_ade4e9e8a3f23b8758a925c7883039892d45b517722b66755c3debf3470cc2b5_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Profils:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  104 => 22,  92 => 17,  88 => 16,  80 => 12,  74 => 11,  64 => 8,  58 => 7,  49 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Profils/ajouter.html.twig'%}*/
/* 	{%block title%}*/
/*          {{profil.code}}*/
/*          |*/
/* 	   {{parent()}}       */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         {{profil.nom}}*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         {{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-star"></i>*/
/*             <a href="{{url('trc_admin_profils_voir',{matricule:profil.matricule})}}">*/
/*             	{{profil.code}}*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/*     {{dump(profil)}}*/
/*     {%endblock content%}*/
