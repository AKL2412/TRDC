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
        $__internal_7411005f9570873d9238bea6fa879e9bb4d588d2c635b0e0f3911fcfeba43334 = $this->env->getExtension("native_profiler");
        $__internal_7411005f9570873d9238bea6fa879e9bb4d588d2c635b0e0f3911fcfeba43334->enter($__internal_7411005f9570873d9238bea6fa879e9bb4d588d2c635b0e0f3911fcfeba43334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:Default:consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7411005f9570873d9238bea6fa879e9bb4d588d2c635b0e0f3911fcfeba43334->leave($__internal_7411005f9570873d9238bea6fa879e9bb4d588d2c635b0e0f3911fcfeba43334_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a1a98ae0e82f6931d248b01c43a5c7d0c6ecdd39b1a767270fb52a0ebbb4975 = $this->env->getExtension("native_profiler");
        $__internal_7a1a98ae0e82f6931d248b01c43a5c7d0c6ecdd39b1a767270fb52a0ebbb4975->enter($__internal_7a1a98ae0e82f6931d248b01c43a5c7d0c6ecdd39b1a767270fb52a0ebbb4975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()), "html", null, true);
        echo "         
";
        
        $__internal_7a1a98ae0e82f6931d248b01c43a5c7d0c6ecdd39b1a767270fb52a0ebbb4975->leave($__internal_7a1a98ae0e82f6931d248b01c43a5c7d0c6ecdd39b1a767270fb52a0ebbb4975_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a106ad1b14b23fcf631a764703b66a30ecd1be3356c5c79488e3ed138e06b20f = $this->env->getExtension("native_profiler");
        $__internal_a106ad1b14b23fcf631a764703b66a30ecd1be3356c5c79488e3ed138e06b20f->enter($__internal_a106ad1b14b23fcf631a764703b66a30ecd1be3356c5c79488e3ed138e06b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "intitule", array()), "html", null, true);
        echo "
";
        
        $__internal_a106ad1b14b23fcf631a764703b66a30ecd1be3356c5c79488e3ed138e06b20f->leave($__internal_a106ad1b14b23fcf631a764703b66a30ecd1be3356c5c79488e3ed138e06b20f_prof);

    }

    // line 8
    public function block_position($context, array $blocks = array())
    {
        $__internal_092b8c4269d8fe468cdfe1c556331a33ef1860a04c93a8ddeeb3554610b757b2 = $this->env->getExtension("native_profiler");
        $__internal_092b8c4269d8fe468cdfe1c556331a33ef1860a04c93a8ddeeb3554610b757b2->enter($__internal_092b8c4269d8fe468cdfe1c556331a33ef1860a04c93a8ddeeb3554610b757b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_092b8c4269d8fe468cdfe1c556331a33ef1860a04c93a8ddeeb3554610b757b2->leave($__internal_092b8c4269d8fe468cdfe1c556331a33ef1860a04c93a8ddeeb3554610b757b2_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_183618d4cb2a9073b43770d42c79594891ffd2ea9b09433a75bf5918a2e982ef = $this->env->getExtension("native_profiler");
        $__internal_183618d4cb2a9073b43770d42c79594891ffd2ea9b09433a75bf5918a2e982ef->enter($__internal_183618d4cb2a9073b43770d42c79594891ffd2ea9b09433a75bf5918a2e982ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-green\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tIdentité
\t\t\t\t\t<a class=\"pull-right\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 30
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array()))) {
            // line 31
            echo "\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_identite", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner l'identité du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 35
            echo "\t\t\t\t\t";
            $context["iden"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "identite", array());
            // line 36
            echo "\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Civilité</td>
\t\t\t\t\t\t\t<td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "civilite", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t<td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t<td> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "prenom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Pièce</td>
\t\t\t\t\t\t\t<td> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "piece", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Numero de pièce</td>
\t\t\t\t\t\t\t<td> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "numeroPiece", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nationalité</td>
\t\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nationalité", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["iden"]) ? $context["iden"] : $this->getContext($context, "iden")), "pays", array()), "nom", array()), "html", null, true);
            echo "] </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-red\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tCoordonnées
\t\t\t\t\t<a class=\"pull-right\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_coordonnee", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 75
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "coordonnee", array()))) {
            // line 76
            echo "\t\t\t\t\t<a class=\"btn  btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_coordonnee", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner les coordonnées du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t";
            $context["coor"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "coordonnee", array());
            // line 81
            echo "\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ville</td>
\t\t\t\t\t\t\t<td> ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "ville", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Boite postale</td>
\t\t\t\t\t\t\t<td> ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "boitePostale", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Pro</td>
\t\t\t\t\t\t\t<td> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneProfessionnel", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Domicile</td>
\t\t\t\t\t\t\t<td> ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneDomicile", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. mobile</td>
\t\t\t\t\t\t\t<td> ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "gsm", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Email</td>
\t\t\t\t\t\t\t<td> ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "email", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse</td>
\t\t\t\t\t\t\t<td> ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "adresse", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-yellow\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tEmployeur
\t\t\t\t\t<a class=\"pull-right\" href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_employeur", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 125
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "employeur", array()))) {
            // line 126
            echo "\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_employeur", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner l'employeur du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 130
            echo "\t\t\t\t\t";
            $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "employeur", array());
            // line 131
            echo "\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Dénomination</td>
