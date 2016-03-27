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
        $__internal_0e3c2ee5771747d893716543d98456b0c84e60b08d32c849d4e05e36da2585d7 = $this->env->getExtension("native_profiler");
        $__internal_0e3c2ee5771747d893716543d98456b0c84e60b08d32c849d4e05e36da2585d7->enter($__internal_0e3c2ee5771747d893716543d98456b0c84e60b08d32c849d4e05e36da2585d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:connecte.html.twig"));

        // line 1
        echo "<li class=\"dropdown\">
    <a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
        <i class=\"fa fa-bell fa-fw\"></i>
        ";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications"))) > 0)) {
            // line 5
            echo "            <span class=\"badge badge-green\">
                ";
            // line 6
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications"))), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 9
        echo "    </a>
    <ul id=\"notifications\" class=\"dropdown-menu dropdown-user pull-right\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
            // line 12
            echo "            <li>
                <a link=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_core_notification", array("id" => $this->getAttribute($context["noti"], "id", array()))), "html", null, true);
            echo " \" class=\"notification\"  href=\"#\" data-toggle=\"modal\" data-target=\".modal-general\">

                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["noti"], "titre", array()), "html", null, true);
            echo "
                ";
            // line 16
            if ($this->getAttribute($context["noti"], "alerte", array())) {
                // line 17
                echo "                        <i class=\"fa-warning fa\"></i>
                ";
            }
            // line 19
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </ul>
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
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar/48.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-circle\"/>
 &nbsp;
 <span class=\"hidden-xs\">";
        // line 52
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
        // line 64
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 65
            echo "                            <li class=\"divider\"></li>
                            <li>
                                <label class=\"label label-danger\">
                                    Paramètres
                                </label>
                            </li>
                           
                            <li>
                                <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getUrl("trc_admin_profils");
            echo " \">
                                    <i class=\"fa fa-users\"></i>
                                        Les profils
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tags\"></i>
                                        Les phases
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tasks\"></i>
                                        Les systèmes
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getUrl("trc_admin_tdc");
            echo " \">
                                    <i class=\"fa fa-money\"></i>
                                        Les crédits
                                </a>
                            </li>
                        ";
        }
        // line 97
        echo "                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i>Lock Screen</a></li>
                            <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getUrl("trc_core_logout");
        echo "\"><i class=\"fa fa-key\"></i>Log Out</a></li>
                        </ul>
                    </li>";
        
        $__internal_0e3c2ee5771747d893716543d98456b0c84e60b08d32c849d4e05e36da2585d7->leave($__internal_0e3c2ee5771747d893716543d98456b0c84e60b08d32c849d4e05e36da2585d7_prof);

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
        return array (  173 => 98,  170 => 97,  161 => 91,  152 => 85,  143 => 79,  134 => 73,  124 => 65,  122 => 64,  107 => 52,  102 => 50,  72 => 22,  64 => 19,  60 => 17,  58 => 16,  54 => 15,  49 => 13,  46 => 12,  42 => 11,  38 => 9,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <li class="dropdown">*/
/*     <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/*         <i class="fa fa-bell fa-fw"></i>*/
/*         {%if notifications|length > 0 %}*/
/*             <span class="badge badge-green">*/
/*                 {{notifications|length}}*/
/*             </span>*/
/*         {%endif%}*/
/*     </a>*/
/*     <ul id="notifications" class="dropdown-menu dropdown-user pull-right">*/
/*         {%for noti in notifications %}*/
/*             <li>*/
/*                 <a link="{{url('trc_core_notification',{id:noti.id})}} " class="notification"  href="#" data-toggle="modal" data-target=".modal-general">*/
/* */
/*                 {{noti.titre}}*/
/*                 {%if noti.alerte %}*/
/*                         <i class="fa-warning fa"></i>*/
/*                 {%endif%}*/
/*                 </a>*/
/*             </li>*/
/*         {%endfor%}*/
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
