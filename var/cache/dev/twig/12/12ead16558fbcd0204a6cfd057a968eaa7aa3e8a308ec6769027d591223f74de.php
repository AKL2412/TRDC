<?php

/* ::layout.html.twig */
class __TwigTemplate_59bf4df1ca8ac0d00b38bdcc84a6d1bd6d5206990e297a1f0e7472359abe9f82 extends Twig_Template
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
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64c523fc6dae6957343d08552cd7ff65207dd53acda0d09c772368b7db55b87b = $this->env->getExtension("native_profiler");
        $__internal_64c523fc6dae6957343d08552cd7ff65207dd53acda0d09c772368b7db55b87b->enter($__internal_64c523fc6dae6957343d08552cd7ff65207dd53acda0d09c772368b7db55b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\">
        var rechercheClientLien = \"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("trc_client_recherche");
        echo "\"
        var loader = \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\"
        
        var lesLiens = {
            'ddc' : \"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("trcddc_homepage");
        echo "\",
            'cre' : \"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("trc_admin_tdc");
        echo "\",
            'ent' : \"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites");
        echo "\",
            'uti' : \"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs");
        echo "\",
            'cli' : \"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("trc_client_homepage");
        echo " \"
        }
    </script>
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
                <a id=\"logo\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getUrl("trc_core_homepage");
        echo " \" class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">CTDDC</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
            <div class=\"topbar-main\"><a id=\"menu-toggle\" href=\"#\" class=\"hidden-xs\"><i class=\"fa fa-bars\"></i></a>
                
                <form id=\"topbar-search\" action=\"\" method=\"\" class=\"form-rac hidden-sm hidden-xs\">
                    <div class=\"input-icon right text-white\"><a href=\"#\"><i class=\"fa fa-search\"></i></a><input type=\"search\" placeholder=\"Search here...\" class=\"form-control text-white\" name=\"value\"/></div>
                </form>
                <!-- <div class=\"news-update-box hidden-xs\"><span class=\"text-uppercase mrm pull-left text-white\">News:</span>
                    <ul id=\"news-update\" class=\"ticker list-unstyled\">
                        <li>Welcome to KAdmin - Responsive Multi-Style Admin Template</li>
                        <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
                    </ul>
                </div> -->
                <ul id=\"notification\" class=\"nav navbar navbar-top-links navbar-right mbn\">
                    ";
        // line 67
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 68
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:connecte", array()));
            // line 70
            echo "
                    ";
        }
        // line 72
        echo "                    
                    <!-- <li id=\"topbar-chat\" class=\"hidden-xs\">
                        <a href=\"javascript:void(0)\" data-step=\"4\" data-intro=\"&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker\" data-position=\"left\" class=\"btn-chat\">
                            <i class=\"fa fa-comments\"></i>
                            <span class=\"badge badge-info\">3</span>
                        </a>
                    </li> -->
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
                            <p></p>
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
        // line 112
        echo "            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            ";
        // line 114
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Chat:affichage", array()));
        // line 116
        echo "
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                    <div class=\"page-header pull-left\">
                        <div class=\"page-title\">
                           ";
        // line 124
        $this->displayBlock('titre', $context, $blocks);
        // line 127
        echo "                        </div>
                    </div>
                     <ol class=\"breadcrumb pull-right position\">
                        <li>
                            <i class=\"fa fa-home\"></i>
                            <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getUrl("trc_core_homepage");
        echo "\">Accueil</a>
                        </li>
                        ";
        // line 134
        $this->displayBlock('position', $context, $blocks);
        // line 137
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
        // line 148
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id=\"footer\">
                    <div class=\"copyright row\">
                        <div class=\"col-md-4\">
                            <a href=\"#\">
                                02/2016 © TRDC #Traitement de Dossier de Crédit
                            </a>
                        </div>
                        <div class=\"col-md-5\">
                            <form class=\"recherche-client\" action=\"";
        // line 164
        echo $this->env->getExtension('routing')->getUrl("trc_client_recherche");
        echo "\">
                                <input autocomplete=\"off\" name=\"radical\" type=\"text\" class=\"form-control recherche-client\" placeholder=\"Rechercher un client\" />
                            </form>
                        </div>
                        
                        
                    </div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
<div id=\"gl-modal\" class=\"modal fade modal-general\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
  <div class=\"modal-dialog modal-md\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h4 class=\"modal-title text-center\" id=\"myModalLabel\"></h4>
        </div>
        <div class=\"modal-body\">
            
        </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>

    </div>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/image.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/client.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/upload.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
    <!-- <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
     -->
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
    <!--CORE JAVASCRIPT-->
    <script src=\"";
        // line 234
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
";
        // line 251
        $this->displayBlock('script', $context, $blocks);
        // line 254
        echo "</body>
