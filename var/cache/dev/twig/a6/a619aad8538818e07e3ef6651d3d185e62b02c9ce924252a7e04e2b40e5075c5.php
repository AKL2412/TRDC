<?php

/* TRCAdminBundle::Entites/entites.html.twig */
class __TwigTemplate_9cf63f7364dab8473b27540edca19b4b5484651286b2b7fe68fbb5b058004ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCAdminBundle::Entites/entites.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22274ebe0490e8724c6231145522e31f54bbbdf8c09e08ab15b820156267a629 = $this->env->getExtension("native_profiler");
        $__internal_22274ebe0490e8724c6231145522e31f54bbbdf8c09e08ab15b820156267a629->enter($__internal_22274ebe0490e8724c6231145522e31f54bbbdf8c09e08ab15b820156267a629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle::Entites/entites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22274ebe0490e8724c6231145522e31f54bbbdf8c09e08ab15b820156267a629->leave($__internal_22274ebe0490e8724c6231145522e31f54bbbdf8c09e08ab15b820156267a629_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cdbf9e511a8c26836e61ecfa259d53226fb33f2f42aa287b31c934ee119510a = $this->env->getExtension("native_profiler");
        $__internal_4cdbf9e511a8c26836e61ecfa259d53226fb33f2f42aa287b31c934ee119510a->enter($__internal_4cdbf9e511a8c26836e61ecfa259d53226fb33f2f42aa287b31c934ee119510a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Entites        
\t";
        
        $__internal_4cdbf9e511a8c26836e61ecfa259d53226fb33f2f42aa287b31c934ee119510a->leave($__internal_4cdbf9e511a8c26836e61ecfa259d53226fb33f2f42aa287b31c934ee119510a_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_45449f7a829288e9e3e792a9af4ff5f32a48af9217cf74f9b8b050c965f2aab3 = $this->env->getExtension("native_profiler");
        $__internal_45449f7a829288e9e3e792a9af4ff5f32a48af9217cf74f9b8b050c965f2aab3->enter($__internal_45449f7a829288e9e3e792a9af4ff5f32a48af9217cf74f9b8b050c965f2aab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        <i class=\"fa fa-cubes\"></i>
        Entités
    ";
        
        $__internal_45449f7a829288e9e3e792a9af4ff5f32a48af9217cf74f9b8b050c965f2aab3->leave($__internal_45449f7a829288e9e3e792a9af4ff5f32a48af9217cf74f9b8b050c965f2aab3_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_e00819b1d577ccca00cf704da77bfeca1820cd06f3d24a249ede4ff84f07b924 = $this->env->getExtension("native_profiler");
        $__internal_e00819b1d577ccca00cf704da77bfeca1820cd06f3d24a249ede4ff84f07b924->enter($__internal_e00819b1d577ccca00cf704da77bfeca1820cd06f3d24a249ede4ff84f07b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 11
        echo "        
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-cubes\"></i>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites");
        echo "\">
            \tEntités
            </a>
        </li>
        
    ";
        
        $__internal_e00819b1d577ccca00cf704da77bfeca1820cd06f3d24a249ede4ff84f07b924->leave($__internal_e00819b1d577ccca00cf704da77bfeca1820cd06f3d24a249ede4ff84f07b924_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7a8c53bd3be54f9e9da39c70afbda5255b11c53d7cda32f1e935146b7d645d2 = $this->env->getExtension("native_profiler");
        $__internal_d7a8c53bd3be54f9e9da39c70afbda5255b11c53d7cda32f1e935146b7d645d2->enter($__internal_d7a8c53bd3be54f9e9da39c70afbda5255b11c53d7cda32f1e935146b7d645d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "        

        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Ajouter une entité</button>

<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
     
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h5 class=\"modal-title\" id=\"myModalLabel\">
                Sélectionner l'entité à ajouter
            </h5>
        </div>
        <div class=\"modal-body\">
            <ul class=\"list-group\">
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_ajouter", array("entite" => "Agence"));
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-bank fa\"></i>
                        Agences
              </li>
              </a>
               </a>
              <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_ajouter", array("entite" => "Zone"));
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-tag fa\"></i>
                        Zone
              </li>
              </a>
              <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_ajouter", array("entite" => "BOC"));
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-gears fa\"></i>
                        Back Office Crédit
              </li>
              </a>
              <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_ajouter", array("entite" => "CIC"));
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

<hr>

<a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "Agence"));
        echo " \">
    Agences
</a>
<a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "BOC"));
        echo " \">
    BOC
</a>
<a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "CIC"));
        echo " \">
    CIC
</a>

    ";
        
        $__internal_d7a8c53bd3be54f9e9da39c70afbda5255b11c53d7cda32f1e935146b7d645d2->leave($__internal_d7a8c53bd3be54f9e9da39c70afbda5255b11c53d7cda32f1e935146b7d645d2_prof);

    }

    // line 85
    public function block_script($context, array $blocks = array())
    {
        $__internal_cab57953b1653164ee823d570e8ef4ece28b1f64380a77797c7052d08a5921d1 = $this->env->getExtension("native_profiler");
        $__internal_cab57953b1653164ee823d570e8ef4ece28b1f64380a77797c7052d08a5921d1->enter($__internal_cab57953b1653164ee823d570e8ef4ece28b1f64380a77797c7052d08a5921d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 86
        echo "
    <script type=\"text/javascript\">
    (function(){
        \$('#side-menu li').removeClass('active');
        \$('#side-menu li.entites').addClass('active');
    })();
</script>
";
        
        $__internal_cab57953b1653164ee823d570e8ef4ece28b1f64380a77797c7052d08a5921d1->leave($__internal_cab57953b1653164ee823d570e8ef4ece28b1f64380a77797c7052d08a5921d1_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle::Entites/entites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 86,  188 => 85,  176 => 80,  170 => 77,  164 => 74,  144 => 57,  135 => 51,  126 => 45,  116 => 38,  98 => 22,  92 => 21,  79 => 15,  73 => 11,  67 => 10,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* 	{%block title%}*/
/* 	   Entites        */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         <i class="fa fa-cubes"></i>*/
/*         Entités*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         */
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-cubes"></i>*/
/*             <a href="{{url('trc_admin_entites')}}">*/
/*             	Entités*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/*         */
/* */
/*         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ajouter une entité</button>*/
/* */
/* <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*   <div class="modal-dialog modal-sm">*/
/*     <div class="modal-content">*/
/*      */
/*         <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             <h5 class="modal-title" id="myModalLabel">*/
/*                 Sélectionner l'entité à ajouter*/
/*             </h5>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             <ul class="list-group">*/
/*             <a href="{{url('trc_admin_entites_ajouter',{entite:'Agence'})}} " class="">*/
/*               <li class="list-group-item btn">*/
/*                         <i class="fa-bank fa"></i>*/
/*                         Agences*/
/*               </li>*/
/*               </a>*/
/*                </a>*/
/*               <a href="{{url('trc_admin_entites_ajouter',{entite:'Zone'})}} " class="">*/
/*               <li class="list-group-item btn">*/
/*                         <i class="fa-tag fa"></i>*/
/*                         Zone*/
/*               </li>*/
/*               </a>*/
/*               <a href="{{url('trc_admin_entites_ajouter',{entite:'BOC'})}} " class="">*/
/*               <li class="list-group-item btn">*/
/*                         <i class="fa-gears fa"></i>*/
/*                         Back Office Crédit*/
/*               </li>*/
/*               </a>*/
/*               <a href="{{url('trc_admin_entites_ajouter',{entite:'CIC'})}} " class="">*/
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
/* <hr>*/
/* */
/* <a href="{{url('trc_admin_entites_par_categorie',{entite:'Agence'})}} ">*/
/*     Agences*/
/* </a>*/
/* <a href="{{url('trc_admin_entites_par_categorie',{entite:'BOC'})}} ">*/
/*     BOC*/
/* </a>*/
/* <a href="{{url('trc_admin_entites_par_categorie',{entite:'CIC'})}} ">*/
/*     CIC*/
/* </a>*/
/* */
/*     {%endblock content%}*/
/* {%block script%}*/
/* */
/*     <script type="text/javascript">*/
/*     (function(){*/
/*         $('#side-menu li').removeClass('active');*/
/*         $('#side-menu li.entites').addClass('active');*/
/*     })();*/
/* </script>*/
/* {%endblock script%}*/
