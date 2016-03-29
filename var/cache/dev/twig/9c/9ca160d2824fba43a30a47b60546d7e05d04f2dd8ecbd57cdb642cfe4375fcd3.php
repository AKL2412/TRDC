<?php

/* TRCClientBundle::clients.html.twig */
class __TwigTemplate_c32b54cfc357ab4e1abb6eeb94992712d2d4279d58a2f2f25e3686b59d061e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCClientBundle::clients.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_738675d9403c8ce29278bc58754be272364ff229aa64dc2112300f71fc975a5d = $this->env->getExtension("native_profiler");
        $__internal_738675d9403c8ce29278bc58754be272364ff229aa64dc2112300f71fc975a5d->enter($__internal_738675d9403c8ce29278bc58754be272364ff229aa64dc2112300f71fc975a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle::clients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738675d9403c8ce29278bc58754be272364ff229aa64dc2112300f71fc975a5d->leave($__internal_738675d9403c8ce29278bc58754be272364ff229aa64dc2112300f71fc975a5d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_67012ec6fd979117e1320e1c37aa4943d441712343073162975f5181b84f9687 = $this->env->getExtension("native_profiler");
        $__internal_67012ec6fd979117e1320e1c37aa4943d441712343073162975f5181b84f9687->enter($__internal_67012ec6fd979117e1320e1c37aa4943d441712343073162975f5181b84f9687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Clients         
";
        
        $__internal_67012ec6fd979117e1320e1c37aa4943d441712343073162975f5181b84f9687->leave($__internal_67012ec6fd979117e1320e1c37aa4943d441712343073162975f5181b84f9687_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_1c39fe564c2dfd0db25d983db63d77dad0b65d99d04754e5aaf22bf4ebc29b93 = $this->env->getExtension("native_profiler");
        $__internal_1c39fe564c2dfd0db25d983db63d77dad0b65d99d04754e5aaf22bf4ebc29b93->enter($__internal_1c39fe564c2dfd0db25d983db63d77dad0b65d99d04754e5aaf22bf4ebc29b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "       <form class=\"recherche-client\" action=\"";
        echo $this->env->getExtension('routing')->getUrl("trc_client_recherche");
        echo "\">
       \t<input autocomplete=\"off\" name=\"radical\" type=\"search\" placeholder=\"Radical ou CIN\" class=\"form-control recherche-client\" />
       </form>
";
        
        $__internal_1c39fe564c2dfd0db25d983db63d77dad0b65d99d04754e5aaf22bf4ebc29b93->leave($__internal_1c39fe564c2dfd0db25d983db63d77dad0b65d99d04754e5aaf22bf4ebc29b93_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_3b6eb225ee5529a8575ccf7ffa95a6e8af4128f2a7aeb115b0f31f7deb4a2e2a = $this->env->getExtension("native_profiler");
        $__internal_3b6eb225ee5529a8575ccf7ffa95a6e8af4128f2a7aeb115b0f31f7deb4a2e2a->enter($__internal_3b6eb225ee5529a8575ccf7ffa95a6e8af4128f2a7aeb115b0f31f7deb4a2e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 12
        echo "    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-users\"></i>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("trc_client_homepage");
        echo "\">
            \tClients
            </a>
        </li>
        
    ";
        
        $__internal_3b6eb225ee5529a8575ccf7ffa95a6e8af4128f2a7aeb115b0f31f7deb4a2e2a->leave($__internal_3b6eb225ee5529a8575ccf7ffa95a6e8af4128f2a7aeb115b0f31f7deb4a2e2a_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b0da0133b3924a06cb91c36d82c163a74f4c9455f1ebd204cab5968a5894246 = $this->env->getExtension("native_profiler");
        $__internal_8b0da0133b3924a06cb91c36d82c163a74f4c9455f1ebd204cab5968a5894246->enter($__internal_8b0da0133b3924a06cb91c36d82c163a74f4c9455f1ebd204cab5968a5894246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "        
   ";
        
        $__internal_8b0da0133b3924a06cb91c36d82c163a74f4c9455f1ebd204cab5968a5894246->leave($__internal_8b0da0133b3924a06cb91c36d82c163a74f4c9455f1ebd204cab5968a5894246_prof);

    }

    // line 25
    public function block_script($context, array $blocks = array())
    {
        $__internal_1dadc1b369ea92cea91b40d6655d79f2f5ec46a34b2e2ba5f942b6d3cb5b5298 = $this->env->getExtension("native_profiler");
        $__internal_1dadc1b369ea92cea91b40d6655d79f2f5ec46a34b2e2ba5f942b6d3cb5b5298->enter($__internal_1dadc1b369ea92cea91b40d6655d79f2f5ec46a34b2e2ba5f942b6d3cb5b5298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 26
        echo "<script type=\"text/javascript\">
\t(function(){
\t\t\$('#side-menu li').removeClass('active');
\t\t\$('#side-menu li.clients').addClass('active');
\t})();
</script>
";
        
        $__internal_1dadc1b369ea92cea91b40d6655d79f2f5ec46a34b2e2ba5f942b6d3cb5b5298->leave($__internal_1dadc1b369ea92cea91b40d6655d79f2f5ec46a34b2e2ba5f942b6d3cb5b5298_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle::clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  108 => 25,  100 => 23,  94 => 22,  81 => 15,  76 => 12,  70 => 11,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* {%block title%}*/
/* 	   Clients         */
/* {%endblock title%}*/
/* {%block titre%}*/
/*        <form class="recherche-client" action="{{url('trc_client_recherche')}}">*/
/*        	<input autocomplete="off" name="radical" type="search" placeholder="Radical ou CIN" class="form-control recherche-client" />*/
/*        </form>*/
/* {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-users"></i>*/
/*             <a href="{{url('trc_client_homepage')}}">*/
/*             	Clients*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/*    {%block content %}*/
/*         */
/*    {%endblock%}*/
/* {%block script%}*/
/* <script type="text/javascript">*/
/* 	(function(){*/
/* 		$('#side-menu li').removeClass('active');*/
/* 		$('#side-menu li.clients').addClass('active');*/
/* 	})();*/
/* </script>*/
/* {%endblock script%}*/
/* */
