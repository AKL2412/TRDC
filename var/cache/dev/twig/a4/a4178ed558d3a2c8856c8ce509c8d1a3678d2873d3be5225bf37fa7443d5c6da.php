<?php

/* TRCCoreBundle:Default:index.html.twig */
class __TwigTemplate_4b5ad620a47d4b00a4adc0d890cbe7526fa0939abe9680a84cbc5fce52f53c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCCoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b29bb342b08deff4a9e13f8287808ee1f37d98e1d39976f29cdcbc21ae80c917 = $this->env->getExtension("native_profiler");
        $__internal_b29bb342b08deff4a9e13f8287808ee1f37d98e1d39976f29cdcbc21ae80c917->enter($__internal_b29bb342b08deff4a9e13f8287808ee1f37d98e1d39976f29cdcbc21ae80c917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b29bb342b08deff4a9e13f8287808ee1f37d98e1d39976f29cdcbc21ae80c917->leave($__internal_b29bb342b08deff4a9e13f8287808ee1f37d98e1d39976f29cdcbc21ae80c917_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb403da1b7cf74d184a2007249ad6e73892bde2f15cf2ef32655fc7c64f966a9 = $this->env->getExtension("native_profiler");
        $__internal_cb403da1b7cf74d184a2007249ad6e73892bde2f15cf2ef32655fc7c64f966a9->enter($__internal_cb403da1b7cf74d184a2007249ad6e73892bde2f15cf2ef32655fc7c64f966a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "TCP
";
        
        $__internal_cb403da1b7cf74d184a2007249ad6e73892bde2f15cf2ef32655fc7c64f966a9->leave($__internal_cb403da1b7cf74d184a2007249ad6e73892bde2f15cf2ef32655fc7c64f966a9_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_b6264b1b817668eccc070049ae349240587dc6ac9e8d3bbf0eca1065b7c1519e = $this->env->getExtension("native_profiler");
        $__internal_b6264b1b817668eccc070049ae349240587dc6ac9e8d3bbf0eca1065b7c1519e->enter($__internal_b6264b1b817668eccc070049ae349240587dc6ac9e8d3bbf0eca1065b7c1519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "\t<!-- <div id=\"timeline\">
\t\t<ol>
  <li>
    Point 1
    <span class=\"details\">
      Description of point 1
    </span>
  </li>
  <li>
    Point 2
    <span class=\"details\">
      Description of point 2
    </span>
  </li>
  <li>
    Point 3
    <span class=\"details\">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. 
    </span>
  </li>
</ol>
\t</div>

\t<div id=\"timeline\">
\t\t<h1>Timeline</h1>
<ul class=\"timeline-events\">
\t<li class=\"timeline-event-years-6-5 timeline-event-legend\">
\t\t<span>
\t\t\t<i></i>
\t\t\t<h2>Graduation</h2>
\t\t\t<h3>University of California, San Diego</h3>
\t\t\t<h4>BA Visual Arts</h4>\t\t
\t\t</span>
\t\t<i></i>
\t</li>
\t<li class=\"timeline-event-years-2\">
\t\t<h2>2004-2006</h2>
\t\t<h3>Ideaworks Advertising</h3>
\t\t<h4>Interactive Designer</h4>
\t</li>
\t<li class=\"timeline-event-years-2\">
\t\t<h2>2006-2008</h2>
\t\t<h3>Pint, Inc</h3>
\t\t<h4>Associate Creative Director</h4>
\t</li>
\t<li class=\"timeline-event-years-3\">
\t\t<h2>2008-2011</h2>
\t\t<h3>Cuker Interactive</h3>
\t\t<h4>Creative</h4>
\t</li>
\t<li class=\"timeline-event-years-7\">
\t\t<h2>2011-Present</h2>
\t\t<h3>Independent</h3>
\t\t<h4>Interactive Art Director</h4>
\t</li>
</ul>
<ul class=\"timelines-years\">
\t<li>2000</li>
\t<li>2002</li>
\t<li>2004</li>
\t<li>2006</li>
\t<li>2008</li>
\t<li>2010</li>
\t<li>2012</li>
\t<li>2014</li>
\t<li>2016</li>
\t<li>2018</li>
</ul>
\t</div> -->
";
        
        $__internal_b6264b1b817668eccc070049ae349240587dc6ac9e8d3bbf0eca1065b7c1519e->leave($__internal_b6264b1b817668eccc070049ae349240587dc6ac9e8d3bbf0eca1065b7c1519e_prof);

    }

    public function getTemplateName()
    {
        return "TRCCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* {%block title%}*/
/* TCP*/
/* {%endblock%}*/
/* */
/* {%block content%}*/
/* 	<!-- <div id="timeline">*/
/* 		<ol>*/
/*   <li>*/
/*     Point 1*/
/*     <span class="details">*/
/*       Description of point 1*/
/*     </span>*/
/*   </li>*/
/*   <li>*/
/*     Point 2*/
/*     <span class="details">*/
/*       Description of point 2*/
/*     </span>*/
/*   </li>*/
/*   <li>*/
/*     Point 3*/
/*     <span class="details">*/
/*       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod*/
/*       tempor incididunt ut labore et dolore magna aliqua. */
/*     </span>*/
/*   </li>*/
/* </ol>*/
/* 	</div>*/
/* */
/* 	<div id="timeline">*/
/* 		<h1>Timeline</h1>*/
/* <ul class="timeline-events">*/
/* 	<li class="timeline-event-years-6-5 timeline-event-legend">*/
/* 		<span>*/
/* 			<i></i>*/
/* 			<h2>Graduation</h2>*/
/* 			<h3>University of California, San Diego</h3>*/
/* 			<h4>BA Visual Arts</h4>		*/
/* 		</span>*/
/* 		<i></i>*/
/* 	</li>*/
/* 	<li class="timeline-event-years-2">*/
/* 		<h2>2004-2006</h2>*/
/* 		<h3>Ideaworks Advertising</h3>*/
/* 		<h4>Interactive Designer</h4>*/
/* 	</li>*/
/* 	<li class="timeline-event-years-2">*/
/* 		<h2>2006-2008</h2>*/
/* 		<h3>Pint, Inc</h3>*/
/* 		<h4>Associate Creative Director</h4>*/
/* 	</li>*/
/* 	<li class="timeline-event-years-3">*/
/* 		<h2>2008-2011</h2>*/
/* 		<h3>Cuker Interactive</h3>*/
/* 		<h4>Creative</h4>*/
/* 	</li>*/
/* 	<li class="timeline-event-years-7">*/
/* 		<h2>2011-Present</h2>*/
/* 		<h3>Independent</h3>*/
/* 		<h4>Interactive Art Director</h4>*/
/* 	</li>*/
/* </ul>*/
/* <ul class="timelines-years">*/
/* 	<li>2000</li>*/
/* 	<li>2002</li>*/
/* 	<li>2004</li>*/
/* 	<li>2006</li>*/
/* 	<li>2008</li>*/
/* 	<li>2010</li>*/
/* 	<li>2012</li>*/
/* 	<li>2014</li>*/
/* 	<li>2016</li>*/
/* 	<li>2018</li>*/
/* </ul>*/
/* 	</div> -->*/
/* {%endblock%}*/
