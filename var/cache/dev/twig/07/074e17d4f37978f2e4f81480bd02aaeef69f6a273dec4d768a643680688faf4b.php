<?php

/* TRCAdminBundle::Utilisateurs/utilisateurs.html.twig */
class __TwigTemplate_39839caff4da5619c680e846c4e002d478001f0688c913016031900887f78121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCAdminBundle::Utilisateurs/utilisateurs.html.twig", 1);
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
        $__internal_b799e55c158d3c6dd02b2a579d02d6f85a9415cd27a2be09296279c14fdd2ff8 = $this->env->getExtension("native_profiler");
        $__internal_b799e55c158d3c6dd02b2a579d02d6f85a9415cd27a2be09296279c14fdd2ff8->enter($__internal_b799e55c158d3c6dd02b2a579d02d6f85a9415cd27a2be09296279c14fdd2ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle::Utilisateurs/utilisateurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b799e55c158d3c6dd02b2a579d02d6f85a9415cd27a2be09296279c14fdd2ff8->leave($__internal_b799e55c158d3c6dd02b2a579d02d6f85a9415cd27a2be09296279c14fdd2ff8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4811036616d540aee369b4cee6d5cf2c3dd7c6f435d246f42a37ccf07012fc84 = $this->env->getExtension("native_profiler");
        $__internal_4811036616d540aee369b4cee6d5cf2c3dd7c6f435d246f42a37ccf07012fc84->enter($__internal_4811036616d540aee369b4cee6d5cf2c3dd7c6f435d246f42a37ccf07012fc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Utilisateurs         
\t";
        
        $__internal_4811036616d540aee369b4cee6d5cf2c3dd7c6f435d246f42a37ccf07012fc84->leave($__internal_4811036616d540aee369b4cee6d5cf2c3dd7c6f435d246f42a37ccf07012fc84_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_04ef3fedf99d524ee566a23002b386318b659879e315a440672db4644fab8618 = $this->env->getExtension("native_profiler");
        $__internal_04ef3fedf99d524ee566a23002b386318b659879e315a440672db4644fab8618->enter($__internal_04ef3fedf99d524ee566a23002b386318b659879e315a440672db4644fab8618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        Utilisateurs
    ";
        
        $__internal_04ef3fedf99d524ee566a23002b386318b659879e315a440672db4644fab8618->leave($__internal_04ef3fedf99d524ee566a23002b386318b659879e315a440672db4644fab8618_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_fb6829b9d8dfe93a6cc0ae031023d4f5e6c76b1e7b8008a6c8598e495e839ac9 = $this->env->getExtension("native_profiler");
        $__internal_fb6829b9d8dfe93a6cc0ae031023d4f5e6c76b1e7b8008a6c8598e495e839ac9->enter($__internal_fb6829b9d8dfe93a6cc0ae031023d4f5e6c76b1e7b8008a6c8598e495e839ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_fb6829b9d8dfe93a6cc0ae031023d4f5e6c76b1e7b8008a6c8598e495e839ac9->leave($__internal_fb6829b9d8dfe93a6cc0ae031023d4f5e6c76b1e7b8008a6c8598e495e839ac9_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ba2608b25eea94fab225ee28f225823fcc28f112f0a8230d3211a16d9e2ad34 = $this->env->getExtension("native_profiler");
        $__internal_5ba2608b25eea94fab225ee28f225823fcc28f112f0a8230d3211a16d9e2ad34->enter($__internal_5ba2608b25eea94fab225ee28f225823fcc28f112f0a8230d3211a16d9e2ad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "   \t<div class=\"col-lg-9 col-md-9\">
\t   \t<div class=\"panel\">
\t   \t\t";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        // line 74
        echo "\t   \t</div>
   \t</div>        
   \t<div class=\"col-lg-3 col-md-3\">
   \t\t";
        // line 77
        $this->displayBlock('menuUtilisateurs', $context, $blocks);
        // line 90
        echo "   \t</div>        
   ";
        
        $__internal_5ba2608b25eea94fab225ee28f225823fcc28f112f0a8230d3211a16d9e2ad34->leave($__internal_5ba2608b25eea94fab225ee28f225823fcc28f112f0a8230d3211a16d9e2ad34_prof);

    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        $__internal_d6c9065f90586180a9fea0e01a18821d4df3f62c005b51c3895e1084be2547dc = $this->env->getExtension("native_profiler");
        $__internal_d6c9065f90586180a9fea0e01a18821d4df3f62c005b51c3895e1084be2547dc->enter($__internal_d6c9065f90586180a9fea0e01a18821d4df3f62c005b51c3895e1084be2547dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 24
        echo "\t   \t     <div class=\"panel- panel-green\">
            <div class=\"panel-heading\"></div>
                ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs"))) > 0)) {
            // line 27
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
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                // line 40
                echo "                                    <tr>
                                      <td>
                                      <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_voir", array("matricule" => $this->getAttribute($context["utilisateur"], "matricule", array()))), "html", null, true);
                echo "\">
                                        <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["utilisateur"], "image", array())), "html", null, true);
                echo " \" height=\"30\" class=\"img-circle\">
                                        </a>
                                      </td>
                                        <td>
                                          <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs_voir", array("matricule" => $this->getAttribute($context["utilisateur"], "matricule", array()))), "html", null, true);
                echo "\">
                                              ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "matricule", array()), "html", null, true);
                echo "
                                          </a>
                                        </td>
                                        <td>
                                            ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                           ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
                echo "
                                        </td>
                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
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
\t   \t\t";
        
        $__internal_d6c9065f90586180a9fea0e01a18821d4df3f62c005b51c3895e1084be2547dc->leave($__internal_d6c9065f90586180a9fea0e01a18821d4df3f62c005b51c3895e1084be2547dc_prof);

    }

    // line 77
    public function block_menuUtilisateurs($context, array $blocks = array())
    {
        $__internal_0f558d9f89975c5b5674ed54b785c460576311c67e2263dc6cfe586d34b0e829 = $this->env->getExtension("native_profiler");
        $__internal_0f558d9f89975c5b5674ed54b785c460576311c67e2263dc6cfe586d34b0e829->enter($__internal_0f558d9f89975c5b5674ed54b785c460576311c67e2263dc6cfe586d34b0e829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuUtilisateurs"));

        // line 78
        echo "   \t\t\t<div class=\"panel-\">
   \t\t\t\t<ul class=\"list-group\">
   \t\t\t\t\t<li class=\"list-group-item\">
   \t\t\t\t\t\t<a href=\"";
        // line 81
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
        
        $__internal_0f558d9f89975c5b5674ed54b785c460576311c67e2263dc6cfe586d34b0e829->leave($__internal_0f558d9f89975c5b5674ed54b785c460576311c67e2263dc6cfe586d34b0e829_prof);

    }

    // line 92
    public function block_script($context, array $blocks = array())
    {
        $__internal_2af7672abd4b5bfe9dbb8c7101769c67bfedcc66f69da39ab28d91b931d30bc7 = $this->env->getExtension("native_profiler");
        $__internal_2af7672abd4b5bfe9dbb8c7101769c67bfedcc66f69da39ab28d91b931d30bc7->enter($__internal_2af7672abd4b5bfe9dbb8c7101769c67bfedcc66f69da39ab28d91b931d30bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 93
        echo "<script type=\"text/javascript\">
\t(function(){
\t\t\$('#side-menu li').removeClass('active');
\t\t\$('#side-menu li.utilisateurs').addClass('active');
\t})();
</script>
";
        
        $__internal_2af7672abd4b5bfe9dbb8c7101769c67bfedcc66f69da39ab28d91b931d30bc7->leave($__internal_2af7672abd4b5bfe9dbb8c7101769c67bfedcc66f69da39ab28d91b931d30bc7_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle::Utilisateurs/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 93,  246 => 92,  230 => 81,  225 => 78,  219 => 77,  211 => 72,  205 => 68,  199 => 65,  192 => 60,  181 => 55,  175 => 52,  168 => 48,  164 => 47,  157 => 43,  153 => 42,  149 => 40,  145 => 39,  131 => 27,  129 => 26,  125 => 24,  119 => 23,  111 => 90,  109 => 77,  104 => 74,  102 => 23,  98 => 21,  92 => 20,  79 => 13,  74 => 10,  68 => 9,  60 => 6,  54 => 5,  46 => 3,  40 => 2,  11 => 1,);
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
/* 	   	<div class="panel">*/
/* 	   		{%block main %}*/
/* 	   	     <div class="panel- panel-green">*/
/*             <div class="panel-heading"></div>*/
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
