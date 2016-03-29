<?php

/* TRCDDCBundle:Docs:ajout.html.twig */
class __TwigTemplate_190fb9f6f8a54453ce5f27b2c49ff86dc4ab96524d38e569c3e80d519e9bafbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::Default/consulter.html.twig", "TRCDDCBundle:Docs:ajout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCDDCBundle::Default/consulter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14a6677514fa54cbabb7f06d8ca043666522da3c0f2a51d3c586e6c3754fe8bb = $this->env->getExtension("native_profiler");
        $__internal_14a6677514fa54cbabb7f06d8ca043666522da3c0f2a51d3c586e6c3754fe8bb->enter($__internal_14a6677514fa54cbabb7f06d8ca043666522da3c0f2a51d3c586e6c3754fe8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Docs:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a6677514fa54cbabb7f06d8ca043666522da3c0f2a51d3c586e6c3754fe8bb->leave($__internal_14a6677514fa54cbabb7f06d8ca043666522da3c0f2a51d3c586e6c3754fe8bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb7a06596278e5e58bfbef041acb065132f15670ed554955cf88f8456ff30bcc = $this->env->getExtension("native_profiler");
        $__internal_bb7a06596278e5e58bfbef041acb065132f15670ed554955cf88f8456ff30bcc->enter($__internal_bb7a06596278e5e58bfbef041acb065132f15670ed554955cf88f8456ff30bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tDocuments | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bb7a06596278e5e58bfbef041acb065132f15670ed554955cf88f8456ff30bcc->leave($__internal_bb7a06596278e5e58bfbef041acb065132f15670ed554955cf88f8456ff30bcc_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_bd59442b73fbe4efb31ac55e8da2f92344ad56ae5db4c6f029c4d5b2e65847a2 = $this->env->getExtension("native_profiler");
        $__internal_bd59442b73fbe4efb31ac55e8da2f92344ad56ae5db4c6f029c4d5b2e65847a2->enter($__internal_bd59442b73fbe4efb31ac55e8da2f92344ad56ae5db4c6f029c4d5b2e65847a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "\tDocuments 
";
        
        $__internal_bd59442b73fbe4efb31ac55e8da2f92344ad56ae5db4c6f029c4d5b2e65847a2->leave($__internal_bd59442b73fbe4efb31ac55e8da2f92344ad56ae5db4c6f029c4d5b2e65847a2_prof);

    }

    // line 8
    public function block_position($context, array $blocks = array())
    {
        $__internal_0c2f085128509d40585ca9c94789afe06db5bc5d40902c4da3a472a165d18095 = $this->env->getExtension("native_profiler");
        $__internal_0c2f085128509d40585ca9c94789afe06db5bc5d40902c4da3a472a165d18095->enter($__internal_0c2f085128509d40585ca9c94789afe06db5bc5d40902c4da3a472a165d18095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 9
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-plus-circle\"></i>
            <a href=\"#\">
            \tDocuments
            </a>
        </li>
        
    ";
        
        $__internal_0c2f085128509d40585ca9c94789afe06db5bc5d40902c4da3a472a165d18095->leave($__internal_0c2f085128509d40585ca9c94789afe06db5bc5d40902c4da3a472a165d18095_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_35a98638af9080f91a136633b7316172bb00a6fb036c1e8519edd2d5809d6812 = $this->env->getExtension("native_profiler");
        $__internal_35a98638af9080f91a136633b7316172bb00a6fb036c1e8519edd2d5809d6812->enter($__internal_35a98638af9080f91a136633b7316172bb00a6fb036c1e8519edd2d5809d6812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        $context["etatCOLDOC"] = $this->env->getExtension('TwigExtension')->getDDCEtat((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "COLDOC");
        // line 21
        echo "<div class=\"row\">
    <div class=\"col-md-3\">
            
            ";
        // line 24
        if (($this->env->getExtension('TwigExtension')->getClassEtatDDC((isset($context["etatCOLDOC"]) ? $context["etatCOLDOC"] : $this->getContext($context, "etatCOLDOC"))) == "encours")) {
            // line 25
            echo "                <a class=\"terminer-phase-etat btn-md btn btn-primary\" href=\"#\" url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_terminer_phase_etat_ddc", array("rc" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "etape" => "etat", "codeEtape" => "COLDOC")), "html", null, true);
            echo " \">
                    Terminer la collecte de documents
                </a>
            ";
        }
        // line 29
        echo "    </div>
    <div class=\"col-md-9 text-success\" id=\"box-terminer-phase-etat\">
        
    </div>
    
</div>
<br>
<div class=\"row\">
    <div class=\"col-md-8\">
        <div id=\"voirFichierDDC\">
            ";
        // line 39
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCDDCBundle:Docs:voir", array("rs" => $this->getAttribute(        // line 40
(isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()))));
        // line 41
        echo "
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"panel-default panel\">
            <div class=\"panel-heading\">
                Uploader un fichier
                
            </div>
            <form voir=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_voir_docs", array("rs" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()))), "html", null, true);
        echo " \"  url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_ddc_upload_file", array("rc" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "type" => "doc")), "html", null, true);
        echo " \" id=\"data-form-docs-ddc\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label>
                            Le document chargé
                        </label>
                        <select class=\"form-control\" name=\"document\">
                            <option value=\"vide\">Sélectionner le fichier</option>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 59
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "id", array()), "html", null, true);
            echo " \">
                                    ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "nom", array()), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                            <label>
                                <i class=\"fa-upload fa\"></i>
                                Importer le fichier
                                <input hidden=\"hidden\" name=\"fichier\" type=\"file\" class=\"surveiller hide hidden \" id=\"leFichier\"/>
                            </label>
                    </div>
                    <div class=\"form-group\">
                            <label>
                                Nom du document
                            </label>
                            <input placeholder=\"Nom du fichier\" type=\"text\" id=\"nom-fichier\" class=\"form-control\" name=\"nomFichier\"/>
                    </div>
                    <div id=\"message\" class=\"text-danger alert alert-danger\">
                       
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                            <button type=\"submit\" class=\"form-control btn btn-success btn-lg\">
                                <i class=\"fa-upload fa\"></i>
                                Envoyer
                            </button>
                    </div>
                </div>
             </form>
        </div>
    </div>
