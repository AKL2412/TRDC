<?php

/* TRCAdminBundle:Entites:entites.html.twig */
class __TwigTemplate_d5129223e6712fa7a416b62135fb0f0f24ebae6d5c2c6e01c62f4dc8d74a0575 extends Twig_Template
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
        $__internal_541d4cdf0b02cd17e665c06c5d932a62d37180776db4f00991eab9c3a22665dc = $this->env->getExtension("native_profiler");
        $__internal_541d4cdf0b02cd17e665c06c5d932a62d37180776db4f00991eab9c3a22665dc->enter($__internal_541d4cdf0b02cd17e665c06c5d932a62d37180776db4f00991eab9c3a22665dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541d4cdf0b02cd17e665c06c5d932a62d37180776db4f00991eab9c3a22665dc->leave($__internal_541d4cdf0b02cd17e665c06c5d932a62d37180776db4f00991eab9c3a22665dc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_245ac749b466571ae4541811cab4c0bb701219dc8c918508b7912e9567dec050 = $this->env->getExtension("native_profiler");
        $__internal_245ac749b466571ae4541811cab4c0bb701219dc8c918508b7912e9567dec050->enter($__internal_245ac749b466571ae4541811cab4c0bb701219dc8c918508b7912e9567dec050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Entites        
\t";
        
        $__internal_245ac749b466571ae4541811cab4c0bb701219dc8c918508b7912e9567dec050->leave($__internal_245ac749b466571ae4541811cab4c0bb701219dc8c918508b7912e9567dec050_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_402ec0ccf69eb6006c39b2c14d7955a45da52fb0ee9e6e252718011810ec1e76 = $this->env->getExtension("native_profiler");
        $__internal_402ec0ccf69eb6006c39b2c14d7955a45da52fb0ee9e6e252718011810ec1e76->enter($__internal_402ec0ccf69eb6006c39b2c14d7955a45da52fb0ee9e6e252718011810ec1e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        <i class=\"fa fa-cubes\"></i>
        Entités
    ";
        
        $__internal_402ec0ccf69eb6006c39b2c14d7955a45da52fb0ee9e6e252718011810ec1e76->leave($__internal_402ec0ccf69eb6006c39b2c14d7955a45da52fb0ee9e6e252718011810ec1e76_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_ca75e58adc8b62898f4e0cbc7e7bf858d5baf4f1b3a69811124f72f7815b0979 = $this->env->getExtension("native_profiler");
        $__internal_ca75e58adc8b62898f4e0cbc7e7bf858d5baf4f1b3a69811124f72f7815b0979->enter($__internal_ca75e58adc8b62898f4e0cbc7e7bf858d5baf4f1b3a69811124f72f7815b0979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_ca75e58adc8b62898f4e0cbc7e7bf858d5baf4f1b3a69811124f72f7815b0979->leave($__internal_ca75e58adc8b62898f4e0cbc7e7bf858d5baf4f1b3a69811124f72f7815b0979_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ab88128a98d41e2adca13a7d6b11a1644c3c87b69b76a66689676de1d524949 = $this->env->getExtension("native_profiler");
        $__internal_6ab88128a98d41e2adca13a7d6b11a1644c3c87b69b76a66689676de1d524949->enter($__internal_6ab88128a98d41e2adca13a7d6b11a1644c3c87b69b76a66689676de1d524949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6ab88128a98d41e2adca13a7d6b11a1644c3c87b69b76a66689676de1d524949->leave($__internal_6ab88128a98d41e2adca13a7d6b11a1644c3c87b69b76a66689676de1d524949_prof);

    }

    // line 100
    public function block_script($context, array $blocks = array())
    {
        $__internal_67353d5345055e7c8ea0ff3502deb48f58484090860f3aa9c47ba02d231774a3 = $this->env->getExtension("native_profiler");
        $__internal_67353d5345055e7c8ea0ff3502deb48f58484090860f3aa9c47ba02d231774a3->enter($__internal_67353d5345055e7c8ea0ff3502deb48f58484090860f3aa9c47ba02d231774a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 101
        echo "
    <script type=\"text/javascript\">
    (function(){
        \$('#side-menu li').removeClass('active');
        \$('#side-menu li.entites').addClass('active');
    })();
</script>
";
        
        $__internal_67353d5345055e7c8ea0ff3502deb48f58484090860f3aa9c47ba02d231774a3->leave($__internal_67353d5345055e7c8ea0ff3502deb48f58484090860f3aa9c47ba02d231774a3_prof);

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
/*                */
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
