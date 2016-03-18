<?php

/* TRCCoreBundle:Affichage:connecte.html.twig */
class __TwigTemplate_0007c34878e2a8e37fe24015070f0ebcd4778027617a75784e5599cba03714c2 extends Twig_Template
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
        $__internal_0676599de20093b0cbe2d2159672a106f5055d52188e44dfec5afa61ba86c76c = $this->env->getExtension("native_profiler");
        $__internal_0676599de20093b0cbe2d2159672a106f5055d52188e44dfec5afa61ba86c76c->enter($__internal_0676599de20093b0cbe2d2159672a106f5055d52188e44dfec5afa61ba86c76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:connecte.html.twig"));

        // line 1
        echo "<li class=\"dropdown\">
    <a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
        <i class=\"fa fa-bell fa-fw\"></i>
        <span class=\"badge badge-green\">3</span>
    </a>
    <ul id=\"notifications\" class=\"dropdown-menu dropdown-user pull-right\">

    </ul>
</li>
<li class=\"dropdown\">
    <a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
        <i class=\"fa fa-envelope fa-fw\"></i>
        <span class=\"badge badge-orange\">7</span>
    </a>
</li>
<li class=\"dropdown\">
    <a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
        <i class=\"fa fa-tasks fa-fw\"></i>
        <span class=\"badge badge-yellow\">8</span>
    </a>
    <ul class=\"dropdown-menu dropdown-user pull-right\">
        <li>
            <a href=\"#\">
                DDC déposé sur le BDDC par l'agence MOL par son agent EMILE
            </a>
        </li>
        <li>
            <a href=\"#\">
                homme
            </a>
        </li>
    </ul>
</li>
<li class=\"dropdown topbar-user\">
<a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>
 &nbsp;
 <span class=\"hidden-xs\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </span>&nbsp;<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu dropdown-user pull-right\">
                            <li>
                                <label class=\"label label-success\">
                                    Moi
                                </label>
                            </li>
                            <li>
                            <a href=\"#\"><i class=\"fa fa-user\"></i>Mon compte</a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-calendar\"></i>Mon calendrier</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope\"></i>Ma messagerié</a></li>
                       ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                            <li class=\"divider\"></li>
                            <li>
                                <label class=\"label label-danger\">
                                    Paramètres
                                </label>
                            </li>
                           
                            <li>
                                <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getUrl("trc_admin_profils");
            echo " \">
                                    <i class=\"fa fa-users\"></i>
                                        Les profils
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tags\"></i>
                                        Les phases
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tasks\"></i>
                                        Les systèmes
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getUrl("trc_admin_tdc");
            echo " \">
                                    <i class=\"fa fa-money\"></i>
                                        Les crédits
                                </a>
                            </li>
                        ";
        }
        // line 83
        echo "                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i>Lock Screen</a></li>
                            <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getUrl("trc_core_logout");
        echo "\"><i class=\"fa fa-key\"></i>Log Out</a></li>
                        </ul>
                    </li>";
        
        $__internal_0676599de20093b0cbe2d2159672a106f5055d52188e44dfec5afa61ba86c76c->leave($__internal_0676599de20093b0cbe2d2159672a106f5055d52188e44dfec5afa61ba86c76c_prof);

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
        return array (  130 => 84,  127 => 83,  118 => 77,  109 => 71,  100 => 65,  91 => 59,  81 => 51,  79 => 50,  64 => 38,  59 => 36,  22 => 1,);
    }
}
/* <li class="dropdown">*/
/*     <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/*         <i class="fa fa-bell fa-fw"></i>*/
/*         <span class="badge badge-green">3</span>*/
/*     </a>*/
/*     <ul id="notifications" class="dropdown-menu dropdown-user pull-right">*/
/* */
/*     </ul>*/
/* </li>*/
/* <li class="dropdown">*/
/*     <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/*         <i class="fa fa-envelope fa-fw"></i>*/
/*         <span class="badge badge-orange">7</span>*/
/*     </a>*/
/* </li>*/
/* <li class="dropdown">*/
/*     <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/*         <i class="fa fa-tasks fa-fw"></i>*/
/*         <span class="badge badge-yellow">8</span>*/
/*     </a>*/
/*     <ul class="dropdown-menu dropdown-user pull-right">*/
/*         <li>*/
/*             <a href="#">*/
/*                 DDC déposé sur le BDDC par l'agence MOL par son agent EMILE*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="#">*/
/*                 homme*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </li>*/
/* <li class="dropdown topbar-user">*/
/* <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/* <img src="{{asset('images/avatar/48.jpg')}}" alt="" class="img-responsive img-circle"/>*/
/*  &nbsp;*/
/*  <span class="hidden-xs">{{app.user.username}} </span>&nbsp;<span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu dropdown-user pull-right">*/
/*                             <li>*/
/*                                 <label class="label label-success">*/
/*                                     Moi*/
/*                                 </label>*/
/*                             </li>*/
/*                             <li>*/
/*                             <a href="#"><i class="fa fa-user"></i>Mon compte</a>*/
/*                             </li>*/
/*                             <li><a href="#"><i class="fa fa-calendar"></i>Mon calendrier</a></li>*/
/*                             <li><a href="#"><i class="fa fa-envelope"></i>Ma messagerié</a></li>*/
/*                        {% if is_granted("ROLE_ADMIN") %}*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <label class="label label-danger">*/
/*                                     Paramètres*/
/*                                 </label>*/
/*                             </li>*/
/*                            */
/*                             <li>*/
/*                                 <a href="{{url('trc_admin_profils')}} ">*/
/*                                     <i class="fa fa-users"></i>*/
/*                                         Les profils*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{url('trc_admin_systemes')}} ">*/
/*                                     <i class="fa fa-tags"></i>*/
/*                                         Les phases*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{url('trc_admin_systemes')}} ">*/
/*                                     <i class="fa fa-tasks"></i>*/
/*                                         Les systèmes*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{url('trc_admin_tdc')}} ">*/
/*                                     <i class="fa fa-money"></i>*/
/*                                         Les crédits*/
/*                                 </a>*/
/*                             </li>*/
/*                         {%endif%}*/
/*                             <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>*/
/*                             <li><a href="{{url('trc_core_logout')}}"><i class="fa fa-key"></i>Log Out</a></li>*/
/*                         </ul>*/
/*                     </li>*/
