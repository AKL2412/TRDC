<?php

/* TRCAdminBundle:Entites:entitesAjout.html.twig */
class __TwigTemplate_5345660b56abfd52a23cd0dafd19337596c30a8ee97768e1aeb6dbedd2afd5e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Entites/entites.html.twig", "TRCAdminBundle:Entites:entitesAjout.html.twig", 1);
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
        $__internal_d49f384dd94fc0c5c7321ebae1d5ca74a13c38d06d1335d606b470bc893a2819 = $this->env->getExtension("native_profiler");
        $__internal_d49f384dd94fc0c5c7321ebae1d5ca74a13c38d06d1335d606b470bc893a2819->enter($__internal_d49f384dd94fc0c5c7321ebae1d5ca74a13c38d06d1335d606b470bc893a2819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entitesAjout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49f384dd94fc0c5c7321ebae1d5ca74a13c38d06d1335d606b470bc893a2819->leave($__internal_d49f384dd94fc0c5c7321ebae1d5ca74a13c38d06d1335d606b470bc893a2819_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_80a99d10952fbd88bf1ee0f037bb60afe5c9755837aac0608b705288a29d85fe = $this->env->getExtension("native_profiler");
        $__internal_80a99d10952fbd88bf1ee0f037bb60afe5c9755837aac0608b705288a29d85fe->enter($__internal_80a99d10952fbd88bf1ee0f037bb60afe5c9755837aac0608b705288a29d85fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " |
\t   ";
        // line 4
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 5
            echo "       Ajouter une entité
       ";
        } else {
            // line 7
            echo "       \t\tModification de :: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "nom", array()), "html", null, true);
            echo "
       ";
        }
        // line 9
        echo "\t";
        
        $__internal_80a99d10952fbd88bf1ee0f037bb60afe5c9755837aac0608b705288a29d85fe->leave($__internal_80a99d10952fbd88bf1ee0f037bb60afe5c9755837aac0608b705288a29d85fe_prof);

    }

    // line 10
    public function block_titre($context, array $blocks = array())
    {
        $__internal_08e45c424ddfa59392ee54933dbe36540002b07c80099acb8f1f765d29b84d1d = $this->env->getExtension("native_profiler");
        $__internal_08e45c424ddfa59392ee54933dbe36540002b07c80099acb8f1f765d29b84d1d->enter($__internal_08e45c424ddfa59392ee54933dbe36540002b07c80099acb8f1f765d29b84d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 11
        echo "\t\t\t";
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 12
            echo "\t       \t\t<i class=\"fa fa-plus-square\"></i>
        \t\tAjout d'une entité | ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
            echo "
\t       ";
        } else {
            // line 15
            echo "\t       \t\tModification # ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()), "html", null, true);
            echo "
\t       ";
        }
        // line 17
        echo "        
    ";
        
        $__internal_08e45c424ddfa59392ee54933dbe36540002b07c80099acb8f1f765d29b84d1d->leave($__internal_08e45c424ddfa59392ee54933dbe36540002b07c80099acb8f1f765d29b84d1d_prof);

    }

    // line 20
    public function block_position($context, array $blocks = array())
    {
        $__internal_155253481788453a171fa0b7d96e3d0412ab380b30dd26f01d2b962e0a88abf2 = $this->env->getExtension("native_profiler");
        $__internal_155253481788453a171fa0b7d96e3d0412ab380b30dd26f01d2b962e0a88abf2->enter($__internal_155253481788453a171fa0b7d96e3d0412ab380b30dd26f01d2b962e0a88abf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 21
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "

        \t";
        // line 23
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 24
            echo "\t       \t\t<li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-bank\"></i>
\t\t            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_ajouter", array("entite" => (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")))), "html", null, true);
            echo "\">
\t\t            \tAjouter de : ";
            // line 28
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite"))), "html", null, true);
            echo "