</div>
";
        
        $__internal_35a98638af9080f91a136633b7316172bb00a6fb036c1e8519edd2d5809d6812->leave($__internal_35a98638af9080f91a136633b7316172bb00a6fb036c1e8519edd2d5809d6812_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Docs:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  162 => 60,  157 => 59,  153 => 58,  140 => 50,  129 => 41,  127 => 40,  126 => 39,  114 => 29,  106 => 25,  104 => 24,  99 => 21,  97 => 20,  91 => 19,  73 => 9,  67 => 8,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::Default/consulter.html.twig' %}*/
/* {%block title%}*/
/* 	Documents | {{parent()}}*/
/* {%endblock title%}*/
/* {%block titre%}*/
/* 	Documents */
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-plus-circle"></i>*/
/*             <a href="#">*/
/*             	Documents*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/* {%block main%}*/
/* {%set etatCOLDOC = getDDCEtat(ddc,"COLDOC")%}*/
/* <div class="row">*/
/*     <div class="col-md-3">*/
/*             */
/*             {%if getClassEtatDDC(etatCOLDOC) == 'encours'%}*/
/*                 <a class="terminer-phase-etat btn-md btn btn-primary" href="#" url="{{url('trcddc_terminer_phase_etat_ddc',{rc:ddc.rc,etape:'etat',codeEtape:'COLDOC'})}} ">*/
/*                     Terminer la collecte de documents*/
/*                 </a>*/
/*             {%endif%}*/
/*     </div>*/
/*     <div class="col-md-9 text-success" id="box-terminer-phase-etat">*/
/*         */
/*     </div>*/
/*     */
/* </div>*/
/* <br>*/
/* <div class="row">*/
/*     <div class="col-md-8">*/
/*         <div id="voirFichierDDC">*/
/*             {{*/
/*                 render(controller('TRCDDCBundle:Docs:voir',{rs:ddc.rs}))*/
/*             }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         <div class="panel-default panel">*/
/*             <div class="panel-heading">*/
/*                 Uploader un fichier*/
/*                 */
/*             </div>*/
/*             <form voir="{{url('trcddc_voir_docs',{rs:ddc.rs})}} "  url="{{url('trcddc_ddc_upload_file',{rc:ddc.rc,type:'doc'})}} " id="data-form-docs-ddc" method="post" enctype="multipart/form-data">*/
/*                 <div class="panel-body">*/
/*                     <div class="form-group">*/
/*                         <label>*/
/*                             Le document chargé*/
/*                         </label>*/
/*                         <select class="form-control" name="document">*/
/*                             <option value="vide">Sélectionner le fichier</option>*/
/*                             {%for doc in docs %}*/
/*                                 <option value="{{doc.id}} ">*/
/*                                     {{doc.nom}}*/
/*                                 </option>*/
/*                             {%endfor%}*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                             <label>*/
/*                                 <i class="fa-upload fa"></i>*/
/*                                 Importer le fichier*/
/*                                 <input hidden="hidden" name="fichier" type="file" class="surveiller hide hidden " id="leFichier"/>*/
/*                             </label>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                             <label>*/
/*                                 Nom du document*/
/*                             </label>*/
/*                             <input placeholder="Nom du fichier" type="text" id="nom-fichier" class="form-control" name="nomFichier"/>*/
/*                     </div>*/
/*                     <div id="message" class="text-danger alert alert-danger">*/
/*                        */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <div class="form-group">*/
/*                             <button type="submit" class="form-control btn btn-success btn-lg">*/
/*                                 <i class="fa-upload fa"></i>*/
/*                                 Envoyer*/
/*                             </button>*/
/*                     </div>*/
/*                 </div>*/
/*              </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {%endblock main%}*/
/* */
/*                     */
/*                     */
/*                    */
/*                         */
/*                         */
/*                         */
/*                    */
/*        */
