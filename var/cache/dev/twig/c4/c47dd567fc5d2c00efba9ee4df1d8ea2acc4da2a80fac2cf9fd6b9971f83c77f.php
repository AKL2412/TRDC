<?php

/* TRCDDCBundle:Default:defclient.html.twig */
class __TwigTemplate_9b0354cf12db0889703ae16c458f66d32075e0dfa9477735627cf409f730370a extends Twig_Template
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
        $__internal_fd173ed051ea50b89c639affd8b3aa992b44503c6cbadda376a3dd9d609796b0 = $this->env->getExtension("native_profiler");
        $__internal_fd173ed051ea50b89c639affd8b3aa992b44503c6cbadda376a3dd9d609796b0->enter($__internal_fd173ed051ea50b89c639affd8b3aa992b44503c6cbadda376a3dd9d609796b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Default:defclient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd173ed051ea50b89c639affd8b3aa992b44503c6cbadda376a3dd9d609796b0->leave($__internal_fd173ed051ea50b89c639affd8b3aa992b44503c6cbadda376a3dd9d609796b0_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d3918a88f70e7ec93c382a815233f64b50b16e5b155495e9ebbebe88ccf2dbc6 = $this->env->getExtension("native_profiler");
        $__internal_d3918a88f70e7ec93c382a815233f64b50b16e5b155495e9ebbebe88ccf2dbc6->enter($__internal_d3918a88f70e7ec93c382a815233f64b50b16e5b155495e9ebbebe88ccf2dbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 3
        echo "\tChoisir le client du dossier #DDC     
";
        
        $__internal_d3918a88f70e7ec93c382a815233f64b50b16e5b155495e9ebbebe88ccf2dbc6->leave($__internal_d3918a88f70e7ec93c382a815233f64b50b16e5b155495e9ebbebe88ccf2dbc6_prof);

    }

    // line 5
    public function block_position($context, array $blocks = array())
    {
        $__internal_980d164dbe755e7daa2aec3254564181711d1187fbe77dd846e0027540df0167 = $this->env->getExtension("native_profiler");
        $__internal_980d164dbe755e7daa2aec3254564181711d1187fbe77dd846e0027540df0167->enter($__internal_980d164dbe755e7daa2aec3254564181711d1187fbe77dd846e0027540df0167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_980d164dbe755e7daa2aec3254564181711d1187fbe77dd846e0027540df0167->leave($__internal_980d164dbe755e7daa2aec3254564181711d1187fbe77dd846e0027540df0167_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_9eaef21681bed0f707592f81238b135fa96af6dca95fcc2dfcac96a8ec7d337c = $this->env->getExtension("native_profiler");
        $__internal_9eaef21681bed0f707592f81238b135fa96af6dca95fcc2dfcac96a8ec7d337c->enter($__internal_9eaef21681bed0f707592f81238b135fa96af6dca95fcc2dfcac96a8ec7d337c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t<form>
\t\t\t\t<input autocomplete=\"off\" lien=\"";
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
        
        $__internal_9eaef21681bed0f707592f81238b135fa96af6dca95fcc2dfcac96a8ec7d337c->leave($__internal_9eaef21681bed0f707592f81238b135fa96af6dca95fcc2dfcac96a8ec7d337c_prof);

    }

    // line 49
    public function block_script($context, array $blocks = array())
    {
        $__internal_6c6f10c1067ca206ceb908a077e1c57f277755b91fb49e0e87ba2d735ca838c0 = $this->env->getExtension("native_profiler");
        $__internal_6c6f10c1067ca206ceb908a077e1c57f277755b91fb49e0e87ba2d735ca838c0->enter($__internal_6c6f10c1067ca206ceb908a077e1c57f277755b91fb49e0e87ba2d735ca838c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 50
        echo "\t<script type=\"text/javascript\">
\t\t(function(){
\t\t\t\$('#radical').keyup(function(event){
\t\t\t\tvar that = \$(this);
\t\t\t\tvar radical = that.val()
\t\t\t\tif(radical.length > 0 ){
\t\t\t\t\t\$.post(that.attr('lien'),{radical:radical},function(data){
\t\t\t\t\t\t\$('#clients').html('');
\t\t\t\t\t\tif(data.code == 1){
\t\t\t\t\t\t\tfor (var i = 0; i < data.clients.length; i++) {
\t\t\t\t\t\t\t\tvar client = data.clients[i];
\t\t\t\t\t\t\t\tvar input = \$('<input required=\"required\" type=\"radio\" name=\"radical\" value=\"'+client.radical+'\" id=\"'+client.radical+'\">');
\t\t\t\t\t\t\t\tvar label = \$('<label for=\"'+client.radical+'\">'+client.intitule+'<label>');
\t\t\t\t\t\t\t\tlabel.prepend(input);
\t\t\t\t\t\t\t\tvar div = \$('<div class=\"col-md-4\"></div>');
\t\t\t\t\t\t\t\tdiv.html(label);
\t\t\t\t\t\t\t\t\$('#clients').append(div);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\talert(data.message)
\t\t\t\t\t\t}
\t\t\t\t\t}).fail(function(error){
\t\t\t\tconsole.log(error)
\t\t\t})
\t\t\t\t}
\t\t\t});
\t\t})();
\t</script>
";
        
        $__internal_6c6f10c1067ca206ceb908a077e1c57f277755b91fb49e0e87ba2d735ca838c0->leave($__internal_6c6f10c1067ca206ceb908a077e1c57f277755b91fb49e0e87ba2d735ca838c0_prof);

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
/* 				<input autocomplete="off" lien="{{url('trcddc_get_client_ajax')}} " type="text" class="form-control" placeholder="Le radical du client" id="radical">*/
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
/* 						if(data.code == 1){*/
/* 							for (var i = 0; i < data.clients.length; i++) {*/
/* 								var client = data.clients[i];*/
/* 								var input = $('<input required="required" type="radio" name="radical" value="'+client.radical+'" id="'+client.radical+'">');*/
/* 								var label = $('<label for="'+client.radical+'">'+client.intitule+'<label>');*/
/* 								label.prepend(input);*/
/* 								var div = $('<div class="col-md-4"></div>');*/
/* 								div.html(label);*/
/* 								$('#clients').append(div);*/
/* 							}*/
/* 						}else{*/
/* 							alert(data.message)*/
/* 						}*/
/* 					}).fail(function(error){*/
/* 				console.log(error)*/
/* 			})*/
/* 				}*/
/* 			});*/
/* 		})();*/
/* 	</script>*/
/* {%endblock script %}*/
