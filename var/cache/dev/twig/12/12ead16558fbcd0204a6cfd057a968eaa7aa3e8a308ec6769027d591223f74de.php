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
        $__internal_044385c267478f6673f1a79a6e42c3a61abb96fb8e8aa334b169017cd9d01807 = $this->env->getExtension("native_profiler");
        $__internal_044385c267478f6673f1a79a6e42c3a61abb96fb8e8aa334b169017cd9d01807->enter($__internal_044385c267478f6673f1a79a6e42c3a61abb96fb8e8aa334b169017cd9d01807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        var lesLiens = {
            'ddc' : \"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("trcddc_homepage");
        echo "\",
            'cre' : \"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("trc_admin_tdc");
        echo "\",
            'ent' : \"";
        // line 36
        echo $this->env->getExtension('routing')->getUrl("trc_admin_entites");
        echo "\",
            'uti' : \"";
        // line 37
        echo $this->env->getExtension('routing')->getUrl("trc_admin_utilisateurs");
        echo "\",
            'cli' : \"";
        // line 38
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
        // line 53
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
        // line 66
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 67
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:connecte", array()));
            // line 69
            echo "
                    ";
        }
        // line 71
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
        // line 117
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:menu", array()));
        // line 119
        echo "
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            ";
        // line 122
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Chat:affichage", array()));
        // line 124
        echo "
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                    <div class=\"page-header pull-left\">
                        <div class=\"page-title\">
                           ";
        // line 132
        $this->displayBlock('titre', $context, $blocks);
        // line 135
        echo "                        </div>
                    </div>
                     <ol class=\"breadcrumb pull-right position\">
                        <li>
                            <i class=\"fa fa-home\"></i>
                            <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getUrl("trc_core_homepage");
        echo "\">Accueil</a>
                        </li>
                        ";
        // line 142
        $this->displayBlock('position', $context, $blocks);
        // line 145
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
        // line 156
        $this->displayBlock('content', $context, $blocks);
        // line 159
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
        // line 172
        echo $this->env->getExtension('routing')->getUrl("trc_client_recherche");
        echo "\">
                                <input name=\"radical\" type=\"text\" class=\"form-control recherche-client\" placeholder=\"Rechercher un client\" />
                            </form>
                        </div>
                        
                        
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/image.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/client.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
    <!-- <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
     -->
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
    <!--CORE JAVASCRIPT-->
    <script src=\"";
        // line 225
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
        // line 242
        $this->displayBlock('script', $context, $blocks);
        // line 245
        echo "</body>
</html>
";
        
        $__internal_044385c267478f6673f1a79a6e42c3a61abb96fb8e8aa334b169017cd9d01807->leave($__internal_044385c267478f6673f1a79a6e42c3a61abb96fb8e8aa334b169017cd9d01807_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c9362c1c861d81a5b59e39f95cde40b5dd9eff0dae15278f26b2fc5d9e3c7b2 = $this->env->getExtension("native_profiler");
        $__internal_9c9362c1c861d81a5b59e39f95cde40b5dd9eff0dae15278f26b2fc5d9e3c7b2->enter($__internal_9c9362c1c861d81a5b59e39f95cde40b5dd9eff0dae15278f26b2fc5d9e3c7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
        ";
        
        $__internal_9c9362c1c861d81a5b59e39f95cde40b5dd9eff0dae15278f26b2fc5d9e3c7b2->leave($__internal_9c9362c1c861d81a5b59e39f95cde40b5dd9eff0dae15278f26b2fc5d9e3c7b2_prof);

    }

    // line 132
    public function block_titre($context, array $blocks = array())
    {
        $__internal_86fe1e9be070ccb59a4ddf2cdcc3996c8712dc43350419c7fa97062a98990fa8 = $this->env->getExtension("native_profiler");
        $__internal_86fe1e9be070ccb59a4ddf2cdcc3996c8712dc43350419c7fa97062a98990fa8->enter($__internal_86fe1e9be070ccb59a4ddf2cdcc3996c8712dc43350419c7fa97062a98990fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 133
        echo "                                 Dashboard
                           ";
        
        $__internal_86fe1e9be070ccb59a4ddf2cdcc3996c8712dc43350419c7fa97062a98990fa8->leave($__internal_86fe1e9be070ccb59a4ddf2cdcc3996c8712dc43350419c7fa97062a98990fa8_prof);

    }

    // line 142
    public function block_position($context, array $blocks = array())
    {
        $__internal_d734f5129e7772a3433319ae6d6575a75d1c5a2bb1fdac814927730442c6ecd3 = $this->env->getExtension("native_profiler");
        $__internal_d734f5129e7772a3433319ae6d6575a75d1c5a2bb1fdac814927730442c6ecd3->enter($__internal_d734f5129e7772a3433319ae6d6575a75d1c5a2bb1fdac814927730442c6ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 143
        echo "
                        ";
        
        $__internal_d734f5129e7772a3433319ae6d6575a75d1c5a2bb1fdac814927730442c6ecd3->leave($__internal_d734f5129e7772a3433319ae6d6575a75d1c5a2bb1fdac814927730442c6ecd3_prof);

    }

    // line 156
    public function block_content($context, array $blocks = array())
    {
        $__internal_297d3f40a20050fb87a2b3c4086f3f60678482870e26f259f89289b58e584468 = $this->env->getExtension("native_profiler");
        $__internal_297d3f40a20050fb87a2b3c4086f3f60678482870e26f259f89289b58e584468->enter($__internal_297d3f40a20050fb87a2b3c4086f3f60678482870e26f259f89289b58e584468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 157
        echo "
                      ";
        
        $__internal_297d3f40a20050fb87a2b3c4086f3f60678482870e26f259f89289b58e584468->leave($__internal_297d3f40a20050fb87a2b3c4086f3f60678482870e26f259f89289b58e584468_prof);

    }

    // line 242
    public function block_script($context, array $blocks = array())
    {
        $__internal_7186402d0c3aede726319b9fc0125096a3b1db1456b7c1d77809f88f8dc2dc12 = $this->env->getExtension("native_profiler");
        $__internal_7186402d0c3aede726319b9fc0125096a3b1db1456b7c1d77809f88f8dc2dc12->enter($__internal_7186402d0c3aede726319b9fc0125096a3b1db1456b7c1d77809f88f8dc2dc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 243
        echo "
";
        
        $__internal_7186402d0c3aede726319b9fc0125096a3b1db1456b7c1d77809f88f8dc2dc12->leave($__internal_7186402d0c3aede726319b9fc0125096a3b1db1456b7c1d77809f88f8dc2dc12_prof);

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
        return array (  528 => 243,  522 => 242,  514 => 157,  508 => 156,  500 => 143,  494 => 142,  486 => 133,  480 => 132,  472 => 6,  466 => 5,  457 => 245,  455 => 242,  435 => 225,  430 => 223,  426 => 222,  422 => 221,  418 => 220,  414 => 219,  410 => 218,  406 => 217,  400 => 214,  396 => 213,  391 => 211,  387 => 210,  383 => 209,  379 => 208,  375 => 207,  371 => 206,  367 => 205,  363 => 204,  359 => 203,  355 => 202,  351 => 201,  347 => 200,  343 => 199,  339 => 198,  335 => 197,  331 => 196,  327 => 195,  323 => 194,  319 => 193,  315 => 192,  311 => 191,  307 => 190,  303 => 189,  299 => 188,  295 => 187,  291 => 186,  287 => 185,  271 => 172,  256 => 159,  254 => 156,  241 => 145,  239 => 142,  234 => 140,  227 => 135,  225 => 132,  215 => 124,  213 => 122,  208 => 119,  206 => 117,  158 => 71,  154 => 69,  151 => 67,  149 => 66,  133 => 53,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  99 => 34,  93 => 31,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  35 => 8,  33 => 5,  27 => 1,);
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
/*                     <div class="copyright row">*/
/*                         <div class="col-md-4">*/
/*                             <a href="#">*/
/*                                 02/2016 © TRDC #Traitement de Dossier de Crédit*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-md-5">*/
/*                             <form class="recherche-client" action="{{url('trc_client_recherche')}}">*/
/*                                 <input name="radical" type="text" class="form-control recherche-client" placeholder="Rechercher un client" />*/
/*                             </form>*/
/*                         </div>*/
/*                         */
/*                         */
/*                     </div>*/
/*                 </div>*/
/*                 <!--END FOOTER-->*/
/*             </div>*/
/*             <!--END PAGE WRAPPER-->*/
/*         </div>*/
/*     </div>*/
/*     <script src="{{asset('script/jquery-1.10.2.min.js')}}"></script>*/
/*     <script src="{{asset('js/own/image.js')}}"></script>*/
/*     <script src="{{asset('js/own/client.js')}}"></script>*/
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
