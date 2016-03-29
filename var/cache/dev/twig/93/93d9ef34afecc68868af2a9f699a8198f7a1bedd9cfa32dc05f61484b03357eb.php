<?php

/* TRCAdminBundle:Utilisateurs:affectation.html.twig */
class __TwigTemplate_8cd70ae6480080cc5001ad1593679f8df71ce55f5a4be7ca57fac9e4b21498ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Utilisateurs/utilisateursVoir.html.twig", "TRCAdminBundle:Utilisateurs:affectation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Utilisateurs/utilisateursVoir.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80728e2503e360a7132fe512292291af32e07fb081f6750c0c8f676b4ff610e6 = $this->env->getExtension("native_profiler");
        $__internal_80728e2503e360a7132fe512292291af32e07fb081f6750c0c8f676b4ff610e6->enter($__internal_80728e2503e360a7132fe512292291af32e07fb081f6750c0c8f676b4ff610e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Utilisateurs:affectation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80728e2503e360a7132fe512292291af32e07fb081f6750c0c8f676b4ff610e6->leave($__internal_80728e2503e360a7132fe512292291af32e07fb081f6750c0c8f676b4ff610e6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bd499cd9c78c284def1b99dc53411b67cf36f04bff28a06d6c05ea7133a017f = $this->env->getExtension("native_profiler");
        $__internal_8bd499cd9c78c284def1b99dc53411b67cf36f04bff28a06d6c05ea7133a017f->enter($__internal_8bd499cd9c78c284def1b99dc53411b67cf36f04bff28a06d6c05ea7133a017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t  \tAffectation [";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "]
\t    | ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
        
        $__internal_8bd499cd9c78c284def1b99dc53411b67cf36f04bff28a06d6c05ea7133a017f->leave($__internal_8bd499cd9c78c284def1b99dc53411b67cf36f04bff28a06d6c05ea7133a017f_prof);

    }

    // line 6
    public function block_position($context, array $blocks = array())
    {
        $__internal_222071965fd93dbbfcbb90146bcce9d8ac53111eabb3285c010379eb08913b13 = $this->env->getExtension("native_profiler");
        $__internal_222071965fd93dbbfcbb90146bcce9d8ac53111eabb3285c010379eb08913b13->enter($__internal_222071965fd93dbbfcbb90146bcce9d8ac53111eabb3285c010379eb08913b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 7
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "

\t\t        <li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-save\"></i>
\t\t            <a href=\"#\">
\t\t            \tAffectation [";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "]
\t\t            </a>
\t\t        </li>
\t       \t\t
        
";
        
        $__internal_222071965fd93dbbfcbb90146bcce9d8ac53111eabb3285c010379eb08913b13->leave($__internal_222071965fd93dbbfcbb90146bcce9d8ac53111eabb3285c010379eb08913b13_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_44b862cd41e6585c0c56ae5980958b5aae5d00bab3fb6fa25a054434fe6949eb = $this->env->getExtension("native_profiler");
        $__internal_44b862cd41e6585c0c56ae5980958b5aae5d00bab3fb6fa25a054434fe6949eb->enter($__internal_44b862cd41e6585c0c56ae5980958b5aae5d00bab3fb6fa25a054434fe6949eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"col-md-9\">
                        <ul class=\"nav nav-tabs\">
                        \t";
        // line 22
        if (((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")) == "choix-entite")) {
            // line 23
            echo "                            <li class=\"active\">
                            \t<a  data-toggle=\"tab\">
                            \t\tChoix de l'entité
                            \t</a>
                            </li>
                            <li>
                            \t<a  data-toggle=\"tab-\">
                            \t\t<i class=\"fa-lock fa\"></i>
                            \t\tChoix du profil
                            \t</a>
                            </li>
                            ";
        } else {
            // line 35
            echo "                            <li >
                            \t<a href=\"#choix-entite\"  data-toggle=\"tab\">
                            \t\t<i  class=\"fa-check fa\"></i>
                            \t\tChoix de l'entité
                            \t</a>
                            </li>
                            <li class=\"active\">
                            \t<a href=\"#choix-profil\" data-toggle=\"tab\">
                            \t\t
                            \t\tChoix du profil
                            \t</a>
                            </li>
                            ";
        }
        // line 47
        echo " 
                            
                        </ul>
                        <div id=\"generalTabContent\" class=\"tab-content\">
                        ";
        // line 51
        if (((isset($context["etape"]) ? $context["etape"] : $this->getContext($context, "etape")) == "choix-entite")) {
            // line 52
            echo "                            <div id=\"choix-entite-\" class=\"tab-pane fade in active\">
                            \t
                            \t\t<form method=\"post\">
                            \t\t\t<input type=\"text\" hidden=\"hidden\" value=\"entite\" name=\"action\">
                            \t\t\t<div class=\"alert\">
                            \t\t\t\t<h2>
                            \t\t\t\t\tCocher l'entié
                            \t\t\t\t</h2>
                            \t\t\t</div>
                                        <div class=\"row\">
                            \t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entites"]) ? $context["entites"] : $this->getContext($context, "entites")));
            foreach ($context['_seq'] as $context["_key"] => $context["entite"]) {
                // line 63
                echo "                            \t\t\t<div class=\"col-md-6\">
                            \t\t\t\t<label for=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "matricule", array()), "html", null, true);
                echo "\">
                            \t\t\t\t\t<input type=\"radio\" required=\"required\"
                            \t\t\t\tname=\"input-entite\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "matricule", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "matricule", array()), "html", null, true);
                echo "\">
                            \t\t\t\t";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "nom", array()), "html", null, true);
                echo " 
                                             ";
                // line 68
                if ($this->getAttribute($context["entite"], "zone", array(), "any", true, true)) {
                    echo " 
                                            <small>[";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entite"], "zone", array()), "nom", array()), "html", null, true);
                    echo "]</small>
                                            ";
                }
                // line 71
                echo "                            \t\t\t\t</label>
                            \t\t\t</div>
                            \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                        </div>
                            \t\t\t<div>
                            \t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
                            \t\t\t\t\tValider
                            \t\t\t\t</button>
                            \t\t\t</div>
                            \t\t</form>
                            </div>
                        ";
        } else {
            // line 83
            echo "                        \t<div id=\"choix-profil\" class=\"tab-pane fade in active\">
                                
                            \t<form method=\"post\">
                            \t\t\t<input type=\"text\" hidden=\"hidden\" value=\"profil\" name=\"action\">
                            \t\t\t<div class=\"alert\">
                            \t\t\t\t<h2>
                            \t\t\t\t\tCocher le profil 
                            \t\t\t\t</h2>
                            \t\t\t</div>
                            \t\t\t<div class=\"row\">
                            \t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
            foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
                // line 94
                echo "                            \t\t\t<div class=\"col-md-6\">
                            \t\t\t\t<label for=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "matricule", array()), "html", null, true);
                echo "\">
                            \t\t\t\t\t<input type=\"radio\" required=\"required\"
                            \t\t\t\tname=\"input-profil\" value=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "matricule", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "matricule", array()), "html", null, true);
                echo "\">
                            \t\t\t\t";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "nom", array()), "html", null, true);
                echo " <small>#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "code", array()), "html", null, true);
                echo "</small>
                            \t\t\t\t</label>
                            \t\t\t</div>
                            \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                            \t\t\t</div>
                            \t\t\t<div>
                            \t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
                            \t\t\t\t\tValider
                            \t\t\t\t</button>
                            \t\t\t</div>
                            \t\t</form>
                            </div>
                            <div id=\"choix-entite\" class=\"tab-pane fade in\">
                            \t\t\t<div class=\"alert\">
                            \t\t\t\t<h2>
                            \t\t\t\t\tEntité
                            \t\t\t\t</h2>
                            \t\t\t</div>
                            \t\t\t<div class=\"row\">
                            \t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entites"]) ? $context["entites"] : $this->getContext($context, "entites")));
            foreach ($context['_seq'] as $context["_key"] => $context["entite"]) {
                // line 118
                echo "                            \t\t\t";
                $context["etat"] = "";
                // line 119
                echo "                            \t\t\t";
                $context["classe"] = "";
                // line 120
                echo "                            \t\t\t";
                if ((( !(null === (isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction"))) &&  !(null === $this->getAttribute($context["entite"], "entite", array()))) && ($this->getAttribute($this->getAttribute($context["entite"], "entite", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "entite", array()), "id", array())))) {
                    // line 121
                    echo "                            \t\t\t\t";
                    $context["etat"] = "checked=\"checked\"";
                    // line 122
                    echo "                            \t\t\t\t";
                    $context["classe"] = "text-success";
                    // line 123
                    echo "                            \t\t\t";
                }
                // line 124
                echo "                            \t\t\t<div class=\"col-md-6 ";
                echo twig_escape_filter($this->env, (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "html", null, true);
                echo " \">
                            \t\t\t\t<label for=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "matricule", array()), "html", null, true);
                echo "\">
                            \t\t\t\t\t<input type=\"checkbox\" required=\"required\" disabled=\"disabled\" 
                            \t\t\t\tname=\"input-entite\" value=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "matricule", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "matricule", array()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["etat"]) ? $context["etat"] : $this->getContext($context, "etat")), "html", null, true);
                echo " >
                            \t\t\t\t";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["entite"], "nom", array()), "html", null, true);
                echo "
                                            ";
                // line 129
                if ($this->getAttribute($context["entite"], "zone", array(), "any", true, true)) {
                    echo " 
                                            <small>[";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entite"], "zone", array()), "nom", array()), "html", null, true);
                    echo "]</small>
                                            ";
                }
                // line 132
                echo "                            \t\t\t\t</label>
                            \t\t\t</div>
                            \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                            \t\t\t</div>
                            </div>
                            
                        ";
        }
        // line 139
        echo "                        </div>
                    </div>
";
        
        $__internal_44b862cd41e6585c0c56ae5980958b5aae5d00bab3fb6fa25a054434fe6949eb->leave($__internal_44b862cd41e6585c0c56ae5980958b5aae5d00bab3fb6fa25a054434fe6949eb_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Utilisateurs:affectation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 139,  316 => 135,  308 => 132,  303 => 130,  299 => 129,  295 => 128,  287 => 127,  282 => 125,  277 => 124,  274 => 123,  271 => 122,  268 => 121,  265 => 120,  262 => 119,  259 => 118,  255 => 117,  238 => 102,  226 => 98,  220 => 97,  215 => 95,  212 => 94,  208 => 93,  196 => 83,  185 => 74,  177 => 71,  172 => 69,  168 => 68,  164 => 67,  158 => 66,  153 => 64,  150 => 63,  146 => 62,  134 => 52,  132 => 51,  126 => 47,  111 => 35,  97 => 23,  95 => 22,  91 => 20,  85 => 19,  72 => 13,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Utilisateurs/utilisateursVoir.html.twig'%}*/
/* 	{%block title%}*/
/* 	  	Affectation [{{title}}]*/
/* 	    | {{parent()}}*/
/* 	{%endblock title%}*/
/* 	{%block position %}*/
/*         {{parent()}}*/
/* */
/* 		        <li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-save"></i>*/
/* 		            <a href="#">*/
/* 		            	Affectation [{{title}}]*/
/* 		            </a>*/
/* 		        </li>*/
/* 	       		*/
/*         */
/* {%endblock position%}*/
/* {%block content%}*/
/* <div class="col-md-9">*/
/*                         <ul class="nav nav-tabs">*/
/*                         	{%if etape == 'choix-entite'%}*/
/*                             <li class="active">*/
/*                             	<a  data-toggle="tab">*/
/*                             		Choix de l'entité*/
/*                             	</a>*/
/*                             </li>*/
/*                             <li>*/
/*                             	<a  data-toggle="tab-">*/
/*                             		<i class="fa-lock fa"></i>*/
/*                             		Choix du profil*/
/*                             	</a>*/
/*                             </li>*/
/*                             {%else %}*/
/*                             <li >*/
/*                             	<a href="#choix-entite"  data-toggle="tab">*/
/*                             		<i  class="fa-check fa"></i>*/
/*                             		Choix de l'entité*/
/*                             	</a>*/
/*                             </li>*/
/*                             <li class="active">*/
/*                             	<a href="#choix-profil" data-toggle="tab">*/
/*                             		*/
/*                             		Choix du profil*/
/*                             	</a>*/
/*                             </li>*/
/*                             {%endif%} */
/*                             */
/*                         </ul>*/
/*                         <div id="generalTabContent" class="tab-content">*/
/*                         {%if etape == 'choix-entite'%}*/
/*                             <div id="choix-entite-" class="tab-pane fade in active">*/
/*                             	*/
/*                             		<form method="post">*/
/*                             			<input type="text" hidden="hidden" value="entite" name="action">*/
/*                             			<div class="alert">*/
/*                             				<h2>*/
/*                             					Cocher l'entié*/
/*                             				</h2>*/
/*                             			</div>*/
/*                                         <div class="row">*/
/*                             			{%for entite in entites%}*/
/*                             			<div class="col-md-6">*/
/*                             				<label for="{{entite.matricule}}">*/
/*                             					<input type="radio" required="required"*/
/*                             				name="input-entite" value="{{entite.matricule}}" id="{{entite.matricule}}">*/
/*                             				{{entite.nom}} */
/*                                              {%if entite.zone is defined %} */
/*                                             <small>[{{entite.zone.nom}}]</small>*/
/*                                             {%endif%}*/
/*                             				</label>*/
/*                             			</div>*/
/*                             			{%endfor%}*/
/*                                         </div>*/
/*                             			<div>*/
/*                             				<button type="submit" class="btn btn-primary">*/
/*                             					Valider*/
/*                             				</button>*/
/*                             			</div>*/
/*                             		</form>*/
/*                             </div>*/
/*                         {%else%}*/
/*                         	<div id="choix-profil" class="tab-pane fade in active">*/
/*                                 */
/*                             	<form method="post">*/
/*                             			<input type="text" hidden="hidden" value="profil" name="action">*/
/*                             			<div class="alert">*/
/*                             				<h2>*/
/*                             					Cocher le profil */
/*                             				</h2>*/
/*                             			</div>*/
/*                             			<div class="row">*/
/*                             			{%for profil in profils%}*/
/*                             			<div class="col-md-6">*/
/*                             				<label for="{{profil.matricule}}">*/
/*                             					<input type="radio" required="required"*/
/*                             				name="input-profil" value="{{profil.matricule}}" id="{{profil.matricule}}">*/
/*                             				{{profil.nom}} <small>#{{profil.code}}</small>*/
/*                             				</label>*/
/*                             			</div>*/
/*                             			{%endfor%}*/
/*                             			</div>*/
/*                             			<div>*/
/*                             				<button type="submit" class="btn btn-primary">*/
/*                             					Valider*/
/*                             				</button>*/
/*                             			</div>*/
/*                             		</form>*/
/*                             </div>*/
/*                             <div id="choix-entite" class="tab-pane fade in">*/
/*                             			<div class="alert">*/
/*                             				<h2>*/
/*                             					Entité*/
/*                             				</h2>*/
/*                             			</div>*/
/*                             			<div class="row">*/
/*                             			{%for entite in entites%}*/
/*                             			{%set etat = "" %}*/
/*                             			{%set classe = "" %}*/
/*                             			{%if fonction is not null and entite.entite is not null and entite.entite.id == fonction.entite.id %}*/
/*                             				{%set etat = 'checked="checked"'%}*/
/*                             				{%set classe = "text-success" %}*/
/*                             			{%endif%}*/
/*                             			<div class="col-md-6 {{classe}} ">*/
/*                             				<label for="{{entite.matricule}}">*/
/*                             					<input type="checkbox" required="required" disabled="disabled" */
/*                             				name="input-entite" value="{{entite.matricule}}" id="{{entite.matricule}}" {{etat}} >*/
/*                             				{{entite.nom}}*/
/*                                             {%if entite.zone is defined %} */
/*                                             <small>[{{entite.zone.nom}}]</small>*/
/*                                             {%endif%}*/
/*                             				</label>*/
/*                             			</div>*/
/*                             			{%endfor%}*/
/*                             			</div>*/
/*                             </div>*/
/*                             */
/*                         {%endif%}*/
/*                         </div>*/
/*                     </div>*/
/* {%endblock content%}*/
