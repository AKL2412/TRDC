<?php

/* TRCCoreBundle:Default:index.html.twig */
class __TwigTemplate_a5c7923462f2a03cc110641af25460f3700875523d50eab83891f24be13d275f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCCoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db37d537974091e593ba52ba8f503a6a88456084d92b39b6c739615553535530 = $this->env->getExtension("native_profiler");
        $__internal_db37d537974091e593ba52ba8f503a6a88456084d92b39b6c739615553535530->enter($__internal_db37d537974091e593ba52ba8f503a6a88456084d92b39b6c739615553535530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db37d537974091e593ba52ba8f503a6a88456084d92b39b6c739615553535530->leave($__internal_db37d537974091e593ba52ba8f503a6a88456084d92b39b6c739615553535530_prof);

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
        return array (  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
