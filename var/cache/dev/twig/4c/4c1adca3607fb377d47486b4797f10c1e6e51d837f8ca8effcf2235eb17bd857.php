<?php

/* TRCClientBundle::clients.html.twig */
class __TwigTemplate_38c1fba5bede52029fbd489c297572ed1a10501172b2808ebf68e0d36506a908 extends Twig_Template
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
        $__internal_06647904840b00d1db0003decc0c8b1f296646e45630781cf307248627e8ff8b = $this->env->getExtension("native_profiler");
        $__internal_06647904840b00d1db0003decc0c8b1f296646e45630781cf307248627e8ff8b->enter($__internal_06647904840b00d1db0003decc0c8b1f296646e45630781cf307248627e8ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle::clients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06647904840b00d1db0003decc0c8b1f296646e45630781cf307248627e8ff8b->leave($__internal_06647904840b00d1db0003decc0c8b1f296646e45630781cf307248627e8ff8b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0b3b64385b3d98d592982795e1e20e9f6c1276c5399844373676aa24fc5ac0f = $this->env->getExtension("native_profiler");
        $__internal_c0b3b64385b3d98d592982795e1e20e9f6c1276c5399844373676aa24fc5ac0f->enter($__internal_c0b3b64385b3d98d592982795e1e20e9f6c1276c5399844373676aa24fc5ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Clients         
";
        
        $__internal_c0b3b64385b3d98d592982795e1e20e9f6c1276c5399844373676aa24fc5ac0f->leave($__internal_c0b3b64385b3d98d592982795e1e20e9f6c1276c5399844373676aa24fc5ac0f_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_7d6b20bffc347ac7d4b2edfd4c087c64610cbc391cdfee4783eada169e843f98 = $this->env->getExtension("native_profiler");
        $__internal_7d6b20bffc347ac7d4b2edfd4c087c64610cbc391cdfee4783eada169e843f98->enter($__internal_7d6b20bffc347ac7d4b2edfd4c087c64610cbc391cdfee4783eada169e843f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "       <form class=\"recherche-client\" action=\"";
        echo $this->env->getExtension('routing')->getUrl("trc_client_recherche");
        echo "\">
       \t<input name=\"radical\" type=\"search\" placeholder=\"Radical ou CIN\" class=\"form-control recherche-client\" />
       </form>
";
        
        $__internal_7d6b20bffc347ac7d4b2edfd4c087c64610cbc391cdfee4783eada169e843f98->leave($__internal_7d6b20bffc347ac7d4b2edfd4c087c64610cbc391cdfee4783eada169e843f98_prof);

    }

    // line 11
    public function block_position($context, array $blocks = array())
    {
        $__internal_83b4cbbec1e3977fe17798ca3151eeea88ae10facbf1c334ff701c59b5929a18 = $this->env->getExtension("native_profiler");
        $__internal_83b4cbbec1e3977fe17798ca3151eeea88ae10facbf1c334ff701c59b5929a18->enter($__internal_83b4cbbec1e3977fe17798ca3151eeea88ae10facbf1c334ff701c59b5929a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

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
        
        $__internal_83b4cbbec1e3977fe17798ca3151eeea88ae10facbf1c334ff701c59b5929a18->leave($__internal_83b4cbbec1e3977fe17798ca3151eeea88ae10facbf1c334ff701c59b5929a18_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_2768f65b1dfa4d3407478c513b604743e29be7163999922bf5d7ba44ba72a420 = $this->env->getExtension("native_profiler");
        $__internal_2768f65b1dfa4d3407478c513b604743e29be7163999922bf5d7ba44ba72a420->enter($__internal_2768f65b1dfa4d3407478c513b604743e29be7163999922bf5d7ba44ba72a420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "        
   ";
        
        $__internal_2768f65b1dfa4d3407478c513b604743e29be7163999922bf5d7ba44ba72a420->leave($__internal_2768f65b1dfa4d3407478c513b604743e29be7163999922bf5d7ba44ba72a420_prof);

    }

    // line 25
    public function block_script($context, array $blocks = array())
    {
        $__internal_39935613a0e709cbf70ca5e5217fb784e30385b69fe30569818346db8340cc4a = $this->env->getExtension("native_profiler");
        $__internal_39935613a0e709cbf70ca5e5217fb784e30385b69fe30569818346db8340cc4a->enter($__internal_39935613a0e709cbf70ca5e5217fb784e30385b69fe30569818346db8340cc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 26
        echo "<script type=\"text/javascript\">
\t(function(){
\t\t\$('#side-menu li').removeClass('active');
\t\t\$('#side-menu li.clients').addClass('active');
\t})();
</script>
";
        
        $__internal_39935613a0e709cbf70ca5e5217fb784e30385b69fe30569818346db8340cc4a->leave($__internal_39935613a0e709cbf70ca5e5217fb784e30385b69fe30569818346db8340cc4a_prof);

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
/*        	<input name="radical" type="search" placeholder="Radical ou CIN" class="form-control recherche-client" />*/
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
