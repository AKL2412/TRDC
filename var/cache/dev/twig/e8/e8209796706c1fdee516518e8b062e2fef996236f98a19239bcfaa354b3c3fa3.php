<?php

/* TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig */
class __TwigTemplate_ceb7285bd4785c716f0cb2b0d5fe86f8fb37713345958525f1a11f5bbe356ae6 extends Twig_Template
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
        $__internal_2a9715ed29fc623600511f18defa408dd923fbb7874b446d891e3dae8c9090b1 = $this->env->getExtension("native_profiler");
        $__internal_2a9715ed29fc623600511f18defa408dd923fbb7874b446d891e3dae8c9090b1->enter($__internal_2a9715ed29fc623600511f18defa408dd923fbb7874b446d891e3dae8c9090b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9715ed29fc623600511f18defa408dd923fbb7874b446d891e3dae8c9090b1->leave($__internal_2a9715ed29fc623600511f18defa408dd923fbb7874b446d891e3dae8c9090b1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d127c8829e9fdad825fddfd9788eb49f862db659c6731cee5002bcee432af6d = $this->env->getExtension("native_profiler");
        $__internal_6d127c8829e9fdad825fddfd9788eb49f862db659c6731cee5002bcee432af6d->enter($__internal_6d127c8829e9fdad825fddfd9788eb49f862db659c6731cee5002bcee432af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_6d127c8829e9fdad825fddfd9788eb49f862db659c6731cee5002bcee432af6d->leave($__internal_6d127c8829e9fdad825fddfd9788eb49f862db659c6731cee5002bcee432af6d_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = array())
    {
        $__internal_786b2930cf8a1428381d6f24856979dea4a59cf904ca33a1d07936eddde56325 = $this->env->getExtension("native_profiler");
        $__internal_786b2930cf8a1428381d6f24856979dea4a59cf904ca33a1d07936eddde56325->enter($__internal_786b2930cf8a1428381d6f24856979dea4a59cf904ca33a1d07936eddde56325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 9
        echo "
\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "image", array())), "html", null, true);
        echo " \" class=\"img-circle\" height=\"40\">
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
        
        $__internal_786b2930cf8a1428381d6f24856979dea4a59cf904ca33a1d07936eddde56325->leave($__internal_786b2930cf8a1428381d6f24856979dea4a59cf904ca33a1d07936eddde56325_prof);

    }

    // line 17
    public function block_position($context, array $blocks = array())
    {
        $__internal_f2f6993262254bac37924adfc6fa42964c03ee342d6d4891002178ce331ce4ea = $this->env->getExtension("native_profiler");
        $__internal_f2f6993262254bac37924adfc6fa42964c03ee342d6d4891002178ce331ce4ea->enter($__internal_f2f6993262254bac37924adfc6fa42964c03ee342d6d4891002178ce331ce4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_f2f6993262254bac37924adfc6fa42964c03ee342d6d4891002178ce331ce4ea->leave($__internal_f2f6993262254bac37924adfc6fa42964c03ee342d6d4891002178ce331ce4ea_prof);

    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        $__internal_8baeb5d371ebcd327bb317c7a9784d98e30b73dc73e3bc7032142bfcbe42b01d = $this->env->getExtension("native_profiler");
        $__internal_8baeb5d371ebcd327bb317c7a9784d98e30b73dc73e3bc7032142bfcbe42b01d->enter($__internal_8baeb5d371ebcd327bb317c7a9784d98e30b73dc73e3bc7032142bfcbe42b01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 32
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:utilisateur", array("utilisateur" => (isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")))));
        echo "

    ";
        // line 34
        if ((( !(null ===         // line 35
(isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste"))) &&  !(null === $this->getAttribute(        // line 36
(isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "profil", array()))) && $this->getAttribute($this->getAttribute(        // line 37
(isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "profil", array()), "ddp", array()))) {
            // line 39
            echo "    \t<hr>
    \t<div class=\"panel-default panel\">
    \t\t<div class=\"panel-heading\">
    \t\t\tAjouter une DDP au profil actuel
    \t\t</div>
    \t\t<div class=\"panel-body\">
    \t\t\t
    \t\t\t";
            // line 46
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
            echo "
            \t";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            \t<div class=\"row\">
\t\t        <div class=\"form-group col-md-6\">
\t\t            <label for=\"inputName\" class=\"control-label\">
\t\t                Montant minimum
\t\t            </label>
\t\t            <div class=\"input-icon right\">
\t\t                                
\t\t                ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "min", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "minimum")));
            echo "
\t\t                ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "min", array()), 'errors');
            echo "
\t\t            </div>
\t\t        </div>
\t\t        <div class=\"form-group col-md-6\">
\t\t            <label for=\"inputName\" class=\"control-label\">
\t\t                Montant maximum
\t\t            </label>
\t\t            <div class=\"input-icon right\">
\t\t                                
\t\t                ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "max", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "maximum")));
            echo "
