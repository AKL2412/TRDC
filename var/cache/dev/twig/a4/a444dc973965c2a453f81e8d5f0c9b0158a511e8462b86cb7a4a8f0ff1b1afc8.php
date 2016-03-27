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
        $__internal_ca87df83c645f4362d167030c54224ca31de555e8042bbf4b407a0448220e31d = $this->env->getExtension("native_profiler");
        $__internal_ca87df83c645f4362d167030c54224ca31de555e8042bbf4b407a0448220e31d->enter($__internal_ca87df83c645f4362d167030c54224ca31de555e8042bbf4b407a0448220e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca87df83c645f4362d167030c54224ca31de555e8042bbf4b407a0448220e31d->leave($__internal_ca87df83c645f4362d167030c54224ca31de555e8042bbf4b407a0448220e31d_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_9b059065d13485250c34547ab386bbe13aeb6a40450dc6552ca2496201aea558 = $this->env->getExtension("native_profiler");
        $__internal_9b059065d13485250c34547ab386bbe13aeb6a40450dc6552ca2496201aea558->enter($__internal_9b059065d13485250c34547ab386bbe13aeb6a40450dc6552ca2496201aea558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 3
        echo "\t";
        $this->displayParentBlock("titre", $context, $blocks);
        echo "  
\t";
        // line 4
        if ($this->env->getExtension('TwigExtension')->createDDC($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            echo "      
\t\t<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Créer un Dossier De Crédit #DDC</button> 
\t";
        }
        
        $__internal_9b059065d13485250c34547ab386bbe13aeb6a40450dc6552ca2496201aea558->leave($__internal_9b059065d13485250c34547ab386bbe13aeb6a40450dc6552ca2496201aea558_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_59f77f314ab2ec338ccccd97e2f9e2761c819c40bf1bbc2d076e7d8525eb2928 = $this->env->getExtension("native_profiler");
        $__internal_59f77f314ab2ec338ccccd97e2f9e2761c819c40bf1bbc2d076e7d8525eb2928->enter($__internal_59f77f314ab2ec338ccccd97e2f9e2761c819c40bf1bbc2d076e7d8525eb2928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ddcs"]) ? $context["ddcs"] : $this->getContext($context, "ddcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["ddc"]) {
            // line 29
            echo "   \t\t\t\t\t\t<tr>
   \t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["ddc"], "rs", array()), "html", null, true);
            echo " </td>
   \t\t\t\t\t\t\t<td>
   \t\t\t\t\t\t\t\t";
            // line 32
            if ( !(null === $this->getAttribute($context["ddc"], "rc", array()))) {
                // line 33
                echo "   \t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_consulter", array("rc" => $this->getAttribute($context["ddc"], "rc", array()))), "html", null, true);
                echo " \">
\t   \t\t\t\t\t\t\t\t";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["ddc"], "rc", array()), "html", null, true);
                echo " 
\t   \t\t\t\t\t\t\t</a>
\t   \t\t\t\t\t\t\t";
            }
            // line 37
            echo "   \t\t\t\t\t\t\t</td>
   \t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "tdc", array()), "nom", array()), "html", null, true);
            echo " </td>
   \t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "tddc", array()), "nom", array()), "html", null, true);
            echo " </td>
   \t\t\t\t\t\t\t<td>
   \t\t\t\t\t\t\t\t";
            // line 41
            if ( !(null === $this->getAttribute($context["ddc"], "client", array()))) {
                // line 42
                echo "   \t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ddc"], "client", array()), "radical", array()), "html", null, true);
                echo " 
   \t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "   \t\t\t\t\t\t\t</td>
   \t\t\t\t\t\t</tr>
   \t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tddcs"]) ? $context["tddcs"] : $this->getContext($context, "tddcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tddc"]) {
            // line 73
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
        // line 75
        echo "\t        \t\t\t\t</select>
\t        \t\t\t</label>
\t        \t\t</div>
\t        \t</form>
\t            <ul class=\"list-group\">
\t            \t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tdcs"]) ? $context["tdcs"] : $this->getContext($context, "tdcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tdc"]) {
            // line 81
            echo "\t            \t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_init", array("code" => $this->getAttribute($context["tdc"], "code", array()), "type" => "ND")), "html", null, true);
            echo " \" class=\"\">
\t\t\t              <li class=\"list-group-item btn\">
\t\t\t                        ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["tdc"], "nom", array()), "html", null, true);
            echo "
\t\t\t              </li>
\t\t\t            </a>
\t            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tdc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
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
        
        $__internal_59f77f314ab2ec338ccccd97e2f9e2761c819c40bf1bbc2d076e7d8525eb2928->leave($__internal_59f77f314ab2ec338ccccd97e2f9e2761c819c40bf1bbc2d076e7d8525eb2928_prof);

    }

    // line 98
    public function block_script($context, array $blocks = array())
    {
        $__internal_15803dbb9d7dce7182bc20ba4b4c927ec03775ebd433ac4341823d86c470d2c1 = $this->env->getExtension("native_profiler");
        $__internal_15803dbb9d7dce7182bc20ba4b4c927ec03775ebd433ac4341823d86c470d2c1->enter($__internal_15803dbb9d7dce7182bc20ba4b4c927ec03775ebd433ac4341823d86c470d2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 99
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
        
        $__internal_15803dbb9d7dce7182bc20ba4b4c927ec03775ebd433ac4341823d86c470d2c1->leave($__internal_15803dbb9d7dce7182bc20ba4b4c927ec03775ebd433ac4341823d86c470d2c1_prof);

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
        return array (  229 => 99,  223 => 98,  206 => 87,  196 => 83,  190 => 81,  186 => 80,  179 => 75,  168 => 73,  164 => 72,  137 => 47,  129 => 44,  123 => 42,  121 => 41,  116 => 39,  112 => 38,  109 => 37,  103 => 34,  98 => 33,  96 => 32,  91 => 30,  88 => 29,  84 => 28,  64 => 10,  58 => 9,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::ddc.html.twig' %}*/
/* {%block titre%}*/
/* 	{{parent()}}  */
/* 	{%if createDDC(app.user)%}      */
/* 		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Créer un Dossier De Crédit #DDC</button> */
/* 	{%endif%}*/
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
/*    								{%if ddc.rc is not null %}*/
/*    								<a href="{{url('trcddc_consulter',{rc:ddc.rc})}} ">*/
/* 	   								{{ddc.rc}} */
/* 	   							</a>*/
/* 	   							{%endif%}*/
/*    							</td>*/
/*    							<td>{{ddc.tdc.nom}} </td>*/
/*    							<td>{{ddc.tddc.nom}} </td>*/
/*    							<td>*/
/*    								{%if ddc.client is not null %}*/
/*    								{{ddc.client.radical}} */
/*    								{%endif%}*/
/*    							</td>*/
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
