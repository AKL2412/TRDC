<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_7722519192d1ca3269740b07f950fb4d70264ff702ba312c954830d31c3c0437 extends Twig_Template
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
        $__internal_42a4341a2a3f31fa54455ca4a0e5cbd81f4dbf26b15d9027e79effb45acb8b6c = $this->env->getExtension("native_profiler");
        $__internal_42a4341a2a3f31fa54455ca4a0e5cbd81f4dbf26b15d9027e79effb45acb8b6c->enter($__internal_42a4341a2a3f31fa54455ca4a0e5cbd81f4dbf26b15d9027e79effb45acb8b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_42a4341a2a3f31fa54455ca4a0e5cbd81f4dbf26b15d9027e79effb45acb8b6c->leave($__internal_42a4341a2a3f31fa54455ca4a0e5cbd81f4dbf26b15d9027e79effb45acb8b6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
