<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4c4f71742654e02c353b6a9b4df9b1747d8d18ef9de558958e5dd8b3e735fc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed423c13d4811658f26e3f9280e51e0af7d255eb3a7a979327f6b0c4fa1da337 = $this->env->getExtension("native_profiler");
        $__internal_ed423c13d4811658f26e3f9280e51e0af7d255eb3a7a979327f6b0c4fa1da337->enter($__internal_ed423c13d4811658f26e3f9280e51e0af7d255eb3a7a979327f6b0c4fa1da337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ed423c13d4811658f26e3f9280e51e0af7d255eb3a7a979327f6b0c4fa1da337->leave($__internal_ed423c13d4811658f26e3f9280e51e0af7d255eb3a7a979327f6b0c4fa1da337_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23bf041ee6263ee947e2840556e35732a45c673f26f39272e06bc477e4050ee3 = $this->env->getExtension("native_profiler");
        $__internal_23bf041ee6263ee947e2840556e35732a45c673f26f39272e06bc477e4050ee3->enter($__internal_23bf041ee6263ee947e2840556e35732a45c673f26f39272e06bc477e4050ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_23bf041ee6263ee947e2840556e35732a45c673f26f39272e06bc477e4050ee3->leave($__internal_23bf041ee6263ee947e2840556e35732a45c673f26f39272e06bc477e4050ee3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
