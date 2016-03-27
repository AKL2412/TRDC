<?php

/* TRCDDCBundle::Default/consulter.html.twig */
class __TwigTemplate_1484508c79edf154ff2e0754f274fb669fc2c20af9d7628c8f6bc8dd31a4767f extends Twig_Template
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
        $__internal_3be1699c0daae222db79aa90681bcd5a0ae9c855653e8cfb1f4725db8ebd146d = $this->env->getExtension("native_profiler");
        $__internal_3be1699c0daae222db79aa90681bcd5a0ae9c855653e8cfb1f4725db8ebd146d->enter($__internal_3be1699c0daae222db79aa90681bcd5a0ae9c855653e8cfb1f4725db8ebd146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle::Default/consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be1699c0daae222db79aa90681bcd5a0ae9c855653e8cfb1f4725db8ebd146d->leave($__internal_3be1699c0daae222db79aa90681bcd5a0ae9c855653e8cfb1f4725db8ebd146d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f5609b4403f0e89ad14a9b64b53c46c5e54d1a1034f18ad16a45b1e254f5b14 = $this->env->getExtension("native_profiler");
        $__internal_4f5609b4403f0e89ad14a9b64b53c46c5e54d1a1034f18ad16a45b1e254f5b14->enter($__internal_4f5609b4403f0e89ad14a9b64b53c46c5e54d1a1034f18ad16a45b1e254f5b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "id", array()), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4f5609b4403f0e89ad14a9b64b53c46c5e54d1a1034f18ad16a45b1e254f5b14->leave($__internal_4f5609b4403f0e89ad14a9b64b53c46c5e54d1a1034f18ad16a45b1e254f5b14_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a0c5b730b073f01ed5031e7781d4e30474b35cd195d89921fe47c2e16e83d938 = $this->env->getExtension("native_profiler");
        $__internal_a0c5b730b073f01ed5031e7781d4e30474b35cd195d89921fe47c2e16e83d938->enter($__internal_a0c5b730b073f01ed5031e7781d4e30474b35cd195d89921fe47c2e16e83d938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

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
        
        $__internal_a0c5b730b073f01ed5031e7781d4e30474b35cd195d89921fe47c2e16e83d938->leave($__internal_a0c5b730b073f01ed5031e7781d4e30474b35cd195d89921fe47c2e16e83d938_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_ae8f38e20d789e7ba4200e3374c702d4b02b6238f0be1df63fc811b149970a38 = $this->env->getExtension("native_profiler");
        $__internal_ae8f38e20d789e7ba4200e3374c702d4b02b6238f0be1df63fc811b149970a38->enter($__internal_ae8f38e20d789e7ba4200e3374c702d4b02b6238f0be1df63fc811b149970a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_ae8f38e20d789e7ba4200e3374c702d4b02b6238f0be1df63fc811b149970a38->leave($__internal_ae8f38e20d789e7ba4200e3374c702d4b02b6238f0be1df63fc811b149970a38_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_628da38190545a20c27cf234b55ae0b6963acf9364d131a22430f411aab8aa69 = $this->env->getExtension("native_profiler");
        $__internal_628da38190545a20c27cf234b55ae0b6963acf9364d131a22430f411aab8aa69->enter($__internal_628da38190545a20c27cf234b55ae0b6963acf9364d131a22430f411aab8aa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    
        
    ";
        // line 26
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "    
    

";
        
        $__internal_628da38190545a20c27cf234b55ae0b6963acf9364d131a22430f411aab8aa69->leave($__internal_628da38190545a20c27cf234b55ae0b6963acf9364d131a22430f411aab8aa69_prof);

    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        $__internal_1e66acf92407c21af731152ae69234b6469de518449e449e70ed0339e6d4a25e = $this->env->getExtension("native_profiler");
        $__internal_1e66acf92407c21af731152ae69234b6469de518449e449e70ed0339e6d4a25e->enter($__internal_1e66acf92407c21af731152ae69234b6469de518449e449e70ed0339e6d4a25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 27
        echo "        ";
        if ( !(null === (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
            // line 28
            echo "           
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Renseigner les caratéristiques du crédit <br>
                    Crédit :: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "tdc", array()), "nom", array()), "html", null, true);
            echo "
                </div>
                ";
            // line 34
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label>
                            Montant
                        </label>
                        ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"form-group\">
                        <label>
                            Durée
                        </label>
                        ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"form-group\">
                        <label>
                            Traite
                        </label>
                        ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quotite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                </div>
                <div class=\"panel-footer\">
                    ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
            echo "
                </div>
                ";
            // line 58
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
            </div>
        
        ";
        } else {
            // line 62
            echo "                    <div class=\"panel-default panel\">
                        ";
            // line 63
            $context["documents"] = 0;
            // line 64
            echo "                        <div class=\"panel-heading\">
                            Les documents joints au dossier
                            <a class=\"pull-right\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_ajout_docs", array("rs" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()))), "html", null, true);
            echo " \">
                                <i class=\"fa-plus-square fa\"></i>
                            </a>
                        </div>
                        <div class=\"panel-body\">
                            <table class=\"table\">
                                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
            foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                // line 73
                echo "                                    <tr>
                                        <td>
                                            ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 78
                if ($this->getAttribute($context["doc"], "charge", array())) {
                    // line 79
                    echo "                                                <span class=\"label-success label\">
                                                    <i class=\"fa-check fa\"></i>
                                                    Chargé
                                                </span>
                                                ";
                    // line 83
                    $context["documents"] = ((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")) + 1);
                    // line 84
                    echo "                                            ";
                } else {
                    // line 85
                    echo "                                                <span class=\"label label-danger\">
                                                    <i class=\"fa-times fa\"></i>
                                                    Non chargé
                                                </span>
                                            ";
                }
                // line 90
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                            </table>
                        </div>
                        <div class=\"panel-footer\">
                            Documents chargés : ";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")), "html", null, true);
            echo "
                        </div>
                    </div>
               
        ";
        }
        // line 101
        echo "    ";
        
        $__internal_1e66acf92407c21af731152ae69234b6469de518449e449e70ed0339e6d4a25e->leave($__internal_1e66acf92407c21af731152ae69234b6469de518449e449e70ed0339e6d4a25e_prof);

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
        return array (  269 => 101,  261 => 96,  256 => 93,  248 => 90,  241 => 85,  238 => 84,  236 => 83,  230 => 79,  228 => 78,  222 => 75,  218 => 73,  214 => 72,  205 => 66,  201 => 64,  199 => 63,  196 => 62,  189 => 58,  184 => 56,  177 => 52,  168 => 46,  159 => 40,  150 => 34,  145 => 32,  139 => 28,  136 => 27,  130 => 26,  120 => 102,  118 => 26,  114 => 24,  108 => 23,  96 => 17,  92 => 16,  84 => 12,  78 => 11,  67 => 7,  62 => 6,  56 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::ddc.html.twig' %}*/
/* {%block title%}*/
/*     #{{ddc.id}} | {{parent()}}*/
/* {%endblock title%}*/
/* {%block titre%}*/
/* 	{{ddc.rc}} */
/*     <a href="{{url('trcddc_ddc_edp',{rc:ddc.rc})}} " title="Espace De Partage">*/
/*         #EDP*/
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
/*     */
/*         */
/*     {%block main%}*/
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
/*                     <div class="panel-default panel">*/
/*                         {% set documents = 0 %}*/
/*                         <div class="panel-heading">*/
/*                             Les documents joints au dossier*/
/*                             <a class="pull-right" href="{{url('trcddc_ajout_docs',{rs:ddc.rs})}} ">*/
/*                                 <i class="fa-plus-square fa"></i>*/
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
/*                */
/*         {%endif%}*/
/*     {%endblock main%}*/
/*     */
/*     */
/* */
/* {%endblock content %}*/
