<?php

/* TRCAdminBundle::Entites/entitesParCategorie.html.twig */
class __TwigTemplate_f3fd206673d686f4915d7be1427961b45da129d5852fb8b1c1a934e0af78da23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Entites/entites.html.twig", "TRCAdminBundle::Entites/entitesParCategorie.html.twig", 1);
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
        $__internal_95324035f26f83913102e350deb532b9ebbf55eae6ef98042f61901756bb86b9 = $this->env->getExtension("native_profiler");
        $__internal_95324035f26f83913102e350deb532b9ebbf55eae6ef98042f61901756bb86b9->enter($__internal_95324035f26f83913102e350deb532b9ebbf55eae6ef98042f61901756bb86b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle::Entites/entitesParCategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95324035f26f83913102e350deb532b9ebbf55eae6ef98042f61901756bb86b9->leave($__internal_95324035f26f83913102e350deb532b9ebbf55eae6ef98042f61901756bb86b9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_008a8a49b51d22139e43de16360b9e9a7606c3e1e518c8ff8cee930729e3246f = $this->env->getExtension("native_profiler");
        $__internal_008a8a49b51d22139e43de16360b9e9a7606c3e1e518c8ff8cee930729e3246f->enter($__internal_008a8a49b51d22139e43de16360b9e9a7606c3e1e518c8ff8cee930729e3246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " |
       ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
        echo "s
\t";
        
        $__internal_008a8a49b51d22139e43de16360b9e9a7606c3e1e518c8ff8cee930729e3246f->leave($__internal_008a8a49b51d22139e43de16360b9e9a7606c3e1e518c8ff8cee930729e3246f_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_34455653bd25e8dffb0612d08b033077d7dc392d912ca7ea18a92e5883063b9e = $this->env->getExtension("native_profiler");
        $__internal_34455653bd25e8dffb0612d08b033077d7dc392d912ca7ea18a92e5883063b9e->enter($__internal_34455653bd25e8dffb0612d08b033077d7dc392d912ca7ea18a92e5883063b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "        ";
        $context["titre"] = ((isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")) . "s");
        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre"))), "html", null, true);
        echo "
    ";
        
        $__internal_34455653bd25e8dffb0612d08b033077d7dc392d912ca7ea18a92e5883063b9e->leave($__internal_34455653bd25e8dffb0612d08b033077d7dc392d912ca7ea18a92e5883063b9e_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_8af5bd7894e7a0ed52f6c6987f476ada96896c3d734365ab806b0f73df561179 = $this->env->getExtension("native_profiler");
        $__internal_8af5bd7894e7a0ed52f6c6987f476ada96896c3d734365ab806b0f73df561179->enter($__internal_8af5bd7894e7a0ed52f6c6987f476ada96896c3d734365ab806b0f73df561179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_8af5bd7894e7a0ed52f6c6987f476ada96896c3d734365ab806b0f73df561179->leave($__internal_8af5bd7894e7a0ed52f6c6987f476ada96896c3d734365ab806b0f73df561179_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_24c8f52931a74865c570eb24ce18361aa073fec9252f2e42112460b602599734 = $this->env->getExtension("native_profiler");
        $__internal_24c8f52931a74865c570eb24ce18361aa073fec9252f2e42112460b602599734->enter($__internal_24c8f52931a74865c570eb24ce18361aa073fec9252f2e42112460b602599734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["objets"]) ? $context["objets"] : $this->getContext($context, "objets")));
        echo "
        <div class=\"panel panel-green\">
            <div class=\"panel-heading\"></div>
                ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["objets"]) ? $context["objets"] : $this->getContext($context, "objets"))) > 0)) {
            // line 28
            echo "                    <div class=\"panel-body\">

                        <table class=\"table table-hover table-bordered table-condensed\">
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
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objets"]) ? $context["objets"] : $this->getContext($context, "objets")));
            foreach ($context['_seq'] as $context["_key"] => $context["agence"]) {
                // line 41
                echo "                                    <tr>
                                        <td>
            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_voir_une", array("entite" => $this->env->getExtension('TwigExtension')->getClass($context["agence"]), "code" => $this->getAttribute($context["agence"], "code", array()))), "html", null, true);
                echo " \">
                                                ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "matricule", array()), "html", null, true);
                echo "
                                            </a>
                                            
                                        </td>
                                        <td>
                                            ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "code", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                            ";
                // line 55
                echo $context["agence"];
                echo "
                                        </td>
                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                
                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
            ";
            // line 65
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:pagination", array("pagination" => (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))));
            echo "
                    </div>
                ";
        } else {
            // line 68
            echo "                    <div class=\"panel-body\">
                    <h3> Pas de données</h3>
                    </div>
                ";
        }
        // line 72
        echo "            </div>
    ";
        
        $__internal_24c8f52931a74865c570eb24ce18361aa073fec9252f2e42112460b602599734->leave($__internal_24c8f52931a74865c570eb24ce18361aa073fec9252f2e42112460b602599734_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle::Entites/entitesParCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 72,  191 => 68,  185 => 65,  178 => 60,  167 => 55,  161 => 52,  155 => 49,  147 => 44,  143 => 43,  139 => 41,  135 => 40,  121 => 28,  119 => 27,  112 => 24,  106 => 23,  94 => 17,  90 => 16,  82 => 12,  76 => 11,  66 => 8,  63 => 7,  57 => 6,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*     {{dump(objets)}}*/
/*         <div class="panel panel-green">*/
/*             <div class="panel-heading"></div>*/
/*                 {%if objets|length > 0 %}*/
/*                     <div class="panel-body">*/
/* */
/*                         <table class="table table-hover table-bordered table-condensed">*/
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
/*                                             {{agence|raw}}*/
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
