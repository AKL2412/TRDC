<?php

/* TRCCoreBundle:Affichage:menu.html.twig */
class __TwigTemplate_1caf8fa49ab489c4a5b6c39f0bf69855fafe7a082a540e74b1771733d5b1e1ab extends Twig_Template
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
        $__internal_0d32dd64b455aa46e6d7a549d44200266d9371a4bb18bb4af62f073e3a755364 = $this->env->getExtension("native_profiler");
        $__internal_0d32dd64b455aa46e6d7a549d44200266d9371a4bb18bb4af62f073e3a755364->enter($__internal_0d32dd64b455aa46e6d7a549d44200266d9371a4bb18bb4af62f073e3a755364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:menu.html.twig"));

        // line 1
        echo "<nav id=\"sidebar\" role=\"navigation\" data-step=\"2\" data-intro=\"Template has &lt;b&gt;many navigation styles&lt;/b&gt;\"
                data-position=\"right\" class=\"navbar-default navbar-static-side\">
            <div class=\"sidebar-collapse menu-scroll\">
                <ul id=\"side-menu\" class=\"nav\">
                    
                     <div class=\"clearfix\"></div>
                    <li class=\"active\"><a href=\"dashboard.html\"><i class=\"fa fa-tachometer fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Dashboard</span></a></li>

                    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                        <li>
                            <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs");
            echo "\">
                                <i class=\"fa fa-users fa-fw\">
                                    <div class=\"icon-bg bg-pink\"></div>
                                </i>
                                <span class=\"menu-title\">Utilisateurs</span>
                            </a>
                           
                        </li>

                    ";
        }
        // line 23
        echo "                    <li><a href=\"Layout.html\"><i class=\"fa fa-desktop fa-fw\">
                        <div class=\"icon-bg bg-pink\"></div>
                    </i><span class=\"menu-title\">Layouts</span></a>
                       
                    </li>
                    <li><a href=\"UIElements.html\"><i class=\"fa fa-send-o fa-fw\">
                        <div class=\"icon-bg bg-green\"></div>
                    </i><span class=\"menu-title\">UI Elements</span></a>
                       
                    </li>
                    <li><a href=\"Forms.html\"><i class=\"fa fa-edit fa-fw\">
                        <div class=\"icon-bg bg-violet\"></div>
                    </i><span class=\"menu-title\">Forms</span></a>
                      
                    </li>
                    <li><a href=\"Tables.html\"><i class=\"fa fa-th-list fa-fw\">
                        <div class=\"icon-bg bg-blue\"></div>
                    </i><span class=\"menu-title\">Tables</span></a>
                          
                    </li>
                    <li><a href=\"DataGrid.html\"><i class=\"fa fa-database fa-fw\">
                        <div class=\"icon-bg bg-red\"></div>
                    </i><span class=\"menu-title\">Data Grids</span></a>
                      
                    </li>
                    <li><a href=\"Pages.html\"><i class=\"fa fa-file-o fa-fw\">
                        <div class=\"icon-bg bg-yellow\"></div>
                    </i><span class=\"menu-title\">Pages</span></a>
                       
                    </li>
                    <li><a href=\"Extras.html\"><i class=\"fa fa-gift fa-fw\">
                        <div class=\"icon-bg bg-grey\"></div>
                    </i><span class=\"menu-title\">Extras</span></a>
                      
                    </li>
                    <li><a href=\"Dropdown.html\"><i class=\"fa fa-sitemap fa-fw\">
                        <div class=\"icon-bg bg-dark\"></div>
                    </i><span class=\"menu-title\">Multi-Level Dropdown</span></a>
                      
                    </li>
                    <li><a href=\"Email.html\"><i class=\"fa fa-envelope-o\">
                        <div class=\"icon-bg bg-primary\"></div>
                    </i><span class=\"menu-title\">Email</span></a>
                      
                    </li>
                    <li><a href=\"Charts.html\"><i class=\"fa fa-bar-chart-o fa-fw\">
                        <div class=\"icon-bg bg-orange\"></div>
                    </i><span class=\"menu-title\">Charts</span></a>
                       
                    </li>
                    <li><a href=\"Animation.html\"><i class=\"fa fa-slack fa-fw\">
                        <div class=\"icon-bg bg-green\"></div>
                    </i><span class=\"menu-title\">Animations</span></a></li>
                </ul>
            </div>
        </nav>";
        
        $__internal_0d32dd64b455aa46e6d7a549d44200266d9371a4bb18bb4af62f073e3a755364->leave($__internal_0d32dd64b455aa46e6d7a549d44200266d9371a4bb18bb4af62f073e3a755364_prof);

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
        return array (  52 => 23,  39 => 13,  36 => 12,  34 => 11,  22 => 1,);
    }
}
/* <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"*/
/*                 data-position="right" class="navbar-default navbar-static-side">*/
/*             <div class="sidebar-collapse menu-scroll">*/
/*                 <ul id="side-menu" class="nav">*/
/*                     */
/*                      <div class="clearfix"></div>*/
/*                     <li class="active"><a href="dashboard.html"><i class="fa fa-tachometer fa-fw">*/
/*                         <div class="icon-bg bg-orange"></div>*/
/*                     </i><span class="menu-title">Dashboard</span></a></li>*/
/* */
/*                     {%if is_granted('ROLE_ADMIN')%}*/
/*                         <li>*/
/*                             <a href="{{url('trc_admin_utilisateurs')}}">*/
/*                                 <i class="fa fa-users fa-fw">*/
/*                                     <div class="icon-bg bg-pink"></div>*/
/*                                 </i>*/
/*                                 <span class="menu-title">Utilisateurs</span>*/
/*                             </a>*/
/*                            */
/*                         </li>*/
/* */
/*                     {%endif%}*/
/*                     <li><a href="Layout.html"><i class="fa fa-desktop fa-fw">*/
/*                         <div class="icon-bg bg-pink"></div>*/
/*                     </i><span class="menu-title">Layouts</span></a>*/
/*                        */
/*                     </li>*/
/*                     <li><a href="UIElements.html"><i class="fa fa-send-o fa-fw">*/
/*                         <div class="icon-bg bg-green"></div>*/
/*                     </i><span class="menu-title">UI Elements</span></a>*/
/*                        */
/*                     </li>*/
/*                     <li><a href="Forms.html"><i class="fa fa-edit fa-fw">*/
/*                         <div class="icon-bg bg-violet"></div>*/
/*                     </i><span class="menu-title">Forms</span></a>*/
/*                       */
/*                     </li>*/
/*                     <li><a href="Tables.html"><i class="fa fa-th-list fa-fw">*/
/*                         <div class="icon-bg bg-blue"></div>*/
/*                     </i><span class="menu-title">Tables</span></a>*/
/*                           */
/*                     </li>*/
/*                     <li><a href="DataGrid.html"><i class="fa fa-database fa-fw">*/
/*                         <div class="icon-bg bg-red"></div>*/
/*                     </i><span class="menu-title">Data Grids</span></a>*/
/*                       */
/*                     </li>*/
/*                     <li><a href="Pages.html"><i class="fa fa-file-o fa-fw">*/
/*                         <div class="icon-bg bg-yellow"></div>*/
/*                     </i><span class="menu-title">Pages</span></a>*/
/*                        */
/*                     </li>*/
/*                     <li><a href="Extras.html"><i class="fa fa-gift fa-fw">*/
/*                         <div class="icon-bg bg-grey"></div>*/
/*                     </i><span class="menu-title">Extras</span></a>*/
/*                       */
/*                     </li>*/
/*                     <li><a href="Dropdown.html"><i class="fa fa-sitemap fa-fw">*/
/*                         <div class="icon-bg bg-dark"></div>*/
/*                     </i><span class="menu-title">Multi-Level Dropdown</span></a>*/
/*                       */
/*                     </li>*/
/*                     <li><a href="Email.html"><i class="fa fa-envelope-o">*/
/*                         <div class="icon-bg bg-primary"></div>*/
/*                     </i><span class="menu-title">Email</span></a>*/
/*                       */
/*                     </li>*/
/*                     <li><a href="Charts.html"><i class="fa fa-bar-chart-o fa-fw">*/
/*                         <div class="icon-bg bg-orange"></div>*/
/*                     </i><span class="menu-title">Charts</span></a>*/
/*                        */
/*                     </li>*/
/*                     <li><a href="Animation.html"><i class="fa fa-slack fa-fw">*/
/*                         <div class="icon-bg bg-green"></div>*/
/*                     </i><span class="menu-title">Animations</span></a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
