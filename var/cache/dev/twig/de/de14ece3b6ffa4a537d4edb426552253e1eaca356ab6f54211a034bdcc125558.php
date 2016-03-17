<?php

/* TRCAdminBundle:Utilisateurs:utilisateursAjouter.html.twig */
class __TwigTemplate_086046a9c1b583e456bc967df808dde1acb578499bb6f7fdb17f66ce2a4b1a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Utilisateurs/utilisateurs.html.twig", "TRCAdminBundle:Utilisateurs:utilisateursAjouter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Utilisateurs/utilisateurs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_869019fe1403d5349a3da74ca824d421a1c7815e015ab523371e1d07460e563f = $this->env->getExtension("native_profiler");
        $__internal_869019fe1403d5349a3da74ca824d421a1c7815e015ab523371e1d07460e563f->enter($__internal_869019fe1403d5349a3da74ca824d421a1c7815e015ab523371e1d07460e563f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Utilisateurs:utilisateursAjouter.html.twig"));

        // line 2
        $context["util"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869019fe1403d5349a3da74ca824d421a1c7815e015ab523371e1d07460e563f->leave($__internal_869019fe1403d5349a3da74ca824d421a1c7815e015ab523371e1d07460e563f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78168b14aa17fb6bee9b27d82ecc05eb3b1d022f2fcf5eaf4703bab16dc2e85a = $this->env->getExtension("native_profiler");
        $__internal_78168b14aa17fb6bee9b27d82ecc05eb3b1d022f2fcf5eaf4703bab16dc2e85a->enter($__internal_78168b14aa17fb6bee9b27d82ecc05eb3b1d022f2fcf5eaf4703bab16dc2e85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " |
\t   ";
        // line 5
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 6
            echo "       Ajouter une entité
       ";
        } else {
            // line 8
            echo "       \t\tModification de :: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "nom", array()), "html", null, true);
            echo "
       ";
        }
        // line 10
        echo "\t";
        
        $__internal_78168b14aa17fb6bee9b27d82ecc05eb3b1d022f2fcf5eaf4703bab16dc2e85a->leave($__internal_78168b14aa17fb6bee9b27d82ecc05eb3b1d022f2fcf5eaf4703bab16dc2e85a_prof);

    }

    // line 11
    public function block_titre($context, array $blocks = array())
    {
        $__internal_3b04689c4ad11420e87da59a2b35c6d9101d40fed82654f9a400d33f8a35e116 = $this->env->getExtension("native_profiler");
        $__internal_3b04689c4ad11420e87da59a2b35c6d9101d40fed82654f9a400d33f8a35e116->enter($__internal_3b04689c4ad11420e87da59a2b35c6d9101d40fed82654f9a400d33f8a35e116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 12
        echo "\t\t\t";
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 13
            echo "\t       \t\t<i class=\"fa fa-plus-square\"></i>
        \t\tAjout d'un utilisateur 
\t       ";
        } else {
            // line 16
            echo "\t       \t\tModification # ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()), "html", null, true);
            echo "
\t       ";
        }
        // line 18
        echo "        
    ";
        
        $__internal_3b04689c4ad11420e87da59a2b35c6d9101d40fed82654f9a400d33f8a35e116->leave($__internal_3b04689c4ad11420e87da59a2b35c6d9101d40fed82654f9a400d33f8a35e116_prof);

    }

    // line 21
    public function block_position($context, array $blocks = array())
    {
        $__internal_b67d0ce4de291f04a199ba1537c57afee586e4e23c1f5e6999e4c82907881608 = $this->env->getExtension("native_profiler");
        $__internal_b67d0ce4de291f04a199ba1537c57afee586e4e23c1f5e6999e4c82907881608->enter($__internal_b67d0ce4de291f04a199ba1537c57afee586e4e23c1f5e6999e4c82907881608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 22
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "

        \t";
        // line 24
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 25
            echo "\t       \t\t<li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-plus-square\"></i>
\t\t            <a href=\"#\">
\t\t            \tAjout d'un utilisateur 
\t\t            </a>
\t\t        </li>
\t       ";
        } else {
            // line 33
            echo "\t\t        <li class=\"active\">
\t\t    \t\t<i class=\"fa fa-angle-right\"></i>
\t\t    \t\t<i class=\"fa fa-edit\"></i>
\t\t            <a href=\"#\">
\t\t            \tModification : ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()), "html", null, true);
            echo "
\t\t            </a>
\t\t        </li>
\t       \t\t
\t       ";
        }
        // line 42
        echo "        
    ";
        
        $__internal_b67d0ce4de291f04a199ba1537c57afee586e4e23c1f5e6999e4c82907881608->leave($__internal_b67d0ce4de291f04a199ba1537c57afee586e4e23c1f5e6999e4c82907881608_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c140d98d2f0e09ee89d44b2044e6e49f3ad04aa2551ae1266c00a69f34386d4 = $this->env->getExtension("native_profiler");
        $__internal_4c140d98d2f0e09ee89d44b2044e6e49f3ad04aa2551ae1266c00a69f34386d4->enter($__internal_4c140d98d2f0e09ee89d44b2044e6e49f3ad04aa2551ae1266c00a69f34386d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "<div class=\"col-lg-12 col-md-12\">
     <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
        \t";
        // line 48
        if ((null === $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "id", array()))) {
            // line 49
            echo "\t       \t\t<i class=\"fa fa-plus-square\"></i>
        \t\tAjout d'un utilisateur 
\t       ";
        } else {
            // line 52
            echo "\t       \t\tModification # ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objet"]) ? $context["objet"] : $this->getContext($context, "objet")), "matricule", array()), "html", null, true);
            echo "
