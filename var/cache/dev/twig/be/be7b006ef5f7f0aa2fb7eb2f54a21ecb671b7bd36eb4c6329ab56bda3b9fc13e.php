<?php

/* TRCClientBundle:Default:consulter.html.twig */
class __TwigTemplate_8d8816fe75d6d43ec635bceab7d5be1c9d5b2b78312c302b8040d2899660b097 extends Twig_Template
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
        $__internal_17cfcf88793da863046ee0366582a784a3343feded2beab6f5fd03b6f1294c44 = $this->env->getExtension("native_profiler");
        $__internal_17cfcf88793da863046ee0366582a784a3343feded2beab6f5fd03b6f1294c44->enter($__internal_17cfcf88793da863046ee0366582a784a3343feded2beab6f5fd03b6f1294c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:Default:consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17cfcf88793da863046ee0366582a784a3343feded2beab6f5fd03b6f1294c44->leave($__internal_17cfcf88793da863046ee0366582a784a3343feded2beab6f5fd03b6f1294c44_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_331d076eaa9b5c613c4aff09c549d58a5b183cedee09c849c99fc6fe58dda8f5 = $this->env->getExtension("native_profiler");
        $__internal_331d076eaa9b5c613c4aff09c549d58a5b183cedee09c849c99fc6fe58dda8f5->enter($__internal_331d076eaa9b5c613c4aff09c549d58a5b183cedee09c849c99fc6fe58dda8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()), "html", null, true);
        echo "         
";
        
        $__internal_331d076eaa9b5c613c4aff09c549d58a5b183cedee09c849c99fc6fe58dda8f5->leave($__internal_331d076eaa9b5c613c4aff09c549d58a5b183cedee09c849c99fc6fe58dda8f5_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_fbfd89c16dcd9622f97ab74cdafa3a3fd5e7d16f0b85f971cb36533397147ad2 = $this->env->getExtension("native_profiler");
        $__internal_fbfd89c16dcd9622f97ab74cdafa3a3fd5e7d16f0b85f971cb36533397147ad2->enter($__internal_fbfd89c16dcd9622f97ab74cdafa3a3fd5e7d16f0b85f971cb36533397147ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "intitule", array()), "html", null, true);
        echo "
";
        
        $__internal_fbfd89c16dcd9622f97ab74cdafa3a3fd5e7d16f0b85f971cb36533397147ad2->leave($__internal_fbfd89c16dcd9622f97ab74cdafa3a3fd5e7d16f0b85f971cb36533397147ad2_prof);

    }

    // line 8
    public function block_position($context, array $blocks = array())
    {
        $__internal_3a1f4cfce92671e24746974229dfa62b403d813f3e38ff2a203bc17e18408f97 = $this->env->getExtension("native_profiler");
        $__internal_3a1f4cfce92671e24746974229dfa62b403d813f3e38ff2a203bc17e18408f97->enter($__internal_3a1f4cfce92671e24746974229dfa62b403d813f3e38ff2a203bc17e18408f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_3a1f4cfce92671e24746974229dfa62b403d813f3e38ff2a203bc17e18408f97->leave($__internal_3a1f4cfce92671e24746974229dfa62b403d813f3e38ff2a203bc17e18408f97_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a5d67094ebbb5d6a0cadccd528773575424e158b81d9d937ecedacf757e25bc = $this->env->getExtension("native_profiler");
        $__internal_4a5d67094ebbb5d6a0cadccd528773575424e158b81d9d937ecedacf757e25bc->enter($__internal_4a5d67094ebbb5d6a0cadccd528773575424e158b81d9d937ecedacf757e25bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-green\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tIdentité
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 27
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array()))) {
            // line 28
            echo "\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner l'identité du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 32
            echo "\t\t\t\t\t";
            $context["iden"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array());
            // line 33
            echo "\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Civilité</td>
\t\t\t\t\t\t\t<td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "civilite", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t<td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t<td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "prenom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Pièce</td>
\t\t\t\t\t\t\t<td> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "piece", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Numero de pièce</td>
\t\t\t\t\t\t\t<td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "numeroPiece", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nationalité</td>
\t\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nationalité", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nom", array()), "html", null, true);
            echo "] </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-red\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tCoordonnées
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 69
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "coordonnee", array()))) {
            // line 70
            echo "\t\t\t\t\t<a class=\"btn  btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_coordonnee", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner les coordonnées du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t";
            $context["coor"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "coordonnee", array());
            // line 75
            echo "\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ville</td>
\t\t\t\t\t\t\t<td> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "ville", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Boite postale</td>
\t\t\t\t\t\t\t<td> ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "boitePostale", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Pro</td>
\t\t\t\t\t\t\t<td> ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneProfessionnel", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Domicile</td>
\t\t\t\t\t\t\t<td> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneDomicile", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. mobile</td>
\t\t\t\t\t\t\t<td> ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "gsm", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Email</td>
\t\t\t\t\t\t\t<td> ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "email", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse</td>
\t\t\t\t\t\t\t<td> ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "adresse", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_4a5d67094ebbb5d6a0cadccd528773575424e158b81d9d937ecedacf757e25bc->leave($__internal_4a5d67094ebbb5d6a0cadccd528773575424e158b81d9d937ecedacf757e25bc_prof);

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
        return array (  255 => 107,  248 => 103,  241 => 99,  234 => 95,  227 => 91,  220 => 87,  213 => 83,  206 => 79,  200 => 75,  197 => 74,  189 => 70,  187 => 69,  176 => 60,  167 => 56,  160 => 52,  153 => 48,  146 => 44,  139 => 40,  132 => 36,  127 => 33,  124 => 32,  116 => 28,  114 => 27,  105 => 20,  99 => 19,  87 => 14,  83 => 13,  75 => 9,  69 => 8,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
/* 	<div class="row">*/
/* 		<div class="col-md-4">*/
/* 			<div class="panel panel-green">*/
/* 				<div class="panel-heading">*/
/* 					Identité*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 				{%if client.identite is null %}*/
/* 					<a class="btn btn-xs" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 						Renseigner l'identité du client*/
/* 					</a>*/
/* 				{%else%}*/
/* 					{%set iden = client.identite %}*/
/* 					<table class="table table-condensed">*/
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
/* 					</table>*/
/* 				{%endif%}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<div class="panel panel-red">*/
/* 				<div class="panel-heading">*/
/* 					Coordonnées*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 				{%if client.coordonnee is null %}*/
/* 					<a class="btn  btn-danger" href="{{url('trc_client_coordonnee',{radical:client.radical})}} ">*/
/* 						Renseigner les coordonnées du client*/
/* 					</a>*/
/* 				{%else%}*/
/* 					{%set coor = client.coordonnee %}*/
/* 					*/
/* 					<table class="table table-condensed">*/
/* 						<tr>*/
/* 							<td>Ville</td>*/
/* 							<td> {{coor.ville}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Boite postale</td>*/
/* 							<td> {{coor.boitePostale}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Tel. Pro</td>*/
/* 							<td> {{coor.telephoneProfessionnel}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Tel. Domicile</td>*/
/* 							<td> {{coor.telephoneDomicile}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Tel. mobile</td>*/
/* 							<td> {{coor.gsm}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Email</td>*/
/* 							<td> {{coor.email}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Adresse</td>*/
/* 							<td> {{coor.adresse}} </td>*/
/* 						</tr>*/
/* 					</table>*/
/* 				{%endif%}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {%endblock content %}*/
