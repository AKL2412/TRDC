<?php

/* TRCClientBundle:Default:consulter.html.twig */
class __TwigTemplate_19451c5f1081f06698a243ddc7ae811d421fe27a7d4ccfc9672ece5d77f01386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::clients.html.twig", "TRCClientBundle:Default:consulter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCClientBundle::clients.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a822b81f99f63c218b9b4fdb32d6faeb4d073d0110c0f83b2d3d298a5427bb13 = $this->env->getExtension("native_profiler");
        $__internal_a822b81f99f63c218b9b4fdb32d6faeb4d073d0110c0f83b2d3d298a5427bb13->enter($__internal_a822b81f99f63c218b9b4fdb32d6faeb4d073d0110c0f83b2d3d298a5427bb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:Default:consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a822b81f99f63c218b9b4fdb32d6faeb4d073d0110c0f83b2d3d298a5427bb13->leave($__internal_a822b81f99f63c218b9b4fdb32d6faeb4d073d0110c0f83b2d3d298a5427bb13_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a5b2a8eef0a478b72b8a5e993366615180faf48a63628e8ff576d53346b6125 = $this->env->getExtension("native_profiler");
        $__internal_5a5b2a8eef0a478b72b8a5e993366615180faf48a63628e8ff576d53346b6125->enter($__internal_5a5b2a8eef0a478b72b8a5e993366615180faf48a63628e8ff576d53346b6125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()), "html", null, true);
        echo "         
";
        
        $__internal_5a5b2a8eef0a478b72b8a5e993366615180faf48a63628e8ff576d53346b6125->leave($__internal_5a5b2a8eef0a478b72b8a5e993366615180faf48a63628e8ff576d53346b6125_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_40f752fc5b8baf1a89b7f566a5e36291fc0341ecaa6d009b79a511cd62fcbd77 = $this->env->getExtension("native_profiler");
        $__internal_40f752fc5b8baf1a89b7f566a5e36291fc0341ecaa6d009b79a511cd62fcbd77->enter($__internal_40f752fc5b8baf1a89b7f566a5e36291fc0341ecaa6d009b79a511cd62fcbd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "intitule", array()), "html", null, true);
        echo "
";
        
        $__internal_40f752fc5b8baf1a89b7f566a5e36291fc0341ecaa6d009b79a511cd62fcbd77->leave($__internal_40f752fc5b8baf1a89b7f566a5e36291fc0341ecaa6d009b79a511cd62fcbd77_prof);

    }

    // line 8
    public function block_position($context, array $blocks = array())
    {
        $__internal_f59b268244cb5be35d955695b6c5fec7f592dfdb1a949f020d85416d5c6e0f20 = $this->env->getExtension("native_profiler");
        $__internal_f59b268244cb5be35d955695b6c5fec7f592dfdb1a949f020d85416d5c6e0f20->enter($__internal_f59b268244cb5be35d955695b6c5fec7f592dfdb1a949f020d85416d5c6e0f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 9
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_consulter", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo "\">
            \t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()), "html", null, true);
        echo "
            </a>
        </li>
        
