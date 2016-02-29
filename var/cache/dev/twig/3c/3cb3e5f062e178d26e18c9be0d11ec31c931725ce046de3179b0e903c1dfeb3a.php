<?php

/* TRCCoreBundle:Affichage:utilisateur.html.twig */
class __TwigTemplate_ec5a7c29b74518b69a2ce973b37a71ed06bd474a2b88877e97957b9703e8185b extends Twig_Template
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
        $__internal_44e03bca2c545536a4f477a6ad4b334663db48082dfcd221bc53bf3061b1f7a0 = $this->env->getExtension("native_profiler");
        $__internal_44e03bca2c545536a4f477a6ad4b334663db48082dfcd221bc53bf3061b1f7a0->enter($__internal_44e03bca2c545536a4f477a6ad4b334663db48082dfcd221bc53bf3061b1f7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:utilisateur.html.twig"));

        // line 1
        echo "
<div class=\"row mbl\">
    <div class=\"col-lg-12\">
                                
    \t<div class=\"col-md-12\">
    \t    <div id=\"area-chart-spline\" style=\"width: 100%; height: 300px; display: none;\">
    \t    </div>
    \t</div>
                                
    </div>

    <div class=\"col-lg-12\">
        <div class=\"row\">
            <div class=\"col-md-12\">
            \t<h2>
                    Fonction : 
                    ";
        // line 17
        if ( !(null === (isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")))) {
            // line 18
            echo "                        ";
            $context["ag"] = $this->env->getExtension('TwigExtension')->getEntite($this->getAttribute((isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "entite", array()));
            // line 19
            echo "            \t\t    ";
            if ( !(null === $this->getAttribute((isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "profil", array()))) {
                // line 20
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "profil", array()), "nom", array()), "html", null, true);
                echo " | 
                        ";
            } else {
                // line 22
                echo "                            Pas Statut |
                        ";
            }
            // line 24
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ag"]) ? $context["ag"] : $this->getContext($context, "ag")), "nom", array()), "html", null, true);
            echo "
                        <small>
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["poste"]) ? $context["poste"] : $this->getContext($context, "poste")), "entite", array()), "classe", array()), "html", null, true);
            echo "
                        </small>
                    ";
        } else {
            // line 29
            echo "                        AUCUNE
                    ";
        }
        // line 31
        echo "            \t</h2>

                <div class=\"row mtl\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group\">
                            <div class=\"text-center mbl\">
                            \t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "image", array())), "html", null, true);
        echo " \" height=\"480\" alt=\"\" class=\"img-responsive\"/>
                            </div>
                            <div class=\"text-center mbl\">
       <button type=\"button\" class=\"btn btn-green btn-lg\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Affecter à une entité</button>

<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
     
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h5 class=\"modal-title\" id=\"myModalLabel\">
                Sélectionner l'entité 
            </h5>
        </div>
        <div class=\"modal-body\">
            <ul class=\"list-group\">
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_affectation_a_une_entite", array("entite" => "Agence", "matricule" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "matricule", array()))), "html", null, true);
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-bank fa\"></i>
                        Agences
              </li>
              </a>
              <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_affectation_a_une_entite", array("entite" => "Zone", "matricule" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "matricule", array()))), "html", null, true);
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-tag fa\"></i>
                        Zone
              </li>
              </a>
              <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_affectation_a_une_entite", array("entite" => "BOC", "matricule" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "matricule", array()))), "html", null, true);
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-gears fa\"></i>
                        Back Office Crédit
              </li>
              </a>
              <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_affectation_a_une_entite", array("entite" => "CIC", "matricule" => $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "matricule", array()))), "html", null, true);
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-check-circle fa\"></i>
                        Comité Interne de Crédit
              </li>
              </a>
            </ul>
        </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
      </div>
    </div>
  </div>
</div>






                            </div>
                        </div>
                        
                    </div>
                    <div class=\"col-md-9\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\">
                            \t<a href=\"#tab-info\" data-toggle=\"tab\">
                            \t\tInformations
                            \t</a>
                            </li>
                            <li>
                            \t<a href=\"#tab-fonctions\" data-toggle=\"tab\">
                            \t\tFonctions
                            \t</a>
                            </li>
                            <li>
                            \t<a href=\"#tab-messages\" data-toggle=\"tab\">
                            \t\tMessages
                            \t</a>
                            </li>
                        </ul>
                        <div id=\"generalTabContent\" class=\"tab-content\">
                            <div id=\"tab-info\" class=\"tab-pane fade in active\">
                                <table class=\"table table-strip table-hover\">
                            \t\t<tbody>
