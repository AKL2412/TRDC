<?php

/* TRCCoreBundle:Affichage:pagination.html.twig */
class __TwigTemplate_18050fdd769b88173d5ace40acbd581ae4fcf2cdd353a56120a788589a0edf8d extends Twig_Template
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
        $__internal_ebb514c83c731611dc310785a93e1b820b77bbc955b04e785e422039494fcf39 = $this->env->getExtension("native_profiler");
        $__internal_ebb514c83c731611dc310785a93e1b820b77bbc955b04e785e422039494fcf39->enter($__internal_ebb514c83c731611dc310785a93e1b820b77bbc955b04e785e422039494fcf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Affichage:pagination.html.twig"));

        // line 1
        echo "<div class=\"row main\">
\t\t<div class=\"col-md-11 col-md-offset-1 col-sm-12 col-xs-12\">
\t\t\t<nav>
\t\t\t  <ul class=\"pagination pagination-md\">
\t\t\t  \t";
        // line 5
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
            // line 6
            echo "\t\t\t  \t\t<li>
\t\t\t  \t\t\t";
            // line 7
            if ((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax"))) {
                // line 8
                echo "\t\t\t  \t\t\t\t<a url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "url", array()), "html", null, true);
                echo "?p=";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "extension", array()), "html", null, true);
                echo "\" aria-label=\"Previous\" class=\"pagination-ajax\"
\t\t\t  \t\t\t\tonclick=\"nextPage(";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["containerId"]) ? $context["containerId"] : $this->getContext($context, "containerId")), "html", null, true);
                echo ")\" 
\t\t\t  \t\t\t\t>
\t\t\t\t\t\t        <span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t\t\t     </a>
\t\t\t  \t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t\t      <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "url", array()), "html", null, true);
                echo "?p=";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "extension", array()), "html", null, true);
                echo "\" aria-label=\"Previous\">
\t\t\t\t\t        <span aria-hidden=\"true\">&laquo;</span>
\t\t\t\t\t      </a>
\t\t\t\t      \t";
            }
            // line 18
            echo "\t\t\t\t    </li>
\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t";
        $context["last"] = $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array());
        // line 21
        echo "
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "\t\t\t\t  \t";
            $context["l"] = "";
            // line 24
            echo "\t\t\t\t  \t\t";
            if (($this->getAttribute($context["p"], "libelle", array()) == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                // line 25
                echo "\t\t\t\t  \t\t\t";
                $context["l"] = "active";
                // line 26
                echo "\t\t\t\t  \t\t";
            }
            // line 27
            echo "\t\t\t\t  \t\t<li class=\"";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "\">

\t\t\t\t  \t\t\t";
            // line 29
            if ((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax"))) {
                // line 30
                echo "\t\t\t  \t\t\t\t<a url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", array()), "html", null, true);
                echo "\"  class=\"pagination-ajax\"
\t\t\t  \t\t\t\tonclick=\"nextPage(";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["containerId"]) ? $context["containerId"] : $this->getContext($context, "containerId")), "html", null, true);
                echo ")\" 
\t\t\t  \t\t\t\t>
\t\t\t\t\t\t       ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelle", array()), "html", null, true);
                echo "
\t\t\t\t\t\t     </a>
\t\t\t  \t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t      <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", array()), "html", null, true);
                echo " \">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "libelle", array()), "html", null, true);
                echo " </a>
\t\t\t\t      \t";
            }
            // line 38
            echo "\t\t\t\t  \t\t\t

\t\t\t\t  \t\t</li>
\t\t\t\t  \t\t";
            // line 41
            if ((($this->getAttribute($context["p"], "libelle", array()) != "...") && ($this->getAttribute($context["p"], "libelle", array()) != $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "last", array())))) {
                // line 42
                echo "\t\t\t\t  \t\t";
                $context["last"] = $this->getAttribute($context["p"], "libelle", array());
                // line 43
                echo "\t\t\t\t  \t\t";
            }
            // line 44
            echo "\t\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t  \t
\t\t\t\t  \t";
        // line 46
        if ((((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "last", array())) && ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "last", array()) != $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array())))) {
            // line 47
            echo "\t\t\t\t  \t\t<li>
\t\t\t\t  \t\t\t";
            // line 48
            if ((isset($context["ajax"]) ? $context["ajax"] : $this->getContext($context, "ajax"))) {
                // line 49
                echo "\t\t\t\t  \t\t\t\t<a url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "url", array()), "html", null, true);
                echo "?p=";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "extension", array()), "html", null, true);
                echo "\" aria-label=\"Next\" class=\"pagination-ajax\"
\t\t\t\t  \t\t\t\tonclick=\"nextPage(";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["containerId"]) ? $context["containerId"] : $this->getContext($context, "containerId")), "html", null, true);
                echo ")\" 
