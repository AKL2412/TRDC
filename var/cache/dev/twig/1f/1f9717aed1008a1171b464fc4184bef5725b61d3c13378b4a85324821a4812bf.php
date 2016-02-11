<?php

/* ::layout.html.twig */
class __TwigTemplate_4d32eebbf6c2c5d3026c82697bc7385935e6731aaf3015ebf77865aa22f4c0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffdecd8f21e9b8c89b9183e039ac9cac1fc2989b7d70d3c2cd93bc7d2aa86788 = $this->env->getExtension("native_profiler");
        $__internal_ffdecd8f21e9b8c89b9183e039ac9cac1fc2989b7d70d3c2cd93bc7d2aa86788->enter($__internal_ffdecd8f21e9b8c89b9183e039ac9cac1fc2989b7d70d3c2cd93bc7d2aa86788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"images/icons/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"images/icons/favicon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/icons/favicon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/icons/favicon-114x114.png\">
    <!--Loading bootstrap css-->
    <!-- <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,700,300\"> -->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/animate.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/all.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/style-responsive.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/zabuto_calendar.min.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/pace.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/jquery.news-ticker.css"), "html", null, true);
        echo "\">
</head>
<body>
    <div>
       
        <!--BEGIN BACK TO TOP-->
        <a id=\"totop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id=\"header-topbar-option-demo\" class=\"page-header-topbar\">
            <nav id=\"topbar\" role=\"navigation\" style=\"margin-bottom: 0;\" data-step=\"3\" class=\"navbar navbar-default navbar-static-top\">
            <div class=\"navbar-header\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\" class=\"navbar-toggle\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                <a id=\"logo\" href=\"index.html\" class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">CTDDC</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"text\" placeholder=\"Search here...\" class=\"form-control text-white\"/></div>
                </form>
                <!-- <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                        <li>Welcome to KAdmin - Responsive Multi-Style Admin Template</li>
                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
                    </ul>
                </div> -->
                <ul class=\"nav navbar navbar-top-links navbar-right mbn\">
                    ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 55
            echo "                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><i class=\"fa fa-bell fa-fw\"></i><span class=\"badge badge-green\">3</span></a>
                        
                    </li>
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><i class=\"fa fa-envelope fa-fw\"></i><span class=\"badge badge-orange\">7</span></a>
                        
                    </li>
                    <li class=\"dropdown\"><a data-hover=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"><i class=\"fa fa-tasks fa-fw\"></i><span class=\"badge badge-yellow\">8</span></a>
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
                    
                        ";
            // line 76
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:connecte", array()));
            // line 78
            echo "
                    ";
        }
        // line 80
        echo "                    
                    <li id=\"topbar-chat\" class=\"hidden-xs\">
                        <a href=\"javascript:void(0)\" data-step=\"4\" data-intro=\"&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker\" data-position=\"left\" class=\"btn-chat\">
                            <i class=\"fa fa-comments\"></i>
                            <span class=\"badge badge-info\">3</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id=\"modal-config\" class=\"modal fade\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"close\">
                                &times;</button>
                            <h4 class=\"modal-title\">
                                Modal title</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-default\">
                                Close</button>
                            <button type=\"button\" class=\"btn btn-primary\">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id=\"wrapper\">
            <!--BEGIN SIDEBAR MENU-->
            ";
        // line 126
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:menu", array()));
        // line 128
        echo "
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            ";
        // line 131
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Chat:affichage", array()));
        // line 133
        echo "
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                    <div class=\"page-header pull-left\">
                        <div class=\"page-title\">
                           ";
        // line 141
        $this->displayBlock('titre', $context, $blocks);
        // line 144
        echo "                        </div>
                    </div>
                     <ol class=\"breadcrumb pull-right position\">
                        <li>
                            <i class=\"fa fa-home\"></i>
                            <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getUrl("trc_core_homepage");
        echo "\">Accueil</a>
                        </li>
                        ";
        // line 151
        $this->displayBlock('position', $context, $blocks);
        // line 154
        echo "                        
                    </ol> 
                    
                    <div class=\"clearfix\">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class=\"page-content\">
                    <div id=\"tab-general\">

                      ";
        // line 165
        $this->displayBlock('content', $context, $blocks);
        // line 168
        echo "
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id=\"footer\">
                    <div class=\"copyright\">
                        <a href=\"#\">
                            02/2016 © TRDC #Traitement de Dossier de Crédit
                        </a>
                    </div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
    <!--CORE JAVASCRIPT-->
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/main.js"), "html", null, true);
        echo "\"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
