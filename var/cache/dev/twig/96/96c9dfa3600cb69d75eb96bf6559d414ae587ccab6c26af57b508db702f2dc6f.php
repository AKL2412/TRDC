<?php

/* TRCAdminBundle:Utilisateurs:utilisateurs.html.twig */
class __TwigTemplate_888243279010ae16dc3058dc36a5eeee503318f52879282b7bcd213e8fd5442b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCAdminBundle:Utilisateurs:utilisateurs.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'menuUtilisateurs' => array($this, 'block_menuUtilisateurs'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7de8c70665d86ccded2e540761ab932dbcba4df36e225002a3b0ab720e6ecfc2 = $this->env->getExtension("native_profiler");
        $__internal_7de8c70665d86ccded2e540761ab932dbcba4df36e225002a3b0ab720e6ecfc2->enter($__internal_7de8c70665d86ccded2e540761ab932dbcba4df36e225002a3b0ab720e6ecfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Utilisateurs:utilisateurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de8c70665d86ccded2e540761ab932dbcba4df36e225002a3b0ab720e6ecfc2->leave($__internal_7de8c70665d86ccded2e540761ab932dbcba4df36e225002a3b0ab720e6ecfc2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd86b7127c9c386491b1f4d4a20103f2192a8c5cf7b93b7f5f2286bdf52c3dd8 = $this->env->getExtension("native_profiler");
        $__internal_dd86b7127c9c386491b1f4d4a20103f2192a8c5cf7b93b7f5f2286bdf52c3dd8->enter($__internal_dd86b7127c9c386491b1f4d4a20103f2192a8c5cf7b93b7f5f2286bdf52c3dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Utilisateurs         
\t";
        
        $__internal_dd86b7127c9c386491b1f4d4a20103f2192a8c5cf7b93b7f5f2286bdf52c3dd8->leave($__internal_dd86b7127c9c386491b1f4d4a20103f2192a8c5cf7b93b7f5f2286bdf52c3dd8_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_dcafd28209433124037f2db0c20a1d00ad78c0dc97ba588dfc77816b42865696 = $this->env->getExtension("native_profiler");
        $__internal_dcafd28209433124037f2db0c20a1d00ad78c0dc97ba588dfc77816b42865696->enter($__internal_dcafd28209433124037f2db0c20a1d00ad78c0dc97ba588dfc77816b42865696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        Utilisateurs
    ";
        
        $__internal_dcafd28209433124037f2db0c20a1d00ad78c0dc97ba588dfc77816b42865696->leave($__internal_dcafd28209433124037f2db0c20a1d00ad78c0dc97ba588dfc77816b42865696_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_608e8dd9c67a241d7e890187ea32b0489dc54bc80a295ccc7a8da5761ed300ca = $this->env->getExtension("native_profiler");
        $__internal_608e8dd9c67a241d7e890187ea32b0489dc54bc80a295ccc7a8da5761ed300ca->enter($__internal_608e8dd9c67a241d7e890187ea32b0489dc54bc80a295ccc7a8da5761ed300ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-users\"></i>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs");
        echo "\">
            \tUtilisateurs
            </a>
        </li>
        
    ";
        
        $__internal_608e8dd9c67a241d7e890187ea32b0489dc54bc80a295ccc7a8da5761ed300ca->leave($__internal_608e8dd9c67a241d7e890187ea32b0489dc54bc80a295ccc7a8da5761ed300ca_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_63bda401575e7d20b957cca8e4981849b3746655f8a47979f26394966a082581 = $this->env->getExtension("native_profiler");
        $__internal_63bda401575e7d20b957cca8e4981849b3746655f8a47979f26394966a082581->enter($__internal_63bda401575e7d20b957cca8e4981849b3746655f8a47979f26394966a082581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "   \t<div class=\"col-lg-9 col-md-9\">
\t   \t<div class=\"\">
\t   \t\t";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 88
        echo "\t   \t</div>
   \t</div>        
   \t<div class=\"col-lg-3 col-md-3\">
   \t\t";
        // line 91
        $this->displayBlock('menuUtilisateurs', $context, $blocks);
        // line 104
        echo "   \t</div>        
   ";
        
        $__internal_63bda401575e7d20b957cca8e4981849b3746655f8a47979f26394966a082581->leave($__internal_63bda401575e7d20b957cca8e4981849b3746655f8a47979f26394966a082581_prof);

    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        $__internal_2c172fe44c2370114cc2550692cc6eb58c98c87d91d7fda31578a8a8bf6c8503 = $this->env->getExtension("native_profiler");
        $__internal_2c172fe44c2370114cc2550692cc6eb58c98c87d91d7fda31578a8a8bf6c8503->enter($__internal_2c172fe44c2370114cc2550692cc6eb58c98c87d91d7fda31578a8a8bf6c8503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 24
        echo "\t   \t     <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              Les utilisateurs
            </div>
                ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs"))) > 0)) {
            // line 29
            echo "                    <div class=\"panel-body\">

                        <table class=\"table table-bordered table-condensed\">
                            <thead>
                                <tr>
                                  <th></th>
                                    <th>matricule</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 43
                echo "                                  ";
                $context["fonction"] = $this->env->getExtension('TwigExtension')->getFonction($context["utilisateur"]);
                // line 44
                echo "                                    <tr>
                                      <td>
                                      <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_voir", array("matricule" => $this->getAttribute($context["utilisateur"], "matricule", array()))), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["utilisateur"], "image", array())), "html", null, true);
                echo " \" height=\"30\" class=\"img-circle\">
                                        </a>
                                      </td>
                                        <td>
                                          <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_voir", array("matricule" => $this->getAttribute($context["utilisateur"], "matricule", array()))), "html", null, true);
                echo "\">
                                              ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "matricule", array()), "html", null, true);
                echo "
                                          </a>
                                        </td>
                                        <td>
                                            ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                           ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                          ";
                // line 62
                if ( !(null === (isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")))) {
                    // line 63
                    echo "                                              ";
                    $context["entite"] = $this->env->getExtension('TwigExtension')->getEntite($this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "entite", array()));
                    // line 64
                    echo "                                              ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entite"]) ? $context["entite"] : $this->getContext($context, "entite")), "nom", array()), "html", null, true);
                    echo "
                                              ";
                    // line 65
                    if ( !(null === $this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "profil", array()))) {
                        // line 66
                        echo "                                               :: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fonction"]) ? $context["fonction"] : $this->getContext($context, "fonction")), "profil", array()), "code", array()), "html", null, true);
                        echo " 
                                               ";
                    }
                    // line 68
                    echo "
                                          ";
                }
                // line 70
                echo "                                        </td>
                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                
                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
            ";
            // line 79
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:pagination", array("pagination" => (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))));
            echo "
                    </div>
                ";
        } else {
            // line 82
            echo "                    <div class=\"panel-body\">
                    <h3> Pas de données</h3>
                    </div>
                ";
        }
        // line 86
        echo "            </div>
