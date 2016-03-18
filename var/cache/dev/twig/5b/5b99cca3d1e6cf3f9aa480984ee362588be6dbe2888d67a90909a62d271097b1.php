<?php

/* TRCClientBundle:MAJ:revenu.html.twig */
class __TwigTemplate_88f9d76d1f818da99ac88b8b05efd371d51e4565bf684b29ba540db5a9fcd677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::Default/consulter.html.twig", "TRCClientBundle:MAJ:revenu.html.twig", 1);
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
        $__internal_8234dcdd6245a48663250e1eff4c18965d6dd7cfb158a5b4289caef3f8e78c42 = $this->env->getExtension("native_profiler");
        $__internal_8234dcdd6245a48663250e1eff4c18965d6dd7cfb158a5b4289caef3f8e78c42->enter($__internal_8234dcdd6245a48663250e1eff4c18965d6dd7cfb158a5b4289caef3f8e78c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:revenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8234dcdd6245a48663250e1eff4c18965d6dd7cfb158a5b4289caef3f8e78c42->leave($__internal_8234dcdd6245a48663250e1eff4c18965d6dd7cfb158a5b4289caef3f8e78c42_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_36b39c0008526ddca10a09e619704117fa5f45d1534e3688bb2cec70ee141871 = $this->env->getExtension("native_profiler");
        $__internal_36b39c0008526ddca10a09e619704117fa5f45d1534e3688bb2cec70ee141871->enter($__internal_36b39c0008526ddca10a09e619704117fa5f45d1534e3688bb2cec70ee141871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\trevenu || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_36b39c0008526ddca10a09e619704117fa5f45d1534e3688bb2cec70ee141871->leave($__internal_36b39c0008526ddca10a09e619704117fa5f45d1534e3688bb2cec70ee141871_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_334feb340d24818618de21ddde2f11235b2f76907c7678a310dcc8dfb112f16a = $this->env->getExtension("native_profiler");
        $__internal_334feb340d24818618de21ddde2f11235b2f76907c7678a310dcc8dfb112f16a->enter($__internal_334feb340d24818618de21ddde2f11235b2f76907c7678a310dcc8dfb112f16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout de revenu
";
        
        $__internal_334feb340d24818618de21ddde2f11235b2f76907c7678a310dcc8dfb112f16a->leave($__internal_334feb340d24818618de21ddde2f11235b2f76907c7678a310dcc8dfb112f16a_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_7b3d8cb2407cd319a78388bc292b1362eedacb4af7791e94c198a5c849e8e31d = $this->env->getExtension("native_profiler");
        $__internal_7b3d8cb2407cd319a78388bc292b1362eedacb4af7791e94c198a5c849e8e31d->enter($__internal_7b3d8cb2407cd319a78388bc292b1362eedacb4af7791e94c198a5c849e8e31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"#\">
            \trevenu
            </a>
        </li>
        
";
        
        $__internal_7b3d8cb2407cd319a78388bc292b1362eedacb4af7791e94c198a5c849e8e31d->leave($__internal_7b3d8cb2407cd319a78388bc292b1362eedacb4af7791e94c198a5c849e8e31d_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc1398c16675fd5fcf32a492e392d979f3203921475097f6455e7737e0d56cd3 = $this->env->getExtension("native_profiler");
        $__internal_dc1398c16675fd5fcf32a492e392d979f3203921475097f6455e7737e0d56cd3->enter($__internal_dc1398c16675fd5fcf32a492e392d979f3203921475097f6455e7737e0d56cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                        Ajout du revenu du client
                    ";
        } else {
            // line 29
            echo "                        Modification du revenu du client
                    ";
        }
        // line 31
        echo "                </div>
                <div class=\"panel-body\">
                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    
                        <div class=\"form-group \">
                            <label> Revenu salarial mensuel net</label>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rsmn", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <hr>
                        <div class=\"form-group\">
                            <label> Nature d'autres revenus</label>
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "natureAutresRevenus", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label> Montant</label>
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label> Périodicité</label>
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodicite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                   
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            
        </div>
    </div>
";
        
        $__internal_dc1398c16675fd5fcf32a492e392d979f3203921475097f6455e7737e0d56cd3->leave($__internal_dc1398c16675fd5fcf32a492e392d979f3203921475097f6455e7737e0d56cd3_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:MAJ:revenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 59,  160 => 56,  151 => 50,  144 => 46,  137 => 42,  129 => 37,  122 => 33,  118 => 31,  114 => 29,  110 => 27,  108 => 26,  102 => 22,  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::Default/consulter.html.twig'%}*/
/* {%block title%}*/
/* 	revenu || */
/* 	 {{parent()}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*    Ajout de revenu*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="#">*/
/*             	revenu*/
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
/*                         Ajout du revenu du client*/
/*                     {%else%}*/
/*                         Modification du revenu du client*/
/*                     {%endif%}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{form_start(form)}}*/
/*                     */
/*                         <div class="form-group ">*/
/*                             <label> Revenu salarial mensuel net</label>*/
/*                             {{form_widget(form.rsmn,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <hr>*/
/*                         <div class="form-group">*/
/*                             <label> Nature d'autres revenus</label>*/
/*                             {{form_widget(form.natureAutresRevenus,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label> Montant</label>*/
/*                             {{form_widget(form.montant,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label> Périodicité</label>*/
/*                             {{form_widget(form.periodicite,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                    */
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
