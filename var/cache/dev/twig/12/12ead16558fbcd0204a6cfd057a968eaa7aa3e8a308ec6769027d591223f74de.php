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
        $__internal_6de605fd5eff676e5c8eda43ac8e9bcfe09a97aa9e1857399ae879f05ab359d1 = $this->env->getExtension("native_profiler");
        $__internal_6de605fd5eff676e5c8eda43ac8e9bcfe09a97aa9e1857399ae879f05ab359d1->enter($__internal_6de605fd5eff676e5c8eda43ac8e9bcfe09a97aa9e1857399ae879f05ab359d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 45
        echo $this->env->getExtension('routing')->getUrl("trc_core_homepage");
        echo " \" class=\"navbar-brand\"><span class=\"fa fa-rocket\"></span><span class=\"logo-text\">CTDDC</span><span style=\"display: none\" class=\"logo-text-icon\">µ</span></a></div>
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
                <ul id=\"notification\" class=\"nav navbar navbar-top-links navbar-right mbn\">
                    ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 59
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:connecte", array()));
            // line 61
            echo "
                    ";
        }
        // line 63
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
        // line 109
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:menu", array()));
        // line 111
        echo "
            <!--END SIDEBAR MENU-->
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
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/image.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/client.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
    <!-- <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
     -->
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
    <!--CORE JAVASCRIPT-->
    <script src=\"";
        // line 217
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
        // line 234
        $this->displayBlock('script', $context, $blocks);
        // line 237
        echo "</body>
</html>
";
        
        $__internal_6de605fd5eff676e5c8eda43ac8e9bcfe09a97aa9e1857399ae879f05ab359d1->leave($__internal_6de605fd5eff676e5c8eda43ac8e9bcfe09a97aa9e1857399ae879f05ab359d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30378835147bdeda6425db0665033bec243a0062bce386cd846724d9471feccb = $this->env->getExtension("native_profiler");
        $__internal_30378835147bdeda6425db0665033bec243a0062bce386cd846724d9471feccb->enter($__internal_30378835147bdeda6425db0665033bec243a0062bce386cd846724d9471feccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
        ";
        
        $__internal_30378835147bdeda6425db0665033bec243a0062bce386cd846724d9471feccb->leave($__internal_30378835147bdeda6425db0665033bec243a0062bce386cd846724d9471feccb_prof);

    }

    // line 124
    public function block_titre($context, array $blocks = array())
    {
        $__internal_f53548e882a765c075cf790233ef098a86e574948b363b2fb6d8cb13f5e7049d = $this->env->getExtension("native_profiler");
        $__internal_f53548e882a765c075cf790233ef098a86e574948b363b2fb6d8cb13f5e7049d->enter($__internal_f53548e882a765c075cf790233ef098a86e574948b363b2fb6d8cb13f5e7049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 125
        echo "                                 Dashboard
                           ";
        
        $__internal_f53548e882a765c075cf790233ef098a86e574948b363b2fb6d8cb13f5e7049d->leave($__internal_f53548e882a765c075cf790233ef098a86e574948b363b2fb6d8cb13f5e7049d_prof);

    }

    // line 134
    public function block_position($context, array $blocks = array())
    {
        $__internal_751cb1d391d4b5a84a6abb05c56984964051fd53effc9413c67e214191c3bfc4 = $this->env->getExtension("native_profiler");
        $__internal_751cb1d391d4b5a84a6abb05c56984964051fd53effc9413c67e214191c3bfc4->enter($__internal_751cb1d391d4b5a84a6abb05c56984964051fd53effc9413c67e214191c3bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 135
        echo "
                        ";
        
        $__internal_751cb1d391d4b5a84a6abb05c56984964051fd53effc9413c67e214191c3bfc4->leave($__internal_751cb1d391d4b5a84a6abb05c56984964051fd53effc9413c67e214191c3bfc4_prof);

    }

    // line 148
    public function block_content($context, array $blocks = array())
    {
        $__internal_261854c720cd317b2b27d8b8ec8d38b81c1fec44d5e29036758d241f55253e8e = $this->env->getExtension("native_profiler");
        $__internal_261854c720cd317b2b27d8b8ec8d38b81c1fec44d5e29036758d241f55253e8e->enter($__internal_261854c720cd317b2b27d8b8ec8d38b81c1fec44d5e29036758d241f55253e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 149
        echo "
                      ";
        
        $__internal_261854c720cd317b2b27d8b8ec8d38b81c1fec44d5e29036758d241f55253e8e->leave($__internal_261854c720cd317b2b27d8b8ec8d38b81c1fec44d5e29036758d241f55253e8e_prof);

    }

    // line 234
    public function block_script($context, array $blocks = array())
    {
        $__internal_e7d1921c22036c2e8e740b84cdb3a281f29703133a4b53cd751ae01301d40cb3 = $this->env->getExtension("native_profiler");
        $__internal_e7d1921c22036c2e8e740b84cdb3a281f29703133a4b53cd751ae01301d40cb3->enter($__internal_e7d1921c22036c2e8e740b84cdb3a281f29703133a4b53cd751ae01301d40cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 235
        echo "
";
        
        $__internal_e7d1921c22036c2e8e740b84cdb3a281f29703133a4b53cd751ae01301d40cb3->leave($__internal_e7d1921c22036c2e8e740b84cdb3a281f29703133a4b53cd751ae01301d40cb3_prof);

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
        return array (  505 => 235,  499 => 234,  491 => 149,  485 => 148,  477 => 135,  471 => 134,  463 => 125,  457 => 124,  449 => 6,  443 => 5,  434 => 237,  432 => 234,  412 => 217,  407 => 215,  403 => 214,  399 => 213,  395 => 212,  391 => 211,  387 => 210,  383 => 209,  377 => 206,  373 => 205,  368 => 203,  364 => 202,  360 => 201,  356 => 200,  352 => 199,  348 => 198,  344 => 197,  340 => 196,  336 => 195,  332 => 194,  328 => 193,  324 => 192,  320 => 191,  316 => 190,  312 => 189,  308 => 188,  304 => 187,  300 => 186,  296 => 185,  292 => 184,  288 => 183,  284 => 182,  280 => 181,  276 => 180,  272 => 179,  268 => 178,  264 => 177,  248 => 164,  233 => 151,  231 => 148,  218 => 137,  216 => 134,  211 => 132,  204 => 127,  202 => 124,  192 => 116,  190 => 114,  185 => 111,  183 => 109,  135 => 63,  131 => 61,  128 => 59,  126 => 58,  110 => 45,  93 => 31,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  35 => 8,  33 => 5,  27 => 1,);
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
/*                 <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">*/
/*                     <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>*/
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
