<?php

/* TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig */
class __TwigTemplate_0f9ec1aca2ce2ccb3b47dba09c6164d4bd7a3ab23223f8c229e25fe3a77016d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Utilisateurs/utilisateurs.html.twig", "TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Utilisateurs/utilisateurs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45def390bcb66c11b8d2bfc3c9f9ef3782e7997ca2b10d3aeeadc2bad3199656 = $this->env->getExtension("native_profiler");
        $__internal_45def390bcb66c11b8d2bfc3c9f9ef3782e7997ca2b10d3aeeadc2bad3199656->enter($__internal_45def390bcb66c11b8d2bfc3c9f9ef3782e7997ca2b10d3aeeadc2bad3199656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45def390bcb66c11b8d2bfc3c9f9ef3782e7997ca2b10d3aeeadc2bad3199656->leave($__internal_45def390bcb66c11b8d2bfc3c9f9ef3782e7997ca2b10d3aeeadc2bad3199656_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5aa7b921d811279263e1740790c14bebcf77c428b17460e5c0cdf6a5dc1df61 = $this->env->getExtension("native_profiler");
        $__internal_b5aa7b921d811279263e1740790c14bebcf77c428b17460e5c0cdf6a5dc1df61->enter($__internal_b5aa7b921d811279263e1740790c14bebcf77c428b17460e5c0cdf6a5dc1df61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t  
\t   ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "
\t   ";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array())), "html", null, true);
        echo "
\t    | ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
        
        $__internal_b5aa7b921d811279263e1740790c14bebcf77c428b17460e5c0cdf6a5dc1df61->leave($__internal_b5aa7b921d811279263e1740790c14bebcf77c428b17460e5c0cdf6a5dc1df61_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = array())
    {
        $__internal_4a7ee28111e1180aa16047ad8cae2e5d7d095eaf7621d6f8959dbd217af9906b = $this->env->getExtension("native_profiler");
        $__internal_4a7ee28111e1180aa16047ad8cae2e5d7d095eaf7621d6f8959dbd217af9906b->enter($__internal_4a7ee28111e1180aa16047ad8cae2e5d7d095eaf7621d6f8959dbd217af9906b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 9
        echo "
\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "image", array())), "html", null, true);
        echo " \" class=\"img-circle-\" height=\"40\">
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "
\t   \t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array())), "html", null, true);
        echo "
\t   \t\t#";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "matricule", array()), "html", null, true);
        echo "
        
    ";
        
        $__internal_4a7ee28111e1180aa16047ad8cae2e5d7d095eaf7621d6f8959dbd217af9906b->leave($__internal_4a7ee28111e1180aa16047ad8cae2e5d7d095eaf7621d6f8959dbd217af9906b_prof);

    }

    // line 17
    public function block_position($context, array $blocks = array())
    {
        $__internal_7419830c7035a1e100cfb960354820d347ebec954dfd47351bec4c8c10eeca4e = $this->env->getExtension("native_profiler");
        $__internal_7419830c7035a1e100cfb960354820d347ebec954dfd47351bec4c8c10eeca4e->enter($__internal_7419830c7035a1e100cfb960354820d347ebec954dfd47351bec4c8c10eeca4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 18
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "

\t\t        <li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-eye\"></i>
\t\t            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_voir", array("matricule" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "matricule", array()))), "html", null, true);
        echo " \">
\t\t            \t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "
\t   \t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array())), "html", null, true);
        echo "
\t\t            </a>
\t\t        </li>
\t       \t\t
        
    ";
        
        $__internal_7419830c7035a1e100cfb960354820d347ebec954dfd47351bec4c8c10eeca4e->leave($__internal_7419830c7035a1e100cfb960354820d347ebec954dfd47351bec4c8c10eeca4e_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_93dc5d3e40fa7bbbc5b4654740f6c3fb8d23c055a969e8a3b28af99fc1fc7a91 = $this->env->getExtension("native_profiler");
        $__internal_93dc5d3e40fa7bbbc5b4654740f6c3fb8d23c055a969e8a3b28af99fc1fc7a91->enter($__internal_93dc5d3e40fa7bbbc5b4654740f6c3fb8d23c055a969e8a3b28af99fc1fc7a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:utilisateur", array("utilisateur" => (isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")))));
        echo "
    ";
        
        $__internal_93dc5d3e40fa7bbbc5b4654740f6c3fb8d23c055a969e8a3b28af99fc1fc7a91->leave($__internal_93dc5d3e40fa7bbbc5b4654740f6c3fb8d23c055a969e8a3b28af99fc1fc7a91_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  130 => 31,  117 => 25,  113 => 24,  109 => 23,  100 => 18,  94 => 17,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  69 => 9,  63 => 8,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Utilisateurs/utilisateurs.html.twig'%}*/
/* 	{%block title%}*/
/* 	  */
/* 	   {{utilisateur.prenom}}*/
/* 	   {{utilisateur.nom|upper}}*/
/* 	    | {{parent()}}*/
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/* */
/* 		<img src="{{asset(utilisateur.image)}} " class="img-circle-" height="40">*/
/* 			{{utilisateur.prenom}}*/
/* 	   		{{utilisateur.nom|upper}}*/
/* 	   		#{{utilisateur.matricule}}*/
/*         */
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         {{parent()}}*/
/* */
/* 		        <li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-eye"></i>*/
/* 		            <a href="{{url('trc_admin_utilisateurs_voir',{matricule:utilisateur.matricule})}} ">*/
/* 		            	{{utilisateur.prenom}}*/
/* 	   					{{utilisateur.nom|upper}}*/
/* 		            </a>*/
/* 		        </li>*/
/* 	       		*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/*     {{render(controller('TRCCoreBundle:Affichage:utilisateur',{utilisateur:utilisateur}))}}*/
/*     {%endblock content%}*/
