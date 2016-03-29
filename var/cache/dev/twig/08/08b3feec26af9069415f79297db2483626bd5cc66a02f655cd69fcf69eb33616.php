<?php

/* TRCDDCBundle::Default/consulter.html.twig */
class __TwigTemplate_3cd80582ff07617b86c37d1f9f471fbb32cc8aea524c6048b01425a7e2a4e355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::ddc.html.twig", "TRCDDCBundle::Default/consulter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCDDCBundle::ddc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e2d8f15144c7ab3d68f6aca932ee28aeb3a669c8eaf3b4b4ccc518a8f1ee560 = $this->env->getExtension("native_profiler");
        $__internal_9e2d8f15144c7ab3d68f6aca932ee28aeb3a669c8eaf3b4b4ccc518a8f1ee560->enter($__internal_9e2d8f15144c7ab3d68f6aca932ee28aeb3a669c8eaf3b4b4ccc518a8f1ee560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle::Default/consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e2d8f15144c7ab3d68f6aca932ee28aeb3a669c8eaf3b4b4ccc518a8f1ee560->leave($__internal_9e2d8f15144c7ab3d68f6aca932ee28aeb3a669c8eaf3b4b4ccc518a8f1ee560_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6846b5fabbc9aa22cb6b761732e87b17aaf44db51f17365d908d7d7a796ee260 = $this->env->getExtension("native_profiler");
        $__internal_6846b5fabbc9aa22cb6b761732e87b17aaf44db51f17365d908d7d7a796ee260->enter($__internal_6846b5fabbc9aa22cb6b761732e87b17aaf44db51f17365d908d7d7a796ee260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "id", array()), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6846b5fabbc9aa22cb6b761732e87b17aaf44db51f17365d908d7d7a796ee260->leave($__internal_6846b5fabbc9aa22cb6b761732e87b17aaf44db51f17365d908d7d7a796ee260_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_787ac19aabc637d5913be71c29bacac43b54eb1dd844e68628633f93d072d6f2 = $this->env->getExtension("native_profiler");
        $__internal_787ac19aabc637d5913be71c29bacac43b54eb1dd844e68628633f93d072d6f2->enter($__internal_787ac19aabc637d5913be71c29bacac43b54eb1dd844e68628633f93d072d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "html", null, true);
        echo " 
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_ddc_edp", array("rc" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()))), "html", null, true);
        echo " \" title=\"Espace De Partage\">
        #EDP 
    </a>
";
        
        $__internal_787ac19aabc637d5913be71c29bacac43b54eb1dd844e68628633f93d072d6f2->leave($__internal_787ac19aabc637d5913be71c29bacac43b54eb1dd844e68628633f93d072d6f2_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_5a5586aa700fd0dcbb3fa7b69e9f9b72cd110546ce300c393ad73841b481fc9f = $this->env->getExtension("native_profiler");
        $__internal_5a5586aa700fd0dcbb3fa7b69e9f9b72cd110546ce300c393ad73841b481fc9f->enter($__internal_5a5586aa700fd0dcbb3fa7b69e9f9b72cd110546ce300c393ad73841b481fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 12
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-folder\"></i>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_consulter", array("rc" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()))), "html", null, true);
        echo " \">
            \t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "html", null, true);
        echo "
            </a>
        </li>
        
    ";
        
        $__internal_5a5586aa700fd0dcbb3fa7b69e9f9b72cd110546ce300c393ad73841b481fc9f->leave($__internal_5a5586aa700fd0dcbb3fa7b69e9f9b72cd110546ce300c393ad73841b481fc9f_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e16ffc0b6a6806bcd4a631f65ca392544562dc4ced9892a7d51d7ce99fa7b52 = $this->env->getExtension("native_profiler");
        $__internal_7e16ffc0b6a6806bcd4a631f65ca392544562dc4ced9892a7d51d7ce99fa7b52->enter($__internal_7e16ffc0b6a6806bcd4a631f65ca392544562dc4ced9892a7d51d7ce99fa7b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "
    <div class=\"etatPhaseDDC\">
        ";
        // line 26
        $context["lesPhases"] = $this->env->getExtension('TwigExtension')->getAllPhaseDDC((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")));
        // line 27
        echo "        ";
        $context["phaseActuelle"] = null;
        // line 28
        echo "        ";
        $context["etatActuel"] = null;
        // line 29
        echo "        <ul>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesPhases"]) ? $context["lesPhases"] : $this->getContext($context, "lesPhases")));
        foreach ($context['_seq'] as $context["_key"] => $context["phase"]) {
            // line 31
            echo "                ";
            $context["cssClass"] = $this->env->getExtension('TwigExtension')->getClassPhaseDDC($context["phase"]);
            // line 32
            echo "            <li class=\"phase ";
            echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")), "html", null, true);
            echo "\">
                <span title=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["phase"], "phase", array()), "nom", array()), "html", null, true);
            echo " \">
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["phase"], "phase", array()), "code", array()), "html", null, true);
            echo "

                </span>
                ";
            // line 37
            if (((isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")) == "encours")) {
                // line 38
                echo "                    ";
                $context["etats"] = $this->env->getExtension('TwigExtension')->getAllEtatPhase($context["phase"]);
                // line 39
                echo "                    ";
                $context["phaseActuelle"] = $context["phase"];
                // line 40
                echo "                    <ul>
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["etats"]) ? $context["etats"] : $this->getContext($context, "etats")));
                foreach ($context['_seq'] as $context["_key"] => $context["etat"]) {
                    // line 42
                    echo "                                ";
                    $context["cc"] = $this->env->getExtension('TwigExtension')->getClassEtatDDC($context["etat"]);
                    // line 43
                    echo "                            <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["cc"]) ? $context["cc"] : $this->getContext($context, "cc")), "html", null, true);
                    echo " \" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etat"], "etat", array()), "nom", array()), "html", null, true);
                    echo " \">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etat"], "etat", array()), "code", array()), "html", null, true);
                    echo "</li>
                            ";
                    // line 44
                    if (((isset($context["cc"]) ? $context["cc"] : $this->getContext($context, "cc")) == "encours")) {
                        // line 45
                        echo "                                ";
                        $context["etatActuel"] = $context["etat"];
                        // line 46
                        echo "                            ";
                    }
                    // line 47
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                    </ul>

                ";
            }
            // line 51
            echo "                
                
            </li>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </ul>

        ";
        // line 58
        if (((( !(null === (isset($context["phaseActuelle"]) ? $context["phaseActuelle"] : $this->getContext($context, "phaseActuelle"))) &&  !(null === (isset($context["etatActuel"]) ? $context["etatActuel"] : $this->getContext($context, "etatActuel")))) && $this->env->getExtension('TwigExtension')->estMonEtatDDC((isset($context["etatActuel"]) ? $context["etatActuel"] : $this->getContext($context, "etatActuel")), $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) && $this->getAttribute((isset($context["etatActuel"]) ? $context["etatActuel"] : $this->getContext($context, "etatActuel")), "verdict", array()))) {
            // line 59
            echo "            <a class=\"btn btn-xs btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_decision_commentaire_ddc", array("rc" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "phase" => $this->getAttribute($this->getAttribute((isset($context["phaseActuelle"]) ? $context["phaseActuelle"] : $this->getContext($context, "phaseActuelle")), "phase", array()), "code", array()), "etat" => $this->getAttribute($this->getAttribute((isset($context["etatActuel"]) ? $context["etatActuel"] : $this->getContext($context, "etatActuel")), "etat", array()), "code", array()))), "html", null, true);
            echo " \">
               Donner votre décision et commenter
            </a>
        ";
        }
        // line 63
        echo "    </div>
        
    ";
        // line 65
        $this->displayBlock('main', $context, $blocks);
        // line 152
        echo "    
    

