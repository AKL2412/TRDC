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
        $__internal_7c723784d33951542da98c6100c17a2b0d9f840064c3524d53578c32abb0e3b0 = $this->env->getExtension("native_profiler");
        $__internal_7c723784d33951542da98c6100c17a2b0d9f840064c3524d53578c32abb0e3b0->enter($__internal_7c723784d33951542da98c6100c17a2b0d9f840064c3524d53578c32abb0e3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Entites:entites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c723784d33951542da98c6100c17a2b0d9f840064c3524d53578c32abb0e3b0->leave($__internal_7c723784d33951542da98c6100c17a2b0d9f840064c3524d53578c32abb0e3b0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1d1d8819fa2f49b4b99e6a673f2f19b50a5bd2c5593700121bbbeff8c25652a = $this->env->getExtension("native_profiler");
        $__internal_a1d1d8819fa2f49b4b99e6a673f2f19b50a5bd2c5593700121bbbeff8c25652a->enter($__internal_a1d1d8819fa2f49b4b99e6a673f2f19b50a5bd2c5593700121bbbeff8c25652a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Entites        
\t";
        
        $__internal_a1d1d8819fa2f49b4b99e6a673f2f19b50a5bd2c5593700121bbbeff8c25652a->leave($__internal_a1d1d8819fa2f49b4b99e6a673f2f19b50a5bd2c5593700121bbbeff8c25652a_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_785b307e928e923c2fa9b8f9124fc7d9f1ebe0be63465a73a5ec6521d73bee80 = $this->env->getExtension("native_profiler");
        $__internal_785b307e928e923c2fa9b8f9124fc7d9f1ebe0be63465a73a5ec6521d73bee80->enter($__internal_785b307e928e923c2fa9b8f9124fc7d9f1ebe0be63465a73a5ec6521d73bee80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        <i class=\"fa fa-cubes\"></i>
        Entités
    ";
        
        $__internal_785b307e928e923c2fa9b8f9124fc7d9f1ebe0be63465a73a5ec6521d73bee80->leave($__internal_785b307e928e923c2fa9b8f9124fc7d9f1ebe0be63465a73a5ec6521d73bee80_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_59e29f60fedb6d68a8797708012f9058ac9ce86e3269c7fa314d612fcd535882 = $this->env->getExtension("native_profiler");
        $__internal_59e29f60fedb6d68a8797708012f9058ac9ce86e3269c7fa314d612fcd535882->enter($__internal_59e29f60fedb6d68a8797708012f9058ac9ce86e3269c7fa314d612fcd535882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_59e29f60fedb6d68a8797708012f9058ac9ce86e3269c7fa314d612fcd535882->leave($__internal_59e29f60fedb6d68a8797708012f9058ac9ce86e3269c7fa314d612fcd535882_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_72fd42477ed1777d4f00e6b68ad5cbe37e64b0c2466a92c9c5b794892faf3d51 = $this->env->getExtension("native_profiler");
        $__internal_72fd42477ed1777d4f00e6b68ad5cbe37e64b0c2466a92c9c5b794892faf3d51->enter($__internal_72fd42477ed1777d4f00e6b68ad5cbe37e64b0c2466a92c9c5b794892faf3d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 44
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_ajouter", array("entite" => "BOC"));
        echo " \" class=\"\">
              <li class=\"list-group-item btn\">
                        <i class=\"fa-gears fa\"></i>
                        Back Office Crédit
              </li>
              </a>
              <a href=\"";
        // line 50
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
        // line 67
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "Agence"));
        echo " \">
    Agences
</a>
<a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "BOC"));
        echo " \">
    BOC
</a>
<a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites_par_categorie", array("entite" => "CIC"));
        echo " \">
    CIC
</a>

    ";
        
        $__internal_72fd42477ed1777d4f00e6b68ad5cbe37e64b0c2466a92c9c5b794892faf3d51->leave($__internal_72fd42477ed1777d4f00e6b68ad5cbe37e64b0c2466a92c9c5b794892faf3d51_prof);

    }

    // line 78
    public function block_script($context, array $blocks = array())
    {
        $__internal_76e5f159a030f5d4f1bdfd2b2fa947da38bb9d1d909985dd8bf663351f141db1 = $this->env->getExtension("native_profiler");
        $__internal_76e5f159a030f5d4f1bdfd2b2fa947da38bb9d1d909985dd8bf663351f141db1->enter($__internal_76e5f159a030f5d4f1bdfd2b2fa947da38bb9d1d909985dd8bf663351f141db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 79
        echo "
    <script type=\"text/javascript\">
    (function(){
        \$('#side-menu li').removeClass('active');
        \$('#side-menu li.entites').addClass('active');
    })();
</script>
";
        
        $__internal_76e5f159a030f5d4f1bdfd2b2fa947da38bb9d1d909985dd8bf663351f141db1->leave($__internal_76e5f159a030f5d4f1bdfd2b2fa947da38bb9d1d909985dd8bf663351f141db1_prof);

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
        return array (  184 => 79,  178 => 78,  166 => 73,  160 => 70,  154 => 67,  134 => 50,  125 => 44,  116 => 38,  98 => 22,  92 => 21,  79 => 15,  73 => 11,  67 => 10,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
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