\t\t\t\t\t\t\t<td> ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "denomination", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ville</td>
\t\t\t\t\t\t\t<td> ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "ville", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Téléphone</td>
\t\t\t\t\t\t\t<td> ";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "telephone", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Fax</td>
\t\t\t\t\t\t\t<td> ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "fax", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse</td>
\t\t\t\t\t\t\t<td> ";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "adressesociale", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-orange\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tProfession
\t\t\t\t\t<a class=\"pull-right\" href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_profession", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 169
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profession", array()))) {
            // line 170
            echo "\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_profession", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner la Profession du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 174
            echo "\t\t\t\t\t";
            $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profession", array());
            // line 175
            echo "\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Fonction</td>
\t\t\t\t\t\t\t<td> ";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "fonction", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Type de fonction</td>
\t\t\t\t\t\t\t<td> ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "typefonction", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-grey\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t
\t\t\t\t\tRevenu
\t\t\t\t\t<i class=\"fa-money fa\"></i>
\t\t\t\t\t<a class=\"pull-right\" href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_revenu", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 202
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "revenu", array()))) {
            // line 203
            echo "\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_revenu", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner le revenu du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 207
            echo "\t\t\t\t\t";
            $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "revenu", array());
            // line 208
            echo "\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Revenu salarial</td>
\t\t\t\t\t\t\t<td> ";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "rsmn", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Autres revenus</td>
\t\t\t\t\t\t\t<td> ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "natureAutresRevenus", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-success\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t
\t\t\t\t\tLogement
\t\t\t\t\t<i class=\"fa-home fa\"></i>
\t\t\t\t\t<a class=\"pull-right\" href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_logement", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 235
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "logement", array()))) {
            // line 236
            echo "\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_logement", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner le logement du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 240
            echo "\t\t\t\t\t";
            $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "logement", array());
            // line 241
            echo "\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Frais de location mensuelle</td>
\t\t\t\t\t\t\t<td> ";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "flm", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Statut</td>
\t\t\t\t\t\t\t<td> ";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "statut", array()), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 254
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"panel panel-info\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t
\t\t\t\t\tPAC
\t\t\t\t\t<i class=\"fa-phone fa\"></i>
\t\t\t\t\t<a class=\"pull-right\" href=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_pac", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
        echo " \">
