<?php

/* TRCAdminBundle:Entites:entites.html.twig */
class __TwigTemplate_9cf63f7364dab8473b27540edca19b4b5484651286b2b7fe68fbb5b058004ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCAdminBundle:Entites:entites.html.twig", 1);
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
        $__internal_f5dc02d558134815abbcc362abe21aa74093f1a52f395cb303112554f205885b = $this->env->getExtension("native_profiler");
        $__internal_f5dc02d558134815abbcc362abe21aa74093f1a52f395cb303112554f205885b->enter($__internal_f5dc02d558134815abbcc362abe21aa74093f1a52f395cb303112554f205885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5dc02d558134815abbcc362abe21aa74093f1a52f395cb303112554f205885b->leave($__internal_f5dc02d558134815abbcc362abe21aa74093f1a52f395cb303112554f205885b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9aa3e20bdbed1c02811e95506e23ba85d2e12d0f2368f374cf3775bb18cbda1 = $this->env->getExtension("native_profiler");
        $__internal_e9aa3e20bdbed1c02811e95506e23ba85d2e12d0f2368f374cf3775bb18cbda1->enter($__internal_e9aa3e20bdbed1c02811e95506e23ba85d2e12d0f2368f374cf3775bb18cbda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Entites        
\t";
        
        $__internal_e9aa3e20bdbed1c02811e95506e23ba85d2e12d0f2368f374cf3775bb18cbda1->leave($__internal_e9aa3e20bdbed1c02811e95506e23ba85d2e12d0f2368f374cf3775bb18cbda1_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_80ddaacbdf6b85cc7fcf6aca49a5668ca74567157b178fbed303cbaa3ca48861 = $this->env->getExtension("native_profiler");
        $__internal_80ddaacbdf6b85cc7fcf6aca49a5668ca74567157b178fbed303cbaa3ca48861->enter($__internal_80ddaacbdf6b85cc7fcf6aca49a5668ca74567157b178fbed303cbaa3ca48861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        <i class=\"fa fa-cubes\"></i>
        Entités
    ";
        
        $__internal_80ddaacbdf6b85cc7fcf6aca49a5668ca74567157b178fbed303cbaa3ca48861->leave($__internal_80ddaacbdf6b85cc7fcf6aca49a5668ca74567157b178fbed303cbaa3ca48861_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_ae0d2c200030b15c270107badb91aa23a27b7c0b1f6ba8a293abdea38ddfe69a = $this->env->getExtension("native_profiler");
        $__internal_ae0d2c200030b15c270107badb91aa23a27b7c0b1f6ba8a293abdea38ddfe69a->enter($__internal_ae0d2c200030b15c270107badb91aa23a27b7c0b1f6ba8a293abdea38ddfe69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_ae0d2c200030b15c270107badb91aa23a27b7c0b1f6ba8a293abdea38ddfe69a->leave($__internal_ae0d2c200030b15c270107badb91aa23a27b7c0b1f6ba8a293abdea38ddfe69a_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_405d9f580a287edcfd507d5fd2a92112712d61bd68546ddeeee1c698a1f35b00 = $this->env->getExtension("native_profiler");
        $__internal_405d9f580a287edcfd507d5fd2a92112712d61bd68546ddeeee1c698a1f35b00->enter($__internal_405d9f580a287edcfd507d5fd2a92112712d61bd68546ddeeee1c698a1f35b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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


<div class=\"col-md-3\">
  <a class=\"btn btn-lg btn-success \" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "Agence"));
        echo " \">
    Agences
</a>
</div>
<div class=\"col-md-3\">
  <a class=\"btn btn-lg btn-danger \" href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "BOC"));
        echo " \">
    Back Office Crédits
</a>
</div>
<div class=\"col-md-3\">
  <a class=\"btn btn-lg btn-warning\" href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "CIC"));
        echo " \">
    Comité de Crédits
</a>
</div>
<div class=\"col-md-3\">
  <a class=\"btn btn-lg btn-primary\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "Zone"));
        echo " \">
    Zone
</a>
</div>




    ";
        
        $__internal_405d9f580a287edcfd507d5fd2a92112712d61bd68546ddeeee1c698a1f35b00->leave($__internal_405d9f580a287edcfd507d5fd2a92112712d61bd68546ddeeee1c698a1f35b00_prof);

    }

    // line 100
    public function block_script($context, array $blocks = array())
    {
        $__internal_c38f014e34a6d24975bab01545cdc1a5c77cf526d86423975e1bdf6e178e2843 = $this->env->getExtension("native_profiler");
        $__internal_c38f014e34a6d24975bab01545cdc1a5c77cf526d86423975e1bdf6e178e2843->enter($__internal_c38f014e34a6d24975bab01545cdc1a5c77cf526d86423975e1bdf6e178e2843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 101
        echo "
    <script type=\"text/javascript\">
    (function(){
        \$('#side-menu li').removeClass('active');
        \$('#side-menu li.entites').addClass('active');
    })();
</script>
";
        
        $__internal_c38f014e34a6d24975bab01545cdc1a5c77cf526d86423975e1bdf6e178e2843->leave($__internal_c38f014e34a6d24975bab01545cdc1a5c77cf526d86423975e1bdf6e178e2843_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Entites:entites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 101,  206 => 100,  190 => 91,  182 => 86,  174 => 81,  166 => 76,  144 => 57,  135 => 51,  126 => 45,  116 => 38,  98 => 22,  92 => 21,  79 => 15,  73 => 11,  67 => 10,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
/* */
/* <div class="col-md-3">*/
/*   <a class="btn btn-lg btn-success " href="{{url('trc_admin_entites_par_categorie',{entite:'Agence'})}} ">*/
/*     Agences*/
/* </a>*/
/* </div>*/
/* <div class="col-md-3">*/
/*   <a class="btn btn-lg btn-danger " href="{{url('trc_admin_entites_par_categorie',{entite:'BOC'})}} ">*/
/*     Back Office Crédits*/
/* </a>*/
/* </div>*/
/* <div class="col-md-3">*/
/*   <a class="btn btn-lg btn-warning" href="{{url('trc_admin_entites_par_categorie',{entite:'CIC'})}} ">*/
/*     Comité de Crédits*/
/* </a>*/
/* </div>*/
/* <div class="col-md-3">*/
/*   <a class="btn btn-lg btn-primary" href="{{url('trc_admin_entites_par_categorie',{entite:'Zone'})}} ">*/
/*     Zone*/
/* </a>*/
/* </div>*/
/* */
/* */
/* */
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
