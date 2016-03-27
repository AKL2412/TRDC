<?php

/* TRCDDCBundle:Docs:voir.html.twig */
class __TwigTemplate_053e4629d5e47cdb8e183675bec9e77c1e679960671854824f9910f195636f11 extends Twig_Template
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
        $__internal_f94b8ee3cd2c1ada999c78899736da1bfef91d454358b79902d46e3916cbf303 = $this->env->getExtension("native_profiler");
        $__internal_f94b8ee3cd2c1ada999c78899736da1bfef91d454358b79902d46e3916cbf303->enter($__internal_f94b8ee3cd2c1ada999c78899736da1bfef91d454358b79902d46e3916cbf303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Docs:voir.html.twig"));

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
                echo "\t\t<div class=\"col-md-4\">
\t\t\t\t";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "type", array()), "html", null, true);
                echo "
\t\t\t";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "nom", array()), "html", null, true);
                echo "
\t\t</div>\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
</div>

";
        } else {
            // line 15
            echo "\t<div class=\"alert-info alert text-center\">
\t\t<h1>
\t\t\tAucun fichier chargé
\t\t</h1>
\t</div>
";
        }
        
        $__internal_f94b8ee3cd2c1ada999c78899736da1bfef91d454358b79902d46e3916cbf303->leave($__internal_f94b8ee3cd2c1ada999c78899736da1bfef91d454358b79902d46e3916cbf303_prof);

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
        return array (  57 => 15,  51 => 11,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {%if fichiers|length > 0 %}*/
/* <div class="row">*/
/* 	*/
/* 	{%for doc in fichiers%}*/
/* 		{%set fichier = doc.fichier %}*/
/* 		<div class="col-md-4">*/
/* 				{{fichier.type}}*/
/* 			{{fichier.nom}}*/
/* 		</div>	*/
/* 	{%endfor%}*/
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
