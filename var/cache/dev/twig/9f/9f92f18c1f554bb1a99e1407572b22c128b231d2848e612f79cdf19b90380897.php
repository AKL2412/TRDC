<?php

/* TRCClientBundle:MAJ:PAC.html.twig */
class __TwigTemplate_49c6f6fcd7f686ac87232a7ddbb37812d61db5c82fbb34d027de9c968ebb1b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::Default/consulter.html.twig", "TRCClientBundle:MAJ:PAC.html.twig", 1);
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
        $__internal_d736b3fa1855b728d755ee269ac3b011bb453a5c0ce33d0282dc280269dd9e8d = $this->env->getExtension("native_profiler");
        $__internal_d736b3fa1855b728d755ee269ac3b011bb453a5c0ce33d0282dc280269dd9e8d->enter($__internal_d736b3fa1855b728d755ee269ac3b011bb453a5c0ce33d0282dc280269dd9e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:PAC.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d736b3fa1855b728d755ee269ac3b011bb453a5c0ce33d0282dc280269dd9e8d->leave($__internal_d736b3fa1855b728d755ee269ac3b011bb453a5c0ce33d0282dc280269dd9e8d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_48f333bfc06a33e67e862a3a429206da8283763301aab6c03d25c38edd7360cd = $this->env->getExtension("native_profiler");
        $__internal_48f333bfc06a33e67e862a3a429206da8283763301aab6c03d25c38edd7360cd->enter($__internal_48f333bfc06a33e67e862a3a429206da8283763301aab6c03d25c38edd7360cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tPAC || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_48f333bfc06a33e67e862a3a429206da8283763301aab6c03d25c38edd7360cd->leave($__internal_48f333bfc06a33e67e862a3a429206da8283763301aab6c03d25c38edd7360cd_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_dc37de0792ea6495c701a262d133d88b1f42326732f9088ff5f7414cb478b60d = $this->env->getExtension("native_profiler");
        $__internal_dc37de0792ea6495c701a262d133d88b1f42326732f9088ff5f7414cb478b60d->enter($__internal_dc37de0792ea6495c701a262d133d88b1f42326732f9088ff5f7414cb478b60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout de PAC
";
        
        $__internal_dc37de0792ea6495c701a262d133d88b1f42326732f9088ff5f7414cb478b60d->leave($__internal_dc37de0792ea6495c701a262d133d88b1f42326732f9088ff5f7414cb478b60d_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_92b8f486d6c2ea966193733aa1ead5ccc3e4f09824829db5610985f42a9d98c2 = $this->env->getExtension("native_profiler");
        $__internal_92b8f486d6c2ea966193733aa1ead5ccc3e4f09824829db5610985f42a9d98c2->enter($__internal_92b8f486d6c2ea966193733aa1ead5ccc3e4f09824829db5610985f42a9d98c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"#\">
            \tPAC
            </a>
        </li>
        
";
        
        $__internal_92b8f486d6c2ea966193733aa1ead5ccc3e4f09824829db5610985f42a9d98c2->leave($__internal_92b8f486d6c2ea966193733aa1ead5ccc3e4f09824829db5610985f42a9d98c2_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_696c6e669cd17ab44acab18c33edba56c53a0f2256f2e2d8e139f6c2bfee8f08 = $this->env->getExtension("native_profiler");
        $__internal_696c6e669cd17ab44acab18c33edba56c53a0f2256f2e2d8e139f6c2bfee8f08->enter($__internal_696c6e669cd17ab44acab18c33edba56c53a0f2256f2e2d8e139f6c2bfee8f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                        Ajout de PAC du client
                    ";
        } else {
            // line 29
            echo "                        Modification de PAC du client
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
                            <label> Nom</label>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label>Prenom</label>
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                         <div class=\"form-group\">
                            <label>Lien de parenté</label>
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lpd", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                   <hr>
                    <div class=\"form-group \">
                            <label> Tél. professionnel</label>
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "telephoneProfessionnel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label> Tél. domicile</label>
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "telephoneDomicile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                   
                    <div class=\"form-group\">
                        <label> Tél. mobile</label>
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "gsm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Email</label>
                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Ville</label>
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Boite postale</label>
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "boitePostale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Adresse</label>
                        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordonnee", array()), "save", array()), 'widget', array("attr" => array("hidden" => "hidden", "class" => "hidden")));
        echo "
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            
        </div>
    </div>
";
        
        $__internal_696c6e669cd17ab44acab18c33edba56c53a0f2256f2e2d8e139f6c2bfee8f08->leave($__internal_696c6e669cd17ab44acab18c33edba56c53a0f2256f2e2d8e139f6c2bfee8f08_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:MAJ:PAC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 84,  206 => 81,  199 => 77,  194 => 75,  187 => 71,  180 => 67,  173 => 63,  166 => 59,  158 => 54,  151 => 50,  143 => 45,  136 => 41,  129 => 37,  122 => 33,  118 => 31,  114 => 29,  110 => 27,  108 => 26,  102 => 22,  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::Default/consulter.html.twig'%}*/
/* {%block title%}*/
/* 	PAC || */
/* 	 {{parent()}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*    Ajout de PAC*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="#">*/
/*             	PAC*/
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
/*                         Ajout de PAC du client*/
/*                     {%else%}*/
/*                         Modification de PAC du client*/
/*                     {%endif%}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{form_start(form)}}*/
/*                     */
/*                         <div class="form-group ">*/
/*                             <label> Nom</label>*/
/*                             {{form_widget(form.nom,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Prenom</label>*/
/*                             {{form_widget(form.prenom,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                          <div class="form-group">*/
/*                             <label>Lien de parenté</label>*/
/*                             {{form_widget(form.lpd,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                    <hr>*/
/*                     <div class="form-group ">*/
/*                             <label> Tél. professionnel</label>*/
/*                             {{form_widget(form.coordonnee.telephoneProfessionnel,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label> Tél. domicile</label>*/
/*                             {{form_widget(form.coordonnee.telephoneDomicile,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                    */
/*                     <div class="form-group">*/
/*                         <label> Tél. mobile</label>*/
/*                         {{form_widget(form.coordonnee.gsm,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Email</label>*/
/*                         {{form_widget(form.coordonnee.email,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Ville</label>*/
/*                         {{form_widget(form.coordonnee.ville,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Boite postale</label>*/
/*                         {{form_widget(form.coordonnee.boitePostale,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Adresse</label>*/
/*                         {{form_widget(form.coordonnee.adresse,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     {{form_widget(form.coordonnee.save,{'attr':{'hidden':'hidden','class':'hidden'}})}}*/
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
