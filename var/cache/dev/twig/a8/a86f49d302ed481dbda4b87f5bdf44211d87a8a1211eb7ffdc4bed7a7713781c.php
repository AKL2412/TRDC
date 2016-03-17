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
        $__internal_f5cb42e23534ab95fbe09be1aaeaa86720788d6455931084c532b4092d83da7c = $this->env->getExtension("native_profiler");
        $__internal_f5cb42e23534ab95fbe09be1aaeaa86720788d6455931084c532b4092d83da7c->enter($__internal_f5cb42e23534ab95fbe09be1aaeaa86720788d6455931084c532b4092d83da7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Profils:voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5cb42e23534ab95fbe09be1aaeaa86720788d6455931084c532b4092d83da7c->leave($__internal_f5cb42e23534ab95fbe09be1aaeaa86720788d6455931084c532b4092d83da7c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a0e3a62ccbf0f333c18c60d550c7e3d55511b6b52f78962bc497183cfb3f73a = $this->env->getExtension("native_profiler");
        $__internal_2a0e3a62ccbf0f333c18c60d550c7e3d55511b6b52f78962bc497183cfb3f73a->enter($__internal_2a0e3a62ccbf0f333c18c60d550c7e3d55511b6b52f78962bc497183cfb3f73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_2a0e3a62ccbf0f333c18c60d550c7e3d55511b6b52f78962bc497183cfb3f73a->leave($__internal_2a0e3a62ccbf0f333c18c60d550c7e3d55511b6b52f78962bc497183cfb3f73a_prof);

    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        $__internal_423a3c7db47aa60e705f95c3d70354b15d37085ffafb563237ff0c7d949b0520 = $this->env->getExtension("native_profiler");
        $__internal_423a3c7db47aa60e705f95c3d70354b15d37085ffafb563237ff0c7d949b0520->enter($__internal_423a3c7db47aa60e705f95c3d70354b15d37085ffafb563237ff0c7d949b0520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 8
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
        echo "
    ";
        
        $__internal_423a3c7db47aa60e705f95c3d70354b15d37085ffafb563237ff0c7d949b0520->leave($__internal_423a3c7db47aa60e705f95c3d70354b15d37085ffafb563237ff0c7d949b0520_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_eff5216934dbf176646f5dcf7aa814b72a8be2840d2df3132e01228ec9878860 = $this->env->getExtension("native_profiler");
        $__internal_eff5216934dbf176646f5dcf7aa814b72a8be2840d2df3132e01228ec9878860->enter($__internal_eff5216934dbf176646f5dcf7aa814b72a8be2840d2df3132e01228ec9878860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_eff5216934dbf176646f5dcf7aa814b72a8be2840d2df3132e01228ec9878860->leave($__internal_eff5216934dbf176646f5dcf7aa814b72a8be2840d2df3132e01228ec9878860_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_49b53652c0eb8a2c364304f5cd3b83b74974e2eb87389d767c4e3f30bb8639b5 = $this->env->getExtension("native_profiler");
        $__internal_49b53652c0eb8a2c364304f5cd3b83b74974e2eb87389d767c4e3f30bb8639b5->enter($__internal_49b53652c0eb8a2c364304f5cd3b83b74974e2eb87389d767c4e3f30bb8639b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")));
        echo "
    ";
        
        $__internal_49b53652c0eb8a2c364304f5cd3b83b74974e2eb87389d767c4e3f30bb8639b5->leave($__internal_49b53652c0eb8a2c364304f5cd3b83b74974e2eb87389d767c4e3f30bb8639b5_prof);

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
/*     {{dump(profil)}}*/
/*     {%endblock content%}*/
