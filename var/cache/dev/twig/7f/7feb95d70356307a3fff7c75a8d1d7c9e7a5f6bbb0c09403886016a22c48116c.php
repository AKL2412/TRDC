<?php

/* TRCClientBundle:MAJ:profession.html.twig */
class __TwigTemplate_0aa03609a9d5c24eccfaac554bcc171e1883640cde7821abba571732c17bd992 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::Default/consulter.html.twig", "TRCClientBundle:MAJ:profession.html.twig", 1);
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
        $__internal_759b0ee025c4a5d73ae7889b42ae62812fb66e1b109700449380d9cd55142089 = $this->env->getExtension("native_profiler");
        $__internal_759b0ee025c4a5d73ae7889b42ae62812fb66e1b109700449380d9cd55142089->enter($__internal_759b0ee025c4a5d73ae7889b42ae62812fb66e1b109700449380d9cd55142089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:profession.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759b0ee025c4a5d73ae7889b42ae62812fb66e1b109700449380d9cd55142089->leave($__internal_759b0ee025c4a5d73ae7889b42ae62812fb66e1b109700449380d9cd55142089_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac41fdcea474719f5be60c6519fd2fc27fa9079489972a58e8b5a16af0f58b0c = $this->env->getExtension("native_profiler");
        $__internal_ac41fdcea474719f5be60c6519fd2fc27fa9079489972a58e8b5a16af0f58b0c->enter($__internal_ac41fdcea474719f5be60c6519fd2fc27fa9079489972a58e8b5a16af0f58b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tprofession || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_ac41fdcea474719f5be60c6519fd2fc27fa9079489972a58e8b5a16af0f58b0c->leave($__internal_ac41fdcea474719f5be60c6519fd2fc27fa9079489972a58e8b5a16af0f58b0c_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a9d2d071e81228d82f6de0a1b187458337cf85d3951f2225a3e242c925ae758b = $this->env->getExtension("native_profiler");
        $__internal_a9d2d071e81228d82f6de0a1b187458337cf85d3951f2225a3e242c925ae758b->enter($__internal_a9d2d071e81228d82f6de0a1b187458337cf85d3951f2225a3e242c925ae758b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout de profession
";
        
        $__internal_a9d2d071e81228d82f6de0a1b187458337cf85d3951f2225a3e242c925ae758b->leave($__internal_a9d2d071e81228d82f6de0a1b187458337cf85d3951f2225a3e242c925ae758b_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_b716606d815cf4202662ad13624d573a45957e92d660851d189b49584d23aa07 = $this->env->getExtension("native_profiler");
        $__internal_b716606d815cf4202662ad13624d573a45957e92d660851d189b49584d23aa07->enter($__internal_b716606d815cf4202662ad13624d573a45957e92d660851d189b49584d23aa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-user\"></i>
            <a href=\"#\">
            \tprofession
            </a>
        </li>
        
";
        
        $__internal_b716606d815cf4202662ad13624d573a45957e92d660851d189b49584d23aa07->leave($__internal_b716606d815cf4202662ad13624d573a45957e92d660851d189b49584d23aa07_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_5515904b7e8bef383a9221e2b5c1c2307a4926fa21f1668aac5ac0e99c44c233 = $this->env->getExtension("native_profiler");
        $__internal_5515904b7e8bef383a9221e2b5c1c2307a4926fa21f1668aac5ac0e99c44c233->enter($__internal_5515904b7e8bef383a9221e2b5c1c2307a4926fa21f1668aac5ac0e99c44c233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                        Ajout de la profession du client
                    ";
        } else {
            // line 29
            echo "                        Modification de la profession du client
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
                            <label> Fonction</label>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            <label> Type de fonction</label>
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typefonction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                   
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            
        </div>
    </div>
";
        
        $__internal_5515904b7e8bef383a9221e2b5c1c2307a4926fa21f1668aac5ac0e99c44c233->leave($__internal_5515904b7e8bef383a9221e2b5c1c2307a4926fa21f1668aac5ac0e99c44c233_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:MAJ:profession.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  145 => 47,  136 => 41,  129 => 37,  122 => 33,  118 => 31,  114 => 29,  110 => 27,  108 => 26,  102 => 22,  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::Default/consulter.html.twig'%}*/
/* {%block title%}*/
/* 	profession || */
/* 	 {{parent()}}         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*    Ajout de profession*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-user"></i>*/
/*             <a href="#">*/
/*             	profession*/
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
/*                         Ajout de la profession du client*/
/*                     {%else%}*/
/*                         Modification de la profession du client*/
/*                     {%endif%}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     {{form_start(form)}}*/
/*                     */
/*                         <div class="form-group ">*/
/*                             <label> Fonction</label>*/
/*                             {{form_widget(form.fonction,{'attr':{'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label> Type de fonction</label>*/
/*                             {{form_widget(form.typefonction,{'attr':{'class':'form-control'}})}}*/
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
