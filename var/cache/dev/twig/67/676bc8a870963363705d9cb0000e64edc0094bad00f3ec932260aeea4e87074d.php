<?php

/* TRCCoreBundle:Affichage:ddp.html.twig */
class __TwigTemplate_fccd4e5d467ea2c9ad989a1e787ed2ca1616f0713facdf41eeafe534b87347a5 extends Twig_Template
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
        $__internal_e91b144b90791d9583d01b8ec8827edd1bb45404c5198115d5481307200a63d6 = $this->env->getExtension("native_profiler");
        $__internal_e91b144b90791d9583d01b8ec8827edd1bb45404c5198115d5481307200a63d6->enter($__internal_e91b144b90791d9583d01b8ec8827edd1bb45404c5198115d5481307200a63d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:ddp.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "ddp", array())) {
            // line 2
            echo "   ";
            if ((twig_length_filter($this->env, (isset($context["ddps"]) ? $context["ddps"] : $this->getContext($context, "ddps"))) > 0)) {
                // line 3
                echo "   \t\t<table class=\"table table-condensed table-striped\">
   \t\t\t<thead>
   \t\t\t\t<tr>
   \t\t\t\t\t<th>Min</th>
   \t\t\t\t\t<th>Max</th>
   \t\t\t\t\t<th>Crédit(s)</th>
   \t\t\t\t\t<th>Description</th>
   \t\t\t\t</tr>
   \t\t\t</thead>
   \t\t\t<tbody>
   \t\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ddps"]) ? $context["ddps"] : $this->getContext($context, "ddps")));
                foreach ($context['_seq'] as $context["_key"] => $context["ddp"]) {
                    // line 14
                    echo "   \t\t\t\t\t<tr>
   \t\t\t\t\t\t<td>";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ddp"], "min", array()), "html", null, true);
                    echo " </td>
   \t\t\t\t\t\t<td>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ddp"], "max", array()), "html", null, true);
                    echo " </td>
   \t\t\t\t\t\t<td>
   \t\t\t\t\t\t\t";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ddp"], "tdc", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["tdc"]) {
                        // line 19
                        echo "   \t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tdc"], "nom", array()), "html", null, true);
                        echo " |
   \t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tdc'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "   \t\t\t\t\t\t</td>
   \t\t\t\t\t\t<td>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["ddp"], "description", array()), 0, 60), "html", null, true);
                    echo " </td>
   \t\t\t\t\t</tr>

   \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ddp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "   \t\t\t</tbody>
   \t\t</table>
   \t";
            } else {
                // line 29
                echo "   \t\t<div class=\"alert-info alert text-center\">
   \t\t\t<h3>
   \t\t\t\tAucune DDP
   \t\t\t</h3>
   \t\t</div>
   ";
            }
        } else {
            // line 36
            echo "    <div class=\"alert text-center\">
        Le profil actuel n'exige pas de DDP
    </div>
";
        }
        
        $__internal_e91b144b90791d9583d01b8ec8827edd1bb45404c5198115d5481307200a63d6->leave($__internal_e91b144b90791d9583d01b8ec8827edd1bb45404c5198115d5481307200a63d6_prof);

    }

    public function getTemplateName()
    {
        return "TRCCoreBundle:Affichage:ddp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  86 => 29,  81 => 26,  71 => 22,  68 => 21,  59 => 19,  55 => 18,  50 => 16,  46 => 15,  43 => 14,  39 => 13,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {%if profil.ddp %}*/
/*    {%if ddps|length > 0 %}*/
/*    		<table class="table table-condensed table-striped">*/
/*    			<thead>*/
/*    				<tr>*/
/*    					<th>Min</th>*/
/*    					<th>Max</th>*/
/*    					<th>Crédit(s)</th>*/
/*    					<th>Description</th>*/
/*    				</tr>*/
/*    			</thead>*/
/*    			<tbody>*/
/*    				{%for ddp in ddps %}*/
/*    					<tr>*/
/*    						<td>{{ddp.min}} </td>*/
/*    						<td>{{ddp.max}} </td>*/
/*    						<td>*/
/*    							{%for tdc in ddp.tdc %}*/
/*    								{{tdc.nom}} |*/
/*    							{%endfor%}*/
/*    						</td>*/
/*    						<td>{{ddp.description|slice(0,60)}} </td>*/
/*    					</tr>*/
/* */
/*    				{%endfor%}*/
/*    			</tbody>*/
/*    		</table>*/
/*    	{%else%}*/
/*    		<div class="alert-info alert text-center">*/
/*    			<h3>*/
/*    				Aucune DDP*/
/*    			</h3>*/
/*    		</div>*/
/*    {%endif%}*/
/* {%else%}*/
/*     <div class="alert text-center">*/
/*         Le profil actuel n'exige pas de DDP*/
/*     </div>*/
/* {%endif%}*/
