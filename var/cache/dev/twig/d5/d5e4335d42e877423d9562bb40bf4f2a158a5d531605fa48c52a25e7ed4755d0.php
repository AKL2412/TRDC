<?php

/* TRCDDCBundle:Default:defclient.html.twig */
class __TwigTemplate_fc43bd7228605361666fc980e1abc8c51694af6ec8594ce88e28409fe9636740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::ddc.html.twig", "TRCDDCBundle:Default:defclient.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
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
        $__internal_4ac3e96d903ce765dd035ca1a841055b8f35f0c6109c7dc3bd3e4de029e7e4b7 = $this->env->getExtension("native_profiler");
        $__internal_4ac3e96d903ce765dd035ca1a841055b8f35f0c6109c7dc3bd3e4de029e7e4b7->enter($__internal_4ac3e96d903ce765dd035ca1a841055b8f35f0c6109c7dc3bd3e4de029e7e4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Default:defclient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ac3e96d903ce765dd035ca1a841055b8f35f0c6109c7dc3bd3e4de029e7e4b7->leave($__internal_4ac3e96d903ce765dd035ca1a841055b8f35f0c6109c7dc3bd3e4de029e7e4b7_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_8577ee0dd66a842380fb047c67d1635d452d9a742c5ec624ebe05c7c978b0888 = $this->env->getExtension("native_profiler");
        $__internal_8577ee0dd66a842380fb047c67d1635d452d9a742c5ec624ebe05c7c978b0888->enter($__internal_8577ee0dd66a842380fb047c67d1635d452d9a742c5ec624ebe05c7c978b0888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 3
        echo "\tChoisir le client du dossier #DDC     
";
        
        $__internal_8577ee0dd66a842380fb047c67d1635d452d9a742c5ec624ebe05c7c978b0888->leave($__internal_8577ee0dd66a842380fb047c67d1635d452d9a742c5ec624ebe05c7c978b0888_prof);

    }

    // line 5
    public function block_position($context, array $blocks = array())
    {
        $__internal_bc725edaae7cff0c5a287ed90a22f70314490a34851ca14599a0f0eb2400342e = $this->env->getExtension("native_profiler");
        $__internal_bc725edaae7cff0c5a287ed90a22f70314490a34851ca14599a0f0eb2400342e->enter($__internal_bc725edaae7cff0c5a287ed90a22f70314490a34851ca14599a0f0eb2400342e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 6
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-book\"></i>
            <a href=\"#\">
            \t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()), "html", null, true);
        echo "
            </a>
        </li>
        
    ";
        
        $__internal_bc725edaae7cff0c5a287ed90a22f70314490a34851ca14599a0f0eb2400342e->leave($__internal_bc725edaae7cff0c5a287ed90a22f70314490a34851ca14599a0f0eb2400342e_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_5485a23dabe6a56d659ceb98e72c490b6f560ae69f95d3353cfa4bfaafc87059 = $this->env->getExtension("native_profiler");
        $__internal_5485a23dabe6a56d659ceb98e72c490b6f560ae69f95d3353cfa4bfaafc87059->enter($__internal_5485a23dabe6a56d659ceb98e72c490b6f560ae69f95d3353cfa4bfaafc87059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<form>
\t\t\t\t<input lien=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("trcddc_get_client_ajax");
        echo " \" type=\"text\" class=\"form-control\" placeholder=\"Le radical du client\" id=\"radical\">
\t\t\t</form>
\t\t</div>
\t</div>
\t<br><br>
\t<div class=\"row\">
\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t<div class=\"panel-default panel\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tLes clients
\t\t\t\t</div>
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div id=\"clients\">
\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\">
\t\t\t\t\t\t\tAssocier
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_5485a23dabe6a56d659ceb98e72c490b6f560ae69f95d3353cfa4bfaafc87059->leave($__internal_5485a23dabe6a56d659ceb98e72c490b6f560ae69f95d3353cfa4bfaafc87059_prof);

    }

    // line 49
    public function block_script($context, array $blocks = array())
    {
        $__internal_d8658246f79931cf869abfa4b6cba63b027f2a78bf43e7245602fe1c1c08b252 = $this->env->getExtension("native_profiler");
        $__internal_d8658246f79931cf869abfa4b6cba63b027f2a78bf43e7245602fe1c1c08b252->enter($__internal_d8658246f79931cf869abfa4b6cba63b027f2a78bf43e7245602fe1c1c08b252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 50
        echo "\t<script type=\"text/javascript\">
\t\t(function(){
\t\t\t\$('#radical').keyup(function(event){
\t\t\t\tvar that = \$(this);
\t\t\t\tvar radical = that.val()
\t\t\t\tif(radical.length > 0 ){
\t\t\t\t\t\$.post(that.attr('lien'),{radical:radical},function(data){
\t\t\t\t\t\t\$('#clients').html('');
\t\t\t\t\t\tfor (var i = 0; i < data.clients.length; i++) {
\t\t\t\t\t\t\tvar client = data.clients[i];
\t\t\t\t\t\t\tvar input = \$('<input required=\"required\" type=\"radio\" name=\"radical\" value=\"'+client.radical+'\" id=\"'+client.radical+'\">');
\t\t\t\t\t\t\tvar label = \$('<label for=\"'+client.radical+'\">'+client.intitule+'<label>');
\t\t\t\t\t\t\tlabel.prepend(input);
\t\t\t\t\t\t\tvar div = \$('<div class=\"col-md-4\"></div>');
\t\t\t\t\t\t\tdiv.html(label);
\t\t\t\t\t\t\t\$('#clients').append(div);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t})();
\t</script>
";
        
        $__internal_d8658246f79931cf869abfa4b6cba63b027f2a78bf43e7245602fe1c1c08b252->leave($__internal_d8658246f79931cf869abfa4b6cba63b027f2a78bf43e7245602fe1c1c08b252_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Default:defclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 50,  124 => 49,  89 => 21,  84 => 18,  78 => 17,  66 => 11,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::ddc.html.twig' %}*/
/* {%block titre%}*/
/* 	Choisir le client du dossier #DDC     */
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-book"></i>*/
/*             <a href="#">*/
/*             	{{ddc.rs}}*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/* {%block content %}*/
/* 	<div class="row">*/
/* 		<div class="col-md-6 col-md-offset-3">*/
/* 			<form>*/
/* 				<input lien="{{url('trcddc_get_client_ajax')}} " type="text" class="form-control" placeholder="Le radical du client" id="radical">*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* 	<br><br>*/
/* 	<div class="row">*/
/* 		<div class="col-md-8 col-md-offset-2">*/
/* 			<div class="panel-default panel">*/
/* 				<div class="panel-heading">*/
/* 					Les clients*/
/* 				</div>*/
/* 				<form method="post">*/
/* 					<div class="panel-body">*/
/* 						<div id="clients">*/
/* 				*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="panel-footer">*/
/* 						<button class="btn btn-default" type="submit">*/
/* 							Associer*/
/* 						</button>*/
/* 					</div>*/
/* 				</form>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {%endblock content %}*/
/* {%block script %}*/
/* 	<script type="text/javascript">*/
/* 		(function(){*/
/* 			$('#radical').keyup(function(event){*/
/* 				var that = $(this);*/
/* 				var radical = that.val()*/
/* 				if(radical.length > 0 ){*/
/* 					$.post(that.attr('lien'),{radical:radical},function(data){*/
/* 						$('#clients').html('');*/
/* 						for (var i = 0; i < data.clients.length; i++) {*/
/* 							var client = data.clients[i];*/
/* 							var input = $('<input required="required" type="radio" name="radical" value="'+client.radical+'" id="'+client.radical+'">');*/
/* 							var label = $('<label for="'+client.radical+'">'+client.intitule+'<label>');*/
/* 							label.prepend(input);*/
/* 							var div = $('<div class="col-md-4"></div>');*/
/* 							div.html(label);*/
/* 							$('#clients').append(div);*/
/* 						}*/
/* 					});*/
/* 				}*/
/* 			});*/
/* 		})();*/
/* 	</script>*/
/* {%endblock script %}*/