\t       ";
        }
        // line 53
        echo "    
        </div>
         <div class=\"panel-body pan\">
            
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form", "method" => "post")));
        echo "
\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
             <div class=\"form-body pal\">
                <div class=\"row\">
                \t<div class=\"col-md-3\">
                  \t\t<div class=\"image-block\" style=\"overflow:hidden\">
                  \t\t\t<img height=\"100\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["util"]) ? $context["util"] : $this->getContext($context, "util")), "image", array())), "html", null, true);
        echo " \">
                  \t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
                  \t\t</div>
                  \t</div>
                  \t<div class=\"col-md-9\">
                    <div class=\"col-md-5\">
                        <div class=\"form-group\">
                           \t<label for=\"inputName\" class=\"control-label\">
                                Nom
                            </label>
                            <div class=\"input-icon right\">
                                
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom de l'utilisateur")));
        echo "
\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-7\">
                        <div class=\"form-group\">
                           \t<label for=\"inputName\" class=\"control-label\">
                                Prenom
                            </label>
                            <div class=\"input-icon right\">
                                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "prenom de l'utilisateur")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                           \t<label for=\"inputName\" class=\"control-label\">
                                Matricule
                            </label>
                            <div class=\"input-icon right\">
                                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "matricule de l'utilisateur")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                           \t<label for=\"inputName\" class=\"control-label\">
                                Cin
                            </label>
                            <div class=\"input-icon right\">
                                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "cin de l'utilisateur")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                           \t<label for=\"inputName\" class=\"control-label\">
                                Email
                            </label>
                            <div class=\"input-icon right\">
                                ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "email de l'utilisateur")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class=\"col-md-12\">  
                        <div class=\"form-group\">
                            <label for=\"inputEmail\" class=\"control-label\">
                               \tadresse
                            </label>
                            <div class=\"input-icon right\">
                                ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "adresse de l'utilisateur", "rows" => "4")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    </div> 
                </div> 
             </div>
             <div class=\"form-actions text-right pal\">
                 
                <div class=\"col-md-12\">
                \t";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                </div>
             </div>
            ";
        // line 147
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
         </div>
     </div>
                                       
