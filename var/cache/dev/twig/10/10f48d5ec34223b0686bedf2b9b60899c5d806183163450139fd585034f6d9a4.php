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
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_016075510f5a4b47ccd9c6b3a1b4fbb663e4cd195b7b761576f8eeb5b20a422c = $this->env->getExtension("native_profiler");
        $__internal_016075510f5a4b47ccd9c6b3a1b4fbb663e4cd195b7b761576f8eeb5b20a422c->enter($__internal_016075510f5a4b47ccd9c6b3a1b4fbb663e4cd195b7b761576f8eeb5b20a422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016075510f5a4b47ccd9c6b3a1b4fbb663e4cd195b7b761576f8eeb5b20a422c->leave($__internal_016075510f5a4b47ccd9c6b3a1b4fbb663e4cd195b7b761576f8eeb5b20a422c_prof);

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
