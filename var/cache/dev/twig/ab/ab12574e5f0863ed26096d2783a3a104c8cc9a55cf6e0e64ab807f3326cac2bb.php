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
        $__internal_69e352eabe55dc12ce8d1c45115af750142fe48bf6ecdbcffaf6c3a3136165a6 = $this->env->getExtension("native_profiler");
        $__internal_69e352eabe55dc12ce8d1c45115af750142fe48bf6ecdbcffaf6c3a3136165a6->enter($__internal_69e352eabe55dc12ce8d1c45115af750142fe48bf6ecdbcffaf6c3a3136165a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e352eabe55dc12ce8d1c45115af750142fe48bf6ecdbcffaf6c3a3136165a6->leave($__internal_69e352eabe55dc12ce8d1c45115af750142fe48bf6ecdbcffaf6c3a3136165a6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c951c584b67028d77e773a920115482017b1df483507a16fc37bc5a58a4f5fd3 = $this->env->getExtension("native_profiler");
        $__internal_c951c584b67028d77e773a920115482017b1df483507a16fc37bc5a58a4f5fd3->enter($__internal_c951c584b67028d77e773a920115482017b1df483507a16fc37bc5a58a4f5fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_c951c584b67028d77e773a920115482017b1df483507a16fc37bc5a58a4f5fd3->leave($__internal_c951c584b67028d77e773a920115482017b1df483507a16fc37bc5a58a4f5fd3_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = array())
    {
        $__internal_fc12cdc113a798c9481626aef1930b9870150be91394a941ecc49e2a1cc4105e = $this->env->getExtension("native_profiler");
        $__internal_fc12cdc113a798c9481626aef1930b9870150be91394a941ecc49e2a1cc4105e->enter($__internal_fc12cdc113a798c9481626aef1930b9870150be91394a941ecc49e2a1cc4105e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 9
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "image", array())), "html", null, true);
        echo " \" class=\"img-circle-\" height=\"40\">
\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "
\t   \t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array())), "html", null, true);
        echo "
        
    ";
        
        $__internal_fc12cdc113a798c9481626aef1930b9870150be91394a941ecc49e2a1cc4105e->leave($__internal_fc12cdc113a798c9481626aef1930b9870150be91394a941ecc49e2a1cc4105e_prof);

    }

    // line 15
    public function block_position($context, array $blocks = array())
    {
        $__internal_9d8e27d7d86a18058c61e427e4303b1603d46592a0945813bba7f5cca5c62e04 = $this->env->getExtension("native_profiler");
        $__internal_9d8e27d7d86a18058c61e427e4303b1603d46592a0945813bba7f5cca5c62e04->enter($__internal_9d8e27d7d86a18058c61e427e4303b1603d46592a0945813bba7f5cca5c62e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 16
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "

\t\t        <li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-eye\"></i>
\t\t            <a href=\"#\">
\t\t            \t";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "
\t   \t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array())), "html", null, true);
        echo "
\t\t            </a>
\t\t        </li>
\t       \t\t
        
    ";
        
        $__internal_9d8e27d7d86a18058c61e427e4303b1603d46592a0945813bba7f5cca5c62e04->leave($__internal_9d8e27d7d86a18058c61e427e4303b1603d46592a0945813bba7f5cca5c62e04_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_3deb3a596912310f6ae12e5a75d9d2b6bd804a9a4749a9d611d378e182d4682b = $this->env->getExtension("native_profiler");
        $__internal_3deb3a596912310f6ae12e5a75d9d2b6bd804a9a4749a9d611d378e182d4682b->enter($__internal_3deb3a596912310f6ae12e5a75d9d2b6bd804a9a4749a9d611d378e182d4682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "
    ";
        
        $__internal_3deb3a596912310f6ae12e5a75d9d2b6bd804a9a4749a9d611d378e182d4682b->leave($__internal_3deb3a596912310f6ae12e5a75d9d2b6bd804a9a4749a9d611d378e182d4682b_prof);

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
        return array (  127 => 30,  121 => 29,  108 => 23,  104 => 22,  94 => 16,  88 => 15,  78 => 11,  74 => 10,  69 => 9,  63 => 8,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/* 		<img src="{{asset(utilisateur.image)}} " class="img-circle-" height="40">*/
/* 			{{utilisateur.prenom}}*/
/* 	   		{{utilisateur.nom|upper}}*/
/*         */
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         {{parent()}}*/
/* */
/* 		        <li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-eye"></i>*/
/* 		            <a href="#">*/
/* 		            	{{utilisateur.prenom}}*/
/* 	   					{{utilisateur.nom|upper}}*/
/* 		            </a>*/
/* 		        </li>*/
/* 	       		*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/* */
/*     {%endblock content%}*/
