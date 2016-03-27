<?php

/* TRCCoreBundle:Affichage:menu.html.twig */
class __TwigTemplate_4170395df4fa252e9cc8d393add71e38b9df36f439ed6518e4ea7586d422db78 extends Twig_Template
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
        $__internal_a133a35ea4093cb8b1d60a9cbc7bc45d723d4ada74ae4e81e53260d1bb0788b7 = $this->env->getExtension("native_profiler");
        $__internal_a133a35ea4093cb8b1d60a9cbc7bc45d723d4ada74ae4e81e53260d1bb0788b7->enter($__internal_a133a35ea4093cb8b1d60a9cbc7bc45d723d4ada74ae4e81e53260d1bb0788b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:menu.html.twig"));

        // line 1
        echo "<nav id=\"sidebar\" role=\"navigation\" data-step=\"2\" data-intro=\"Template has &lt;b&gt;many navigation styles&lt;/b&gt;\"
                data-position=\"right\" class=\"navbar-default navbar-static-side\">
            <div class=\"sidebar-collapse menu-scroll\">
                <ul id=\"side-menu\" class=\"nav\">
                    
                     <div class=\"clearfix\"></div>
                    <li class=\"\">
                        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("trc_core_homepage");
        echo " \">
                            <i class=\"fa fa-tachometer fa-fw\">
                                <div class=\"icon-bg bg-orange\"></div>
                            </i>
                            <span class=\"menu-title\">Dashboard</span>
                        </a>
                    </li>

                    ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "                        <li class=\"utilisateurs\">
                            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs");
            echo "\">
                                <i class=\"fa fa-users fa-fw\">
                                    <div class=\"icon-bg bg-pink\"></div>
                                </i>
                                <span class=\"menu-title\">Utilisateurs</span>
                            </a>
                           
                        </li>
                        <li class=\"entites\">
                            <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getUrl("trc_admin_entites");
            echo "\">
                                <i class=\"fa fa-cubes fa-fw\">
                                    <div class=\"icon-bg bg-pink\"></div>
                                </i>
                                <span class=\"menu-title\">Entités</span>
                            </a>
                           
                        </li>

                    ";
        }
        // line 37
        echo "                        <li class=\"clients\">
                            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("trc_client_homepage");
        echo "\">
                                <i class=\"fa fa-money fa-fw\">
                                    <div class=\"icon-bg bg-pink\"></div>
                                </i>
                                <span class=\"menu-title\">Clients</span>
                            </a>
                           
                        </li>
                </ul>
            </div>
        </nav>";
        
        $__internal_a133a35ea4093cb8b1d60a9cbc7bc45d723d4ada74ae4e81e53260d1bb0788b7->leave($__internal_a133a35ea4093cb8b1d60a9cbc7bc45d723d4ada74ae4e81e53260d1bb0788b7_prof);

    }

    public function getTemplateName()
    {
        return "TRCCoreBundle:Affichage:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 38,  72 => 37,  59 => 27,  47 => 18,  44 => 17,  42 => 16,  31 => 8,  22 => 1,);
    }
}
/* <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"*/
/*                 data-position="right" class="navbar-default navbar-static-side">*/
/*             <div class="sidebar-collapse menu-scroll">*/
/*                 <ul id="side-menu" class="nav">*/
/*                     */
/*                      <div class="clearfix"></div>*/
/*                     <li class="">*/
/*                         <a href="{{url('trc_core_homepage')}} ">*/
/*                             <i class="fa fa-tachometer fa-fw">*/
/*                                 <div class="icon-bg bg-orange"></div>*/
/*                             </i>*/
/*                             <span class="menu-title">Dashboard</span>*/
/*                         </a>*/
/*                     </li>*/
/* */
/*                     {%if is_granted('ROLE_ADMIN')%}*/
/*                         <li class="utilisateurs">*/
/*                             <a href="{{url('trc_admin_utilisateurs')}}">*/
/*                                 <i class="fa fa-users fa-fw">*/
/*                                     <div class="icon-bg bg-pink"></div>*/
/*                                 </i>*/
/*                                 <span class="menu-title">Utilisateurs</span>*/
/*                             </a>*/
/*                            */
/*                         </li>*/
/*                         <li class="entites">*/
/*                             <a href="{{url('trc_admin_entites')}}">*/
/*                                 <i class="fa fa-cubes fa-fw">*/
/*                                     <div class="icon-bg bg-pink"></div>*/
/*                                 </i>*/
/*                                 <span class="menu-title">Entités</span>*/
/*                             </a>*/
/*                            */
/*                         </li>*/
/* */
/*                     {%endif%}*/
/*                         <li class="clients">*/
/*                             <a href="{{url('trc_client_homepage')}}">*/
/*                                 <i class="fa fa-money fa-fw">*/
/*                                     <div class="icon-bg bg-pink"></div>*/
/*                                 </i>*/
/*                                 <span class="menu-title">Clients</span>*/
/*                             </a>*/
/*                            */
/*                         </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
