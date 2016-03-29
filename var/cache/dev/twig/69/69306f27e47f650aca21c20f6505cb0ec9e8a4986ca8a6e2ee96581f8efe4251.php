<?php

/* TRCCoreBundle:Affichage:connecte.html.twig */
class __TwigTemplate_7733e52c947df450f379a299bd1a2d46aee4175b929e2e3102b759af2dc498cd extends Twig_Template
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
        $__internal_7981321bec2b9fcc8114c04961fa8fa3fad4ff37fceb84700e8a45703673ccab = $this->env->getExtension("native_profiler");
        $__internal_7981321bec2b9fcc8114c04961fa8fa3fad4ff37fceb84700e8a45703673ccab->enter($__internal_7981321bec2b9fcc8114c04961fa8fa3fad4ff37fceb84700e8a45703673ccab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:connecte.html.twig"));

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
";
        // line 49
        $context["utilisateur"] = $this->env->getExtension('TwigExtension')->getUtilisateurByCompte($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()));
        // line 50
        echo "<a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
";
        // line 51
        if ( !(null === (isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")))) {
            // line 52
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "image", array())), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive img-circle\"/>
";
        } else {
            // line 54
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/default.png"), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive img-circle\"/>
";
        }
        // line 56
        echo " &nbsp;
 <span class=\"hidden-xs\">";
        // line 57
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
        // line 69
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 70
            echo "                            <li class=\"divider\"></li>
                            <li>
                                <label class=\"label label-danger\">
                                    Paramètres
                                </label>
                            </li>
                           
                            <li>
                                <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getUrl("trc_admin_profils");
            echo " \">
                                    <i class=\"fa fa-users\"></i>
                                        Les profils
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tags\"></i>
                                        Les phases
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getUrl("trc_admin_systemes");
            echo " \">
                                    <i class=\"fa fa-tasks\"></i>
                                        Les systèmes
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getUrl("trc_admin_tdc");
            echo " \">
                                    <i class=\"fa fa-money\"></i>
                                        Les crédits
                                </a>
                            </li>
                        ";
        }
        // line 102
        echo "                            <li><a href=\"#\"><i class=\"fa fa-lock\"></i>Lock Screen</a></li>
                            <li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getUrl("trc_core_logout");
        echo "\"><i class=\"fa fa-key\"></i>Log Out</a></li>
                        </ul>
                    </li>";
        
        $__internal_7981321bec2b9fcc8114c04961fa8fa3fad4ff37fceb84700e8a45703673ccab->leave($__internal_7981321bec2b9fcc8114c04961fa8fa3fad4ff37fceb84700e8a45703673ccab_prof);

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
        return array (  189 => 103,  186 => 102,  177 => 96,  168 => 90,  159 => 84,  150 => 78,  140 => 70,  138 => 69,  123 => 57,  120 => 56,  114 => 54,  108 => 52,  106 => 51,  103 => 50,  101 => 49,  72 => 22,  64 => 19,  60 => 17,  58 => 16,  54 => 15,  49 => 13,  46 => 12,  42 => 11,  38 => 9,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
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
/* {%set utilisateur = getUtilisateurByCompte(app.user) %}*/
/* <a data-hover="dropdown" href="#" class="dropdown-toggle">*/
/* {%if utilisateur is not null %}*/
/* <img src="{{asset(utilisateur.image)}}" alt="" class="img-responsive img-circle"/>*/
/* {%else%}*/
/* <img src="{{asset('img/default.png')}}" alt="" class="img-responsive img-circle"/>*/
/* {%endif%}*/
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
