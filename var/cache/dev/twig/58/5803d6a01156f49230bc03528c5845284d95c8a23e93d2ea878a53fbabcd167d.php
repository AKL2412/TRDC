<?php

/* TRCDDCBundle::ddc.html.twig */
class __TwigTemplate_3742f598aad6235298deb34feda637bc8ede1536afcb22f7020b7e378ad701c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCDDCBundle::ddc.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c246b4c16d0e96a198f2c9391919898c140a67c92ec3932031b3dcc0d2f6622 = $this->env->getExtension("native_profiler");
        $__internal_5c246b4c16d0e96a198f2c9391919898c140a67c92ec3932031b3dcc0d2f6622->enter($__internal_5c246b4c16d0e96a198f2c9391919898c140a67c92ec3932031b3dcc0d2f6622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle::ddc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c246b4c16d0e96a198f2c9391919898c140a67c92ec3932031b3dcc0d2f6622->leave($__internal_5c246b4c16d0e96a198f2c9391919898c140a67c92ec3932031b3dcc0d2f6622_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_149b3ca428b5c2bff2eb8142cd087068bbe1642a4de06787f7fa2a989e5a27fd = $this->env->getExtension("native_profiler");
        $__internal_149b3ca428b5c2bff2eb8142cd087068bbe1642a4de06787f7fa2a989e5a27fd->enter($__internal_149b3ca428b5c2bff2eb8142cd087068bbe1642a4de06787f7fa2a989e5a27fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t   DDC         
\t";
        
        $__internal_149b3ca428b5c2bff2eb8142cd087068bbe1642a4de06787f7fa2a989e5a27fd->leave($__internal_149b3ca428b5c2bff2eb8142cd087068bbe1642a4de06787f7fa2a989e5a27fd_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_cc69962c860c276220c115648a84508babd0d1da83928834fadc5c9fab35ed61 = $this->env->getExtension("native_profiler");
        $__internal_cc69962c860c276220c115648a84508babd0d1da83928834fadc5c9fab35ed61->enter($__internal_cc69962c860c276220c115648a84508babd0d1da83928834fadc5c9fab35ed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "        DDC
    ";
        
        $__internal_cc69962c860c276220c115648a84508babd0d1da83928834fadc5c9fab35ed61->leave($__internal_cc69962c860c276220c115648a84508babd0d1da83928834fadc5c9fab35ed61_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_67ff0e48f7294d95a40387dd4a46a97c8ad1c7ae19240906f1283f3d62aa616b = $this->env->getExtension("native_profiler");
        $__internal_67ff0e48f7294d95a40387dd4a46a97c8ad1c7ae19240906f1283f3d62aa616b->enter($__internal_67ff0e48f7294d95a40387dd4a46a97c8ad1c7ae19240906f1283f3d62aa616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 11
        echo "    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-book\"></i>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("trcddc_homepage");
        echo "\">
            \tDDC
            </a>
        </li>
        
    ";
        
        $__internal_67ff0e48f7294d95a40387dd4a46a97c8ad1c7ae19240906f1283f3d62aa616b->leave($__internal_67ff0e48f7294d95a40387dd4a46a97c8ad1c7ae19240906f1283f3d62aa616b_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_fb6eb11282912fc4c09da008d2233e51906d4822f3187504087353abc206ed70 = $this->env->getExtension("native_profiler");
        $__internal_fb6eb11282912fc4c09da008d2233e51906d4822f3187504087353abc206ed70->enter($__internal_fb6eb11282912fc4c09da008d2233e51906d4822f3187504087353abc206ed70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "   ";
        
        $__internal_fb6eb11282912fc4c09da008d2233e51906d4822f3187504087353abc206ed70->leave($__internal_fb6eb11282912fc4c09da008d2233e51906d4822f3187504087353abc206ed70_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle::ddc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  89 => 21,  76 => 14,  71 => 11,  65 => 10,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* 	{%block title%}*/
/* 	   DDC         */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         DDC*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-book"></i>*/
/*             <a href="{{url('trcddc_homepage')}}">*/
/*             	DDC*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/*    {%block content %}*/
/*    {%endblock content %}*/