</html>
";
        
        $__internal_64c523fc6dae6957343d08552cd7ff65207dd53acda0d09c772368b7db55b87b->leave($__internal_64c523fc6dae6957343d08552cd7ff65207dd53acda0d09c772368b7db55b87b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5eae73424d8f04919f9c559fdf4630d6187ae81b3867c7037e299b4d10727bc3 = $this->env->getExtension("native_profiler");
        $__internal_5eae73424d8f04919f9c559fdf4630d6187ae81b3867c7037e299b4d10727bc3->enter($__internal_5eae73424d8f04919f9c559fdf4630d6187ae81b3867c7037e299b4d10727bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
        ";
        
        $__internal_5eae73424d8f04919f9c559fdf4630d6187ae81b3867c7037e299b4d10727bc3->leave($__internal_5eae73424d8f04919f9c559fdf4630d6187ae81b3867c7037e299b4d10727bc3_prof);

    }

    // line 124
    public function block_titre($context, array $blocks = array())
    {
        $__internal_e2b4f6ffbaaf419f7aaaa63c70f4690a00181116b10aa0a6f613a0251991ac7b = $this->env->getExtension("native_profiler");
        $__internal_e2b4f6ffbaaf419f7aaaa63c70f4690a00181116b10aa0a6f613a0251991ac7b->enter($__internal_e2b4f6ffbaaf419f7aaaa63c70f4690a00181116b10aa0a6f613a0251991ac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 125
        echo "                                 Dashboard
                           ";
        
        $__internal_e2b4f6ffbaaf419f7aaaa63c70f4690a00181116b10aa0a6f613a0251991ac7b->leave($__internal_e2b4f6ffbaaf419f7aaaa63c70f4690a00181116b10aa0a6f613a0251991ac7b_prof);

    }

    // line 134
    public function block_position($context, array $blocks = array())
    {
        $__internal_f0184cafb2181a200af4a24daa08b986c54ee03dc96f3a70c1cc1a59bf2bf037 = $this->env->getExtension("native_profiler");
        $__internal_f0184cafb2181a200af4a24daa08b986c54ee03dc96f3a70c1cc1a59bf2bf037->enter($__internal_f0184cafb2181a200af4a24daa08b986c54ee03dc96f3a70c1cc1a59bf2bf037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 135
        echo "
                        ";
        
        $__internal_f0184cafb2181a200af4a24daa08b986c54ee03dc96f3a70c1cc1a59bf2bf037->leave($__internal_f0184cafb2181a200af4a24daa08b986c54ee03dc96f3a70c1cc1a59bf2bf037_prof);

    }

    // line 148
    public function block_content($context, array $blocks = array())
    {
        $__internal_372b0618f2cb0688bbeff3235857de122af4348714125200f5edc2dc5b414a7e = $this->env->getExtension("native_profiler");
        $__internal_372b0618f2cb0688bbeff3235857de122af4348714125200f5edc2dc5b414a7e->enter($__internal_372b0618f2cb0688bbeff3235857de122af4348714125200f5edc2dc5b414a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 149
        echo "
                      ";
        
        $__internal_372b0618f2cb0688bbeff3235857de122af4348714125200f5edc2dc5b414a7e->leave($__internal_372b0618f2cb0688bbeff3235857de122af4348714125200f5edc2dc5b414a7e_prof);

    }

    // line 251
    public function block_script($context, array $blocks = array())
    {
        $__internal_a31e026223a3e038e743e006e5eb5ca1ec9b014d8d3bf18f6fd6d7ae4691edf7 = $this->env->getExtension("native_profiler");
        $__internal_a31e026223a3e038e743e006e5eb5ca1ec9b014d8d3bf18f6fd6d7ae4691edf7->enter($__internal_a31e026223a3e038e743e006e5eb5ca1ec9b014d8d3bf18f6fd6d7ae4691edf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 252
        echo "
";
        
        $__internal_a31e026223a3e038e743e006e5eb5ca1ec9b014d8d3bf18f6fd6d7ae4691edf7->leave($__internal_a31e026223a3e038e743e006e5eb5ca1ec9b014d8d3bf18f6fd6d7ae4691edf7_prof);

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
        return array (  540 => 252,  534 => 251,  526 => 149,  520 => 148,  512 => 135,  506 => 134,  498 => 125,  492 => 124,  484 => 6,  478 => 5,  469 => 254,  467 => 251,  447 => 234,  442 => 232,  438 => 231,  434 => 230,  430 => 229,  426 => 228,  422 => 227,  418 => 226,  412 => 223,  408 => 222,  403 => 220,  399 => 219,  395 => 218,  391 => 217,  387 => 216,  383 => 215,  379 => 214,  375 => 213,  371 => 212,  367 => 211,  363 => 210,  359 => 209,  355 => 208,  351 => 207,  347 => 206,  343 => 205,  339 => 204,  335 => 203,  331 => 202,  327 => 201,  323 => 200,  319 => 199,  315 => 198,  311 => 197,  307 => 196,  303 => 195,  299 => 194,  295 => 193,  263 => 164,  248 => 151,  246 => 148,  233 => 137,  231 => 134,  226 => 132,  219 => 127,  217 => 124,  207 => 116,  205 => 114,  201 => 112,  162 => 72,  158 => 70,  155 => 68,  153 => 67,  137 => 54,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  97 => 32,  93 => 31,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  35 => 8,  33 => 5,  27 => 1,);
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
/*     <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}">*/
/*     <script type="text/javascript">*/
/*         var rechercheClientLien = "{{url('trc_client_recherche')}}"*/
/*         var loader = "{{asset('images/loader.gif')}}"*/
/*         */
/*         var lesLiens = {*/
/*             'ddc' : "{{url('trcddc_homepage')}}",*/
/*             'cre' : "{{url('trc_admin_tdc')}}",*/
/*             'ent' : "{{url('trc_admin_entites')}}",*/
/*             'uti' : "{{url('trc_admin_utilisateurs')}}",*/
/*             'cli' : "{{url('trc_client_homepage')}} "*/
/*         }*/
/*     </script>*/
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
/*                 <a id="logo" href="{{url('trc_core_homepage')}} " class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">CTDDC</span><span style="display: none" class="logo-text-icon">µ</span></a></div>*/
/*             <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>*/
/*                 */
/*                 <form id="topbar-search" action="" method="" class="form-rac hidden-sm hidden-xs">*/
/*                     <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="search" placeholder="Search here..." class="form-control text-white" name="value"/></div>*/
/*                 </form>*/
/*                 <!-- <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>*/
/*                     <ul id="news-update" class="ticker list-unstyled">*/
/*                         <li>Welcome to KAdmin - Responsive Multi-Style Admin Template</li>*/
/*                         <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>*/
/*                     </ul>*/
/*                 </div> -->*/
/*                 <ul id="notification" class="nav navbar navbar-top-links navbar-right mbn">*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         {{*/
/*                             render(controller('TRCCoreBundle:Affichage:connecte',{}))*/
/*                         }}*/
/*                     {%endif%}*/
/*                     */
/*                     <!-- <li id="topbar-chat" class="hidden-xs">*/
/*                         <a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat">*/
/*                             <i class="fa fa-comments"></i>*/
/*                             <span class="badge badge-info">3</span>*/
/*                         </a>*/
/*                     </li> -->*/
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
/*                             <p></p>*/
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
/*             {#{*/
/*                 render(controller('TRCCoreBundle:Affichage:menu',{}))*/
/*             }#}*/
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
/*                     <div class="copyright row">*/
/*                         <div class="col-md-4">*/
/*                             <a href="#">*/
/*                                 02/2016 © TRDC #Traitement de Dossier de Crédit*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-md-5">*/
/*                             <form class="recherche-client" action="{{url('trc_client_recherche')}}">*/
/*                                 <input autocomplete="off" name="radical" type="text" class="form-control recherche-client" placeholder="Rechercher un client" />*/
/*                             </form>*/
/*                         </div>*/
/*                         */
/*                         */
/*                     </div>*/
/*                 </div>*/
/*                 <!--END FOOTER-->*/
/*             </div>*/
/*             <!--END PAGE WRAPPER-->*/
/* <div id="gl-modal" class="modal fade modal-general" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*   <div class="modal-dialog modal-md">*/
/*     <div class="modal-content">*/
/*         <div class="modal-header">*/
/*             <h4 class="modal-title text-center" id="myModalLabel"></h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             */
/*         </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-info" data-dismiss="modal">Fermer</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* */
/*     </div>*/
/*     <script src="{{asset('script/jquery-1.10.2.min.js')}}"></script>*/
/*     <script src="{{asset('js/own/image.js')}}"></script>*/
/*     <script src="{{asset('js/own/client.js')}}"></script>*/
/*     <script src="{{asset('js/own/upload.js')}}"></script>*/
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
/*     <!-- <script src="{{asset('script/jquery.flot.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.categories.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.pie.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.tooltip.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.resize.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.fillbetween.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.stack.js')}}"></script>*/
/*     <script src="{{asset('script/jquery.flot.spline.js')}}"></script>*/
/* */
/*     <script src="{{asset('script/zabuto_calendar.min.js')}}"></script>*/
/*     <script src="{{asset('script/index.js')}}"></script>*/
/*      -->*/
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
/* {%block script%}*/
/* */
/* {%endblock script%}*/
/* </body>*/
/* </html>*/
/* */