";
        
        $__internal_f59b268244cb5be35d955695b6c5fec7f592dfdb1a949f020d85416d5c6e0f20->leave($__internal_f59b268244cb5be35d955695b6c5fec7f592dfdb1a949f020d85416d5c6e0f20_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a3c6909eb278d4b7ede0aeee86f0cb9475fc862702ea9babb5ef77b9c9f0ced = $this->env->getExtension("native_profiler");
        $__internal_2a3c6909eb278d4b7ede0aeee86f0cb9475fc862702ea9babb5ef77b9c9f0ced->enter($__internal_2a3c6909eb278d4b7ede0aeee86f0cb9475fc862702ea9babb5ef77b9c9f0ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "<div class=\"block-\">
\t<div class=\"row\">
\t\t<div class=\"form-group col-md-5\">
\t\t\t 
\t\t\t<select url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_consulter", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \"  class=\"form-control\" id=\"voir-client-select\">
\t\t\t\t<optgroup label=\"Information\">
\t\t\t\t\t<option value=\"identite\">
\t\t\t\t\t\tIdentité
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"coordonnee\">
\t\t\t\t\t\tCoordonnée
\t\t\t\t\t</option>
\t\t\t\t</optgroup>
\t\t\t\t<optgroup label=\"Emploi\">
\t\t\t\t\t<option value=\"employeur\">
\t\t\t\t\t\tEmployeur
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"profession\">
\t\t\t\t\t\tProfession
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"revenu\">
\t\t\t\t\t\tRevenu
\t\t\t\t\t</option>
\t\t\t\t</optgroup>
\t\t\t\t<optgroup label=\"Social\">
\t\t\t\t\t<option value=\"logement\">
\t\t\t\t\t\tLogement
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"pac\" title=\"Personne à  contacter\">
\t\t\t\t\t\tPAC
\t\t\t\t\t</option>
\t\t\t\t</optgroup>
\t\t\t</select>

\t\t</div>
\t\t<div class=\"form-group col-md-5 col-md-offset-2\">
\t\t\t 
\t\t\t<select url=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_consulter", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \"  class=\"form-control\" id=\"etats-client-select\">
\t\t\t\t
\t\t\t\t\t<option value=\"comptes\">
\t\t\t\t\t\tLes comptes
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"engagements\">
\t\t\t\t\t\tLes engagements
\t\t\t\t\t</option>
\t\t\t\t
\t\t\t</select>

\t\t</div>
\t</div>
\t<div class=\"row \">
\t\t<div class=\" col-md-5\">
\t\t\t<div id=\"voir-client-div\">
\t\t\t\t<table class=\"table table-condensed table-striped\">
\t\t\t\t";
        // line 74
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array()))) {
            // line 75
            echo "\t\t\t\t\t<caption>
\t\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t\tRenseigner l'identité du client
\t\t\t\t\t\t</a>
\t\t\t\t\t</caption>
\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t<caption>
\t\t\t\t\t\t<a class=\"pull-right btn btn-xs\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</caption>
\t\t\t\t\t";
            // line 86
            $context["iden"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array());
            // line 87
            echo "\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Civilité</td>
\t\t\t\t\t\t\t<td> ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "civilite", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t<td> ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t<td> ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "prenom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Pièce</td>
\t\t\t\t\t\t\t<td> ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "piece", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Numero de pièce</td>
\t\t\t\t\t\t\t<td> ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "numeroPiece", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nationalité</td>
\t\t\t\t\t\t\t<td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nationalité", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nom", array()), "html", null, true);
            echo "] </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t";
        }
        // line 114
        echo "\t\t\t</table>\t
