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
        $__internal_ed54489677421764b28b9fd5b147d040a6a6ef36258d544fb65ceae579f7808d = $this->env->getExtension("native_profiler");
        $__internal_ed54489677421764b28b9fd5b147d040a6a6ef36258d544fb65ceae579f7808d->enter($__internal_ed54489677421764b28b9fd5b147d040a6a6ef36258d544fb65ceae579f7808d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:connecte.html.twig"));

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
                       
                            <li class=\"divider\"></li>
                            <li>
                                <label class=\"label label-danger\">
                                    Paramètres
                                </label>
                            </li>
                           
                            <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getUrl("trc_admin_profils");
        echo " \"><i class=\"fa fa-users\"></i>Les profils</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i>Lock Screen</a></li>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
        echo "\"><i class=\"fa fa-key\"></i>Log Out</a></li>
                        </ul>
                    </li>";
        
        $__internal_ed54489677421764b28b9fd5b147d040a6a6ef36258d544fb65ceae579f7808d->leave($__internal_ed54489677421764b28b9fd5b147d040a6a6ef36258d544fb65ceae579f7808d_prof);

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
        return array (  89 => 57,  84 => 55,  61 => 35,  56 => 33,  22 => 1,);
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
/*                        */
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <label class="label label-danger">*/
/*                                     Paramètres*/
/*                                 </label>*/
/*                             </li>*/
/*                            */
/*                             <li><a href="{{url('trc_admin_profils')}} "><i class="fa fa-users"></i>Les profils</a></li>*/
/*                             <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>*/
/*                             <li><a href="{{url('fos_user_security_logout')}}"><i class="fa fa-key"></i>Log Out</a></li>*/
/*                         </ul>*/
/*                     </li>*/
