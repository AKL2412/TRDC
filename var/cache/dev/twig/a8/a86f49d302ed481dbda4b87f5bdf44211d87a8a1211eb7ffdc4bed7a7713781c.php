<?php

/* TRCAdminBundle:Profils:voir.html.twig */
class __TwigTemplate_2aa909b67624cfa69b75ca7755c2474eada588aa8ffcdeabfb838a5ee848aa64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Profils/ajouter.html.twig", "TRCAdminBundle:Profils:voir.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Profils/ajouter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4bde399506f5e51ad650202269c135c23bb4715c3a9d715249ac950d57a5284 = $this->env->getExtension("native_profiler");
        $__internal_a4bde399506f5e51ad650202269c135c23bb4715c3a9d715249ac950d57a5284->enter($__internal_a4bde399506f5e51ad650202269c135c23bb4715c3a9d715249ac950d57a5284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Profils:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bde399506f5e51ad650202269c135c23bb4715c3a9d715249ac950d57a5284->leave($__internal_a4bde399506f5e51ad650202269c135c23bb4715c3a9d715249ac950d57a5284_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_67277ceb2e2fff2db8c228623ec16aa73fd43805ee275681c24e36445ee02260 = $this->env->getExtension("native_profiler");
        $__internal_67277ceb2e2fff2db8c228623ec16aa73fd43805ee275681c24e36445ee02260->enter($__internal_67277ceb2e2fff2db8c228623ec16aa73fd43805ee275681c24e36445ee02260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "         ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "code", array()), "html", null, true);
        echo "
         |
\t   ";
        // line 5
        $this->displayParentBlock("title", $context, $blocks);
        echo "       
\t";
        
        $__internal_67277ceb2e2fff2db8c228623ec16aa73fd43805ee275681c24e36445ee02260->leave($__internal_67277ceb2e2fff2db8c228623ec16aa73fd43805ee275681c24e36445ee02260_prof);

    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        $__internal_84ff1d5027a2b71fa50262956d836a074e6cbbbb0d71a103235be8a6a5b3e79e = $this->env->getExtension("native_profiler");
        $__internal_84ff1d5027a2b71fa50262956d836a074e6cbbbb0d71a103235be8a6a5b3e79e->enter($__internal_84ff1d5027a2b71fa50262956d836a074e6cbbbb0d71a103235be8a6a5b3e79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
        echo "
    ";
        
        $__internal_84ff1d5027a2b71fa50262956d836a074e6cbbbb0d71a103235be8a6a5b3e79e->leave($__internal_84ff1d5027a2b71fa50262956d836a074e6cbbbb0d71a103235be8a6a5b3e79e_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_af97d3cce40315d9ae95335d3c0b649c44dcf8cfadcbe961d87493c86cee67f7 = $this->env->getExtension("native_profiler");
        $__internal_af97d3cce40315d9ae95335d3c0b649c44dcf8cfadcbe961d87493c86cee67f7->enter($__internal_af97d3cce40315d9ae95335d3c0b649c44dcf8cfadcbe961d87493c86cee67f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 12
        echo "        ";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-star\"></i>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_profils_voir", array("matricule" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "matricule", array()))), "html", null, true);
        echo "\">
            \t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "code", array()), "html", null, true);
        echo "
            </a>
        </li>
        
    ";
        
        $__internal_af97d3cce40315d9ae95335d3c0b649c44dcf8cfadcbe961d87493c86cee67f7->leave($__internal_af97d3cce40315d9ae95335d3c0b649c44dcf8cfadcbe961d87493c86cee67f7_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_4bda119f510167cd6b4e08c7d1043442665c99c2cd6bb1ca037b9c2b56ae0035 = $this->env->getExtension("native_profiler");
        $__internal_4bda119f510167cd6b4e08c7d1043442665c99c2cd6bb1ca037b9c2b56ae0035->enter($__internal_4bda119f510167cd6b4e08c7d1043442665c99c2cd6bb1ca037b9c2b56ae0035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "
    ";
        
        $__internal_4bda119f510167cd6b4e08c7d1043442665c99c2cd6bb1ca037b9c2b56ae0035->leave($__internal_4bda119f510167cd6b4e08c7d1043442665c99c2cd6bb1ca037b9c2b56ae0035_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Profils:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  104 => 22,  92 => 17,  88 => 16,  80 => 12,  74 => 11,  64 => 8,  58 => 7,  49 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Profils/ajouter.html.twig'%}*/
/* 	{%block title%}*/
/*          {{profil.code}}*/
/*          |*/
/* 	   {{parent()}}       */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         {{profil.nom}}*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         {{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-star"></i>*/
/*             <a href="{{url('trc_admin_profils_voir',{matricule:profil.matricule})}}">*/
/*             	{{profil.code}}*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/* */
/*     {%endblock content%}*/
