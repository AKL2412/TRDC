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
        $__internal_9da91dba90af77750d1e56d074487e113df3b20e0a4bab0026dc89a52a5eed18 = $this->env->getExtension("native_profiler");
        $__internal_9da91dba90af77750d1e56d074487e113df3b20e0a4bab0026dc89a52a5eed18->enter($__internal_9da91dba90af77750d1e56d074487e113df3b20e0a4bab0026dc89a52a5eed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:connecte.html.twig"));

        // line 1
        echo "<li class=\"dropdown\">
    <a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
        <i class=\"fa fa-bell fa-fw\"></i>
        <span class=\"badge badge-green\">3</span>
    </a>
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>
 &nbsp;
 <span class=\"hidden-xs\">";
        // line 35
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
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "                            <li class=\"divider\"></li>
                            <li>
                                <label class=\"label label-danger\">
                                    Paramètres
                                </label>
                            </li>
                           
                            <li>
                                <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getUrl("trc_admin_profils");
            echo " \">
                                    <i class=\"fa fa-users\"></i>
                                        Les profils
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tags\"></i>
                                        Les phases
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tasks\"></i>
                                        Les systèmes
                                </a>
                            </li>
                        ";
        }
        // line 74
        echo "                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i>Lock Screen</a></li>
                            <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getUrl("trc_core_logout");
        echo "\"><i class=\"fa fa-key\"></i>Log Out</a></li>
                        </ul>
                    </li>";
        
        $__internal_9da91dba90af77750d1e56d074487e113df3b20e0a4bab0026dc89a52a5eed18->leave($__internal_9da91dba90af77750d1e56d074487e113df3b20e0a4bab0026dc89a52a5eed18_prof);

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
        return array (  118 => 75,  115 => 74,  106 => 68,  97 => 62,  88 => 56,  78 => 48,  76 => 47,  61 => 35,  56 => 33,  22 => 1,);
    }
}
/* <li class="dropdown">*/
/*     <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/*         <i class="fa fa-bell fa-fw"></i>*/
/*         <span class="badge badge-green">3</span>*/
/*     </a>*/
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
/*                         {%endif%}*/
/*                             <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>*/
/*                             <li><a href="{{url('trc_core_logout')}}"><i class="fa fa-key"></i>Log Out</a></li>*/
/*                         </ul>*/
/*                     </li>*/