\t\t\t\t  \t\t\t\t>
\t\t\t\t\t\t\t        <span aria-hidden=\"true\">&raquo;</span>
\t\t\t\t\t\t\t     </a>
\t\t\t\t  \t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t\t\t      <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "url", array()), "html", null, true);
                echo "?p=";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "extension", array()), "html", null, true);
                echo "\" aria-label=\"Next\">
\t\t\t\t\t\t\t        <span aria-hidden=\"true\">&raquo;</span> 
\t\t\t\t\t\t\t      </a>
\t\t\t\t\t      \t";
            }
            // line 59
            echo "\t\t\t\t\t\t      
\t\t\t\t    \t</li>
\t\t\t\t  \t";
        }
        // line 62
        echo "\t\t\t  </ul>
\t\t\t</nav>
\t\t</div>
\t\t
\t</div>";
        
        $__internal_ebb514c83c731611dc310785a93e1b820b77bbc955b04e785e422039494fcf39->leave($__internal_ebb514c83c731611dc310785a93e1b820b77bbc955b04e785e422039494fcf39_prof);

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
        return array (  181 => 62,  176 => 59,  165 => 55,  157 => 50,  149 => 49,  147 => 48,  144 => 47,  142 => 46,  139 => 45,  133 => 44,  130 => 43,  127 => 42,  125 => 41,  120 => 38,  112 => 36,  106 => 33,  101 => 31,  96 => 30,  94 => 29,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  72 => 22,  69 => 21,  66 => 20,  62 => 18,  51 => 14,  43 => 9,  35 => 8,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div class="row main">*/
/* 		<div class="col-md-11 col-md-offset-1 col-sm-12 col-xs-12">*/
/* 			<nav>*/
/* 			  <ul class="pagination pagination-md">*/
/* 			  	{%if pagination.page > 1 %}*/
/* 			  		<li>*/
/* 			  			{%if ajax %}*/
/* 			  				<a url="{{pagination.url}}?p={{pagination.page-1}}{{pagination.extension}}" aria-label="Previous" class="pagination-ajax"*/
/* 			  				onclick="nextPage({{containerId}})" */
/* 			  				>*/
/* 						        <span aria-hidden="true">&laquo;</span>*/
/* 						     </a>*/
/* 			  			{%else%}*/
/* 					      <a href="{{pagination.url}}?p={{pagination.page-1}}{{pagination.extension}}" aria-label="Previous">*/
/* 					        <span aria-hidden="true">&laquo;</span>*/
/* 					      </a>*/
/* 				      	{%endif%}*/
/* 				    </li>*/
/* 				{%endif%}*/
/* 				{%set last = pagination.page %}*/
/* */
/* 				{%for p in pagination.pagination%}*/
/* 				  	{%set l ="" %}*/
/* 				  		{%if p.libelle == pagination.page %}*/
/* 				  			{%set l ="active" %}*/
/* 				  		{%endif%}*/
/* 				  		<li class="{{l}}">*/
/* */
/* 				  			{%if ajax %}*/
/* 			  				<a url="{{p.url}}"  class="pagination-ajax"*/
/* 			  				onclick="nextPage({{containerId}})" */
/* 			  				>*/
/* 						       {{p.libelle}}*/
/* 						     </a>*/
/* 			  			{%else%}*/
/* 					      <a href="{{p.url}} ">{{p.libelle}} </a>*/
/* 				      	{%endif%}*/
/* 				  			*/
/* */
/* 				  		</li>*/
/* 				  		{%if p.libelle != '...' and p.libelle != pagination.last%}*/
/* 				  		{%set last = p.libelle%}*/
/* 				  		{%endif%}*/
/* 				  	{%endfor%}*/
/* 				  	*/
/* 				  	{%if last < pagination.last and pagination.last != pagination.page %}*/
/* 				  		<li>*/
/* 				  			{%if ajax %}*/
/* 				  				<a url="{{pagination.url}}?p={{pagination.page+1}}{{pagination.extension}}" aria-label="Next" class="pagination-ajax"*/
/* 				  				onclick="nextPage({{containerId}})" */
/* 				  				>*/
/* 							        <span aria-hidden="true">&raquo;</span>*/
/* 							     </a>*/
/* 				  			{%else%}*/
/* 						      <a href="{{pagination.url}}?p={{pagination.page+1}}{{pagination.extension}}" aria-label="Next">*/
/* 							        <span aria-hidden="true">&raquo;</span> */
/* 							      </a>*/
/* 					      	{%endif%}*/
/* 						      */
/* 				    	</li>*/
/* 				  	{%endif%}*/
/* 			  </ul>*/
/* 			</nav>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
