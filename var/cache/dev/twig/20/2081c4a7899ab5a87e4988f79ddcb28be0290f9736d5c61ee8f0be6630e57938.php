<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_976a36eddfa0b34b1a6ab9d0adea0ad21a4e32073754e144a9deb8031c7ec728 extends Twig_Template
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
        $__internal_17da63fb84b06297af85cbd48915515b6ac2f63ac9493eb3c9fbe1b017e5ea8b = $this->env->getExtension("native_profiler");
        $__internal_17da63fb84b06297af85cbd48915515b6ac2f63ac9493eb3c9fbe1b017e5ea8b->enter($__internal_17da63fb84b06297af85cbd48915515b6ac2f63ac9493eb3c9fbe1b017e5ea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_17da63fb84b06297af85cbd48915515b6ac2f63ac9493eb3c9fbe1b017e5ea8b->leave($__internal_17da63fb84b06297af85cbd48915515b6ac2f63ac9493eb3c9fbe1b017e5ea8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