";
        
        $__internal_7e16ffc0b6a6806bcd4a631f65ca392544562dc4ced9892a7d51d7ce99fa7b52->leave($__internal_7e16ffc0b6a6806bcd4a631f65ca392544562dc4ced9892a7d51d7ce99fa7b52_prof);

    }

    // line 65
    public function block_main($context, array $blocks = array())
    {
        $__internal_e58e1b2ffd7a157fa6592327f37298f58b43e92562db9a2eabf6fa950b62c351 = $this->env->getExtension("native_profiler");
        $__internal_e58e1b2ffd7a157fa6592327f37298f58b43e92562db9a2eabf6fa950b62c351->enter($__internal_e58e1b2ffd7a157fa6592327f37298f58b43e92562db9a2eabf6fa950b62c351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 66
        echo "    <div class=\"row\">
        ";
        // line 67
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 68
            echo "           
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Renseigner les caratéristiques du crédit <br>
                    Crédit :: ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "tdc", array()), "nom", array()), "html", null, true);
            echo "
                </div>
                ";
            // line 74
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label>
                            Montant
                        </label>
                        ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"form-group\">
                        <label>
                            Durée
                        </label>
                        ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"form-group\">
                        <label>
                            Traite
                        </label>
                        ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quotite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                </div>
                <div class=\"panel-footer\">
                    ";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
            echo "
                </div>
                ";
            // line 98
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
            </div>
        
        ";
        } else {
            // line 102
            echo "        <div class=\"col-md-7\">
             <div id=\"voirFichierDDC\">
                ";
            // line 104
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCDDCBundle:Docs:voir", array("rs" => $this->getAttribute(            // line 105
(isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()))));
            // line 106
            echo "
            </div>
        </div>
        <div class=\"col-md-5\">
                    <div class=\"panel-default panel\">
                        ";
            // line 111
            $context["documents"] = 0;
            // line 112
            echo "                        <div class=\"panel-heading\">
                            Documents à joindre au dossier
                            <a class=\"btn-xs btn-default pull-right\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_ajout_docs", array("rs" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()))), "html", null, true);
            echo " \">

                                <i class=\"fa-plus-square fa\"></i> Ajouter un document
                            </a>
                        </div>
                        <div class=\"panel-body\">
                            <table class=\"table\">
                                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
            foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                // line 122
                echo "                                    <tr>
                                        <td>
                                            ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 127
                if ($this->getAttribute($context["doc"], "charge", array())) {
                    // line 128
                    echo "                                                <span class=\"label-success label\">
                                                    <i class=\"fa-check fa\"></i>
                                                    Chargé
                                                </span>
                                                ";
                    // line 132
                    $context["documents"] = ((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")) + 1);
                    // line 133
                    echo "                                            ";
                } else {
                    // line 134
                    echo "                                                <span class=\"label label-danger\">
                                                    <i class=\"fa-times fa\"></i>
                                                    Non chargé
                                                </span>
                                            ";
                }
                // line 139
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                            </table>
                        </div>
                        <div class=\"panel-footer\">
                            Documents chargés : ";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")), "html", null, true);
            echo "
                        </div>
                    </div>
        </div>
        ";
        }
        // line 150
        echo "    </div>
    ";
        
        $__internal_e58e1b2ffd7a157fa6592327f37298f58b43e92562db9a2eabf6fa950b62c351->leave($__internal_e58e1b2ffd7a157fa6592327f37298f58b43e92562db9a2eabf6fa950b62c351_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle::Default/consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 150,  382 => 145,  377 => 142,  369 => 139,  362 => 134,  359 => 133,  357 => 132,  351 => 128,  349 => 127,  343 => 124,  339 => 122,  335 => 121,  325 => 114,  321 => 112,  319 => 111,  312 => 106,  310 => 105,  309 => 104,  305 => 102,  298 => 98,  293 => 96,  286 => 92,  277 => 86,  268 => 80,  259 => 74,  254 => 72,  248 => 68,  246 => 67,  243 => 66,  237 => 65,  227 => 152,  225 => 65,  221 => 63,  213 => 59,  211 => 58,  207 => 56,  197 => 51,  192 => 48,  186 => 47,  183 => 46,  180 => 45,  178 => 44,  169 => 43,  166 => 42,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  151 => 37,  145 => 34,  141 => 33,  136 => 32,  133 => 31,  129 => 30,  126 => 29,  123 => 28,  120 => 27,  118 => 26,  114 => 24,  108 => 23,  96 => 17,  92 => 16,  84 => 12,  78 => 11,  67 => 7,  62 => 6,  56 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::ddc.html.twig' %}*/
/* {%block title%}*/
/*     #{{ddc.id}} | {{parent()}}*/
/* {%endblock title%}*/
/* {%block titre%}*/
/* 	{{ddc.rc}} */
/*     <a href="{{url('trcddc_ddc_edp',{rc:ddc.rc})}} " title="Espace De Partage">*/
/*         #EDP */
/*     </a>*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-folder"></i>*/
/*             <a href="{{url('trcddc_consulter',{rc:ddc.rc})}} ">*/
/*             	{{ddc.rc}}*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/* {%block content %}*/
/* */
/*     <div class="etatPhaseDDC">*/
/*         {%set lesPhases = getAllPhaseDDC(ddc) %}*/
/*         {%set phaseActuelle = null %}*/
/*         {%set etatActuel = null %}*/
/*         <ul>*/
/*             {%for phase in lesPhases %}*/
/*                 {%set cssClass = getClassPhaseDDC(phase) %}*/
/*             <li class="phase {{cssClass}}">*/
/*                 <span title="{{phase.phase.nom}} ">*/
/*                     {{phase.phase.code}}*/
/* */
/*                 </span>*/
/*                 {%if cssClass == 'encours' %}*/
/*                     {%set etats = getAllEtatPhase(phase) %}*/
/*                     {%set phaseActuelle = phase %}*/
/*                     <ul>*/
/*                         {%for etat in etats %}*/
/*                                 {%set cc = getClassEtatDDC(etat) %}*/
/*                             <li class="{{cc}} " title="{{etat.etat.nom}} ">{{etat.etat.code}}</li>*/
/*                             {%if cc == 'encours' %}*/
/*                                 {%set etatActuel = etat %}*/
/*                             {%endif%}*/
/*                         {%endfor%}*/
/*                     </ul>*/
/* */
/*                 {%endif%}*/
/*                 */
/*                 */
/*             </li>*/
/*             */
/*             {%endfor%}*/
/*         </ul>*/
/* */
/*         {%if phaseActuelle is not null and etatActuel is not null and estMonEtatDDC(etatActuel,app.user) and etatActuel.verdict %}*/
/*             <a class="btn btn-xs btn-default" href="{{url('trcddc_decision_commentaire_ddc',{rc:ddc.rc,phase:phaseActuelle.phase.code,etat:etatActuel.etat.code})}} ">*/
/*                Donner votre décision et commenter*/
/*             </a>*/
/*         {%endif%}*/
/*     </div>*/
/*         */
/*     {%block main%}*/
/*     <div class="row">*/
/*         {%if form is not null %}*/
/*            */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">*/
/*                     Renseigner les caratéristiques du crédit <br>*/
/*                     Crédit :: {{ddc.tdc.nom}}*/
/*                 </div>*/
/*                 {{form_start(form)}}*/
/*                 <div class="panel-body">*/
/*                     <div class="form-group">*/
/*                         <label>*/
/*                             Montant*/
/*                         </label>*/
/*                         {{form_widget(form.montant,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label>*/
/*                             Durée*/
/*                         </label>*/
/*                         {{form_widget(form.duree,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label>*/
/*                             Traite*/
/*                         </label>*/
/*                         {{form_widget(form.quotite,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     {{form_widget(form.save)}}*/
/*                 </div>*/
/*                 {{form_end(form)}}*/
/*             </div>*/
/*         */
/*         {%else%}*/
/*         <div class="col-md-7">*/
/*              <div id="voirFichierDDC">*/
/*                 {{*/
/*                     render(controller('TRCDDCBundle:Docs:voir',{rs:ddc.rs}))*/
/*                 }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-5">*/
/*                     <div class="panel-default panel">*/
/*                         {% set documents = 0 %}*/
/*                         <div class="panel-heading">*/
/*                             Documents à joindre au dossier*/
/*                             <a class="btn-xs btn-default pull-right" href="{{url('trcddc_ajout_docs',{rs:ddc.rs})}} ">*/
/* */
/*                                 <i class="fa-plus-square fa"></i> Ajouter un document*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <table class="table">*/
/*                                 {%for doc in docs %}*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             {{doc.nom}}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {%if doc.charge %}*/
/*                                                 <span class="label-success label">*/
/*                                                     <i class="fa-check fa"></i>*/
/*                                                     Chargé*/
/*                                                 </span>*/
/*                                                 {%set documents = documents + 1 %}*/
/*                                             {%else%}*/
/*                                                 <span class="label label-danger">*/
/*                                                     <i class="fa-times fa"></i>*/
/*                                                     Non chargé*/
/*                                                 </span>*/
/*                                             {%endif%}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {%endfor%}*/
/*                             </table>*/
/*                         </div>*/
/*                         <div class="panel-footer">*/
/*                             Documents chargés : {{documents}}*/
/*                         </div>*/
/*                     </div>*/
/*         </div>*/
/*         {%endif%}*/
/*     </div>*/
/*     {%endblock main%}*/
/*     */
/*     */
/* */
/* {%endblock content %}*/
