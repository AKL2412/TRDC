<?php

/* TRCAdminBundle:Entites:entitesParCategorie.html.twig */
class __TwigTemplate_37b14be872669a0363d912a9903690b5b9bf627a0f7ebb5c555fc511f1b49938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Entites/entites.html.twig", "TRCAdminBundle:Entites:entitesParCategorie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Entites/entites.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37daf60acb46cadacf8153f9e7d8fc16c7debb29975fb95e2beb235baee1d1d5 = $this->env->getExtension("native_profiler");
        $__internal_37daf60acb46cadacf8153f9e7d8fc16c7debb29975fb95e2beb235baee1d1d5->enter($__internal_37daf60acb46cadacf8153f9e7d8fc16c7debb29975fb95e2beb235baee1d1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entitesParCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37daf60acb46cadacf8153f9e7d8fc16c7debb29975fb95e2beb235baee1d1d5->leave($__internal_37daf60acb46cadacf8153f9e7d8fc16c7debb29975fb95e2beb235baee1d1d5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e87c973528ccb203f6f876706980af9d8338728359dbdc2f2f73e76d4432dc37 = $this->env->getExtension("native_profiler");
        $__internal_e87c973528ccb203f6f876706980af9d8338728359dbdc2f2f73e76d4432dc37->enter($__internal_e87c973528ccb203f6f876706980af9d8338728359dbdc2f2f73e76d4432dc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " |
       ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
        echo "s
\t";
        
        $__internal_e87c973528ccb203f6f876706980af9d8338728359dbdc2f2f73e76d4432dc37->leave($__internal_e87c973528ccb203f6f876706980af9d8338728359dbdc2f2f73e76d4432dc37_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5c48d67c6a033fa1733bbfa4a10613e28abb5c25c35029a8cbe44a023c6e280b = $this->env->getExtension("native_profiler");
        $__internal_5c48d67c6a033fa1733bbfa4a10613e28abb5c25c35029a8cbe44a023c6e280b->enter($__internal_5c48d67c6a033fa1733bbfa4a10613e28abb5c25c35029a8cbe44a023c6e280b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "        ";
        $context["titre"] = ((isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")) . "s");
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre"))), "html", null, true);
        echo "
    ";
        
        $__internal_5c48d67c6a033fa1733bbfa4a10613e28abb5c25c35029a8cbe44a023c6e280b->leave($__internal_5c48d67c6a033fa1733bbfa4a10613e28abb5c25c35029a8cbe44a023c6e280b_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_bb14be58e75d0527e3eecb4fd87027c746282be88599a4be0afe912df997e81a = $this->env->getExtension("native_profiler");
        $__internal_bb14be58e75d0527e3eecb4fd87027c746282be88599a4be0afe912df997e81a->enter($__internal_bb14be58e75d0527e3eecb4fd87027c746282be88599a4be0afe912df997e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 12
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-bookmark\"></i>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")))), "html", null, true);
        echo "\">
            \t";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
        echo "s
            </a>
        </li>
        
    ";
        
        $__internal_bb14be58e75d0527e3eecb4fd87027c746282be88599a4be0afe912df997e81a->leave($__internal_bb14be58e75d0527e3eecb4fd87027c746282be88599a4be0afe912df997e81a_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c0b681e9875ac0a05de0a01c64777209e40150742427d430afb653137fa7bbf = $this->env->getExtension("native_profiler");
        $__internal_1c0b681e9875ac0a05de0a01c64777209e40150742427d430afb653137fa7bbf->enter($__internal_1c0b681e9875ac0a05de0a01c64777209e40150742427d430afb653137fa7bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    ";
        // line 25
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
        echo "s
            </div>
                ";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["objets"]) ? $context["objets"] : $this->getContext($context, "objets"))) > 0)) {
            // line 30
            echo "                    <div class=\"panel-body\">

                        <table class=\"table table-striped table-bordered table-condensed\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Nom</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objets"]) ? $context["objets"] : $this->getContext($context, "objets")));
            foreach ($context['_seq'] as $context["_key"] => $context["agence"]) {
                // line 43
                echo "                                    <tr>
                                        <td>
            <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_voir_une", array("entite" => $this->env->getExtension('TwigExtension')->getClass($context["agence"]), "code" => $this->getAttribute($context["agence"], "code", array()))), "html", null, true);
                echo " \">
                                                ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "matricule", array()), "html", null, true);
                echo "
                                            </a>
                                            
                                        </td>
                                        <td>
                                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "code", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 57
                echo twig_slice($this->env, $context["agence"], 0, 100);
                echo "...
                                        </td>
                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                
                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
            ";
            // line 67
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:pagination", array("pagination" => (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))));
            echo "
                    </div>
                ";
        } else {
            // line 70
            echo "                    <div class=\"panel-body\">
                    <h3> Pas de données</h3>
                    </div>
                ";
        }
        // line 74
        echo "            </div>
    ";
        
        $__internal_1c0b681e9875ac0a05de0a01c64777209e40150742427d430afb653137fa7bbf->leave($__internal_1c0b681e9875ac0a05de0a01c64777209e40150742427d430afb653137fa7bbf_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Entites:entitesParCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 74,  195 => 70,  189 => 67,  182 => 62,  171 => 57,  165 => 54,  159 => 51,  151 => 46,  147 => 45,  143 => 43,  139 => 42,  125 => 30,  123 => 29,  118 => 27,  114 => 25,  112 => 24,  106 => 23,  94 => 17,  90 => 16,  82 => 12,  76 => 11,  66 => 8,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Entites/entites.html.twig'%}*/
/* 	{%block title%}*/
/* 	   {{parent()}} |*/
/*        {{entite}}s*/
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         {%set titre = entite~"s" %}*/
/*         {{titre|upper}}*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         {{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-bookmark"></i>*/
/*             <a href="{{url('trc_admin_entites_par_categorie',{entite:entite})}}">*/
/*             	{{entite}}s*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*     */
/*     {%block content%}*/
/*     {#{dump(objets)}#}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 {{entite}}s*/
/*             </div>*/
/*                 {%if objets|length > 0 %}*/
/*                     <div class="panel-body">*/
/* */
/*                         <table class="table table-striped table-bordered table-condensed">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>#</th>*/
/*                                     <th>Code</th>*/
/*                                     <th>Nom</th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {%for agence in objets %}*/
/*                                     <tr>*/
/*                                         <td>*/
/*             <a href="{{url('trc_admin_entites_voir_une',{entite:getClass(agence),code:agence.code})}} ">*/
/*                                                 {{agence.matricule}}*/
/*                                             </a>*/
/*                                             */
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{agence.code}}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{agence.nom}}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{agence|slice(0,100)|raw}}...*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                 {%endfor%}*/
/*                                 */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*             {{ render(controller('TRCCoreBundle:Affichage:pagination',{pagination:pagination})) }}*/
/*                     </div>*/
/*                 {%else%}*/
/*                     <div class="panel-body">*/
/*                     <h3> Pas de données</h3>*/
/*                     </div>*/
/*                 {%endif%}*/
/*             </div>*/
/*     {%endblock content%}*/
