<?php

/* TRCCoreBundle:Affichage:connecte.html.twig */
class __TwigTemplate_28a209a7bd733a3d5df53021ad9d3d6b3c90cfcfce42ba1c8b10439e866ffa7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17460020b686d3cc991323f190e81ea5725773d2a99e26edc2d545f40f6268f4 = $this->env->getExtension("native_profiler");
        $__internal_17460020b686d3cc991323f190e81ea5725773d2a99e26edc2d545f40f6268f4->enter($__internal_17460020b686d3cc991323f190e81ea5725773d2a99e26edc2d545f40f6268f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:connecte.html.twig"));

        // line 1
        echo "<li class=\"dropdown topbar-user\">
<a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>
 &nbsp;
 <span class=\"hidden-xs\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i>My Profile</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-calendar\"></i>My Calendar</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i>My Inbox<span class=\"badge badge-danger\">3</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-tasks\"></i>My Tasks<span class=\"badge badge-success\">7</span></a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i>Lock Screen</a></li>
                            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
        echo "\"><i class=\"fa fa-key\"></i>Log Out</a></li>
                        </ul>
                    </li>";
        
        $__internal_17460020b686d3cc991323f190e81ea5725773d2a99e26edc2d545f40f6268f4->leave($__internal_17460020b686d3cc991323f190e81ea5725773d2a99e26edc2d545f40f6268f4_prof);

    }

    public function getTemplateName()
    {
        return "TRCCoreBundle:Affichage:connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <li class="dropdown topbar-user">*/
/* <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/* <img src="{{asset('images/avatar/48.jpg')}}" alt="" class="img-responsive img-circle"/>*/
/*  &nbsp;*/
/*  <span class="hidden-xs">{{app.user.username}} </span>&nbsp;<span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu dropdown-user pull-right">*/
/*                             <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>*/
/*                             <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>*/
/*                             <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>*/
/*                             <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>*/
/*                             <li><a href="{{url('fos_user_security_logout')}}"><i class="fa fa-key"></i>Log Out</a></li>*/
/*                         </ul>*/
/*                     </li>*/
