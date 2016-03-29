<?php

/* TRCDDCBundle:Default:decisionCommentaire.html.twig */
class __TwigTemplate_a1691636bf46b28a633081f5f4ac4dae58ce4eca88c846df533ed517f3f724b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::Default/consulter.html.twig", "TRCDDCBundle:Default:decisionCommentaire.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCDDCBundle::Default/consulter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_253cceb70c95ba8fc7851cdfa2635f066d13f0c511facfd4562cdd77324626de = $this->env->getExtension("native_profiler");
        $__internal_253cceb70c95ba8fc7851cdfa2635f066d13f0c511facfd4562cdd77324626de->enter($__internal_253cceb70c95ba8fc7851cdfa2635f066d13f0c511facfd4562cdd77324626de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Default:decisionCommentaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_253cceb70c95ba8fc7851cdfa2635f066d13f0c511facfd4562cdd77324626de->leave($__internal_253cceb70c95ba8fc7851cdfa2635f066d13f0c511facfd4562cdd77324626de_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7232a58c1616537a110cbd0ed386241f99a0d35ca210506ef0a364e439241de0 = $this->env->getExtension("native_profiler");
        $__internal_7232a58c1616537a110cbd0ed386241f99a0d35ca210506ef0a364e439241de0->enter($__internal_7232a58c1616537a110cbd0ed386241f99a0d35ca210506ef0a364e439241de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tDocuments | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7232a58c1616537a110cbd0ed386241f99a0d35ca210506ef0a364e439241de0->leave($__internal_7232a58c1616537a110cbd0ed386241f99a0d35ca210506ef0a364e439241de0_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e2b7e81f3e60174232a2fc775c9d85e956f116374c837e547771adc27a1073ca = $this->env->getExtension("native_profiler");
        $__internal_e2b7e81f3e60174232a2fc775c9d85e956f116374c837e547771adc27a1073ca->enter($__internal_e2b7e81f3e60174232a2fc775c9d85e956f116374c837e547771adc27a1073ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "\tDocuments 
";
        
        $__internal_e2b7e81f3e60174232a2fc775c9d85e956f116374c837e547771adc27a1073ca->leave($__internal_e2b7e81f3e60174232a2fc775c9d85e956f116374c837e547771adc27a1073ca_prof);

    }

    // line 8
    public function block_position($context, array $blocks = array())
    {
        $__internal_62c024ccb8002593c0f46e19313cc91101c7c802d3100e51204ee1f22998b1ec = $this->env->getExtension("native_profiler");
        $__internal_62c024ccb8002593c0f46e19313cc91101c7c802d3100e51204ee1f22998b1ec->enter($__internal_62c024ccb8002593c0f46e19313cc91101c7c802d3100e51204ee1f22998b1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 9
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-tag\"></i>
            <a href=\"#\">

            \tDécision
            </a>
        </li>
        
    ";
        
        $__internal_62c024ccb8002593c0f46e19313cc91101c7c802d3100e51204ee1f22998b1ec->leave($__internal_62c024ccb8002593c0f46e19313cc91101c7c802d3100e51204ee1f22998b1ec_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_d73388ec4a8b4ef693ce80155fb753d26c2fa3c7806bb51768e7c134a16ef5cb = $this->env->getExtension("native_profiler");
        $__internal_d73388ec4a8b4ef693ce80155fb753d26c2fa3c7806bb51768e7c134a16ef5cb->enter($__internal_d73388ec4a8b4ef693ce80155fb753d26c2fa3c7806bb51768e7c134a16ef5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo twig_escape_filter($this->env, (isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")), "html", null, true);
        echo "

<div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"panel-default panel\">
            <div class=\"panel-heading\">
                Statuer et Commenter
            </div>
            <form method=\"post\" >
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label>
                            Statut : 
                        </label>
                        <select required=\"required\" name=\"decision\" class=\"form-control\">
                            <option value>Choisir le statut </option>
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["decisions"]) ? $context["decisions"] : $this->getContext($context, "decisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
            // line 38
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["decision"], "id", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["decision"], "nom", array()), "html", null, true);
            echo " </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label>Commentaire :  </label>
                        <textarea required=\"required\" rows=\"5\" name=\"commentaire\" class=\"form-control\"></textarea>
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_d73388ec4a8b4ef693ce80155fb753d26c2fa3c7806bb51768e7c134a16ef5cb->leave($__internal_d73388ec4a8b4ef693ce80155fb753d26c2fa3c7806bb51768e7c134a16ef5cb_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Default:decisionCommentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  121 => 38,  117 => 37,  98 => 21,  92 => 20,  73 => 9,  67 => 8,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::Default/consulter.html.twig' %}*/
/* {%block title%}*/
/* 	Documents | {{parent()}}*/
/* {%endblock title%}*/
/* {%block titre%}*/
/* 	Documents */
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-tag"></i>*/
/*             <a href="#">*/
/* */
/*             	Décision*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/* {%block main%}*/
/* {{competence}}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-8 col-md-offset-2">*/
/*         <div class="panel-default panel">*/
/*             <div class="panel-heading">*/
/*                 Statuer et Commenter*/
/*             </div>*/
/*             <form method="post" >*/
/*                 <div class="panel-body">*/
/*                     <div class="form-group">*/
/*                         <label>*/
/*                             Statut : */
/*                         </label>*/
/*                         <select required="required" name="decision" class="form-control">*/
/*                             <option value>Choisir le statut </option>*/
/*                             {%for decision in decisions %}*/
/*                                 <option value="{{decision.id}} ">{{decision.nom}} </option>*/
/*                             {%endfor%}*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label>Commentaire :  </label>*/
/*                         <textarea required="required" rows="5" name="commentaire" class="form-control"></textarea>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <button type="submit" class="btn btn-primary">Valider</button>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {%endblock main%}*/
/* */