\t\t\t</div>
\t\t\t</div>
\t
\t\t<div class=\"col-md-7\">
\t\t\t<div id=\"etats-client-div\">
\t\t\t\t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_ajouter_comptes", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t<i class=\"fa-plus-circle fa\"></i>
\t\t\t\t\tAjouter un compte
\t\t\t\t</a>
\t\t\t\t";
        // line 124
        if ((twig_length_filter($this->env, (isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes"))) > 0)) {
            // line 125
            echo "\t\t\t\t\t<table class=\" table table-striped table-condensed\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Type de compte</th>
\t\t\t\t\t\t\t\t<th>Numéro de compte</th>
\t\t\t\t\t\t\t\t<th>Solde du compte</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
            foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
                // line 135
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "type", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "numeroCompte", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "solde", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_modifier_comptes", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()), "id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
                echo " \">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-edit fa\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t";
        } else {
            // line 149
            echo "
\t\t\t\t<div class=\"alert-danger alert text-center\">
\t\t\t\t\t<h4>Aucun compte</h4>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 154
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_2a3c6909eb278d4b7ede0aeee86f0cb9475fc862702ea9babb5ef77b9c9f0ced->leave($__internal_2a3c6909eb278d4b7ede0aeee86f0cb9475fc862702ea9babb5ef77b9c9f0ced_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:Default:consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 154,  306 => 149,  301 => 146,  289 => 140,  284 => 138,  280 => 137,  276 => 136,  273 => 135,  269 => 134,  258 => 125,  256 => 124,  249 => 120,  241 => 114,  232 => 110,  225 => 106,  218 => 102,  211 => 98,  204 => 94,  197 => 90,  192 => 87,  190 => 86,  183 => 82,  180 => 81,  172 => 76,  169 => 75,  167 => 74,  147 => 57,  111 => 24,  105 => 20,  99 => 19,  87 => 14,  83 => 13,  75 => 9,  69 => 8,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::clients.html.twig'%}*/
/* {%block title%}*/
/* 	 {{client.radical}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*     {{client.intitule}}*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="{{url('trc_client_consulter',{radical:client.radical})}}">*/
/*             	{{client.radical}}*/
/*             </a>*/
/*         </li>*/
/*         */
/* {%endblock position%}*/
/* {%block content %}*/
/* <div class="block-">*/
/* 	<div class="row">*/
/* 		<div class="form-group col-md-5">*/
/* 			 */
/* 			<select url="{{url('trc_client_consulter',{radical:client.radical})}} "  class="form-control" id="voir-client-select">*/
/* 				<optgroup label="Information">*/
/* 					<option value="identite">*/
/* 						Identité*/
/* 					</option>*/
/* 					<option value="coordonnee">*/
/* 						Coordonnée*/
/* 					</option>*/
/* 				</optgroup>*/
/* 				<optgroup label="Emploi">*/
/* 					<option value="employeur">*/
/* 						Employeur*/
/* 					</option>*/
/* 					<option value="profession">*/
/* 						Profession*/
/* 					</option>*/
/* 					<option value="revenu">*/
/* 						Revenu*/
/* 					</option>*/
/* 				</optgroup>*/
/* 				<optgroup label="Social">*/
/* 					<option value="logement">*/
/* 						Logement*/
/* 					</option>*/
/* 					<option value="pac" title="Personne à  contacter">*/
/* 						PAC*/
/* 					</option>*/
/* 				</optgroup>*/
/* 			</select>*/
/* */
/* 		</div>*/
/* 		<div class="form-group col-md-5 col-md-offset-2">*/
/* 			 */
/* 			<select url="{{url('trc_client_consulter',{radical:client.radical})}} "  class="form-control" id="etats-client-select">*/
/* 				*/
/* 					<option value="comptes">*/
/* 						Les comptes*/
/* 					</option>*/
/* 					<option value="engagements">*/
/* 						Les engagements*/
/* 					</option>*/
/* 				*/
/* 			</select>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row ">*/
/* 		<div class=" col-md-5">*/
/* 			<div id="voir-client-div">*/
/* 				<table class="table table-condensed table-striped">*/
/* 				{%if client.identite is null %}*/
/* 					<caption>*/
/* 						<a class="btn btn-xs" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 							Renseigner l'identité du client*/
/* 						</a>*/
/* 					</caption>*/
/* 				{%else%}*/
/* 					<caption>*/
/* 						<a class="pull-right btn btn-xs" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 							<i class="fa-edit fa "></i>*/
/* 						</a>*/
/* 					</caption>*/
/* 					{%set iden = client.identite %}*/
/* 					*/
/* 						<tr>*/
/* 							<td>Civilité</td>*/
/* 							<td> {{iden.civilite.nom}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Nom</td>*/
/* 							<td> {{iden.nom}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Prenom</td>*/
/* 							<td> {{iden.prenom}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Pièce</td>*/
/* 							<td> {{iden.piece.nom}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Numero de pièce</td>*/
/* 							<td> {{iden.numeroPiece}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Nationalité</td>*/
/* 							<td>{{iden.pays.nationalité}} [{{iden.pays.nom}}] </td>*/
/* 						</tr>*/
/* 					*/
/* 				{%endif%}*/
/* 			</table>	*/
/* 			</div>*/
/* 			</div>*/
/* 	*/
/* 		<div class="col-md-7">*/
/* 			<div id="etats-client-div">*/
/* 				<a href="{{url('trc_client_ajouter_comptes',{radical:client.radical})}} ">*/
/* 					<i class="fa-plus-circle fa"></i>*/
/* 					Ajouter un compte*/
/* 				</a>*/
/* 				{%if comptes|length > 0 %}*/
/* 					<table class=" table table-striped table-condensed">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>Type de compte</th>*/
/* 								<th>Numéro de compte</th>*/
/* 								<th>Solde du compte</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							{%for compte in comptes%}*/
/* 								<tr>*/
/* 									<td>{{compte.type}} </td>*/
/* 									<td>{{compte.numeroCompte}} </td>*/
/* 									<td>{{compte.solde}} </td>*/
/* 									<td>*/
/* 										<a href="{{url('trc_client_modifier_comptes',{radical:client.radical,id:compte.id})}} ">*/
/* 											<i class="fa-edit fa"></i>*/
/* 										</a>*/
/* 									</td>*/
/* 								</tr>*/
/* 							{%endfor%}*/
/* 						</tbody>*/
/* 					</table>*/
/* 				{%else%}*/
/* */
/* 				<div class="alert-danger alert text-center">*/
/* 					<h4>Aucun compte</h4>*/
/* 				</div>*/
/* 				{%endif%}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {%endblock content %}*/
