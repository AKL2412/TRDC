<?php

/* TRCDDCBundle:Docs:voir.html.twig */
class __TwigTemplate_f4dd24463f6f75b143c6852885978a44e879a7e01fc5bfb01a0701acb3a306c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb4b05c48fdfdd346ee581ad499c53def6acb8e7dc3bd7d44f31b501858b8f1 = $this->env->getExtension("native_profiler");
        $__internal_3bb4b05c48fdfdd346ee581ad499c53def6acb8e7dc3bd7d44f31b501858b8f1->enter($__internal_3bb4b05c48fdfdd346ee581ad499c53def6acb8e7dc3bd7d44f31b501858b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Docs:voir.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["fichiers"]) ? $context["fichiers"] : $this->getContext($context, "fichiers"))) > 0)) {
            // line 2
            echo "<div class=\"row\">
\t
\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : $this->getContext($context, "fichiers")));
            foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                // line 5
                echo "\t\t";
                $context["fichier"] = $this->getAttribute($context["doc"], "fichier", array());
                // line 6
                echo "\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"unFichierDoc\">
\t\t\t\t<div class=\"affiche\">
\t\t\t\t\t";
                // line 9
                if (twig_in_filter("image", $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "type", array()))) {
                    // line 10
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "chemin", array())), "html", null, true);
                    echo " \"/>
\t\t\t\t\t";
                } elseif (twig_in_filter("pdf", $this->getAttribute(                // line 11
(isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "type", array()))) {
                    // line 12
                    echo "\t\t\t\t\t\t<iframe src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "chemin", array())), "html", null, true);
                    echo "\" type=\"application/pdf\" >
\t\t\t\t\t\t\t
\t\t\t\t\t\t</iframe>
\t\t\t\t\t";
                } elseif (twig_in_filter("officedocument", $this->getAttribute(                // line 15
(isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "type", array()))) {
                    // line 16
                    echo "\t\t\t\t\t\tofficedocument :: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "type", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 18
                    echo "
\t\t\t\t\t\tun fichier X: ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "type", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "rs", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"nom\">
\t\t\t\t\t
\t\t\t\t\t<a target=\"blank\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "chemin", array())), "html", null, true);
                echo " \">
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "nom", array()), "html", null, true);
                echo "
                    </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t</div>\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t<div class=\"\">
\t\t";
            // line 35
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:pagination", array("pagination" =>             // line 36
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "ajax" => true, "containerId" => "voirFichierDDC")));
            // line 37
            echo "
\t</div>

</div>

";
        } else {
            // line 43
            echo "\t<div class=\"alert-info alert text-center\">
\t\t<h1>
\t\t\tAucun fichier chargé
\t\t</h1>
\t</div>
";
        }
        // line 49
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\$('document').ready(function(\$){
\t\t\$.each(\$('.pagination a.pagination-ajax'),function(index,val){

\t\t\tvar link = \$(val);
\t\t\tlink.click({containerId:'voirFichierDDC'},nextPage)
\t\t})
\t})
</script>
";
        
        $__internal_3bb4b05c48fdfdd346ee581ad499c53def6acb8e7dc3bd7d44f31b501858b8f1->leave($__internal_3bb4b05c48fdfdd346ee581ad499c53def6acb8e7dc3bd7d44f31b501858b8f1_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Docs:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  113 => 43,  105 => 37,  103 => 36,  102 => 35,  99 => 34,  85 => 26,  81 => 25,  76 => 22,  71 => 20,  67 => 19,  64 => 18,  58 => 16,  56 => 15,  49 => 12,  47 => 11,  42 => 10,  40 => 9,  35 => 6,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {%if fichiers|length > 0 %}*/
/* <div class="row">*/
/* 	*/
/* 	{%for doc in fichiers%}*/
/* 		{%set fichier = doc.fichier %}*/
/* 		<div class="col-md-6">*/
/* 			<div class="unFichierDoc">*/
/* 				<div class="affiche">*/
/* 					{%if 'image' in fichier.type %}*/
/* 						<img src="{{asset(fichier.chemin)}} "/>*/
/* 					{%elseif 'pdf' in fichier.type %}*/
/* 						<iframe src="{{asset(fichier.chemin)}}" type="application/pdf" >*/
/* 							*/
/* 						</iframe>*/
/* 					{%elseif  'officedocument' in fichier.type %}*/
/* 						officedocument :: {{fichier.type}}*/
/* 					{%else%}*/
/* */
/* 						un fichier X: {{fichier.type}}*/
/* 						{{fichier.rs}}*/
/* 					{%endif%}*/
/* 				</div>*/
/* 				<div class="nom">*/
/* 					*/
/* 					<a target="blank" href="{{asset(fichier.chemin)}} ">*/
/*                         {{fichier.nom}}*/
/*                     </a>*/
/* 				</div>*/
/* 			</div>*/
/* 				*/
/* 				*/
/* 		</div>	*/
/* 	{%endfor%}*/
/* 	<div class="">*/
/* 		{{ */
/* 			render(controller('TRCCoreBundle:Affichage:pagination',{pagination:pagination,ajax:true,containerId:'voirFichierDDC'})) */
/* 		}}*/
/* 	</div>*/
/* */
/* </div>*/
/* */
/* {%else%}*/
/* 	<div class="alert-info alert text-center">*/
/* 		<h1>*/
/* 			Aucun fichier chargé*/
/* 		</h1>*/
/* 	</div>*/
/* {%endif%}*/
/* <script src="{{asset('script/jquery-1.10.2.min.js')}}"></script>*/
/* <script type="text/javascript">*/
/* 	$('document').ready(function($){*/
/* 		$.each($('.pagination a.pagination-ajax'),function(index,val){*/
/* */
/* 			var link = $(val);*/
/* 			link.click({containerId:'voirFichierDDC'},nextPage)*/
/* 		})*/
/* 	})*/
/* </script>*/
/* */
