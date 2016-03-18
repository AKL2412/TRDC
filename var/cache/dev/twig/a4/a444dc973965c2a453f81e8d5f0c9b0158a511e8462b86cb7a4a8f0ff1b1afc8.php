<?php

/* TRCDDCBundle:Default:index.html.twig */
class __TwigTemplate_833ea3775f5aea9bd8be6d0a4dcf61c54e0939fdc484cb774aa1885308ef1f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::ddc.html.twig", "TRCDDCBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCDDCBundle::ddc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93ebf1a5701fd627280721b16b7d5d7aedea15d00b32b4415347e62bba8006c3 = $this->env->getExtension("native_profiler");
        $__internal_93ebf1a5701fd627280721b16b7d5d7aedea15d00b32b4415347e62bba8006c3->enter($__internal_93ebf1a5701fd627280721b16b7d5d7aedea15d00b32b4415347e62bba8006c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ebf1a5701fd627280721b16b7d5d7aedea15d00b32b4415347e62bba8006c3->leave($__internal_93ebf1a5701fd627280721b16b7d5d7aedea15d00b32b4415347e62bba8006c3_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e7cf5d25ed549192e131f5267497f4cad3edf59513a9998109a2a98d271a4202 = $this->env->getExtension("native_profiler");
        $__internal_e7cf5d25ed549192e131f5267497f4cad3edf59513a9998109a2a98d271a4202->enter($__internal_e7cf5d25ed549192e131f5267497f4cad3edf59513a9998109a2a98d271a4202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 3
        echo "\t";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "  
\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Créer un Dossier De Crédit #DDC</button>       
";
        
        $__internal_e7cf5d25ed549192e131f5267497f4cad3edf59513a9998109a2a98d271a4202->leave($__internal_e7cf5d25ed549192e131f5267497f4cad3edf59513a9998109a2a98d271a4202_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8abc2a817c4d54e00817aa386fe805c53d0d1dba04b4f0879917ceddeed41eb = $this->env->getExtension("native_profiler");
        $__internal_b8abc2a817c4d54e00817aa386fe805c53d0d1dba04b4f0879917ceddeed41eb->enter($__internal_b8abc2a817c4d54e00817aa386fe805c53d0d1dba04b4f0879917ceddeed41eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "   \t
   \t
   \t<div class=\"panel panel-default\">
   \t\t<div class=\"panel-heading\">
   \t\t\tVos DDCs
   \t\t</div>
   \t\t<div class=\"panel-body\">
   \t\t\t<table class=\"table table-condensed table-striped\">
   \t\t\t\t<thead>
   \t\t\t\t\t<tr>
   \t\t\t\t\t\t<th>RS</th>
   \t\t\t\t\t\t<th>RC</th>
   \t\t\t\t\t\t<th>Crédit</th>
   \t\t\t\t\t\t<th>Objet</th>
   \t\t\t\t\t\t<th>Client</th>
   \t\t\t\t\t</tr>
   \t\t\t\t</thead>
   \t\t\t\t<tbody>
   \t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ddcs"]) ? $context["ddcs"] : $this->getContext($context, "ddcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["ddc"]) {
            // line 27
            echo "   \t\t\t\t\t\t<tr>
   \t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["ddc"], "rs", array()), "html", null, true);
            echo " </td>
   \t\t\t\t\t\t\t<td>
   \t\t\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_consulter", array("rc" => $this->getAttribute($context["ddc"], "rc", array()))), "html", null, true);
            echo " \">
\t   \t\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["ddc"], "rc", array()), "html", null, true);
            echo " 
\t   \t\t\t\t\t\t\t</a>
   \t\t\t\t\t\t\t</td>
   \t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "tdc", array()), "nom", array()), "html", null, true);
            echo " </td>
   \t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "tddc", array()), "nom", array()), "html", null, true);
            echo " </td>
   \t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "client", array()), "radical", array()), "html", null, true);
            echo " </td>
   \t\t\t\t\t\t</tr>
   \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "   \t\t\t\t</tbody>
   \t\t\t</table>
   \t\t</div>
   \t\t<div class=\"panel-footer\">
   \t\t\t
   \t\t</div>
   \t\t
   \t</div>
