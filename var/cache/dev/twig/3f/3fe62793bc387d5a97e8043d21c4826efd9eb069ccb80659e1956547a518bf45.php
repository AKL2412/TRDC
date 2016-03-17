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
        $__internal_b1d2c2615e36841658f6fdff62d05042854f97c2e49a6555bf6aaf4cd35f9d03 = $this->env->getExtension("native_profiler");
        $__internal_b1d2c2615e36841658f6fdff62d05042854f97c2e49a6555bf6aaf4cd35f9d03->enter($__internal_b1d2c2615e36841658f6fdff62d05042854f97c2e49a6555bf6aaf4cd35f9d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:MAJ:identite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d2c2615e36841658f6fdff62d05042854f97c2e49a6555bf6aaf4cd35f9d03->leave($__internal_b1d2c2615e36841658f6fdff62d05042854f97c2e49a6555bf6aaf4cd35f9d03_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b75ffc193cd198d06fe723c1aa2250e8723b1b5d6da7ce0447dbf0cd3093d1 = $this->env->getExtension("native_profiler");
        $__internal_95b75ffc193cd198d06fe723c1aa2250e8723b1b5d6da7ce0447dbf0cd3093d1->enter($__internal_95b75ffc193cd198d06fe723c1aa2250e8723b1b5d6da7ce0447dbf0cd3093d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tIdentité || 
\t ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "         
";
        
        $__internal_95b75ffc193cd198d06fe723c1aa2250e8723b1b5d6da7ce0447dbf0cd3093d1->leave($__internal_95b75ffc193cd198d06fe723c1aa2250e8723b1b5d6da7ce0447dbf0cd3093d1_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_9023a4d1e0ace19d2a7cb55b656929558d85bdd984d9eae7189f4e8e4b419057 = $this->env->getExtension("native_profiler");
        $__internal_9023a4d1e0ace19d2a7cb55b656929558d85bdd984d9eae7189f4e8e4b419057->enter($__internal_9023a4d1e0ace19d2a7cb55b656929558d85bdd984d9eae7189f4e8e4b419057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "   Ajout d'identité
";
        
        $__internal_9023a4d1e0ace19d2a7cb55b656929558d85bdd984d9eae7189f4e8e4b419057->leave($__internal_9023a4d1e0ace19d2a7cb55b656929558d85bdd984d9eae7189f4e8e4b419057_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_d4578fb3c35df1f9df140f3c5cc2a062110f3b9f06c5949a04872c7c23621f51 = $this->env->getExtension("native_profiler");
        $__internal_d4578fb3c35df1f9df140f3c5cc2a062110f3b9f06c5949a04872c7c23621f51->enter($__internal_d4578fb3c35df1f9df140f3c5cc2a062110f3b9f06c5949a04872c7c23621f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_d4578fb3c35df1f9df140f3c5cc2a062110f3b9f06c5949a04872c7c23621f51->leave($__internal_d4578fb3c35df1f9df140f3c5cc2a062110f3b9f06c5949a04872c7c23621f51_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_f06ae9476aa99aca43d3e4c4b082f89c6c193a6cc9cde0945e192921c29b8ff3 = $this->env->getExtension("native_profiler");
        $__internal_f06ae9476aa99aca43d3e4c4b082f89c6c193a6cc9cde0945e192921c29b8ff3->enter($__internal_f06ae9476aa99aca43d3e4c4b082f89c6c193a6cc9cde0945e192921c29b8ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_f06ae9476aa99aca43d3e4c4b082f89c6c193a6cc9cde0945e192921c29b8ff3->leave($__internal_f06ae9476aa99aca43d3e4c4b082f89c6c193a6cc9cde0945e192921c29b8ff3_prof);

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
        return array (  99 => 21,  93 => 20,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/* 	{{form(form)}}*/
/* {%endblock content %}*/