\t\t            </a>
\t\t        </li>
\t       ";
        } else {
            // line 32
            echo "\t       \t\t<li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-bank\"></i>
\t\t            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")))), "html", null, true);
            echo "\">
\t\t            \t";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
            echo "s
\t\t            </a>
\t\t        </li>
\t       \t\t<li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-bookmark\"></i>
\t\t            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_voir_une", array("entite" => (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "code" => $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "code", array()))), "html", null, true);
            echo "\">
\t\t            \t";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "code", array()), "html", null, true);
            echo "
\t\t            </a>
\t\t        </li>
\t\t        <li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-edit\"></i>
\t\t            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_entites_modifier", array("entite" => (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "matricule" => $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()))), "html", null, true);
            echo "\">
\t\t            \tModification : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "code", array()), "html", null, true);
            echo "
\t\t            </a>
\t\t        </li>
\t       \t\t
\t       ";
        }
        // line 55
        echo "        
    ";
        
        $__internal_155253481788453a171fa0b7d96e3d0412ab380b30dd26f01d2b962e0a88abf2->leave($__internal_155253481788453a171fa0b7d96e3d0412ab380b30dd26f01d2b962e0a88abf2_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_837f791a2d8a0da325193a43b4ac32825b9570ed69b3cd81b5c4144cd6dcb583 = $this->env->getExtension("native_profiler");
        $__internal_837f791a2d8a0da325193a43b4ac32825b9570ed69b3cd81b5c4144cd6dcb583->enter($__internal_837f791a2d8a0da325193a43b4ac32825b9570ed69b3cd81b5c4144cd6dcb583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 58
        echo "<div class=\"col-lg-12 col-md-12\">
     <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
        \t";
        // line 61
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 62
            echo "\t       \t\t<i class=\"fa fa-plus-square\"></i>
        \t\tAjout : ";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "html", null, true);
            echo "
\t       ";
        } else {
            // line 65
            echo "\t       \t\tModification # ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()), "html", null, true);
            echo "
\t       ";
        }
        // line 66
        echo "    
        </div>
         <div class=\"panel-body pan\">
            
            ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form", "method" => "post")));
        echo "
\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
             <div class=\"form-body pal\">
               
                    
                        <div class=\"form-group\">
                           \t<label for=\"inputName\" class=\"control-label\">
                                Nom
                            </label>
                            <div class=\"input-icon right\">
                                <i class=\"fa fa-book\"></i>
                                
                                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom de l'entité")));
        echo "
\t\t\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                            </div>
                        </div>
                    
                    
                        <div class=\"form-group\">
                            <label for=\"inputEmail\" class=\"control-label\">
                               \tCode
                            </label>
                            <div class=\"input-icon right\">
                                <i class=\"fa fa-key\"></i>
                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "code de l'entité")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"inputEmail\" class=\"control-label\">
                               \tDescription
                            </label>
                            <div class=\"input-icon right\">
                                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description de l'entité", "rows" => "4")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                            </div>
                        </div>
             </div>
             <div class=\"form-actions text-right pal\">
                 
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
             </div>
            ";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
         </div>
     </div>
                                       
