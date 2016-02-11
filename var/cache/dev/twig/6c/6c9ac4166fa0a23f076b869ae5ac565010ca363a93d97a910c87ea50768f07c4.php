<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ba3276117a253d2e9ad3eb0b42b8d133c962aea7e66ebaf21bf0b791a7493d15 extends Twig_Template
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
        $__internal_c826476d6fbf0875e7f1a48361bd028e50e7b8c7e3a7ae812e788a2580ed8c48 = $this->env->getExtension("native_profiler");
        $__internal_c826476d6fbf0875e7f1a48361bd028e50e7b8c7e3a7ae812e788a2580ed8c48->enter($__internal_c826476d6fbf0875e7f1a48361bd028e50e7b8c7e3a7ae812e788a2580ed8c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c826476d6fbf0875e7f1a48361bd028e50e7b8c7e3a7ae812e788a2580ed8c48->leave($__internal_c826476d6fbf0875e7f1a48361bd028e50e7b8c7e3a7ae812e788a2580ed8c48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
