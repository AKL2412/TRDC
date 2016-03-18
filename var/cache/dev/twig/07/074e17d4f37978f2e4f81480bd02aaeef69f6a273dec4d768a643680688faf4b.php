<?php

/* TRCAdminBundle:Utilisateurs:utilisateurs.html.twig */
class __TwigTemplate_39839caff4da5619c680e846c4e002d478001f0688c913016031900887f78121 extends Twig_Template
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
        $__internal_bd0341103297bf445cd53747125dcbdec7c69f2e7270d3e24a0bb10c64a5e843 = $this->env->getExtension("native_profiler");
        $__internal_bd0341103297bf445cd53747125dcbdec7c69f2e7270d3e24a0bb10c64a5e843->enter($__internal_bd0341103297bf445cd53747125dcbdec7c69f2e7270d3e24a0bb10c64a5e843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Utilisateurs:utilisateurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd0341103297bf445cd53747125dcbdec7c69f2e7270d3e24a0bb10c64a5e843->leave($__internal_bd0341103297bf445cd53747125dcbdec7c69f2e7270d3e24a0bb10c64a5e843_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5817703fd9692e339bb406e6d074c94f842af9fc49b11b9c6840416fa9144cfa = $this->env->getExtension("native_profiler");
        $__internal_5817703fd9692e339bb406e6d074c94f842af9fc49b11b9c6840416fa9144cfa->enter($__internal_5817703fd9692e339bb406e6d074c94f842af9fc49b11b9c6840416fa9144cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Utilisateurs         
\t";
        
        $__internal_5817703fd9692e339bb406e6d074c94f842af9fc49b11b9c6840416fa9144cfa->leave($__internal_5817703fd9692e339bb406e6d074c94f842af9fc49b11b9c6840416fa9144cfa_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_6f697d553402e8d1eb91cfa2981de104b183da619ef3170554095e5635592e9e = $this->env->getExtension("native_profiler");
        $__internal_6f697d553402e8d1eb91cfa2981de104b183da619ef3170554095e5635592e9e->enter($__internal_6f697d553402e8d1eb91cfa2981de104b183da619ef3170554095e5635592e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        Utilisateurs
    ";
        
        $__internal_6f697d553402e8d1eb91cfa2981de104b183da619ef3170554095e5635592e9e->leave($__internal_6f697d553402e8d1eb91cfa2981de104b183da619ef3170554095e5635592e9e_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_028f8c9d15acec4f3a992e49e3d14a2958e786de0fddcf03e3b887bfdc2a345a = $this->env->getExtension("native_profiler");
        $__internal_028f8c9d15acec4f3a992e49e3d14a2958e786de0fddcf03e3b887bfdc2a345a->enter($__internal_028f8c9d15acec4f3a992e49e3d14a2958e786de0fddcf03e3b887bfdc2a345a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_028f8c9d15acec4f3a992e49e3d14a2958e786de0fddcf03e3b887bfdc2a345a->leave($__internal_028f8c9d15acec4f3a992e49e3d14a2958e786de0fddcf03e3b887bfdc2a345a_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_4015312abaaea5ffaf217cca0e6495d1bb8336e73fd3b091ef4d168cee066fde = $this->env->getExtension("native_profiler");
        $__internal_4015312abaaea5ffaf217cca0e6495d1bb8336e73fd3b091ef4d168cee066fde->enter($__internal_4015312abaaea5ffaf217cca0e6495d1bb8336e73fd3b091ef4d168cee066fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "   \t<div class=\"col-lg-9 col-md-9\">
\t   \t<div class=\"\">
\t   \t\t";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 76
        echo "\t   \t</div>
   \t</div>        
   \t<div class=\"col-lg-3 col-md-3\">
   \t\t";
        // line 79
        $this->displayBlock('menuUtilisateurs', $context, $blocks);
        // line 92
        echo "   \t</div>        
   ";
        
        $__internal_4015312abaaea5ffaf217cca0e6495d1bb8336e73fd3b091ef4d168cee066fde->leave($__internal_4015312abaaea5ffaf217cca0e6495d1bb8336e73fd3b091ef4d168cee066fde_prof);

    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        $__internal_5379dd52c714618a436b5a23c72b233a152a35dc3127b772cec6e2d0d2603e28 = $this->env->getExtension("native_profiler");
        $__internal_5379dd52c714618a436b5a23c72b233a152a35dc3127b772cec6e2d0d2603e28->enter($__internal_5379dd52c714618a436b5a23c72b233a152a35dc3127b772cec6e2d0d2603e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 42
                echo "                                    <tr>
                                      <td>
                                      <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_voir", array("matricule" => $this->getAttribute($context["utilisateur"], "matricule", array()))), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["utilisateur"], "image", array())), "html", null, true);
                echo " \" height=\"30\" class=\"img-circle\">
                                        </a>
                                      </td>
                                        <td>
                                          <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_voir", array("matricule" => $this->getAttribute($context["utilisateur"], "matricule", array()))), "html", null, true);
                echo "\">
                                              ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "matricule", array()), "html", null, true);
                echo "
                                          </a>
                                        </td>
                                        <td>
                                            ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                           ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
                echo "
                                        </td>
                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
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
\t   \t\t";
        
        $__internal_5379dd52c714618a436b5a23c72b233a152a35dc3127b772cec6e2d0d2603e28->leave($__internal_5379dd52c714618a436b5a23c72b233a152a35dc3127b772cec6e2d0d2603e28_prof);

    }

    // line 79
    public function block_menuUtilisateurs($context, array $blocks = array())
    {
        $__internal_5f981be5c22c7db4037c0f530c3ac334582e29c18047109f2ada99fc27774b8c = $this->env->getExtension("native_profiler");
        $__internal_5f981be5c22c7db4037c0f530c3ac334582e29c18047109f2ada99fc27774b8c->enter($__internal_5f981be5c22c7db4037c0f530c3ac334582e29c18047109f2ada99fc27774b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuUtilisateurs"));

        // line 80
        echo "   \t\t\t<div class=\"panel-\">
   \t\t\t\t<ul class=\"list-group\">
   \t\t\t\t\t<li class=\"list-group-item\">
   \t\t\t\t\t\t<a href=\"";
        // line 83
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
        
        $__internal_5f981be5c22c7db4037c0f530c3ac334582e29c18047109f2ada99fc27774b8c->leave($__internal_5f981be5c22c7db4037c0f530c3ac334582e29c18047109f2ada99fc27774b8c_prof);

    }

    // line 94
    public function block_script($context, array $blocks = array())
    {
        $__internal_6545e912fa9b4c2515a8ad4341c973e9eddbfbcfa7967bf6f7b992db66350dd2 = $this->env->getExtension("native_profiler");
        $__internal_6545e912fa9b4c2515a8ad4341c973e9eddbfbcfa7967bf6f7b992db66350dd2->enter($__internal_6545e912fa9b4c2515a8ad4341c973e9eddbfbcfa7967bf6f7b992db66350dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 95
        echo "<script type=\"text/javascript\">
\t(function(){
\t\t\$('#side-menu li').removeClass('active');
\t\t\$('#side-menu li.utilisateurs').addClass('active');
\t})();
</script>
";
        
        $__internal_6545e912fa9b4c2515a8ad4341c973e9eddbfbcfa7967bf6f7b992db66350dd2->leave($__internal_6545e912fa9b4c2515a8ad4341c973e9eddbfbcfa7967bf6f7b992db66350dd2_prof);

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
        return array (  254 => 95,  248 => 94,  232 => 83,  227 => 80,  221 => 79,  213 => 74,  207 => 70,  201 => 67,  194 => 62,  183 => 57,  177 => 54,  170 => 50,  166 => 49,  159 => 45,  155 => 44,  151 => 42,  147 => 41,  133 => 29,  131 => 28,  125 => 24,  119 => 23,  111 => 92,  109 => 79,  104 => 76,  102 => 23,  98 => 21,  92 => 20,  79 => 13,  74 => 10,  68 => 9,  60 => 6,  54 => 5,  46 => 3,  40 => 2,  11 => 1,);
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
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {%for utilisateur in utilisateurs %}*/
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