\t<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t  <div class=\"modal-dialog modal-sm\">
\t    <div class=\"modal-content\">
\t     
\t        <div class=\"modal-header\">
\t            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t            <h5 class=\"modal-title\" id=\"myModalLabel\">
\t                Sélectionner le type de crédit
\t            </h5>
\t        </div>
\t        <div class=\"modal-body\">
\t        \t<form>

\t        \t\t<div class=\"form-group\">
\t        \t\t\t<label>
\t        \t\t\t\tType de dossier
\t        \t\t\t\t<select class=\"form-control\">
\t        \t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tddcs"]) ? $context["tddcs"] : $this->getContext($context, "tddcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tddc"]) {
            // line 65
            echo "\t        \t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tddc"], "code", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tddc"], "nom", array()), "html", null, true);
            echo " </option>
\t        \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tddc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t        \t\t\t\t</select>
\t        \t\t\t</label>
\t        \t\t</div>
\t        \t</form>
\t            <ul class=\"list-group\">
\t            \t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tdcs"]) ? $context["tdcs"] : $this->getContext($context, "tdcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tdc"]) {
            // line 73
            echo "\t            \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_init", array("code" => $this->getAttribute($context["tdc"], "code", array()), "type" => "ND")), "html", null, true);
            echo " \" class=\"\">
\t\t\t              <li class=\"list-group-item btn\">
\t\t\t                        ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["tdc"], "nom", array()), "html", null, true);
            echo "
