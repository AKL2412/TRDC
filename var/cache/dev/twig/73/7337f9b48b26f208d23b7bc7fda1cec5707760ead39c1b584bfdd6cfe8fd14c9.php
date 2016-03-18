<?php

/* TRCClientBundle:MAJ:Logement.html.twig */
class __TwigTemplate_16c924695bf2c4cfb398c7c94b177c6e02983df84ce1e18cf221db00da86ab3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::Default/consulter.html.twig", "TRCClientBundle:MAJ:Logement.html.twig", 1);
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
        $__internal_1506e6e47481d5acc2edfd60ef05d7544a98d6e6b3dcdb4b760405d1c0fb1c18 = $this->env->getExtension("native_profiler");
        $__internal_1506e6e47481d5acc2edfd60ef05d7544a98d6e6b3dcdb4b760405d1c0fb1c18->enter($__internal_1506e6e47481d5acc2edfd60ef05d7544a98d6e6b3dcdb4b760405d1c0fb1c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:Logement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1506e6e47481d5acc2edfd60ef05d7544a98d6e6b3dcdb4b760405d1c0fb1c18->leave($__internal_1506e6e47481d5acc2edfd60ef05d7544a98d6e6b3dcdb4b760405d1c0fb1c18_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e70e74367289f454c267842623fbfd3a41fa7c6616f59a2943bd3150c4c7ca1 = $this->env->getExtension("native_profiler");
        $__internal_6e70e74367289f454c267842623fbfd3a41fa7c6616f59a2943bd3150c4c7ca1->enter($__internal_6e70e74367289f454c267842623fbfd3a41fa7c6616f59a2943bd3150c4c7ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tLogement || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_6e70e74367289f454c267842623fbfd3a41fa7c6616f59a2943bd3150c4c7ca1->leave($__internal_6e70e74367289f454c267842623fbfd3a41fa7c6616f59a2943bd3150c4c7ca1_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_f194c491365961c5e539bcd45a224ddf0ac352ce4f9834bbd5158a0d91ce3a30 = $this->env->getExtension("native_profiler");
        $__internal_f194c491365961c5e539bcd45a224ddf0ac352ce4f9834bbd5158a0d91ce3a30->enter($__internal_f194c491365961c5e539bcd45a224ddf0ac352ce4f9834bbd5158a0d91ce3a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout de logement
";
        
        $__internal_f194c491365961c5e539bcd45a224ddf0ac352ce4f9834bbd5158a0d91ce3a30->leave($__internal_f194c491365961c5e539bcd45a224ddf0ac352ce4f9834bbd5158a0d91ce3a30_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_3c2be8f6282beb258ff03a119c1bf9dc8d922de0df7b5a4a210d0e922077e7d9 = $this->env->getExtension("native_profiler");
        $__internal_3c2be8f6282beb258ff03a119c1bf9dc8d922de0df7b5a4a210d0e922077e7d9->enter($__internal_3c2be8f6282beb258ff03a119c1bf9dc8d922de0df7b5a4a210d0e922077e7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"#\">
            \tLogement
            </a>
        </li>
        
";
        
        $__internal_3c2be8f6282beb258ff03a119c1bf9dc8d922de0df7b5a4a210d0e922077e7d9->leave($__internal_3c2be8f6282beb258ff03a119c1bf9dc8d922de0df7b5a4a210d0e922077e7d9_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd142d98273264e9a3468fd4d435092d1904c45231fb8c0720fabcfc94fc9673 = $this->env->getExtension("native_profiler");
        $__internal_bd142d98273264e9a3468fd4d435092d1904c45231fb8c0720fabcfc94fc9673->enter($__internal_bd142d98273264e9a3468fd4d435092d1904c45231fb8c0720fabcfc94fc9673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                        Ajout du logement du client
                    ";
        } else {
            // line 29
            echo "                        Modification du logement du client
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
                            <label> Frais de location mensuelle</label>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "flm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <hr>
                        <div class=\"form-group\">
                            <label> Statut</label>
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                   
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            
        </div>
    </div>
";
        
        $__internal_bd142d98273264e9a3468fd4d435092d1904c45231fb8c0720fabcfc94fc9673->leave($__internal_bd142d98273264e9a3468fd4d435092d1904c45231fb8c0720fabcfc94fc9673_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:MAJ:Logement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  146 => 48,  137 => 42,  129 => 37,  122 => 33,  118 => 31,  114 => 29,  110 => 27,  108 => 26,  102 => 22,  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::Default/consulter.html.twig'%}*/
/* {%block title%}*/
/* 	Logement || */
/* 	 {{parent()}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*    Ajout de logement*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="#">*/
/*             	Logement*/
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
/*                         Ajout du logement du client*/
/*                     {%else%}*/
/*                         Modification du logement du client*/
/*                     {%endif%}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{form_start(form)}}*/
/*                     */
/*                         <div class="form-group ">*/
/*                             <label> Frais de location mensuelle</label>*/
/*                             {{form_widget(form.flm,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <hr>*/
/*                         <div class="form-group">*/
/*                             <label> Statut</label>*/
/*                             {{form_widget(form.statut,{'attr':{'class':'form-control'}})}}*/
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