\t   \t\t";
        
        $__internal_2c172fe44c2370114cc2550692cc6eb58c98c87d91d7fda31578a8a8bf6c8503->leave($__internal_2c172fe44c2370114cc2550692cc6eb58c98c87d91d7fda31578a8a8bf6c8503_prof);

    }

    // line 91
    public function block_menuUtilisateurs($context, array $blocks = array())
    {
        $__internal_691383fc4c48ebb9d6bf8fa13b94dc50992a8d38bf6ff97dac8633c44033dd43 = $this->env->getExtension("native_profiler");
        $__internal_691383fc4c48ebb9d6bf8fa13b94dc50992a8d38bf6ff97dac8633c44033dd43->enter($__internal_691383fc4c48ebb9d6bf8fa13b94dc50992a8d38bf6ff97dac8633c44033dd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuUtilisateurs"));

        // line 92
        echo "   \t\t\t<div class=\"panel-\">
   \t\t\t\t<ul class=\"list-group\">
   \t\t\t\t\t<li class=\"list-group-item\">
   \t\t\t\t\t\t<a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_ajouter");
        echo "\">
   \t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
   \t\t\t\t\t\t\tAjouter
   \t\t\t\t\t\t</a>
   \t\t\t\t\t</li>
   \t\t\t\t\t
   \t\t\t\t</ul>
   \t\t\t</div>
   \t\t";
        
        $__internal_691383fc4c48ebb9d6bf8fa13b94dc50992a8d38bf6ff97dac8633c44033dd43->leave($__internal_691383fc4c48ebb9d6bf8fa13b94dc50992a8d38bf6ff97dac8633c44033dd43_prof);

    }

    // line 106
    public function block_script($context, array $blocks = array())
    {
        $__internal_df6eeb21c7951419c62fec4a28b7a0f2ee6570f21af9fcdaefaf9caec6f10e87 = $this->env->getExtension("native_profiler");
        $__internal_df6eeb21c7951419c62fec4a28b7a0f2ee6570f21af9fcdaefaf9caec6f10e87->enter($__internal_df6eeb21c7951419c62fec4a28b7a0f2ee6570f21af9fcdaefaf9caec6f10e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 107
        echo "<script type=\"text/javascript\">
\t(function(){
\t\t\$('#side-menu li').removeClass('active');
\t\t\$('#side-menu li.utilisateurs').addClass('active');
\t})();
</script>
";
        
        $__internal_df6eeb21c7951419c62fec4a28b7a0f2ee6570f21af9fcdaefaf9caec6f10e87->leave($__internal_df6eeb21c7951419c62fec4a28b7a0f2ee6570f21af9fcdaefaf9caec6f10e87_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Utilisateurs:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 107,  278 => 106,  262 => 95,  257 => 92,  251 => 91,  243 => 86,  237 => 82,  231 => 79,  224 => 74,  215 => 70,  211 => 68,  205 => 66,  203 => 65,  198 => 64,  195 => 63,  193 => 62,  187 => 59,  181 => 56,  174 => 52,  170 => 51,  163 => 47,  159 => 46,  155 => 44,  152 => 43,  148 => 42,  133 => 29,  131 => 28,  125 => 24,  119 => 23,  111 => 104,  109 => 91,  104 => 88,  102 => 23,  98 => 21,  92 => 20,  79 => 13,  74 => 10,  68 => 9,  60 => 6,  54 => 5,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* 	{%block title%}*/
/* 	   Utilisateurs         */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         Utilisateurs*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-users"></i>*/
/*             <a href="{{url('trc_admin_utilisateurs')}}">*/
/*             	Utilisateurs*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/*    {%block content %}*/
/*    	<div class="col-lg-9 col-md-9">*/
/* 	   	<div class="">*/
/* 	   		{%block main %}*/
/* 	   	     <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               Les utilisateurs*/
/*             </div>*/
/*                 {%if utilisateurs|length > 0 %}*/
/*                     <div class="panel-body">*/
/* */
/*                         <table class="table table-bordered table-condensed">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                   <th></th>*/
/*                                     <th>matricule</th>*/
/*                                     <th>Nom</th>*/
/*                                     <th>Prenom</th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {%for utilisateur in utilisateurs %}*/
/*                                   {%set fonction = getFonction(utilisateur) %}*/
/*                                     <tr>*/
/*                                       <td>*/
/*                                       <a href="{{url('trc_admin_utilisateurs_voir',{matricule:utilisateur.matricule})}}">*/
/*                                         <img src="{{asset(utilisateur.image)}} " height="30" class="img-circle">*/
/*                                         </a>*/
/*                                       </td>*/
/*                                         <td>*/
/*                                           <a href="{{url('trc_admin_utilisateurs_voir',{matricule:utilisateur.matricule})}}">*/
/*                                               {{utilisateur.matricule}}*/
/*                                           </a>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{utilisateur.nom}}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                            {{utilisateur.prenom}}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                           {%if fonction is not null %}*/
/*                                               {%set entite = getEntite(fonction.entite) %}*/
/*                                               {{entite.nom}}*/
/*                                               {%if fonction.profil is not null %}*/
/*                                                :: {{fonction.profil.code}} */
/*                                                {%endif%}*/
/* */
/*                                           {%endif%}*/
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
/* 	   		{%endblock main %}*/
/* 	   	</div>*/
/*    	</div>        */
/*    	<div class="col-lg-3 col-md-3">*/
/*    		{%block menuUtilisateurs %}*/
/*    			<div class="panel-">*/
/*    				<ul class="list-group">*/
/*    					<li class="list-group-item">*/
/*    						<a href="{{url('trc_admin_utilisateurs_ajouter')}}">*/
/*    							<i class="fa fa-plus-circle"></i>*/
/*    							Ajouter*/
/*    						</a>*/
/*    					</li>*/
/*    					*/
/*    				</ul>*/
/*    			</div>*/
/*    		{%endblock menuUtilisateurs %}*/
/*    	</div>        */
/*    {%endblock%}*/
/* {%block script%}*/
/* <script type="text/javascript">*/
/* 	(function(){*/
/* 		$('#side-menu li').removeClass('active');*/
/* 		$('#side-menu li.utilisateurs').addClass('active');*/
/* 	})();*/
/* </script>*/
/* {%endblock script%}*/
/*     */
