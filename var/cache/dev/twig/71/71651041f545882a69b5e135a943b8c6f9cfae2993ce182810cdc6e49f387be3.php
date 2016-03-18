<?php

/* TRCClientBundle:MAJ:employeur.html.twig */
class __TwigTemplate_a7cf19d90294de9ef9b673461683ac41fe33d5cc937d24b9a6c867f4ec0d8477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::Default/consulter.html.twig", "TRCClientBundle:MAJ:employeur.html.twig", 1);
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
        $__internal_5b49b0f545149203f1ba35d98c2b4a9e53445aa1be1e68523ab38e7edc30ec40 = $this->env->getExtension("native_profiler");
        $__internal_5b49b0f545149203f1ba35d98c2b4a9e53445aa1be1e68523ab38e7edc30ec40->enter($__internal_5b49b0f545149203f1ba35d98c2b4a9e53445aa1be1e68523ab38e7edc30ec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:employeur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b49b0f545149203f1ba35d98c2b4a9e53445aa1be1e68523ab38e7edc30ec40->leave($__internal_5b49b0f545149203f1ba35d98c2b4a9e53445aa1be1e68523ab38e7edc30ec40_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9a70c97b15b1fdb272bd8fab79bd8cf490e81a5fc84fda9d95d0eb42bcd1683 = $this->env->getExtension("native_profiler");
        $__internal_d9a70c97b15b1fdb272bd8fab79bd8cf490e81a5fc84fda9d95d0eb42bcd1683->enter($__internal_d9a70c97b15b1fdb272bd8fab79bd8cf490e81a5fc84fda9d95d0eb42bcd1683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tEmployeur || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_d9a70c97b15b1fdb272bd8fab79bd8cf490e81a5fc84fda9d95d0eb42bcd1683->leave($__internal_d9a70c97b15b1fdb272bd8fab79bd8cf490e81a5fc84fda9d95d0eb42bcd1683_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5e2cba9d5bcb51c0f8c510dcb517f879a789b2056c3141809c803927e5ed6f5b = $this->env->getExtension("native_profiler");
        $__internal_5e2cba9d5bcb51c0f8c510dcb517f879a789b2056c3141809c803927e5ed6f5b->enter($__internal_5e2cba9d5bcb51c0f8c510dcb517f879a789b2056c3141809c803927e5ed6f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout de l'employeur
";
        
        $__internal_5e2cba9d5bcb51c0f8c510dcb517f879a789b2056c3141809c803927e5ed6f5b->leave($__internal_5e2cba9d5bcb51c0f8c510dcb517f879a789b2056c3141809c803927e5ed6f5b_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_01f0450eebfbb841eb64d64fbbf2565305b14fb1a324a2897d4999cfe03acb99 = $this->env->getExtension("native_profiler");
        $__internal_01f0450eebfbb841eb64d64fbbf2565305b14fb1a324a2897d4999cfe03acb99->enter($__internal_01f0450eebfbb841eb64d64fbbf2565305b14fb1a324a2897d4999cfe03acb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"#\">
            \tEmployeur
            </a>
        </li>
        
";
        
        $__internal_01f0450eebfbb841eb64d64fbbf2565305b14fb1a324a2897d4999cfe03acb99->leave($__internal_01f0450eebfbb841eb64d64fbbf2565305b14fb1a324a2897d4999cfe03acb99_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_c7f36d2aa0d219672a810eb1982df4a329ed037befaf38ed15fa96a0007a55ea = $this->env->getExtension("native_profiler");
        $__internal_c7f36d2aa0d219672a810eb1982df4a329ed037befaf38ed15fa96a0007a55ea->enter($__internal_c7f36d2aa0d219672a810eb1982df4a329ed037befaf38ed15fa96a0007a55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                        Ajout de l'employeur
                    ";
        } else {
            // line 29
            echo "                        Modification de l'employeur
                    ";
        }
        // line 31
        echo "                </div>
                <div class=\"panel-body\">
                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"form-group\">
                        <label> Dénomination</label>
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Téléphone</label>
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Fax</label>
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Ville</label>
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label> Adresse</label>
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseSociale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>


                
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            
        </div>
    </div>
";
        
        $__internal_c7f36d2aa0d219672a810eb1982df4a329ed037befaf38ed15fa96a0007a55ea->leave($__internal_c7f36d2aa0d219672a810eb1982df4a329ed037befaf38ed15fa96a0007a55ea_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:MAJ:employeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  167 => 60,  156 => 52,  149 => 48,  142 => 44,  135 => 40,  128 => 36,  122 => 33,  118 => 31,  114 => 29,  110 => 27,  108 => 26,  102 => 22,  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::Default/consulter.html.twig'%}*/
/* {%block title%}*/
/* 	Employeur || */
/* 	 {{parent()}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*    Ajout de l'employeur*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="#">*/
/*             	Employeur*/
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
/*                         Ajout de l'employeur*/
/*                     {%else%}*/
/*                         Modification de l'employeur*/
/*                     {%endif%}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{form_start(form)}}*/
/*                     <div class="form-group">*/
/*                         <label> Dénomination</label>*/
/*                         {{form_widget(form.denomination,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Téléphone</label>*/
/*                         {{form_widget(form.telephone,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Fax</label>*/
/*                         {{form_widget(form.fax,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Ville</label>*/
/*                         {{form_widget(form.ville,{'attr':{'class':'form-control'}})}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label> Adresse</label>*/
/*                         {{form_widget(form.adresseSociale,{'attr':{'class':'form-control'}})}}*/
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
