<?php

/* TRCCoreBundle:Default:index.html.twig */
class __TwigTemplate_f0f851d73a6f4d08d7bb928015b040b30fe4f3f3539f491d193ae156bb27b6a0 extends Twig_Template
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
        $__internal_d4a0a2d96a167f3523a9346ed0b61aaadfd41cdf3c07457202a57062dc2f05f7 = $this->env->getExtension("native_profiler");
        $__internal_d4a0a2d96a167f3523a9346ed0b61aaadfd41cdf3c07457202a57062dc2f05f7->enter($__internal_d4a0a2d96a167f3523a9346ed0b61aaadfd41cdf3c07457202a57062dc2f05f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a0a2d96a167f3523a9346ed0b61aaadfd41cdf3c07457202a57062dc2f05f7->leave($__internal_d4a0a2d96a167f3523a9346ed0b61aaadfd41cdf3c07457202a57062dc2f05f7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c9dca1a4f2877c36b8815b436ce362e8076c1a6bf5efdf52e0151a1bf0712c1 = $this->env->getExtension("native_profiler");
        $__internal_2c9dca1a4f2877c36b8815b436ce362e8076c1a6bf5efdf52e0151a1bf0712c1->enter($__internal_2c9dca1a4f2877c36b8815b436ce362e8076c1a6bf5efdf52e0151a1bf0712c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "TCP
";
        
        $__internal_2c9dca1a4f2877c36b8815b436ce362e8076c1a6bf5efdf52e0151a1bf0712c1->leave($__internal_2c9dca1a4f2877c36b8815b436ce362e8076c1a6bf5efdf52e0151a1bf0712c1_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_c7aa0d8edcaf973d255756bf2348bfb7cf5c3b8d402d64dfde46a125095ec777 = $this->env->getExtension("native_profiler");
        $__internal_c7aa0d8edcaf973d255756bf2348bfb7cf5c3b8d402d64dfde46a125095ec777->enter($__internal_c7aa0d8edcaf973d255756bf2348bfb7cf5c3b8d402d64dfde46a125095ec777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c7aa0d8edcaf973d255756bf2348bfb7cf5c3b8d402d64dfde46a125095ec777->leave($__internal_c7aa0d8edcaf973d255756bf2348bfb7cf5c3b8d402d64dfde46a125095ec777_prof);

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