</div>
    ";
        
        $__internal_4c140d98d2f0e09ee89d44b2044e6e49f3ad04aa2551ae1266c00a69f34386d4->leave($__internal_4c140d98d2f0e09ee89d44b2044e6e49f3ad04aa2551ae1266c00a69f34386d4_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Utilisateurs:utilisateursAjouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 147,  312 => 144,  299 => 134,  295 => 133,  280 => 121,  276 => 120,  263 => 110,  259 => 109,  246 => 99,  242 => 98,  229 => 88,  225 => 87,  212 => 77,  208 => 76,  194 => 65,  190 => 64,  186 => 63,  178 => 58,  174 => 57,  168 => 53,  162 => 52,  157 => 49,  155 => 48,  150 => 45,  144 => 44,  136 => 42,  128 => 37,  122 => 33,  112 => 25,  110 => 24,  104 => 22,  98 => 21,  90 => 18,  84 => 16,  79 => 13,  76 => 12,  70 => 11,  63 => 10,  57 => 8,  53 => 6,  51 => 5,  46 => 4,  40 => 3,  33 => 1,  31 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Utilisateurs/utilisateurs.html.twig'%}*/
/* {%set util = form.vars.value %}*/
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
/*         		Ajout d'un utilisateur */
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
/* 		    		<i class="fa fa-plus-square"></i>*/
/* 		            <a href="#">*/
/* 		            	Ajout d'un utilisateur */
/* 		            </a>*/
/* 		        </li>*/
/* 	       {%else%}*/
/* 		        <li class="active">*/
/* 		    		<i class="fa fa-angle-right"></i>*/
/* 		    		<i class="fa fa-edit"></i>*/
/* 		            <a href="#">*/
/* 		            	Modification : {{objet.matricule}}*/
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
/*         		Ajout d'un utilisateur */
/* 	       {%else%}*/
/* 	       		Modification # {{objet.matricule}}*/
/* 	       {%endif%}    */
/*         </div>*/
/*          <div class="panel-body pan">*/
/*             */
/*             {{ form_start(form, {'attr': {'role':'form','method':'post'}}) }}*/
/* 				{{ form_errors(form) }}*/
/*              <div class="form-body pal">*/
/*                 <div class="row">*/
/*                 	<div class="col-md-3">*/
/*                   		<div class="image-block" style="overflow:hidden">*/
/*                   			<img height="100" src="{{asset(util.image)}} ">*/
/*                   			{{ form_widget(form.image) }}*/
/* 							{{ form_errors(form.image) }}*/
/*                   		</div>*/
/*                   	</div>*/
/*                   	<div class="col-md-9">*/
/*                     <div class="col-md-5">*/
/*                         <div class="form-group">*/
/*                            	<label for="inputName" class="control-label">*/
/*                                 Nom*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 */
/*                                 {{ form_widget(form.nom, {'attr': {'class': 'form-control','placeholder':"nom de l'utilisateur"}}) }}*/
/* 					{{ form_errors(form.nom) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-7">*/
/*                         <div class="form-group">*/
/*                            	<label for="inputName" class="control-label">*/
/*                                 Prenom*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 {{ form_widget(form.prenom, {'attr': {'class': 'form-control','placeholder':"prenom de l'utilisateur"}}) }}*/
/* 								{{ form_errors(form.prenom) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="form-group">*/
/*                            	<label for="inputName" class="control-label">*/
/*                                 Matricule*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 {{ form_widget(form.matricule, {'attr': {'class': 'form-control','placeholder':"matricule de l'utilisateur"}}) }}*/
/* 								{{ form_errors(form.matricule) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="form-group">*/
/*                            	<label for="inputName" class="control-label">*/
/*                                 Cin*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 {{ form_widget(form.cin, {'attr': {'class': 'form-control','placeholder':"cin de l'utilisateur"}}) }}*/
/* 								{{ form_errors(form.cin) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <div class="form-group">*/
/*                            	<label for="inputName" class="control-label">*/
/*                                 Email*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 {{ form_widget(form.email, {'attr': {'class': 'form-control','placeholder':"email de l'utilisateur"}}) }}*/
/* 								{{ form_errors(form.email) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     */
/*                     <div class="col-md-12">  */
/*                         <div class="form-group">*/
/*                             <label for="inputEmail" class="control-label">*/
/*                                	adresse*/
/*                             </label>*/
/*                             <div class="input-icon right">*/
/*                                 {{ form_widget(form.adresse, {'attr': {'class': 'form-control','placeholder':"adresse de l'utilisateur",'rows':'4'}}) }}*/
/* 								{{ form_errors(form.adresse) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     </div> */
/*                 </div> */
/*              </div>*/
/*              <div class="form-actions text-right pal">*/
/*                  */
/*                 <div class="col-md-12">*/
/*                 	{{ form_widget(form.save) }}*/
/*                 </div>*/
/*              </div>*/
/*             {{ form_end(form) }}*/
/*          </div>*/
/*      </div>*/
/*                                        */
/* </div>*/
/*     {%endblock content%}*/