\t\t                                <tr>
\t\t                                    <td>Nom et Prénom </td>
\t\t                                    <td>
\t\t                                    \t";
        // line 121
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "nom", array())), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
        echo "
\t\t                                    </td>
\t\t                                </tr>
\t\t                                <tr>
\t\t                                    <td>Email</td>
\t\t                                    <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "email", array()), "html", null, true);
        echo " </td>
\t\t                                </tr>
\t\t                                <tr>
\t\t                                    <td>Adresse</td>
\t\t                                    <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresse", array()), "html", null, true);
        echo "</td>
\t\t                                </tr>
\t\t                                <tr>
\t\t                                    <td>Member Since</td>
\t\t                                    <td> Jun 03, 2014</td>
\t\t                                </tr>
\t\t                            </tbody>
\t\t                        </table>
                            </div>
                            <div id=\"tab-fonctions\" class=\"tab-pane fade in\">
                                <table class=\"table table-condensed \">
                                    <thead>
                                        <tr>
                                            <th>Statut</th>
                                            <th>Entité</th>
                                            <th>Date d'affectation</th>
                                            <th>Etat</th>
                                            <th>Date de départ</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fonctions"]) ? $context["fonctions"] : $this->getContext($context, "fonctions")));
        foreach ($context['_seq'] as $context["_key"] => $context["fonction"]) {
            // line 155
            echo "
                                            <tr>
                                                <td>
                                                ";
            // line 158
            if ( !(null === $this->getAttribute($context["fonction"], "profil", array()))) {
                // line 159
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fonction"], "profil", array()), "nom", array()), "html", null, true);
                echo "
                                                ";
            } else {
                // line 161
                echo "                                                    Non Spécifié
                                                ";
            }
            // line 163
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 165
            $context["ent"] = $this->env->getExtension('TwigExtension')->getEntite($this->getAttribute($context["fonction"], "entite", array()));
            // line 166
            echo "                                                    ";
            if ( !(null === (isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")))) {
                // line 167
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "nom", array()), "html", null, true);
                echo "
                                                    ";
            } else {
                // line 169
                echo "                                                        ERREUR
                                                    ";
            }
            // line 171
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fonction"], "dateaffectation", array()), "d-m-Y H:i"), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 176
            if ($this->getAttribute($context["fonction"], "active", array())) {
                // line 177
                echo "                                                        Activée
                                                    ";
            } else {
                // line 179
                echo "                                                        Desactivée
                                                    ";
            }
            // line 181
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 183
            if ( !(null === $this->getAttribute($context["fonction"], "dateretrait", array()))) {
                // line 184
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fonction"], "dateretrait", array()), "d-m-Y H:i"), "html", null, true);
                echo "
                                                    ";
            }
            // line 186
            echo "                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fonction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                    </tbody>
                                </table>
                                
                            </div>
                            <div id=\"tab-messages\" class=\"tab-pane fade in\">
                                        <div class=\"row mbl\">
                                            <div class=\"col-lg-6\"><span style=\"margin-left: 15px\"></span><input type=\"checkbox\"/><a href=\"#\" class=\"btn btn-success btn-sm mlm mrm\"><i class=\"fa fa-send-o\"></i>&nbsp;
                                                Write Mail</a><a href=\"#\" class=\"btn btn-white btn-sm\"><i class=\"fa fa-trash-o\"></i>&nbsp;
                                                Delete</a></div>
                                            <div class=\"col-lg-6\">
                                                <div class=\"input-group\"><input type=\"text\" class=\"form-control\"/><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-white\">Search</button></span></div>
                                            </div>
                                        </div>
                                        <div class=\"list-group\">
                                        \t<a href=\"#\" class=\"list-group-item\">
                                        \t\t<input type=\"checkbox\"/>
                                        \t\t<span class=\"fa fa-star text-yellow mrm mlm\"></span>
                                        \t\t<span style=\"min-width: 120px; display: inline-block;\" class=\"name\">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style=\"font-size: 11px;\" class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                                class=\"badge\">12:10 AM</span><span class=\"pull-right mrl\"><span class=\"glyphicon glyphicon-paperclip\"></span></span></a>
                                        </div>
                            </div>
                                </div>
                    </div>
                    </div>
                </div>
            </div>
                              
                                </div>
                                
                            
                     
                            
                        </div>";
        
        $__internal_44e03bca2c545536a4f477a6ad4b334663db48082dfcd221bc53bf3061b1f7a0->leave($__internal_44e03bca2c545536a4f477a6ad4b334663db48082dfcd221bc53bf3061b1f7a0_prof);

    }

    public function getTemplateName()
    {
        return "TRCCoreBundle:Affichage:utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 189,  298 => 186,  292 => 184,  290 => 183,  286 => 181,  282 => 179,  278 => 177,  276 => 176,  270 => 173,  266 => 171,  262 => 169,  256 => 167,  253 => 166,  251 => 165,  247 => 163,  243 => 161,  237 => 159,  235 => 158,  230 => 155,  226 => 154,  200 => 131,  193 => 127,  185 => 122,  181 => 121,  129 => 72,  120 => 66,  111 => 60,  102 => 54,  82 => 37,  74 => 31,  70 => 29,  64 => 26,  58 => 24,  54 => 22,  48 => 20,  45 => 19,  42 => 18,  40 => 17,  22 => 1,);
    }
}
/* */
/* <div class="row mbl">*/
/*     <div class="col-lg-12">*/
/*                                 */
/*     	<div class="col-md-12">*/
/*     	    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">*/
/*     	    </div>*/
/*     	</div>*/
/*                                 */
/*     </div>*/
/* */
/*     <div class="col-lg-12">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*             	<h2>*/
/*                     Fonction : */
/*                     {%if poste is not null %}*/
/*                         {%set ag = getEntite(poste.entite) %}*/
/*             		    {%if poste.profil is not null %}*/
/*                             {{poste.profil.nom}} | */
/*                         {%else%}*/
/*                             Pas Statut |*/
/*                         {%endif%}*/
/*                         {{ag.nom}}*/
/*                         <small>*/
/*                             {{poste.entite.classe}}*/
/*                         </small>*/
/*                     {%else%}*/
/*                         AUCUNE*/
/*                     {%endif%}*/
/*             	</h2>*/
/* */
/*                 <div class="row mtl">*/
/*                     <div class="col-md-3">*/
/*                         <div class="form-group">*/
/*                             <div class="text-center mbl">*/
/*                             	<img src="{{asset(utilisateur.image)}} " height="480" alt="" class="img-responsive"/>*/
/*                             </div>*/
/*                             <div class="text-center mbl">*/
/*        <button type="button" class="btn btn-green btn-lg" data-toggle="modal" data-target=".bs-example-modal-sm">Affecter à une entité</button>*/
/* */
/* <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*   <div class="modal-dialog modal-sm">*/
/*     <div class="modal-content">*/
/*      */
/*         <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             <h5 class="modal-title" id="myModalLabel">*/
/*                 Sélectionner l'entité */
/*             </h5>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             <ul class="list-group">*/
/*             <a href="{{url('trc_admin_utilisateurs_affectation_a_une_entite',{entite:'Agence',matricule:utilisateur.matricule})}} " class="">*/
/*               <li class="list-group-item btn">*/
/*                         <i class="fa-bank fa"></i>*/
/*                         Agences*/
/*               </li>*/
/*               </a>*/
/*               <a href="{{url('trc_admin_utilisateurs_affectation_a_une_entite',{entite:'Zone',matricule:utilisateur.matricule})}} " class="">*/
/*               <li class="list-group-item btn">*/
/*                         <i class="fa-tag fa"></i>*/
/*                         Zone*/
/*               </li>*/
/*               </a>*/
/*               <a href="{{url('trc_admin_utilisateurs_affectation_a_une_entite',{entite:'BOC',matricule:utilisateur.matricule})}} " class="">*/
/*               <li class="list-group-item btn">*/
/*                         <i class="fa-gears fa"></i>*/
/*                         Back Office Crédit*/
/*               </li>*/
/*               </a>*/
/*               <a href="{{url('trc_admin_utilisateurs_affectation_a_une_entite',{entite:'CIC',matricule:utilisateur.matricule})}} " class="">*/
/*               <li class="list-group-item btn">*/
/*                         <i class="fa-check-circle fa"></i>*/
/*                         Comité Interne de Crédit*/
/*               </li>*/
/*               </a>*/
/*             </ul>*/
/*         </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                     <div class="col-md-9">*/
/*                         <ul class="nav nav-tabs">*/
/*                             <li class="active">*/
/*                             	<a href="#tab-info" data-toggle="tab">*/
/*                             		Informations*/
/*                             	</a>*/
/*                             </li>*/
/*                             <li>*/
/*                             	<a href="#tab-fonctions" data-toggle="tab">*/
/*                             		Fonctions*/
/*                             	</a>*/
/*                             </li>*/
/*                             <li>*/
/*                             	<a href="#tab-messages" data-toggle="tab">*/
/*                             		Messages*/
/*                             	</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div id="generalTabContent" class="tab-content">*/
/*                             <div id="tab-info" class="tab-pane fade in active">*/
/*                                 <table class="table table-strip table-hover">*/
/*                             		<tbody>*/
/* 		                                <tr>*/
/* 		                                    <td>Nom et Prénom </td>*/
/* 		                                    <td>*/
/* 		                                    	{{utilisateur.nom|upper}}*/
/* 												{{utilisateur.prenom}}*/
/* 		                                    </td>*/
/* 		                                </tr>*/
/* 		                                <tr>*/
/* 		                                    <td>Email</td>*/
/* 		                                    <td>{{utilisateur.email}} </td>*/
/* 		                                </tr>*/
/* 		                                <tr>*/
/* 		                                    <td>Adresse</td>*/
/* 		                                    <td>{{utilisateur.adresse}}</td>*/
/* 		                                </tr>*/
/* 		                                <tr>*/
/* 		                                    <td>Member Since</td>*/
/* 		                                    <td> Jun 03, 2014</td>*/
/* 		                                </tr>*/
/* 		                            </tbody>*/
/* 		                        </table>*/
/*                             </div>*/
/*                             <div id="tab-fonctions" class="tab-pane fade in">*/
/*                                 <table class="table table-condensed ">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                             <th>Statut</th>*/
/*                                             <th>Entité</th>*/
/*                                             <th>Date d'affectation</th>*/
/*                                             <th>Etat</th>*/
/*                                             <th>Date de départ</th>*/
/* */
/*                                         </tr>*/
/* */
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         {%for fonction in fonctions %}*/
/* */
/*                                             <tr>*/
/*                                                 <td>*/
/*                                                 {%if fonction.profil is not null %}*/
/*                                                     {{fonction.profil.nom}}*/
/*                                                 {%else%}*/
/*                                                     Non Spécifié*/
/*                                                 {%endif%}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {%set ent = getEntite(fonction.entite)%}*/
/*                                                     {%if ent is not null %}*/
/*                                                         {{ent.nom}}*/
/*                                                     {%else%}*/
/*                                                         ERREUR*/
/*                                                     {%endif%}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {{fonction.dateaffectation|date('d-m-Y H:i')}}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {%if fonction.active %}*/
/*                                                         Activée*/
/*                                                     {%else%}*/
/*                                                         Desactivée*/
/*                                                     {%endif%}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {%if fonction.dateretrait is not null %}*/
/*                                                     {{fonction.dateretrait|date('d-m-Y H:i')}}*/
/*                                                     {%endif%}*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {%endfor%}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 */
/*                             </div>*/
/*                             <div id="tab-messages" class="tab-pane fade in">*/
/*                                         <div class="row mbl">*/
/*                                             <div class="col-lg-6"><span style="margin-left: 15px"></span><input type="checkbox"/><a href="#" class="btn btn-success btn-sm mlm mrm"><i class="fa fa-send-o"></i>&nbsp;*/
/*                                                 Write Mail</a><a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i>&nbsp;*/
/*                                                 Delete</a></div>*/
/*                                             <div class="col-lg-6">*/
/*                                                 <div class="input-group"><input type="text" class="form-control"/><span class="input-group-btn"><button type="button" class="btn btn-white">Search</button></span></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="list-group">*/
/*                                         	<a href="#" class="list-group-item">*/
/*                                         		<input type="checkbox"/>*/
/*                                         		<span class="fa fa-star text-yellow mrm mlm"></span>*/
/*                                         		<span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span*/
/*                                                 class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a>*/
/*                                         </div>*/
/*                             </div>*/
/*                                 </div>*/
/*                     </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*                               */
/*                                 </div>*/
/*                                 */
/*                             */
/*                      */
/*                             */
/*                         </div>*/