\t\t                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "max", array()), 'errors');
            echo "
\t\t            </div>
\t\t        </div>
\t\t        <div class=\"form-group col-md-6\">
\t\t            <label for=\"inputName\" class=\"control-label\">
\t\t                Les crédits
\t\t            </label>
\t\t            <div class=\"input-icon right\">
\t\t                                
\t\t                ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tdc", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t                ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tdc", array()), 'errors');
            echo "
\t\t            </div>
\t\t        </div>
\t\t        <div class=\"form-group col-md-6\">
\t\t            <label for=\"inputName\" class=\"control-label\">
\t\t                Description
\t\t            </label>
\t\t            <div class=\"input-icon right\">
\t\t                                
\t\t                ";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "5")));
            echo "
\t\t                ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
            echo "
\t\t            </div>
\t\t        </div>
\t\t        </div>
\t\t        <div class=\"row\">
\t\t        \t<div class=\"form-group\">
\t\t        \t\t";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
            echo "
\t\t        \t</div>
\t\t        </div>
\t\t        ";
            // line 95
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    \t\t</div>
    \t</div>
    ";
        }
        // line 99
        echo "
    ";
        
        $__internal_8baeb5d371ebcd327bb317c7a9784d98e30b73dc73e3bc7032142bfcbe42b01d->leave($__internal_8baeb5d371ebcd327bb317c7a9784d98e30b73dc73e3bc7032142bfcbe42b01d_prof);

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
        return array (  245 => 99,  238 => 95,  232 => 92,  223 => 86,  219 => 85,  207 => 76,  203 => 75,  191 => 66,  187 => 65,  175 => 56,  171 => 55,  160 => 47,  156 => 46,  147 => 39,  145 => 37,  144 => 36,  143 => 35,  142 => 34,  136 => 32,  130 => 31,  117 => 25,  113 => 24,  109 => 23,  100 => 18,  94 => 17,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  69 => 9,  63 => 8,  54 => 6,  50 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/* 		<img src="{{asset(utilisateur.image)}} " class="img-circle" height="40">*/
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
/* */
/*     {%if */
/*     	poste is not null and*/
/*     	poste.profil is not null and*/
/*     	poste.profil.ddp */
/*     %}*/
/*     	<hr>*/
/*     	<div class="panel-default panel">*/
/*     		<div class="panel-heading">*/
/*     			Ajouter une DDP au profil actuel*/
/*     		</div>*/
/*     		<div class="panel-body">*/
/*     			*/
/*     			{{ form_start(form, {'attr': {'role':'form'}}) }}*/
/*             	{{ form_errors(form) }}*/
/*             	<div class="row">*/
/* 		        <div class="form-group col-md-6">*/
/* 		            <label for="inputName" class="control-label">*/
/* 		                Montant minimum*/
/* 		            </label>*/
/* 		            <div class="input-icon right">*/
/* 		                                */
/* 		                {{ form_widget(form.min, {'attr': {'class': 'form-control','placeholder':"minimum"}}) }}*/
/* 		                {{ form_errors(form.min) }}*/
/* 		            </div>*/
/* 		        </div>*/
/* 		        <div class="form-group col-md-6">*/
/* 		            <label for="inputName" class="control-label">*/
/* 		                Montant maximum*/
/* 		            </label>*/
/* 		            <div class="input-icon right">*/
/* 		                                */
/* 		                {{ form_widget(form.max, {'attr': {'class': 'form-control','placeholder':"maximum"}}) }}*/
/* 		                {{ form_errors(form.max) }}*/
/* 		            </div>*/
/* 		        </div>*/
/* 		        <div class="form-group col-md-6">*/
/* 		            <label for="inputName" class="control-label">*/
/* 		                Les crédits*/
/* 		            </label>*/
/* 		            <div class="input-icon right">*/
/* 		                                */
/* 		                {{ form_widget(form.tdc, {'attr': {'class': 'form-control'}}) }}*/
/* 		                {{ form_errors(form.tdc) }}*/
/* 		            </div>*/
/* 		        </div>*/
/* 		        <div class="form-group col-md-6">*/
/* 		            <label for="inputName" class="control-label">*/
/* 		                Description*/
/* 		            </label>*/
/* 		            <div class="input-icon right">*/
/* 		                                */
/* 		                {{ form_widget(form.description, {'attr': {'class': 'form-control','rows':'5'}}) }}*/
/* 		                {{ form_errors(form.description) }}*/
/* 		            </div>*/
/* 		        </div>*/
/* 		        </div>*/
/* 		        <div class="row">*/
/* 		        	<div class="form-group">*/
/* 		        		{{form_widget(form.save)}}*/
/* 		        	</div>*/
/* 		        </div>*/
/* 		        {{form_end(form)}}*/
/*     		</div>*/
/*     	</div>*/
/*     {%endif%}*/
/* */
/*     {%endblock content%}*/
