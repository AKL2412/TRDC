<?php

/* TRCCoreBundle:Default:error.html.twig */
class __TwigTemplate_966875099f434ff6d7e46d046187f0543d97d537a90ca892ca66c9dcc1cbb5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCCoreBundle:Default:error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ed150a59d31b6d606d9b30f33777a683cfa96ade405644036024f3c091c632a = $this->env->getExtension("native_profiler");
        $__internal_4ed150a59d31b6d606d9b30f33777a683cfa96ade405644036024f3c091c632a->enter($__internal_4ed150a59d31b6d606d9b30f33777a683cfa96ade405644036024f3c091c632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Default:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed150a59d31b6d606d9b30f33777a683cfa96ade405644036024f3c091c632a->leave($__internal_4ed150a59d31b6d606d9b30f33777a683cfa96ade405644036024f3c091c632a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2dd152ca4f81a6b426d279c8a82f5400d2b5b4f8f923b1beb73918621fb34edb = $this->env->getExtension("native_profiler");
        $__internal_2dd152ca4f81a6b426d279c8a82f5400d2b5b4f8f923b1beb73918621fb34edb->enter($__internal_2dd152ca4f81a6b426d279c8a82f5400d2b5b4f8f923b1beb73918621fb34edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "       
";
        
        $__internal_2dd152ca4f81a6b426d279c8a82f5400d2b5b4f8f923b1beb73918621fb34edb->leave($__internal_2dd152ca4f81a6b426d279c8a82f5400d2b5b4f8f923b1beb73918621fb34edb_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        $__internal_79921d26364dc536ac5bb8713c201fd86b6c5cb154d75e0c00ea217a65a26638 = $this->env->getExtension("native_profiler");
        $__internal_79921d26364dc536ac5bb8713c201fd86b6c5cb154d75e0c00ea217a65a26638->enter($__internal_79921d26364dc536ac5bb8713c201fd86b6c5cb154d75e0c00ea217a65a26638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 5
        echo "    
";
        
        $__internal_79921d26364dc536ac5bb8713c201fd86b6c5cb154d75e0c00ea217a65a26638->leave($__internal_79921d26364dc536ac5bb8713c201fd86b6c5cb154d75e0c00ea217a65a26638_prof);

    }

    // line 7
    public function block_position($context, array $blocks = array())
    {
        $__internal_3c4497949305a16c43d58370634edeba3e3b4e6651df952cdd99691a1572d5d6 = $this->env->getExtension("native_profiler");
        $__internal_3c4497949305a16c43d58370634edeba3e3b4e6651df952cdd99691a1572d5d6->enter($__internal_3c4497949305a16c43d58370634edeba3e3b4e6651df952cdd99691a1572d5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 8
        echo "        
";
        
        $__internal_3c4497949305a16c43d58370634edeba3e3b4e6651df952cdd99691a1572d5d6->leave($__internal_3c4497949305a16c43d58370634edeba3e3b4e6651df952cdd99691a1572d5d6_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0ef047996694f7cf7a0e06913586b7c1a1fd6f0e1accf09d4de578a06c8e2a5 = $this->env->getExtension("native_profiler");
        $__internal_a0ef047996694f7cf7a0e06913586b7c1a1fd6f0e1accf09d4de578a06c8e2a5->enter($__internal_a0ef047996694f7cf7a0e06913586b7c1a1fd6f0e1accf09d4de578a06c8e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo " <h1 >

\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "\t\t\t\t<p class=\"alert span6 alert-danger alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > 
\t\t\t\t<i class=\"fa-warning fa fa-3x\"></i>
\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</h1>
";
        
        $__internal_a0ef047996694f7cf7a0e06913586b7c1a1fd6f0e1accf09d4de578a06c8e2a5->leave($__internal_a0ef047996694f7cf7a0e06913586b7c1a1fd6f0e1accf09d4de578a06c8e2a5_prof);

    }

    public function getTemplateName()
    {
        return "TRCCoreBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  96 => 16,  92 => 14,  88 => 13,  84 => 11,  78 => 10,  70 => 8,  64 => 7,  56 => 5,  50 => 4,  37 => 2,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* {%block title%}       */
/* {%endblock title%}*/
/* {%block titre%}*/
/*     */
/* {%endblock titre%}*/
/* {%block position %}*/
/*         */
/* {%endblock position%}*/
/* {%block content %}*/
/*  <h1 >*/
/* */
/* 				{% for message in app.session.flashbag.get('erreur') %}*/
/* 				<p class="alert span6 alert-danger alert-block" style="text-align:center;margin-left:auto;margin-right:auto" > */
/* 				<i class="fa-warning fa fa-3x"></i>*/
/* 				{{ message }}*/
/* */
/* 				</p>*/
/* 				{% endfor %}*/
/* 			</h1>*/
/* {%endblock content %}*/
