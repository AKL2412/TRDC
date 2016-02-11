<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_85be676ffb45212a49280f9af07e96770bbf7c77531cb4005225ab5e77b3e044 extends Twig_Template
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
        $__internal_20f9df66a6a04dfd190d00210149aaf1841125cedccdb5b72e0f72353099f123 = $this->env->getExtension("native_profiler");
        $__internal_20f9df66a6a04dfd190d00210149aaf1841125cedccdb5b72e0f72353099f123->enter($__internal_20f9df66a6a04dfd190d00210149aaf1841125cedccdb5b72e0f72353099f123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_20f9df66a6a04dfd190d00210149aaf1841125cedccdb5b72e0f72353099f123->leave($__internal_20f9df66a6a04dfd190d00210149aaf1841125cedccdb5b72e0f72353099f123_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
