<?php

/* TRCClientBundle:Default:voirrubrique.html.twig */
class __TwigTemplate_d7e2574dedc97dd0b39e27c510463381b7eb54921d910a869f3baf5694f7b8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30bd5b82d3007bb16b641f9001e3db1d608bd63022d50fb751424b727a876daf = $this->env->getExtension("native_profiler");
        $__internal_30bd5b82d3007bb16b641f9001e3db1d608bd63022d50fb751424b727a876daf->enter($__internal_30bd5b82d3007bb16b641f9001e3db1d608bd63022d50fb751424b727a876daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:Default:voirrubrique.html.twig"));

        // line 1
        echo "
\t\t\t";
        // line 2
        if (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "identite")) {
            // line 3
            echo "\t\t\t\t<table class=\"table table-condensed table-striped\">
\t\t\t\t\t";
            // line 4
            if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array()))) {
                // line 5
                echo "\t\t\t\t\t\t<caption>
\t\t\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
                echo " \">
\t\t\t\t\t\t\t\tRenseigner l'identité du client
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</caption>
\t\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t\t<caption>
\t\t\t\t\t\t\t<a class=\"pull-right btn btn-xs\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
                echo " \">
\t\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</caption>
\t\t\t\t\t";
                // line 16
                $context["iden"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array());
                // line 17
                echo "\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Civilité</td>
\t\t\t\t\t\t\t<td> ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "civilite", array()), "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t<td> ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t<td> ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "prenom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Pièce</td>
\t\t\t\t\t\t\t<td> ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "piece", array()), "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Numero de pièce</td>
\t\t\t\t\t\t\t<td> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "numeroPiece", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nationalité</td>
\t\t\t\t\t\t\t<td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nationalité", array()), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nom", array()), "html", null, true);
                echo "] </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t</table>