</div>
    ";
        
        $__internal_837f791a2d8a0da325193a43b4ac32825b9570ed69b3cd81b5c4144cd6dcb583->leave($__internal_837f791a2d8a0da325193a43b4ac32825b9570ed69b3cd81b5c4144cd6dcb583_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Entites:entitesAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 112,  276 => 110,  267 => 104,  263 => 103,  252 => 95,  248 => 94,  234 => 83,  230 => 82,  216 => 71,  212 => 70,  206 => 66,  200 => 65,  195 => 63,  192 => 62,  190 => 61,  185 => 58,  179 => 57,  171 => 55,  163 => 50,  159 => 49,  150 => 43,  146 => 42,  137 => 36,  133 => 35,  128 => 32,  121 => 28,  117 => 27,  112 => 24,  110 => 23,  104 => 21,  98 => 20,  90 => 17,  84 => 15,  79 => 13,  76 => 12,  73 => 11,  67 => 10,  60 => 9,  54 => 7,  50 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Entites/entites.html.twig'%}*/
/* 	{%block title%}*/
/* 	   {{parent()}} |*/
/* 	   {%if objet.id is null%}*/
/*        Ajouter une entité*/
/*        {%else%}*/
/*        		Modification de :: {{objet.nom}}*/
/*        {%endif%}*/
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/* 			{%if objet.id is null%}*/
/* 	       		<i class="fa fa-plus-square"></i>*/
/*         		Ajout d'une entité | {{entite}}*/
/* 	       {%else%}*/
/* 	       		Modification # {{objet.matricule}}*/
/* 	       {%endif%}*/
/*         */
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         {{parent()}}*/
/* */
/*         	{%if objet.id is null%}*/
/* 	       		<li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-bank"></i>*/
/* 		            <a href="{{url('trc_admin_entites_ajouter',{entite:entite})}}">*/
/* 		            	Ajouter de : {{entite|upper}}*/
/* 		            </a>*/
/* 		        </li>*/
/* 	       {%else%}*/
/* 	       		<li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-bank"></i>*/
/* 		            <a href="{{url('trc_admin_entites_par_categorie',{entite:entite})}}">*/
/* 		            	{{entite}}s*/
/* 		            </a>*/
/* 		        </li>*/
/* 	       		<li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-bookmark"></i>*/
/* 		            <a href="{{url('trc_admin_entites_voir_une',{entite:entite,code:objet.code})}}">*/
/* 		            	{{objet.code}}*/
/* 		            </a>*/
/* 		        </li>*/
/* 		        <li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-edit"></i>*/
/* 		            <a href="{{url('trc_admin_entites_modifier',{entite:entite,matricule:objet.matricule})}}">*/
/* 		            	Modification : {{objet.code}}*/
/* 		            </a>*/
/* 		        </li>*/
/* 	       		*/
/* 	       {%endif%}*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/* <div class="col-lg-12 col-md-12">*/
/*      <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*         	{%if objet.id is null%}*/
/* 	       		<i class="fa fa-plus-square"></i>*/
/*         		Ajout : {{entite}}*/
/* 	       {%else%}*/
/* 	       		Modification # {{objet.matricule}}*/
/* 	       {%endif%}    */
/*         </div>*/
/*          <div class="panel-body pan">*/
/*             */
/*             {{ form_start(form, {'attr': {'role':'form','method':'post'}}) }}*/
/* 				{{ form_errors(form) }}*/
/*              <div class="form-body pal">*/
/*                */
/*                     */
/*                         <div class="form-group">*/
/*                            	<label for="inputName" class="control-label">*/
/*                                 Nom*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 <i class="fa fa-book"></i>*/
/*                                 */
/*                                 {{ form_widget(form.nom, {'attr': {'class': 'form-control','placeholder':"nom de l'entité"}}) }}*/
/* 					{{ form_errors(form.nom) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     */
/*                     */
/*                         <div class="form-group">*/
/*                             <label for="inputEmail" class="control-label">*/
/*                                	Code*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 <i class="fa fa-key"></i>*/
/*                                 {{ form_widget(form.code, {'attr': {'class': 'form-control','placeholder':"code de l'entité"}}) }}*/
/* 								{{ form_errors(form.code) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="inputEmail" class="control-label">*/
/*                                	Description*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 {{ form_widget(form.description, {'attr': {'class': 'form-control','placeholder':"Description de l'entité",'rows':'4'}}) }}*/
/* 								{{ form_errors(form.description) }}*/
/*                             </div>*/
/*                         </div>*/
/*              </div>*/
/*              <div class="form-actions text-right pal">*/
/*                  */
/*                 {{ form_widget(form.save) }}*/
/*              </div>*/
/*             {{ form_end(form) }}*/
/*          </div>*/
/*      </div>*/
/*                                        */
/* </div>*/
/*     {%endblock content%}*/
