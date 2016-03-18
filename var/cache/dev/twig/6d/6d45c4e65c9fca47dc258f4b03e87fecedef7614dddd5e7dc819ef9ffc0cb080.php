<?php

/* TRCDDCBundle:Default:consulter.html.twig */
class __TwigTemplate_1484508c79edf154ff2e0754f274fb669fc2c20af9d7628c8f6bc8dd31a4767f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::ddc.html.twig", "TRCDDCBundle:Default:consulter.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCDDCBundle::ddc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fbd18d0d156be5659d0253732dcd1bd7c039da6dc65a18785c53b9ca35a40d1 = $this->env->getExtension("native_profiler");
        $__internal_7fbd18d0d156be5659d0253732dcd1bd7c039da6dc65a18785c53b9ca35a40d1->enter($__internal_7fbd18d0d156be5659d0253732dcd1bd7c039da6dc65a18785c53b9ca35a40d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Default:consulter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbd18d0d156be5659d0253732dcd1bd7c039da6dc65a18785c53b9ca35a40d1->leave($__internal_7fbd18d0d156be5659d0253732dcd1bd7c039da6dc65a18785c53b9ca35a40d1_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_90ea0fefd2d172998dda03091c552ba6ede6fd5d757812be48667086f01cf9a5 = $this->env->getExtension("native_profiler");
        $__internal_90ea0fefd2d172998dda03091c552ba6ede6fd5d757812be48667086f01cf9a5->enter($__internal_90ea0fefd2d172998dda03091c552ba6ede6fd5d757812be48667086f01cf9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 3
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "html", null, true);
        echo "
";
        
        $__internal_90ea0fefd2d172998dda03091c552ba6ede6fd5d757812be48667086f01cf9a5->leave($__internal_90ea0fefd2d172998dda03091c552ba6ede6fd5d757812be48667086f01cf9a5_prof);

    }

    // line 5
    public function block_position($context, array $blocks = array())
    {
        $__internal_0f50e8a6c9db2ad600c8972e6dd7c3940dbd38bfcb401b5663960aec5bb8b4e3 = $this->env->getExtension("native_profiler");
        $__internal_0f50e8a6c9db2ad600c8972e6dd7c3940dbd38bfcb401b5663960aec5bb8b4e3->enter($__internal_0f50e8a6c9db2ad600c8972e6dd7c3940dbd38bfcb401b5663960aec5bb8b4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 6
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-book\"></i>
            <a href=\"#\">
            \t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "html", null, true);
        echo "
            </a>
        </li>
        
    ";
        
        $__internal_0f50e8a6c9db2ad600c8972e6dd7c3940dbd38bfcb401b5663960aec5bb8b4e3->leave($__internal_0f50e8a6c9db2ad600c8972e6dd7c3940dbd38bfcb401b5663960aec5bb8b4e3_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b3afacf02bc7eafc2ee26517e7ef9f665613da070ef15fdeab3edf43cad9f66 = $this->env->getExtension("native_profiler");
        $__internal_7b3afacf02bc7eafc2ee26517e7ef9f665613da070ef15fdeab3edf43cad9f66->enter($__internal_7b3afacf02bc7eafc2ee26517e7ef9f665613da070ef15fdeab3edf43cad9f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
";
        
        $__internal_7b3afacf02bc7eafc2ee26517e7ef9f665613da070ef15fdeab3edf43cad9f66->leave($__internal_7b3afacf02bc7eafc2ee26517e7ef9f665613da070ef15fdeab3edf43cad9f66_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Default:consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  79 => 17,  67 => 11,  58 => 6,  52 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::ddc.html.twig' %}*/
/* {%block titre%}*/
/* 	{{ddc.rc}}*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-book"></i>*/
/*             <a href="#">*/
/*             	{{ddc.rc}}*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/* {%block content %}*/
/* */
/* {%endblock content %}*/