\t\t\t              </li>
\t\t\t            </a>
\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tdc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t            
\t               
\t            </ul>
\t        </div>
\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
\t      </div>
\t    </div>
\t  </div>
\t</div>
";
        
        $__internal_b8abc2a817c4d54e00817aa386fe805c53d0d1dba04b4f0879917ceddeed41eb->leave($__internal_b8abc2a817c4d54e00817aa386fe805c53d0d1dba04b4f0879917ceddeed41eb_prof);

    }

    // line 90
    public function block_script($context, array $blocks = array())
    {
        $__internal_056973081dc3358eeaaeb6ed27dc50948d8d7c0613ce38355ee70ea34f4b1fc3 = $this->env->getExtension("native_profiler");
        $__internal_056973081dc3358eeaaeb6ed27dc50948d8d7c0613ce38355ee70ea34f4b1fc3->enter($__internal_056973081dc3358eeaaeb6ed27dc50948d8d7c0613ce38355ee70ea34f4b1fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 91
        echo "\t<script type=\"text/javascript\">
\t\t(function(){
\t\t\t\$('select').change(function(event){
\t\t\t\tvar type = \$(this).val()
\t\t\t\t//alert(val)
\t\t\t\t\$.each(\$('ul.list-group a'),function(i,val){
\t\t\t\t\tvar a = \$(val);
\t\t\t\t\tvar href = a.attr('href');
\t\t\t\t\tvar tab = href.split('-')
\t\t\t\t\tvar h0 = tab[0]+'-'+type;
\t\t\t\t\t//alert(href+ \" \\n \" + h0);
\t\t\t\t\ta.attr('href',h0)
\t\t\t\t})
\t\t\t})
\t\t})();
\t</script>
";
        
        $__internal_056973081dc3358eeaaeb6ed27dc50948d8d7c0613ce38355ee70ea34f4b1fc3->leave($__internal_056973081dc3358eeaaeb6ed27dc50948d8d7c0613ce38355ee70ea34f4b1fc3_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 91,  204 => 90,  187 => 79,  177 => 75,  171 => 73,  167 => 72,  160 => 67,  149 => 65,  145 => 64,  118 => 39,  109 => 36,  105 => 35,  101 => 34,  95 => 31,  91 => 30,  86 => 28,  83 => 27,  79 => 26,  59 => 8,  53 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::ddc.html.twig' %}*/
/* {%block titre%}*/
/* 	{{parent()}}  */
/* 	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Créer un Dossier De Crédit #DDC</button>       */
/* {%endblock titre%}*/
/*    */
/*    {%block content %}*/
/*    	*/
/*    	*/
/*    	<div class="panel panel-default">*/
/*    		<div class="panel-heading">*/
/*    			Vos DDCs*/
/*    		</div>*/
/*    		<div class="panel-body">*/
/*    			<table class="table table-condensed table-striped">*/
/*    				<thead>*/
/*    					<tr>*/
/*    						<th>RS</th>*/
/*    						<th>RC</th>*/
/*    						<th>Crédit</th>*/
/*    						<th>Objet</th>*/
/*    						<th>Client</th>*/
/*    					</tr>*/
/*    				</thead>*/
/*    				<tbody>*/
/*    					{%for ddc in ddcs %}*/
/*    						<tr>*/
/*    							<td>{{ddc.rs}} </td>*/
/*    							<td>*/
/*    								<a href="{{url('trcddc_consulter',{rc:ddc.rc})}} ">*/
/* 	   								{{ddc.rc}} */
/* 	   							</a>*/
/*    							</td>*/
/*    							<td>{{ddc.tdc.nom}} </td>*/
/*    							<td>{{ddc.tddc.nom}} </td>*/
/*    							<td>{{ddc.client.radical}} </td>*/
/*    						</tr>*/
/*    					{%endfor%}*/
/*    				</tbody>*/
/*    			</table>*/
/*    		</div>*/
/*    		<div class="panel-footer">*/
/*    			*/
/*    		</div>*/
/*    		*/
/*    	</div>*/
/* 	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/* 	  <div class="modal-dialog modal-sm">*/
/* 	    <div class="modal-content">*/
/* 	     */
/* 	        <div class="modal-header">*/
/* 	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/* 	            <h5 class="modal-title" id="myModalLabel">*/
/* 	                Sélectionner le type de crédit*/
/* 	            </h5>*/
/* 	        </div>*/
/* 	        <div class="modal-body">*/
/* 	        	<form>*/
/* */
/* 	        		<div class="form-group">*/
/* 	        			<label>*/
/* 	        				Type de dossier*/
/* 	        				<select class="form-control">*/
/* 	        					{%for tddc in tddcs %}*/
/* 	        						<option value="{{tddc.code}} ">{{tddc.nom}} </option>*/
/* 	        					{%endfor%}*/
/* 	        				</select>*/
/* 	        			</label>*/
/* 	        		</div>*/
/* 	        	</form>*/
/* 	            <ul class="list-group">*/
/* 	            	{%for tdc in tdcs %}*/
/* 	            		<a href="{{url('trcddc_init',{code:tdc.code,type:'ND'})}} " class="">*/
/* 			              <li class="list-group-item btn">*/
/* 			                        {{tdc.nom}}*/
/* 			              </li>*/
/* 			            </a>*/
/* 	            	{%endfor%}*/
/* 	            */
/* 	               */
/* 	            </ul>*/
/* 	        </div>*/
/* 	      <div class="modal-footer">*/
/* 	        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>*/
/* 	      </div>*/
/* 	    </div>*/
/* 	  </div>*/
/* 	</div>*/
/* {%endblock content %}*/
/* {%block script %}*/
/* 	<script type="text/javascript">*/
/* 		(function(){*/
/* 			$('select').change(function(event){*/
/* 				var type = $(this).val()*/
/* 				//alert(val)*/
/* 				$.each($('ul.list-group a'),function(i,val){*/
/* 					var a = $(val);*/
/* 					var href = a.attr('href');*/
/* 					var tab = href.split('-')*/
/* 					var h0 = tab[0]+'-'+type;*/
/* 					//alert(href+ " \n " + h0);*/
/* 					a.attr('href',h0)*/
/* 				})*/
/* 			})*/
/* 		})();*/
/* 	</script>*/
/* {%endblock script %}*/
/* */