\t\t\t\t\t\t<i class=\"fa-edit fa \"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 270
        if ((null === $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "pac", array()))) {
            // line 271
            echo "\t\t\t\t\t<a class=\"btn btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_client_pac", array("radical" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "radical", array()))), "html", null, true);
            echo " \">
\t\t\t\t\t\tRenseigner la pac du client
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 275
            echo "\t\t\t\t\t";
            $context["emp"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "pac", array());
            // line 276
            echo "\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t\t<td> ";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "nom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Prenom</td>
\t\t\t\t\t\t\t<td> ";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "prenom", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr> 
\t\t\t\t\t\t";
            // line 285
            $context["coor"] = $this->getAttribute((isset($context["emp"]) ? $context["emp"] : $this->getContext($context, "emp")), "coordonnee", array());
            // line 286
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Ville</td>
\t\t\t\t\t\t\t<td> ";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "ville", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Boite postale</td>
\t\t\t\t\t\t\t<td> ";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "boitePostale", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Pro</td>
\t\t\t\t\t\t\t<td> ";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneProfessionnel", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. Domicile</td>
\t\t\t\t\t\t\t<td> ";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "telephoneDomicile", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Tel. mobile</td>
\t\t\t\t\t\t\t<td> ";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "gsm", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Email</td>
\t\t\t\t\t\t\t<td> ";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "email", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Adresse</td>
\t\t\t\t\t\t\t<td> ";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coor"]) ? $context["coor"] : $this->getContext($context, "coor")), "adresse", array()), "html", null, true);
            echo " </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t";
        }
        // line 317
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_183618d4cb2a9073b43770d42c79594891ffd2ea9b09433a75bf5918a2e982ef->leave($__internal_183618d4cb2a9073b43770d42c79594891ffd2ea9b09433a75bf5918a2e982ef_prof);

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
        return array (  604 => 317,  596 => 312,  589 => 308,  582 => 304,  575 => 300,  568 => 296,  561 => 292,  554 => 288,  550 => 286,  548 => 285,  543 => 283,  536 => 279,  531 => 276,  528 => 275,  520 => 271,  518 => 270,  510 => 265,  497 => 254,  488 => 248,  481 => 244,  476 => 241,  473 => 240,  465 => 236,  463 => 235,  455 => 230,  444 => 221,  435 => 215,  428 => 211,  423 => 208,  420 => 207,  412 => 203,  410 => 202,  402 => 197,  391 => 188,  382 => 182,  375 => 178,  370 => 175,  367 => 174,  359 => 170,  357 => 169,  349 => 164,  338 => 155,  330 => 150,  323 => 146,  316 => 142,  309 => 138,  302 => 134,  297 => 131,  294 => 130,  286 => 126,  284 => 125,  276 => 120,  267 => 113,  260 => 109,  253 => 105,  246 => 101,  239 => 97,  232 => 93,  225 => 89,  218 => 85,  212 => 81,  209 => 80,  201 => 76,  199 => 75,  191 => 70,  182 => 63,  173 => 59,  166 => 55,  159 => 51,  152 => 47,  145 => 43,  138 => 39,  133 => 36,  130 => 35,  122 => 31,  120 => 30,  112 => 25,  105 => 20,  99 => 19,  87 => 14,  83 => 13,  75 => 9,  69 => 8,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
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
/* 					<a class="pull-right" href="{{url('trc_client_identite',{radical:client.radical})}} ">*/
/* 						<i class="fa-edit fa "></i>*/
/* 					</a>*/
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
/* 					<a class="pull-right" href="{{url('trc_client_coordonnee',{radical:client.radical})}} ">*/
/* 						<i class="fa-edit fa "></i>*/
/* 					</a>*/
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
/* 		<div class="col-md-4">*/
/* 			<div class="panel panel-yellow">*/
/* 				<div class="panel-heading">*/
/* 					Employeur*/
/* 					<a class="pull-right" href="{{url('trc_client_employeur',{radical:client.radical})}} ">*/
/* 						<i class="fa-edit fa "></i>*/
/* 					</a>*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 				{%if client.employeur is null %}*/
/* 					<a class="btn btn-xs" href="{{url('trc_client_employeur',{radical:client.radical})}} ">*/
/* 						Renseigner l'employeur du client*/
/* 					</a>*/
/* 				{%else%}*/
/* 					{%set emp = client.employeur %}*/
/* 					<table class="table table-condensed">*/
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
/* 					</table>*/
/* 				{%endif%}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-4">*/
/* 			<div class="panel panel-orange">*/
/* 				<div class="panel-heading">*/
/* 					Profession*/
/* 					<a class="pull-right" href="{{url('trc_client_profession',{radical:client.radical})}} ">*/
/* 						<i class="fa-edit fa "></i>*/
/* 					</a>*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 				{%if client.profession is null %}*/
/* 					<a class="btn btn-xs" href="{{url('trc_client_profession',{radical:client.radical})}} ">*/
/* 						Renseigner la Profession du client*/
/* 					</a>*/
/* 				{%else%}*/
/* 					{%set emp = client.profession %}*/
/* 					<table class="table table-condensed">*/
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
/* 					</table>*/
/* 				{%endif%}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<div class="panel panel-grey">*/
/* 				<div class="panel-heading">*/
/* 					*/
/* 					Revenu*/
/* 					<i class="fa-money fa"></i>*/
/* 					<a class="pull-right" href="{{url('trc_client_revenu',{radical:client.radical})}} ">*/
/* 						<i class="fa-edit fa "></i>*/
/* 					</a>*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 				{%if client.revenu is null %}*/
/* 					<a class="btn btn-xs" href="{{url('trc_client_revenu',{radical:client.radical})}} ">*/
/* 						Renseigner le revenu du client*/
/* 					</a>*/
/* 				{%else%}*/
/* 					{%set emp = client.revenu %}*/
/* 					<table class="table table-condensed">*/
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
/* 					</table>*/
/* 				{%endif%}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<div class="panel panel-success">*/
/* 				<div class="panel-heading">*/
/* 					*/
/* 					Logement*/
/* 					<i class="fa-home fa"></i>*/
/* 					<a class="pull-right" href="{{url('trc_client_logement',{radical:client.radical})}} ">*/
/* 						<i class="fa-edit fa "></i>*/
/* 					</a>*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 				{%if client.logement is null %}*/
/* 					<a class="btn btn-xs" href="{{url('trc_client_logement',{radical:client.radical})}} ">*/
/* 						Renseigner le logement du client*/
/* 					</a>*/
/* 				{%else%}*/
/* 					{%set emp = client.logement %}*/
/* 					<table class="table table-condensed">*/
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
/* 					</table>*/
/* 				{%endif%}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-4">*/
/* 			<div class="panel panel-info">*/
/* 				<div class="panel-heading">*/
/* 					*/
/* 					PAC*/
/* 					<i class="fa-phone fa"></i>*/
/* 					<a class="pull-right" href="{{url('trc_client_pac',{radical:client.radical})}} ">*/
/* 						<i class="fa-edit fa "></i>*/
/* 					</a>*/
/* 				</div>*/
/* 				<div class="panel-body">*/
/* 				{%if client.pac is null %}*/
/* 					<a class="btn btn-xs" href="{{url('trc_client_pac',{radical:client.radical})}} ">*/
/* 						Renseigner la pac du client*/
/* 					</a>*/
/* 				{%else%}*/
/* 					{%set emp = client.pac %}*/
/* 					<table class="table table-condensed">*/
/* 						<tr>*/
/* 							<td>Nom</td>*/
/* 							<td> {{emp.nom}} </td>*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>Prenom</td>*/
/* 							<td> {{emp.prenom}} </td>*/
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
/* 					</table>*/
/* 				{%endif%}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {%endblock content %}*/
