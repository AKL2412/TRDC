<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_752362b11ca8312254176eb30a17e4f31234c92cab9c4870858d142726bf2216 extends Twig_Template
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
        $__internal_6af466c17ff46758d3b1abe1da28082ddd2ca2e32f8df37ba22c13462659c8dd = $this->env->getExtension("native_profiler");
        $__internal_6af466c17ff46758d3b1abe1da28082ddd2ca2e32f8df37ba22c13462659c8dd->enter($__internal_6af466c17ff46758d3b1abe1da28082ddd2ca2e32f8df37ba22c13462659c8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6af466c17ff46758d3b1abe1da28082ddd2ca2e32f8df37ba22c13462659c8dd->leave($__internal_6af466c17ff46758d3b1abe1da28082ddd2ca2e32f8df37ba22c13462659c8dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
