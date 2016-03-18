<?php

/* TRCClientBundle:MAJ:Coordonnee.html.twig */
class __TwigTemplate_119c7a572280dd0d2c680086ce8df05a3353569fe3585e58a17dbe4d9a5c1188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::Default/consulter.html.twig", "TRCClientBundle:MAJ:Coordonnee.html.twig", 1);
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
        $__internal_fcc6ac18aa7eed05bf78f133f81ca090764ce7f1029b1dc98900ec10b2394078 = $this->env->getExtension("native_profiler");
        $__internal_fcc6ac18aa7eed05bf78f133f81ca090764ce7f1029b1dc98900ec10b2394078->enter($__internal_fcc6ac18aa7eed05bf78f133f81ca090764ce7f1029b1dc98900ec10b2394078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:Coordonnee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc6ac18aa7eed05bf78f133f81ca090764ce7f1029b1dc98900ec10b2394078->leave($__internal_fcc6ac18aa7eed05bf78f133f81ca090764ce7f1029b1dc98900ec10b2394078_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6652b11b3c6e724c293f74e4a5cf85f91c610bbff899dd80d303b3093f575b2c = $this->env->getExtension("native_profiler");
        $__internal_6652b11b3c6e724c293f74e4a5cf85f91c610bbff899dd80d303b3093f575b2c->enter($__internal_6652b11b3c6e724c293f74e4a5cf85f91c610bbff899dd80d303b3093f575b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tCoordonnées || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_6652b11b3c6e724c293f74e4a5cf85f91c610bbff899dd80d303b3093f575b2c->leave($__internal_6652b11b3c6e724c293f74e4a5cf85f91c610bbff899dd80d303b3093f575b2c_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a98271d9a933a7919d605473f17100ada30752740dd47ed1045a753e75c9b091 = $this->env->getExtension("native_profiler");
        $__internal_a98271d9a933a7919d605473f17100ada30752740dd47ed1045a753e75c9b091->enter($__internal_a98271d9a933a7919d605473f17100ada30752740dd47ed1045a753e75c9b091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout de coordonnées
";
        
        $__internal_a98271d9a933a7919d605473f17100ada30752740dd47ed1045a753e75c9b091->leave($__internal_a98271d9a933a7919d605473f17100ada30752740dd47ed1045a753e75c9b091_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_c1610ad4ddc5ff90b6400d05425392289d417de1ac90689ce07bd04ef5bc2c43 = $this->env->getExtension("native_profiler");
        $__internal_c1610ad4ddc5ff90b6400d05425392289d417de1ac90689ce07bd04ef5bc2c43->enter($__internal_c1610ad4ddc5ff90b6400d05425392289d417de1ac90689ce07bd04ef5bc2c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"#\">
            \tCoordonnées
            </a>
        </li>
        
";
        
        $__internal_c1610ad4ddc5ff90b6400d05425392289d417de1ac90689ce07bd04ef5bc2c43->leave($__internal_c1610ad4ddc5ff90b6400d05425392289d417de1ac90689ce07bd04ef5bc2c43_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8a22d2d1f38d16e710049c26c03353b9d08b008eaf3597913ffef1f8fa4c094 = $this->env->getExtension("native_profiler");
        $__internal_f8a22d2d1f38d16e710049c26c03353b9d08b008eaf3597913ffef1f8fa4c094->enter($__internal_f8a22d2d1f38d16e710049c26c03353b9d08b008eaf3597913ffef1f8fa4c094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                        Ajout de coordonnées du client
                    ";
        } else {
            // line 29
            echo "                        Modification de coordonnées du client
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
                            <label> Tél. professionnel</label>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneProfessionnel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label> Tél. domicile</label>
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephoneDomicile", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                   
                    <div class=\"form-group\">
                        <label> Tél. mobile</label>
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gsm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Email</label>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Ville</label>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Boite postale</label>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boitePostale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Adresse</label>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            
        </div>
    </div>
";
        
        $__internal_f8a22d2d1f38d16e710049c26c03353b9d08b008eaf3597913ffef1f8fa4c094->leave($__internal_f8a22d2d1f38d16e710049c26c03353b9d08b008eaf3597913ffef1f8fa4c094_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:MAJ:Coordonnee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 70,  180 => 67,  172 => 62,  165 => 58,  158 => 54,  151 => 50,  144 => 46,  136 => 41,  129 => 37,  122 => 33,  118 => 31,  114 => 29,  110 => 27,  108 => 26,  102 => 22,  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::Default/consulter.html.twig'%}*/
/* {%block title%}*/
/* 	Coordonnées || */
/* 	 {{parent()}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*    Ajout de coordonnées*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="#">*/
/*             	Coordonnées*/
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
/*                         Ajout de coordonnées du client*/
/*                     {%else%}*/
/*                         Modification de coordonnées du client*/
/*                     {%endif%}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{form_start(form)}}*/
/*                     */
/*                         <div class="form-group ">*/
/*                             <label> Tél. professionnel</label>*/
/*                             {{form_widget(form.telephoneProfessionnel,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label> Tél. domicile</label>*/
/*                             {{form_widget(form.telephoneDomicile,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                    */
/*                     <div class="form-group">*/
/*                         <label> Tél. mobile</label>*/
/*                         {{form_widget(form.gsm,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Email</label>*/
/*                         {{form_widget(form.email,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Ville</label>*/
/*                         {{form_widget(form.ville,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Boite postale</label>*/
/*                         {{form_widget(form.boitePostale,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Adresse</label>*/
/*                         {{form_widget(form.adresse,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
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