";
        
        $__internal_ffdecd8f21e9b8c89b9183e039ac9cac1fc2989b7d70d3c2cd93bc7d2aa86788->leave($__internal_ffdecd8f21e9b8c89b9183e039ac9cac1fc2989b7d70d3c2cd93bc7d2aa86788_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94ceadfb12be4c186d0819030f4bececd1fe68892fd2a66c1b9d31de8a677eb7 = $this->env->getExtension("native_profiler");
        $__internal_94ceadfb12be4c186d0819030f4bececd1fe68892fd2a66c1b9d31de8a677eb7->enter($__internal_94ceadfb12be4c186d0819030f4bececd1fe68892fd2a66c1b9d31de8a677eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
        ";
        
        $__internal_94ceadfb12be4c186d0819030f4bececd1fe68892fd2a66c1b9d31de8a677eb7->leave($__internal_94ceadfb12be4c186d0819030f4bececd1fe68892fd2a66c1b9d31de8a677eb7_prof);

    }

    // line 141
    public function block_titre($context, array $blocks = array())
    {
        $__internal_26a3f54d9a953ee42dd8735dd50bbe375e94954cac2851efd2e82c4098b1e201 = $this->env->getExtension("native_profiler");
        $__internal_26a3f54d9a953ee42dd8735dd50bbe375e94954cac2851efd2e82c4098b1e201->enter($__internal_26a3f54d9a953ee42dd8735dd50bbe375e94954cac2851efd2e82c4098b1e201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 142
        echo "                                 Dashboard
                           ";
        
        $__internal_26a3f54d9a953ee42dd8735dd50bbe375e94954cac2851efd2e82c4098b1e201->leave($__internal_26a3f54d9a953ee42dd8735dd50bbe375e94954cac2851efd2e82c4098b1e201_prof);

    }

    // line 151
    public function block_position($context, array $blocks = array())
    {
        $__internal_5fbfd9a518d0b5795f980f9f023f3ef60b046987503d20fc15e72345ff8fb56d = $this->env->getExtension("native_profiler");
        $__internal_5fbfd9a518d0b5795f980f9f023f3ef60b046987503d20fc15e72345ff8fb56d->enter($__internal_5fbfd9a518d0b5795f980f9f023f3ef60b046987503d20fc15e72345ff8fb56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 152
        echo "
                        ";
        
        $__internal_5fbfd9a518d0b5795f980f9f023f3ef60b046987503d20fc15e72345ff8fb56d->leave($__internal_5fbfd9a518d0b5795f980f9f023f3ef60b046987503d20fc15e72345ff8fb56d_prof);

    }

    // line 165
    public function block_content($context, array $blocks = array())
    {
        $__internal_5519f35d595abc6d4b146b6d28c2054a6185e76dc5c00848525911c9138958cb = $this->env->getExtension("native_profiler");
        $__internal_5519f35d595abc6d4b146b6d28c2054a6185e76dc5c00848525911c9138958cb->enter($__internal_5519f35d595abc6d4b146b6d28c2054a6185e76dc5c00848525911c9138958cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 166
        echo "
                      ";
        
        $__internal_5519f35d595abc6d4b146b6d28c2054a6185e76dc5c00848525911c9138958cb->leave($__internal_5519f35d595abc6d4b146b6d28c2054a6185e76dc5c00848525911c9138958cb_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 166,  467 => 165,  459 => 152,  453 => 151,  445 => 142,  439 => 141,  431 => 6,  425 => 5,  398 => 221,  393 => 219,  389 => 218,  385 => 217,  381 => 216,  377 => 215,  373 => 214,  369 => 213,  364 => 211,  360 => 210,  356 => 209,  352 => 208,  348 => 207,  344 => 206,  340 => 205,  336 => 204,  332 => 203,  328 => 202,  324 => 201,  320 => 200,  316 => 199,  312 => 198,  308 => 197,  304 => 196,  300 => 195,  296 => 194,  292 => 193,  288 => 192,  284 => 191,  280 => 190,  276 => 189,  272 => 188,  268 => 187,  264 => 186,  260 => 185,  241 => 168,  239 => 165,  226 => 154,  224 => 151,  219 => 149,  212 => 144,  210 => 141,  200 => 133,  198 => 131,  193 => 128,  191 => 126,  143 => 80,  139 => 78,  137 => 76,  114 => 55,  112 => 54,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  34 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>*/
/*         {%block title%}*/
/* */
/*         {%endblock title%}*/
/*     </title>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="shortcut icon" href="images/icons/favicon.ico">*/
/*     <link rel="apple-touch-icon" href="images/icons/favicon.png">*/
/*     <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">*/
/*     <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">*/
/*     <!--Loading bootstrap css-->*/
/*     <!-- <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">*/
/*     <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300"> -->*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/jquery-ui-1.10.4.custom.min.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/font-awesome.min.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/bootstrap.min.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/animate.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/all.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/main.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/style-responsive.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/zabuto_calendar.min.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/pace.css')}}">*/
/*     <link type="text/css" rel="stylesheet" href="{{asset('styles/jquery.news-ticker.css')}}">*/
/* </head>*/
/* <body>*/
/*     <div>*/
/*        */
/*         <!--BEGIN BACK TO TOP-->*/
/*         <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>*/
/*         <!--END BACK TO TOP-->*/
/*         <!--BEGIN TOPBAR-->*/
/*         <div id="header-topbar-option-demo" class="page-header-topbar">*/
/*             <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>*/
/*                 <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">CTDDC</span><span style="display: none" class="logo-text-icon">µ</span></a></div>*/
/*             <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>*/
/*                 */
/*                 <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">*/
/*                     <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>*/
/*                 </form>*/
/*                 <!-- <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>*/
/*                     <ul id="news-update" class="ticker list-unstyled">*/
/*                         <li>Welcome to KAdmin - Responsive Multi-Style Admin Template</li>*/
/*                         <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>*/
/*                     </ul>*/
/*                 </div> -->*/
/*                 <ul class="nav navbar navbar-top-links navbar-right mbn">*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>*/
/*                         */
/*                     </li>*/
/*                     <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>*/
/*                         */
/*                     </li>*/
/*                     <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>*/
/*                         <ul class="dropdown-menu dropdown-user pull-right">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     DDC déposé sur le BDDC par l'agence MOL par son agent EMILE*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     homme*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     */
/*                         {{*/
/*                             render(controller('TRCCoreBundle:Affichage:connecte',{}))*/
/*                         }}*/
/*                     {%endif%}*/
/*                     */
/*                     <li id="topbar-chat" class="hidden-xs">*/
/*                         <a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat">*/
/*                             <i class="fa fa-comments"></i>*/
/*                             <span class="badge badge-info">3</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/*             <!--BEGIN MODAL CONFIG PORTLET-->*/
/*             <div id="modal-config" class="modal fade">*/
/*                 <div class="modal-dialog">*/
/*                     <div class="modal-content">*/
/*                         <div class="modal-header">*/
/*                             <button type="button" data-dismiss="modal" aria-hidden="true" class="close">*/
/*                                 &times;</button>*/
/*                             <h4 class="modal-title">*/
/*                                 Modal title</h4>*/
/*                         </div>*/
/*                         <div class="modal-body">*/
/*                             <p>*/
/*                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget*/
/*                                 porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.*/
/*                                 Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis*/
/*                                 magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor*/
/*                                 vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec*/
/*                                 aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus*/
/*                                 vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium*/
/*                                 hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut*/
/*                                 ultricies felis.</p>*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" data-dismiss="modal" class="btn btn-default">*/
/*                                 Close</button>*/
/*                             <button type="button" class="btn btn-primary">*/
/*                                 Save changes</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!--END MODAL CONFIG PORTLET-->*/
/*         </div>*/
/*         <!--END TOPBAR-->*/
/*         <div id="wrapper">*/
/*             <!--BEGIN SIDEBAR MENU-->*/
/*             {{*/
/*                 render(controller('TRCCoreBundle:Affichage:menu',{}))*/
/*             }}*/
/*             <!--END SIDEBAR MENU-->*/
/*             <!--BEGIN CHAT FORM-->*/
/*             {{*/
/*                 render(controller('TRCCoreBundle:Chat:affichage',{}))*/
/*             }}*/
/*             <!--END CHAT FORM-->*/
/*             <!--BEGIN PAGE WRAPPER-->*/
/*             <div id="page-wrapper">*/
/*                 <!--BEGIN TITLE & BREADCRUMB PAGE-->*/
/*                 <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">*/
/*                     <div class="page-header pull-left">*/
/*                         <div class="page-title">*/
/*                            {%block titre%}*/
/*                                  Dashboard*/
/*                            {%endblock titre%}*/
/*                         </div>*/
/*                     </div>*/
/*                      <ol class="breadcrumb pull-right position">*/
/*                         <li>*/
/*                             <i class="fa fa-home"></i>*/
/*                             <a href="{{url('trc_core_homepage')}}">Accueil</a>*/
/*                         </li>*/
/*                         {%block position %}*/
/* */
/*                         {%endblock position%}*/
/*                         */
/*                     </ol> */
/*                     */
/*                     <div class="clearfix">*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--END TITLE & BREADCRUMB PAGE-->*/
/*                 <!--BEGIN CONTENT-->*/
/*                 <div class="page-content">*/
/*                     <div id="tab-general">*/
/* */
/*                       {%block content%}*/
/* */
/*                       {%endblock content%}*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <!--END CONTENT-->*/
/*                 <!--BEGIN FOOTER-->*/
/*                 <div id="footer">*/
/*                     <div class="copyright">*/
/*                         <a href="#">*/
/*                             02/2016 © TRDC #Traitement de Dossier de Crédit*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--END FOOTER-->*/
/*             </div>*/
/*             <!--END PAGE WRAPPER-->*/
/*         </div>*/
/*     </div>*/
/*     <script src="{{asset('script/jquery-1.10.2.min.js')}}"></script>*/
/*     <script src="{{asset('script/jquery-migrate-1.2.1.min.js')}}"></script>*/
/*     <script src="{{asset('script/jquery-ui.js')}}"></script>*/
/*     <script src="{{asset('script/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('script/bootstrap-hover-dropdown.js')}}"></script>*/
/*     <script src="{{asset('script/html5shiv.js')}}"></script>*/
/*     <script src="{{asset('script/respond.min.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.metisMenu.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.slimscroll.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.cookie.js')}}"></script>*/
/*     <script src="{{asset('script/icheck.min.js')}}"></script>*/
/*     <script src="{{asset('script/custom.min.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.news-ticker.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.menu.js')}}"></script>*/
/*     <script src="{{asset('script/pace.min.js')}}"></script>*/
/*     <script src="{{asset('script/holder.js')}}"></script>*/
/*     <script src="{{asset('script/responsive-tabs.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.categories.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.pie.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.tooltip.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.resize.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.fillbetween.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.stack.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.spline.js')}}"></script>*/
/*     <script src="{{asset('script/zabuto_calendar.min.js')}}"></script>*/
/*     <script src="{{asset('script/index.js')}}"></script>*/
/*     <!--LOADING SCRIPTS FOR CHARTS-->*/
/*     <script src="{{asset('script/highcharts.js')}}"></script>*/
/*     <script src="{{asset('script/data.js')}}"></script>*/
/*     <script src="{{asset('script/drilldown.js')}}"></script>*/
/*     <script src="{{asset('script/exporting.js')}}"></script>*/
/*     <script src="{{asset('script/highcharts-more.js')}}"></script>*/
/*     <script src="{{asset('script/charts-highchart-pie.js')}}"></script>*/
/*     <script src="{{asset('script/charts-highchart-more.js')}}"></script>*/
/*     <!--CORE JAVASCRIPT-->*/
/*     <script src="{{asset('script/main.js')}}"></script>*/
/*     <script>        (function (i, s, o, g, r, a, m) {*/
/*             i['GoogleAnalyticsObject'] = r;*/
/*             i[r] = i[r] || function () {*/
/*                 (i[r].q = i[r].q || []).push(arguments)*/
/*             }, i[r].l = 1 * new Date();*/
/*             a = s.createElement(o),*/
/*             m = s.getElementsByTagName(o)[0];*/
/*             a.async = 1;*/
/*             a.src = g;*/
/*             m.parentNode.insertBefore(a, m)*/
/*         })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');*/
/*         ga('create', 'UA-145464-12', 'auto');*/
/*         ga('send', 'pageview');*/
/* */
/* */
/* </script>*/
/* </body>*/
/* </html>*/
/* */
