<?php

/* TRCClientBundle:MAJ:identite.html.twig */
class __TwigTemplate_910ee457a55d851cbe1b74ad617ec9db0aad1d441dc2f05a875a009c639667f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::Default/consulter.html.twig", "TRCClientBundle:MAJ:identite.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCClientBundle::Default/consulter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc6718852c951eedf247df161529ee5e65a57b4d6a83222c2c62e31254794977 = $this->env->getExtension("native_profiler");
        $__internal_cc6718852c951eedf247df161529ee5e65a57b4d6a83222c2c62e31254794977->enter($__internal_cc6718852c951eedf247df161529ee5e65a57b4d6a83222c2c62e31254794977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:identite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc6718852c951eedf247df161529ee5e65a57b4d6a83222c2c62e31254794977->leave($__internal_cc6718852c951eedf247df161529ee5e65a57b4d6a83222c2c62e31254794977_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a7fca2ba4d416df744f352e270db8e3660bd1600d9e384eba3f3beace738f11 = $this->env->getExtension("native_profiler");
        $__internal_3a7fca2ba4d416df744f352e270db8e3660bd1600d9e384eba3f3beace738f11->enter($__internal_3a7fca2ba4d416df744f352e270db8e3660bd1600d9e384eba3f3beace738f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tIdentité || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_3a7fca2ba4d416df744f352e270db8e3660bd1600d9e384eba3f3beace738f11->leave($__internal_3a7fca2ba4d416df744f352e270db8e3660bd1600d9e384eba3f3beace738f11_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e92237ae9b5ff757140100b4b3acedb380552576d8116ca37331818d5f81928d = $this->env->getExtension("native_profiler");
        $__internal_e92237ae9b5ff757140100b4b3acedb380552576d8116ca37331818d5f81928d->enter($__internal_e92237ae9b5ff757140100b4b3acedb380552576d8116ca37331818d5f81928d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout d'identité
";
        
        $__internal_e92237ae9b5ff757140100b4b3acedb380552576d8116ca37331818d5f81928d->leave($__internal_e92237ae9b5ff757140100b4b3acedb380552576d8116ca37331818d5f81928d_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_c64fd189499fae90923ca4ff27242952e0d503ec83571db23e90e527b1d41e7c = $this->env->getExtension("native_profiler");
        $__internal_c64fd189499fae90923ca4ff27242952e0d503ec83571db23e90e527b1d41e7c->enter($__internal_c64fd189499fae90923ca4ff27242952e0d503ec83571db23e90e527b1d41e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"#\">
            \tIdentité
            </a>
        </li>
        
";
        
        $__internal_c64fd189499fae90923ca4ff27242952e0d503ec83571db23e90e527b1d41e7c->leave($__internal_c64fd189499fae90923ca4ff27242952e0d503ec83571db23e90e527b1d41e7c_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_5014e11adfa6e97d937073dd8d6bbee641c1f8575ba9e7a947eba21e2fd368e5 = $this->env->getExtension("native_profiler");
        $__internal_5014e11adfa6e97d937073dd8d6bbee641c1f8575ba9e7a947eba21e2fd368e5->enter($__internal_5014e11adfa6e97d937073dd8d6bbee641c1f8575ba9e7a947eba21e2fd368e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "\t";
        $context["value"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array());
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel-default panel\">
                <div class=\"panel-heading\">
                    ";
        // line 26
        if ((null === $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()))) {
            // line 27
            echo "                        Ajout de l'identité du client
                    ";
        } else {
            // line 29
            echo "                        Modification de l'identité du client
                    ";
        }
        // line 31
        echo "                </div>
                <div class=\"panel-body\">
                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"row\">
\t                    <div class=\"form-group col-md-4\">
\t                        <label> Civilité</label>
\t                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                    </div>
\t                    <div class=\"form-group col-md-8\">
\t                        <label> Nom</label>
\t                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                    </div>
                    </div>
                    <div class=\"form-group\">
                        <label> Prenom</label>
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Numéro de pièce</label>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPiece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Pièce</label>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "piece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Pays</label>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>


                
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            
        </div>
    </div>
";
        
        $__internal_5014e11adfa6e97d937073dd8d6bbee641c1f8575ba9e7a947eba21e2fd368e5->leave($__internal_5014e11adfa6e97d937073dd8d6bbee641c1f8575ba9e7a947eba21e2fd368e5_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:MAJ:identite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 69,  176 => 66,  165 => 58,  158 => 54,  151 => 50,  144 => 46,  136 => 41,  129 => 37,  122 => 33,  118 => 31,  114 => 29,  110 => 27,  108 => 26,  102 => 22,  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::Default/consulter.html.twig'%}*/
/* {%block title%}*/
/* 	Identité || */
/* 	 {{parent()}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*    Ajout d'identité*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="#">*/
/*             	Identité*/
/*             </a>*/
/*         </li>*/
/*         */
/* {%endblock position%}*/
/* {%block content %}*/
/* 	{%set value = form.vars.value %}*/
/*     <div class="row">*/
/*         <div class="col-md-6 col-md-offset-3">*/
/*             <div class="panel-default panel">*/
/*                 <div class="panel-heading">*/
/*                     {%if value.id is null %}*/
/*                         Ajout de l'identité du client*/
/*                     {%else%}*/
/*                         Modification de l'identité du client*/
/*                     {%endif%}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{form_start(form)}}*/
/*                     <div class="row">*/
/* 	                    <div class="form-group col-md-4">*/
/* 	                        <label> Civilité</label>*/
/* 	                        {{form_widget(form.civilite,{'attr':{'class':'form-control'}})}}*/
/* 	                    </div>*/
/* 	                    <div class="form-group col-md-8">*/
/* 	                        <label> Nom</label>*/
/* 	                        {{form_widget(form.nom,{'attr':{'class':'form-control'}})}}*/
/* 	                    </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Prenom</label>*/
/*                         {{form_widget(form.prenom,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Numéro de pièce</label>*/
/*                         {{form_widget(form.numeroPiece,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Pièce</label>*/
/*                         {{form_widget(form.piece,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Pays</label>*/
/*                         {{form_widget(form.pays,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/* */
/* */
/*                 */
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <div class="form-group">*/
/*                         {{form_widget(form.save)}}*/
/*                     </div>*/
/*                 </div>*/
/*                 {{form_end(form)}}*/
/*             </div>*/
/*             */
/*         </div>*/
/*     </div>*/
/* {%endblock content %}*/
