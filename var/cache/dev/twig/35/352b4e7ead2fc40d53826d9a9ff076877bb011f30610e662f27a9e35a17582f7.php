<?php

/* TRCCoreBundle:Affichage:pagination.html.twig */
class __TwigTemplate_aec5670a9994ea33a7746979ff3aebd5d529677b56a3649fc8d82ec55fab86cc extends Twig_Template
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
        $__internal_fc450c00f26c0e9d0f24146968d0ffaea5c9bbc5f18ef30e4be08e6f88bb1af6 = $this->env->getExtension("native_profiler");
        $__internal_fc450c00f26c0e9d0f24146968d0ffaea5c9bbc5f18ef30e4be08e6f88bb1af6->enter($__internal_fc450c00f26c0e9d0f24146968d0ffaea5c9bbc5f18ef30e4be08e6f88bb1af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:pagination.html.twig"));

        // line 1
        echo "<div class=\"row main\">
\t\t<div class=\"col-md-9 col-sm-8 col-xs-12\">
\t\t\t<nav>
\t\t\t  <ul class=\"pagination pagination-md\">
\t\t\t  \t";
        // line 5
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
            // line 6
            echo "\t\t\t  \t\t<li>
\t\t\t\t      <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "url", array()), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "extension", array()), "html", null, true);
            echo "\" aria-label=\"Previous\">
\t\t\t\t        <span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t      </a>
\t\t\t\t    </li>
\t\t\t\t  \t";
        }
        // line 12
        echo "\t\t\t\t  \t";
        $context["last"] = $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array());
        // line 13
        echo "\t\t\t\t  \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 14
            echo "\t\t\t\t  \t\t";
            $context["l"] = "";
            // line 15
            echo "\t\t\t\t  \t\t";
            if (($this->getAttribute($context["p"], "libelle", array()) == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                // line 16
                echo "\t\t\t\t  \t\t\t";
                $context["l"] = "active";
                // line 17
                echo "\t\t\t\t  \t\t";
            }
            // line 18
            echo "\t\t\t\t  \t\t<li class=\"";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", array()), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelle", array()), "html", null, true);
            echo " </a></li>
\t\t\t\t  \t\t";
            // line 19
            if ((($this->getAttribute($context["p"], "libelle", array()) != "...") && ($this->getAttribute($context["p"], "libelle", array()) != $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "last", array())))) {
                // line 20
                echo "\t\t\t\t  \t\t";
                $context["last"] = $this->getAttribute($context["p"], "libelle", array());
                // line 21
                echo "\t\t\t\t  \t\t";
            }
            // line 22
            echo "\t\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t  \t
\t\t\t\t  \t";
        // line 24
        if ((((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "last", array())) && ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "last", array()) != $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array())))) {
            // line 25
            echo "\t\t\t\t  \t\t<li>
\t\t\t\t      <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "url", array()), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "extension", array()), "html", null, true);
            echo "\" aria-label=\"Next\">
\t\t\t\t        <span aria-hidden=\"true\">&raquo;</span> 
\t\t\t\t      </a>
\t\t\t\t    </li>
\t\t\t\t  \t";
        }
        // line 31
        echo "\t\t\t  </ul>
\t\t\t</nav>
\t\t</div>
\t\t
\t</div>";
        
        $__internal_fc450c00f26c0e9d0f24146968d0ffaea5c9bbc5f18ef30e4be08e6f88bb1af6->leave($__internal_fc450c00f26c0e9d0f24146968d0ffaea5c9bbc5f18ef30e4be08e6f88bb1af6_prof);

    }

    public function getTemplateName()
    {
        return "TRCCoreBundle:Affichage:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  95 => 26,  92 => 25,  90 => 24,  87 => 23,  81 => 22,  78 => 21,  75 => 20,  73 => 19,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  47 => 13,  44 => 12,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div class="row main">*/
/* 		<div class="col-md-9 col-sm-8 col-xs-12">*/
/* 			<nav>*/
/* 			  <ul class="pagination pagination-md">*/
/* 			  	{%if pagination.page > 1 %}*/
/* 			  		<li>*/
/* 				      <a href="{{pagination.url}}?p={{pagination.page-1}}{{pagination.extension}}" aria-label="Previous">*/
/* 				        <span aria-hidden="true">&laquo;</span>*/
/* 				      </a>*/
/* 				    </li>*/
/* 				  	{%endif%}*/
/* 				  	{%set last = pagination.page %}*/
/* 				  	{%for p in pagination.pagination%}*/
/* 				  		{%set l ="" %}*/
/* 				  		{%if p.libelle == pagination.page %}*/
/* 				  			{%set l ="active" %}*/
/* 				  		{%endif%}*/
/* 				  		<li class="{{l}}"><a href="{{p.url}} ">{{p.libelle}} </a></li>*/
/* 				  		{%if p.libelle != '...' and p.libelle != pagination.last%}*/
/* 				  		{%set last = p.libelle%}*/
/* 				  		{%endif%}*/
/* 				  	{%endfor%}*/
/* 				  	*/
/* 				  	{%if last < pagination.last and pagination.last != pagination.page %}*/
/* 				  		<li>*/
/* 				      <a href="{{pagination.url}}?p={{pagination.page+1}}{{pagination.extension}}" aria-label="Next">*/
/* 				        <span aria-hidden="true">&raquo;</span> */
/* 				      </a>*/
/* 				    </li>*/
/* 				  	{%endif%}*/
/* 			  </ul>*/
/* 			</nav>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
