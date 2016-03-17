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
        $__internal_90eb23f7741f2566033e8b5239fbac61bfdf41acacabc56823fd9492e122bdde = $this->env->getExtension("native_profiler");
        $__internal_90eb23f7741f2566033e8b5239fbac61bfdf41acacabc56823fd9492e122bdde->enter($__internal_90eb23f7741f2566033e8b5239fbac61bfdf41acacabc56823fd9492e122bdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90eb23f7741f2566033e8b5239fbac61bfdf41acacabc56823fd9492e122bdde->leave($__internal_90eb23f7741f2566033e8b5239fbac61bfdf41acacabc56823fd9492e122bdde_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a6e5b73c9bc1cc74dcbff8b0cec59f22c9141e87f528fd289fb6d9a844ad4d0 = $this->env->getExtension("native_profiler");
        $__internal_4a6e5b73c9bc1cc74dcbff8b0cec59f22c9141e87f528fd289fb6d9a844ad4d0->enter($__internal_4a6e5b73c9bc1cc74dcbff8b0cec59f22c9141e87f528fd289fb6d9a844ad4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Entites        
\t";
        
        $__internal_4a6e5b73c9bc1cc74dcbff8b0cec59f22c9141e87f528fd289fb6d9a844ad4d0->leave($__internal_4a6e5b73c9bc1cc74dcbff8b0cec59f22c9141e87f528fd289fb6d9a844ad4d0_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_4df24c72420025108b4dce8c944010ee04a728c0b95e5467e43b85583aec9258 = $this->env->getExtension("native_profiler");
        $__internal_4df24c72420025108b4dce8c944010ee04a728c0b95e5467e43b85583aec9258->enter($__internal_4df24c72420025108b4dce8c944010ee04a728c0b95e5467e43b85583aec9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        <i class=\"fa fa-cubes\"></i>
        Entités
    ";
        
        $__internal_4df24c72420025108b4dce8c944010ee04a728c0b95e5467e43b85583aec9258->leave($__internal_4df24c72420025108b4dce8c944010ee04a728c0b95e5467e43b85583aec9258_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_16e5a8f5e4e4af07fb1d5a59302198d51c1e0c8484bd387a9200f8b8693014f0 = $this->env->getExtension("native_profiler");
        $__internal_16e5a8f5e4e4af07fb1d5a59302198d51c1e0c8484bd387a9200f8b8693014f0->enter($__internal_16e5a8f5e4e4af07fb1d5a59302198d51c1e0c8484bd387a9200f8b8693014f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_16e5a8f5e4e4af07fb1d5a59302198d51c1e0c8484bd387a9200f8b8693014f0->leave($__internal_16e5a8f5e4e4af07fb1d5a59302198d51c1e0c8484bd387a9200f8b8693014f0_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b7f37191f00ac8acfa4cec85c7bad5d4206ab8ddc259c55e65df1fd464c9ba1 = $this->env->getExtension("native_profiler");
        $__internal_8b7f37191f00ac8acfa4cec85c7bad5d4206ab8ddc259c55e65df1fd464c9ba1->enter($__internal_8b7f37191f00ac8acfa4cec85c7bad5d4206ab8ddc259c55e65df1fd464c9ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
<a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "Zone"));
        echo " \">
    Zone
</a>

    ";
        
        $__internal_8b7f37191f00ac8acfa4cec85c7bad5d4206ab8ddc259c55e65df1fd464c9ba1->leave($__internal_8b7f37191f00ac8acfa4cec85c7bad5d4206ab8ddc259c55e65df1fd464c9ba1_prof);

    }

    // line 88
    public function block_script($context, array $blocks = array())
    {
        $__internal_75b264105cb264b975865173a5f0fa0c80c5685d705e7c370f42da041a7cc26e = $this->env->getExtension("native_profiler");
        $__internal_75b264105cb264b975865173a5f0fa0c80c5685d705e7c370f42da041a7cc26e->enter($__internal_75b264105cb264b975865173a5f0fa0c80c5685d705e7c370f42da041a7cc26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 89
        echo "
    <script type=\"text/javascript\">
    (function(){
        \$('#side-menu li').removeClass('active');
        \$('#side-menu li.entites').addClass('active');
    })();
</script>
";
        
        $__internal_75b264105cb264b975865173a5f0fa0c80c5685d705e7c370f42da041a7cc26e->leave($__internal_75b264105cb264b975865173a5f0fa0c80c5685d705e7c370f42da041a7cc26e_prof);

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
        return array (  200 => 89,  194 => 88,  182 => 83,  176 => 80,  170 => 77,  164 => 74,  144 => 57,  135 => 51,  126 => 45,  116 => 38,  98 => 22,  92 => 21,  79 => 15,  73 => 11,  67 => 10,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
/* <a href="{{url('trc_admin_entites_par_categorie',{entite:'Zone'})}} ">*/
/*     Zone*/
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
