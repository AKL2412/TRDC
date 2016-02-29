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
        $__internal_4a90cc8fe4cb75121daa4efda455496526503e1d95054c794d50796580afb321 = $this->env->getExtension("native_profiler");
        $__internal_4a90cc8fe4cb75121daa4efda455496526503e1d95054c794d50796580afb321->enter($__internal_4a90cc8fe4cb75121daa4efda455496526503e1d95054c794d50796580afb321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 42
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
        // line 55
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "                        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:connecte", array()));
            // line 58
            echo "
                    ";
        }
        // line 60
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
        // line 106
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:menu", array()));
        // line 108
        echo "
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            ";
        // line 111
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Chat:affichage", array()));
        // line 113
        echo "
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id=\"page-wrapper\">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id=\"title-breadcrumb-option-demo\" class=\"page-title-breadcrumb\">
                    <div class=\"page-header pull-left\">
                        <div class=\"page-title\">
                           ";
        // line 121
        $this->displayBlock('titre', $context, $blocks);
        // line 124
        echo "                        </div>
                    </div>
                     <ol class=\"breadcrumb pull-right position\">
                        <li>
                            <i class=\"fa fa-home\"></i>
                            <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getUrl("trc_core_homepage");
        echo "\">Accueil</a>
                        </li>
                        ";
        // line 131
        $this->displayBlock('position', $context, $blocks);
        // line 134
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
        // line 145
        $this->displayBlock('content', $context, $blocks);
        // line 148
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
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/own/image.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/respond.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.news-ticker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.menu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/holder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/responsive-tabs.js"), "html", null, true);
        echo "\"></script>
    <!-- <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.fillbetween.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/zabuto_calendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/index.js"), "html", null, true);
        echo "\"></script>
     -->
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/drilldown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/exporting.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/highcharts-more.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("script/charts-highchart-more.js"), "html", null, true);
        echo "\"></script>
    <!--CORE JAVASCRIPT-->
    <script src=\"";
        // line 204
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
        // line 221
        $this->displayBlock('script', $context, $blocks);
        // line 224
        echo "</body>
</html>
";
        
        $__internal_4a90cc8fe4cb75121daa4efda455496526503e1d95054c794d50796580afb321->leave($__internal_4a90cc8fe4cb75121daa4efda455496526503e1d95054c794d50796580afb321_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c00df314137149cafc71f46c1a6e805bb6e2095a93a68fa4028f465d0604523 = $this->env->getExtension("native_profiler");
        $__internal_1c00df314137149cafc71f46c1a6e805bb6e2095a93a68fa4028f465d0604523->enter($__internal_1c00df314137149cafc71f46c1a6e805bb6e2095a93a68fa4028f465d0604523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "
        ";
        
        $__internal_1c00df314137149cafc71f46c1a6e805bb6e2095a93a68fa4028f465d0604523->leave($__internal_1c00df314137149cafc71f46c1a6e805bb6e2095a93a68fa4028f465d0604523_prof);

    }

    // line 121
    public function block_titre($context, array $blocks = array())
    {
        $__internal_42da652de4b56d16818ce5d305f7ca829a4bcf1e83d924362a572fd641499d34 = $this->env->getExtension("native_profiler");
        $__internal_42da652de4b56d16818ce5d305f7ca829a4bcf1e83d924362a572fd641499d34->enter($__internal_42da652de4b56d16818ce5d305f7ca829a4bcf1e83d924362a572fd641499d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 122
        echo "                                 Dashboard
                           ";
        
        $__internal_42da652de4b56d16818ce5d305f7ca829a4bcf1e83d924362a572fd641499d34->leave($__internal_42da652de4b56d16818ce5d305f7ca829a4bcf1e83d924362a572fd641499d34_prof);

    }

    // line 131
    public function block_position($context, array $blocks = array())
    {
        $__internal_4ee13469d674f4b7fb0b92aa2c8cfd9f9b5955cb6374788ff4b3e82e927373cb = $this->env->getExtension("native_profiler");
        $__internal_4ee13469d674f4b7fb0b92aa2c8cfd9f9b5955cb6374788ff4b3e82e927373cb->enter($__internal_4ee13469d674f4b7fb0b92aa2c8cfd9f9b5955cb6374788ff4b3e82e927373cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 132
        echo "
                        ";
        
        $__internal_4ee13469d674f4b7fb0b92aa2c8cfd9f9b5955cb6374788ff4b3e82e927373cb->leave($__internal_4ee13469d674f4b7fb0b92aa2c8cfd9f9b5955cb6374788ff4b3e82e927373cb_prof);

    }

    // line 145
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5cbf96fd5097bc20dcf35f3f495f264b97cfe2411c83482d8abb04f495e98fe = $this->env->getExtension("native_profiler");
        $__internal_c5cbf96fd5097bc20dcf35f3f495f264b97cfe2411c83482d8abb04f495e98fe->enter($__internal_c5cbf96fd5097bc20dcf35f3f495f264b97cfe2411c83482d8abb04f495e98fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 146
        echo "
                      ";
        
        $__internal_c5cbf96fd5097bc20dcf35f3f495f264b97cfe2411c83482d8abb04f495e98fe->leave($__internal_c5cbf96fd5097bc20dcf35f3f495f264b97cfe2411c83482d8abb04f495e98fe_prof);

    }

    // line 221
    public function block_script($context, array $blocks = array())
    {
        $__internal_2ce296175d0a8cffdbb4f3aa9dfb053408e40df6ef892890e1e1a78e6f6ad830 = $this->env->getExtension("native_profiler");
        $__internal_2ce296175d0a8cffdbb4f3aa9dfb053408e40df6ef892890e1e1a78e6f6ad830->enter($__internal_2ce296175d0a8cffdbb4f3aa9dfb053408e40df6ef892890e1e1a78e6f6ad830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 222
        echo "
";
        
        $__internal_2ce296175d0a8cffdbb4f3aa9dfb053408e40df6ef892890e1e1a78e6f6ad830->leave($__internal_2ce296175d0a8cffdbb4f3aa9dfb053408e40df6ef892890e1e1a78e6f6ad830_prof);

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
        return array (  483 => 222,  477 => 221,  469 => 146,  463 => 145,  455 => 132,  449 => 131,  441 => 122,  435 => 121,  427 => 6,  421 => 5,  412 => 224,  410 => 221,  390 => 204,  385 => 202,  381 => 201,  377 => 200,  373 => 199,  369 => 198,  365 => 197,  361 => 196,  355 => 193,  351 => 192,  346 => 190,  342 => 189,  338 => 188,  334 => 187,  330 => 186,  326 => 185,  322 => 184,  318 => 183,  314 => 182,  310 => 181,  306 => 180,  302 => 179,  298 => 178,  294 => 177,  290 => 176,  286 => 175,  282 => 174,  278 => 173,  274 => 172,  270 => 171,  266 => 170,  262 => 169,  258 => 168,  254 => 167,  250 => 166,  246 => 165,  227 => 148,  225 => 145,  212 => 134,  210 => 131,  205 => 129,  198 => 124,  196 => 121,  186 => 113,  184 => 111,  179 => 108,  177 => 106,  129 => 60,  125 => 58,  122 => 56,  120 => 55,  104 => 42,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  35 => 8,  33 => 5,  27 => 1,);
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
/*     <script src="{{asset('js/own/image.js')}}"></script>*/
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
