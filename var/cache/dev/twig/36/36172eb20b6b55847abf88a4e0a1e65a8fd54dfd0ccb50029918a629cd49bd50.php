<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9cff6091d1337d7fd2d6edfa55de6b60017a55b4bfbd550d41c163b5ac22c3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fe19cfb59bfb37288c3789da0118d1a241e440dbdfc200bc140f6d96011fd80 = $this->env->getExtension("native_profiler");
        $__internal_9fe19cfb59bfb37288c3789da0118d1a241e440dbdfc200bc140f6d96011fd80->enter($__internal_9fe19cfb59bfb37288c3789da0118d1a241e440dbdfc200bc140f6d96011fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe19cfb59bfb37288c3789da0118d1a241e440dbdfc200bc140f6d96011fd80->leave($__internal_9fe19cfb59bfb37288c3789da0118d1a241e440dbdfc200bc140f6d96011fd80_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95c8296cd94b0593a391fa18d6ff1a639cda5a808011213aabf2012bfc5f373f = $this->env->getExtension("native_profiler");
        $__internal_95c8296cd94b0593a391fa18d6ff1a639cda5a808011213aabf2012bfc5f373f->enter($__internal_95c8296cd94b0593a391fa18d6ff1a639cda5a808011213aabf2012bfc5f373f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
<form class=\"form-horizontal\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >
\t<div class=\"form-body pal\">
\t\t<div class=\"col-md-12 text-center\">
    \t    <h1 style=\"margin-top: -90px; font-size: 30px; position:absolute\">
    \t        Centre de Traitement de Dossier De Crédit</h1>
    \t    <br />
    \t</div>
    \t<div class=\"form-group\">
            <div class=\"col-md-3\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/avatar/profile-pic.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"margin-top: -35px;\" />
            </div>
            <div class=\"col-md-9 text-center\">
                <h1>
                    Centre d'authentification</h1>
                <br />
                <p>
                    Vueillez renseigner votre matricule et mot de passe</p>
           </div>
        </div>
\t<div class=\"login-wrap\">
<div class=\"message- text-danger center\" >
";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "    <div class=\"center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 31
        echo "</div>
\t    <div class=\"form-group\">
            <label for=\"inputName\" class=\"col-md-3 control-label\">
                Matricule:</label>
            <div class=\"col-md-9\">
                <div class=\"input-icon right\">
                    <i class=\"fa fa-user\"></i>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <input class=\"form-control\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>
            </div>
        </div>
\t   
\t   <div class=\"form-group\">
           <label for=\"inputPassword\" class=\"col-md-3 control-label\">
               Password:</label>
           <div class=\"col-md-9\">
               <div class=\"input-icon right\">
                   <i class=\"fa fa-lock\"></i>
                   <input class=\"form-control\" placeholder=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
           </div>
       </div>
\t\t<div class=\"\" style=\"padding-left:3%\">
\t\t\t<label class=\"checkbox\"  for=\"remember_me\">
\t\t\t\t
\t            ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t        </label>

        </div>
\t   \t
\t   \t
\t   \t<div class=\"form-group mbn\">
                        <div class=\"col-lg-12\" align=\"right\">
                            <div class=\"form-group mbn\">
                                <div class=\"col-lg-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col-lg-9\">
                                   

                                     <button class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\">
\t\t\t\t\t\t\t\t   \t\t";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t   \t</button>
                                </div>
                            </div>
                        </div>
                    </div>
       

\t   
    </div>
    </div>
</form>
";
        
        $__internal_95c8296cd94b0593a391fa18d6ff1a639cda5a808011213aabf2012bfc5f373f->leave($__internal_95c8296cd94b0593a391fa18d6ff1a639cda5a808011213aabf2012bfc5f373f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 73,  116 => 56,  107 => 50,  91 => 39,  87 => 38,  78 => 31,  72 => 29,  70 => 28,  55 => 16,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* <form class="form-horizontal" action="{{ path("fos_user_security_check") }}" method="post" >*/
/* 	<div class="form-body pal">*/
/* 		<div class="col-md-12 text-center">*/
/*     	    <h1 style="margin-top: -90px; font-size: 30px; position:absolute">*/
/*     	        Centre de Traitement de Dossier De Crédit</h1>*/
/*     	    <br />*/
/*     	</div>*/
/*     	<div class="form-group">*/
/*             <div class="col-md-3">*/
/*                 <img src="{{asset('images/avatar/profile-pic.png')}}" class="img-responsive" style="margin-top: -35px;" />*/
/*             </div>*/
/*             <div class="col-md-9 text-center">*/
/*                 <h1>*/
/*                     Centre d'authentification</h1>*/
/*                 <br />*/
/*                 <p>*/
/*                     Vueillez renseigner votre matricule et mot de passe</p>*/
/*            </div>*/
/*         </div>*/
/* 	<div class="login-wrap">*/
/* <div class="message- text-danger center" >*/
/* {% if error %}*/
/*     <div class="center">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* </div>*/
/* 	    <div class="form-group">*/
/*             <label for="inputName" class="col-md-3 control-label">*/
/*                 Matricule:</label>*/
/*             <div class="col-md-9">*/
/*                 <div class="input-icon right">*/
/*                     <i class="fa fa-user"></i>*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <input class="form-control" placeholder="{{ 'security.login.username'|trans }}" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* 	   */
/* 	   <div class="form-group">*/
/*            <label for="inputPassword" class="col-md-3 control-label">*/
/*                Password:</label>*/
/*            <div class="col-md-9">*/
/*                <div class="input-icon right">*/
/*                    <i class="fa fa-lock"></i>*/
/*                    <input class="form-control" placeholder="{{ 'security.login.password'|trans }}" type="password" id="password" name="_password" required="required" />*/
/*            </div>*/
/*        </div>*/
/* 		<div class="" style="padding-left:3%">*/
/* 			<label class="checkbox"  for="remember_me">*/
/* 				*/
/* 	            {{ 'security.login.remember_me'|trans }}*/
/* 	            <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 	        </label>*/
/* */
/*         </div>*/
/* 	   	*/
/* 	   	*/
/* 	   	<div class="form-group mbn">*/
/*                         <div class="col-lg-12" align="right">*/
/*                             <div class="form-group mbn">*/
/*                                 <div class="col-lg-3">*/
/*                                     &nbsp;*/
/*                                 </div>*/
/*                                 <div class="col-lg-9">*/
/*                                    */
/* */
/*                                      <button class="btn btn-default" type="submit" id="_submit" name="_submit">*/
/* 								   		{{ 'security.login.submit'|trans }}*/
/* 								   	</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*        */
/* */
/* 	   */
/*     </div>*/
/*     </div>*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