\t\t\t";
        } elseif ((        // line 45
(isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "coordonnee")) {
            // line 46
            echo "\t\t\t\t<table class=\"table table-condensed table-striped\">
\t\t\t\t\t";
            // line 47
            if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "coordonnee", array()))) {
                // line 48
                echo "\t\t\t\t\t\t<caption>
\t\t\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
                echo " \">
\t\t\t\t\t\t\t\tRenseigner les coordonnées du client
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</caption>
\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t<caption>
\t\t\t\t\t\t\t<a class=\"pull-right btn btn-xs\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
                echo " \">
\t\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</caption>\t\t\t\t
\t\t\t\t\t";
                // line 59
                $context["coor"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "coordonnee", array());
                // line 60
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ville</td>
\t\t\t\t\t\t\t<td> ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "ville", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Boite postale</td>
\t\t\t\t\t\t\t<td> ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "boitePostale", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Pro</td>
\t\t\t\t\t\t\t<td> ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneProfessionnel", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Domicile</td>
\t\t\t\t\t\t\t<td> ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneDomicile", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. mobile</td>
\t\t\t\t\t\t\t<td> ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "gsm", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Email</td>
\t\t\t\t\t\t\t<td> ";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "email", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse</td>
\t\t\t\t\t\t\t<td> ";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "adresse", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t</table>
\t\t\t";
        } elseif ((        // line 91
(isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "employeur")) {
            // line 92
            echo "\t\t\t\t<table class=\"table table-condensed table-striped\">
\t\t\t\t\t
\t\t\t\t\t<caption>
\t\t\t\t\t\t<a class=\"pull-right\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_employeur", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</caption>
\t\t\t\t\t";
            // line 99
            if ( !(null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "employeur", array()))) {
                // line 100
                echo "\t\t\t\t\t";
                $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "employeur", array());
                // line 101
                echo "\t\t\t\t\t<div>
\t\t\t\t\t\t";
                // line 102
                if (($this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "estclient", array()) == 1)) {
                    // line 103
                    echo "\t\t\t\t\t\t\t<h5 class=\"text-success text-center\">
\t\t\t\t\t\t\t\t<i class=\"fa-check fa\"></i>
\t\t\t\t\t\t\t\tL'employeur est client
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t";
                } else {
                    // line 109
                    echo "\t\t\t\t\t\t\t<h5 class=\"text-danger text-center\">
\t\t\t\t\t\t\t\t<i class=\"fa-times fa\"></i>
\t\t\t\t\t\t\t\tL'employeur n'est pas client
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Dénomination</td>
\t\t\t\t\t\t\t<td> ";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "denomination", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ville</td>
\t\t\t\t\t\t\t<td> ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "ville", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Téléphone</td>
\t\t\t\t\t\t\t<td> ";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "telephone", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Fax</td>
\t\t\t\t\t\t\t<td> ";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "fax", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse</td>
\t\t\t\t\t\t\t<td> ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "adressesociale", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t</table>
\t\t\t";
        } elseif ((        // line 141
(isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "profession")) {
            // line 142
            echo "\t\t\t\t<table class=\"table table-condensed table-striped\">
\t\t\t\t\t<caption>
\t\t\t\t\t\t<a class=\"pull-right\" href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_profession", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</caption>
\t\t\t\t\t";
            // line 148
            if ( !(null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profession", array()))) {
                // line 149
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 150
                $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profession", array());
                // line 151
                echo "\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Fonction</td>
\t\t\t\t\t\t\t<td> ";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "fonction", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Type de fonction</td>
\t\t\t\t\t\t\t<td> ";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "typefonction", array()), "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t</table>
\t\t\t";
        } elseif ((        // line 165
(isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "revenu")) {
            // line 166
            echo "\t\t\t\t<table class=\"table table-condensed table-striped\">
\t\t\t\t\t<caption>
\t\t\t\t\t\t<i class=\"fa-money fa\"></i>
\t\t\t\t\t\t<a class=\"pull-right\" href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_revenu", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</caption>
\t\t\t\t\t";
            // line 173
            if ( !(null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "revenu", array()))) {
                // line 174
                echo "\t\t\t\t\t";
                $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "revenu", array());
                // line 175
                echo "\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Revenu salarial</td>
\t\t\t\t\t\t\t<td> ";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "rsmn", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Autres revenus</td>
\t\t\t\t\t\t\t<td> ";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "natureAutresRevenus", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 188
            echo "\t\t\t\t</table>
\t\t\t";
        } elseif ((        // line 189
(isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "logement")) {
            // line 190
            echo "\t\t\t\t<table class=\"table table-condensed table-striped\">\t
\t\t\t\t\t<caption>
\t\t\t\t\t\t<i class=\"fa-home fa\"></i>
\t\t\t\t\t\t<a class=\"pull-right\" href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_logement", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</caption>
\t\t\t\t\t";
            // line 197
            if ( !(null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "logement", array()))) {
                // line 198
                echo "\t\t\t\t\t";
                $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "logement", array());
                // line 199
                echo "\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Frais de location mensuelle</td>
\t\t\t\t\t\t\t<td> ";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "flm", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Statut</td>
\t\t\t\t\t\t\t<td> ";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "statut", array()), "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t</table>
\t\t\t";
        } elseif ((        // line 213
(isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "pac")) {
            // line 214
            echo "\t\t\t\t<table class=\"table table-condensed table-striped\">
\t\t\t\t\t<caption>
\t\t\t\t\t\t<i class=\"fa-phone fa\"></i>
\t\t\t\t\t\t<a class=\"pull-right\" href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_pac", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</caption>
\t\t\t\t";
            // line 221
            if ( !(null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "pac", array()))) {
                // line 222
                echo "\t\t\t\t\t";
                $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "pac", array());
                // line 223
                echo "\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t<td> ";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t<td> ";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "prenom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Lien</td>
\t\t\t\t\t\t\t<td> ";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "lpd", array()), "nom", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t";
                // line 236
                $context["coor"] = $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "coordonnee", array());
                // line 237
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ville</td>
\t\t\t\t\t\t\t<td> ";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "ville", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Boite postale</td>
\t\t\t\t\t\t\t<td> ";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "boitePostale", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Pro</td>
\t\t\t\t\t\t\t<td> ";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneProfessionnel", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Domicile</td>
\t\t\t\t\t\t\t<td> ";
                // line 251
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneDomicile", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. mobile</td>
\t\t\t\t\t\t\t<td> ";
                // line 255
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "gsm", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Email</td>
\t\t\t\t\t\t\t<td> ";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "email", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse</td>
\t\t\t\t\t\t\t<td> ";
                // line 263
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "adresse", array()), "html", null, true);
                echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 268
            echo "\t\t\t\t</table>
\t\t\t";
        } elseif ((        // line 269
(isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "comptes")) {
            // line 270
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_ajouter_comptes", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t<i class=\"fa-plus-circle fa\"></i>
\t\t\t\t\tAjouter un compte
\t\t\t\t</a>
\t\t\t\t";
            // line 274
            if ((twig_length_filter($this->env, (isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes"))) > 0)) {
                // line 275
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
                // line 284
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
                foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
                    // line 285
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 286
                    echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "type", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 287
                    echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "numeroCompte", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 288
                    echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "solde", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 290
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
                // line 296
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t";
            } else {
                // line 299
                echo "
\t\t\t\t<div class=\"alert-danger alert text-center\">
\t\t\t\t\t<h4>Aucun ajouter</h4>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 304
            echo "\t\t\t";
        } elseif (((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")) == "engagements")) {
            // line 305
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, (isset($context["engagements"]) ? $context["engagements"] : $this->getContext($context, "engagements"))) > 0)) {
                // line 306
                echo "\t\t\t\t\t<table class=\" table table-striped table-condensed\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Type de crédit</th>
\t\t\t\t\t\t\t\t<th>Montant</th>
\t\t\t\t\t\t\t\t<th>Durée</th>
\t\t\t\t\t\t\t\t<th>Phase</th>
\t\t\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
                // line 317
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["engagements"]) ? $context["engagements"] : $this->getContext($context, "engagements")));
                foreach ($context['_seq'] as $context["_key"] => $context["ddc"]) {
                    // line 318
                    echo "\t\t\t\t\t\t\t\t";
                    $context["pddc"] = $this->env->getExtension('TwigExtension')->getPhaseDDC($context["ddc"]);
                    // line 319
                    echo "\t\t\t\t\t\t\t\t";
                    $context["eddc"] = $this->env->getExtension('TwigExtension')->getEtatPhase((isset($context["pddc"]) ? $context["pddc"] : $this->getContext($context, "pddc")));
                    // line 320
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 321
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "tdc", array()), "nom", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 322
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "cdcd", array()), "montant", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 323
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "cdcd", array()), "duree", array()), "html", null, true);
                    echo " </td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                    // line 325
                    if ( !(null === (isset($context["pddc"]) ? $context["pddc"] : $this->getContext($context, "pddc")))) {
                        // line 326
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pddc"]) ? $context["pddc"] : $this->getContext($context, "pddc")), "phase", array()), "nom", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 327
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t#####
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 330
                    echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                    // line 332
                    if ( !(null === (isset($context["eddc"]) ? $context["eddc"] : $this->getContext($context, "eddc")))) {
                        // line 333
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["eddc"]) ? $context["eddc"] : $this->getContext($context, "eddc")), "etat", array()), "nom", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 334
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t#####
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t";
            } else {
                // line 343
                echo "
\t\t\t\t<div class=\"alert-danger alert text-center\">
\t\t\t\t\t<h4>Aucun engagement</h4>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 348
            echo "\t\t\t";
        }
        // line 349
        echo "\t\t\t";
        
        $__internal_30bd5b82d3007bb16b641f9001e3db1d608bd63022d50fb751424b727a876daf->leave($__internal_30bd5b82d3007bb16b641f9001e3db1d608bd63022d50fb751424b727a876daf_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:Default:voirrubrique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 349,  672 => 348,  665 => 343,  660 => 340,  652 => 337,  647 => 334,  641 => 333,  639 => 332,  635 => 330,  630 => 327,  624 => 326,  622 => 325,  617 => 323,  613 => 322,  609 => 321,  606 => 320,  603 => 319,  600 => 318,  596 => 317,  583 => 306,  580 => 305,  577 => 304,  570 => 299,  565 => 296,  553 => 290,  548 => 288,  544 => 287,  540 => 286,  537 => 285,  533 => 284,  522 => 275,  520 => 274,  512 => 270,  510 => 269,  507 => 268,  499 => 263,  492 => 259,  485 => 255,  478 => 251,  471 => 247,  464 => 243,  457 => 239,  453 => 237,  451 => 236,  446 => 234,  439 => 230,  432 => 226,  427 => 223,  424 => 222,  422 => 221,  415 => 217,  410 => 214,  408 => 213,  405 => 212,  396 => 206,  389 => 202,  384 => 199,  381 => 198,  379 => 197,  372 => 193,  367 => 190,  365 => 189,  362 => 188,  353 => 182,  346 => 178,  341 => 175,  338 => 174,  336 => 173,  329 => 169,  324 => 166,  322 => 165,  319 => 164,  310 => 158,  303 => 154,  298 => 151,  296 => 150,  293 => 149,  291 => 148,  284 => 144,  280 => 142,  278 => 141,  275 => 140,  267 => 135,  260 => 131,  253 => 127,  246 => 123,  239 => 119,  233 => 115,  225 => 109,  217 => 103,  215 => 102,  212 => 101,  209 => 100,  207 => 99,  200 => 95,  195 => 92,  193 => 91,  190 => 90,  183 => 86,  176 => 82,  169 => 78,  162 => 74,  155 => 70,  148 => 66,  141 => 62,  137 => 60,  135 => 59,  128 => 55,  125 => 54,  117 => 49,  114 => 48,  112 => 47,  109 => 46,  107 => 45,  104 => 44,  95 => 40,  88 => 36,  81 => 32,  74 => 28,  67 => 24,  60 => 20,  55 => 17,  53 => 16,  46 => 12,  43 => 11,  35 => 6,  32 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* 			{%if rubrique == 'identite'%}*/
/* 				<table class="table table-condensed table-striped">*/
/* 					{%if client.identite is null %}*/
/* 						<caption>*/
/* 							<a class="btn btn-xs" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 								Renseigner l'identité du client*/
/* 							</a>*/
/* 						</caption>*/
/* 					{%else%}*/
/* 						<caption>*/
/* 							<a class="pull-right btn btn-xs" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 								<i class="fa-edit fa "></i>*/
/* 							</a>*/
/* 						</caption>*/
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
/* 					{%endif%}*/
/* 				</table>*/
/* 			{%elseif rubrique == 'coordonnee' %}*/
/* 				<table class="table table-condensed table-striped">*/
/* 					{%if client.coordonnee is null %}*/
/* 						<caption>*/
/* 							<a class="btn btn-xs" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 								Renseigner les coordonnées du client*/
/* 							</a>*/
/* 						</caption>*/
/* 					{%else%}*/
/* 						<caption>*/
/* 							<a class="pull-right btn btn-xs" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 								<i class="fa-edit fa "></i>*/
/* 							</a>*/
/* 						</caption>				*/
/* 					{%set coor = client.coordonnee %}*/
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
/* 					*/
/* 					{%endif%}*/
/* 				</table>*/
/* 			{%elseif rubrique == 'employeur' %}*/
/* 				<table class="table table-condensed table-striped">*/
/* 					*/
/* 					<caption>*/
/* 						<a class="pull-right" href="{{url('trc_client_employeur',{radical:client.radical})}} ">*/
/* 							<i class="fa-edit fa "></i>*/
/* 						</a>*/
/* 					</caption>*/
/* 					{%if client.employeur is not null %}*/
/* 					{%set emp = client.employeur %}*/
/* 					<div>*/
/* 						{%if emp.estclient == 1 %}*/
/* 							<h5 class="text-success text-center">*/
/* 								<i class="fa-check fa"></i>*/
/* 								L'employeur est client*/
/* 								*/
/* 							</h5>*/
/* 						{%else%}*/
/* 							<h5 class="text-danger text-center">*/
/* 								<i class="fa-times fa"></i>*/
/* 								L'employeur n'est pas client*/
/* 								*/
/* 							</h5>*/
/* 						{%endif%}*/
/* 					</div>*/
/* 					*/
/* 						<tr>*/
/* 							<td>Dénomination</td>*/
/* 							<td> {{emp.denomination}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Ville</td>*/
/* 							<td> {{emp.ville}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Téléphone</td>*/
/* 							<td> {{emp.telephone}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Fax</td>*/
/* 							<td> {{emp.fax}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Adresse</td>*/
/* 							<td> {{emp.adressesociale}} </td>*/
/* 						</tr>*/
/* 						*/
/* 					*/
/* 					{%endif%}*/
/* 				</table>*/
/* 			{%elseif rubrique == 'profession' %}*/
/* 				<table class="table table-condensed table-striped">*/
/* 					<caption>*/
/* 						<a class="pull-right" href="{{url('trc_client_profession',{radical:client.radical})}} ">*/
/* 							<i class="fa-edit fa "></i>*/
/* 						</a>*/
/* 					</caption>*/
/* 					{%if client.profession is not null %}*/
/* 					*/
/* 					{%set emp = client.profession %}*/
/* 					*/
/* 						<tr>*/
/* 							<td>Fonction</td>*/
/* 							<td> {{emp.fonction}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Type de fonction</td>*/
/* 							<td> {{emp.typefonction.nom}} </td>*/
/* 						</tr> */
/* 						*/
/* 						*/
/* 					*/
/* 					{%endif%}*/
/* 				</table>*/
/* 			{%elseif rubrique == 'revenu' %}*/
/* 				<table class="table table-condensed table-striped">*/
/* 					<caption>*/
/* 						<i class="fa-money fa"></i>*/
/* 						<a class="pull-right" href="{{url('trc_client_revenu',{radical:client.radical})}} ">*/
/* 							<i class="fa-edit fa "></i>*/
/* 						</a>*/
/* 					</caption>*/
/* 					{%if client.revenu is not null %}*/
/* 					{%set emp = client.revenu %}*/
/* 					*/
/* 						<tr>*/
/* 							<td>Revenu salarial</td>*/
/* 							<td> {{emp.rsmn}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Autres revenus</td>*/
/* 							<td> {{emp.natureAutresRevenus}} </td>*/
/* 						</tr> */
/* 						*/
/* 						*/
/* 					*/
/* 					{%endif%}*/
/* 				</table>*/
/* 			{%elseif rubrique == 'logement' %}*/
/* 				<table class="table table-condensed table-striped">	*/
/* 					<caption>*/
/* 						<i class="fa-home fa"></i>*/
/* 						<a class="pull-right" href="{{url('trc_client_logement',{radical:client.radical})}} ">*/
/* 							<i class="fa-edit fa "></i>*/
/* 						</a>*/
/* 					</caption>*/
/* 					{%if client.logement is not null %}*/
/* 					{%set emp = client.logement %}*/
/* 					*/
/* 						<tr>*/
/* 							<td>Frais de location mensuelle</td>*/
/* 							<td> {{emp.flm}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Statut</td>*/
/* 							<td> {{emp.statut.nom}} </td>*/
/* 						</tr> */
/* 						*/
/* 						*/
/* 					*/
/* 					{%endif%}*/
/* 				</table>*/
/* 			{%elseif rubrique == 'pac' %}*/
/* 				<table class="table table-condensed table-striped">*/
/* 					<caption>*/
/* 						<i class="fa-phone fa"></i>*/
/* 						<a class="pull-right" href="{{url('trc_client_pac',{radical:client.radical})}} ">*/
/* 							<i class="fa-edit fa "></i>*/
/* 						</a>*/
/* 					</caption>*/
/* 				{%if client.pac is not null %}*/
/* 					{%set emp = client.pac %}*/
/* 					*/
/* 						<tr>*/
/* 							<td>Nom</td>*/
/* 							<td> {{emp.nom}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Prenom</td>*/
/* 							<td> {{emp.prenom}} </td>*/
/* 						</tr> */
/* 						<tr>*/
/* 							<td>Lien</td>*/
/* 							<td> {{emp.lpd.nom}} </td>*/
/* 						</tr> */
/* 						{%set coor = emp.coordonnee%}*/
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
/* 						*/
/* 					*/
/* 					{%endif%}*/
/* 				</table>*/
/* 			{%elseif rubrique == 'comptes' %}*/
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
/* 					<h4>Aucun ajouter</h4>*/
/* 				</div>*/
/* 				{%endif%}*/
/* 			{%elseif rubrique == 'engagements' %}*/
/* 				{%if engagements|length > 0 %}*/
/* 					<table class=" table table-striped table-condensed">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>Type de crédit</th>*/
/* 								<th>Montant</th>*/
/* 								<th>Durée</th>*/
/* 								<th>Phase</th>*/
/* 								<th>Etat</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							{%for ddc in engagements%}*/
/* 								{%set pddc = getPhaseDDC(ddc) %}*/
/* 								{%set eddc = getEtatPhase(pddc) %}*/
/* 								<tr>*/
/* 									<td>{{ddc.tdc.nom}} </td>*/
/* 									<td>{{ddc.cdcd.montant}} </td>*/
/* 									<td>{{ddc.cdcd.duree}} </td>*/
/* 									<td>*/
/* 										{%if pddc is not null %}*/
/* 											{{pddc.phase.nom}}*/
/* 										{%else%}	*/
/* 											#####*/
/* 										{%endif%}*/
/* 									</td>*/
/* 									<td>*/
/* 										{%if eddc is not null %}*/
/* 											{{eddc.etat.nom}}*/
/* 										{%else%}	*/
/* 											#####*/
/* 										{%endif%}*/
/* 									</td>*/
/* 								</tr>*/
/* 							{%endfor%}*/
/* 						</tbody>*/
/* 					</table>*/
/* 				{%else%}*/
/* */
/* 				<div class="alert-danger alert text-center">*/
/* 					<h4>Aucun engagement</h4>*/
/* 				</div>*/
/* 				{%endif%}*/
/* 			{%endif%}*/
/* 			*/
