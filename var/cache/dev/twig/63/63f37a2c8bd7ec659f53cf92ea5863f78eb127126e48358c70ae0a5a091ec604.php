<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e482a20748768dab7eb845f2f7e77760e2ded9053efad87ba8560fe01d461bb6 extends Twig_Template
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
        $__internal_2a8cab12ef146deb882c11aed514a7631b492c3aee07a05a4b9badbd5e17ff12 = $this->env->getExtension("native_profiler");
        $__internal_2a8cab12ef146deb882c11aed514a7631b492c3aee07a05a4b9badbd5e17ff12->enter($__internal_2a8cab12ef146deb882c11aed514a7631b492c3aee07a05a4b9badbd5e17ff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2a8cab12ef146deb882c11aed514a7631b492c3aee07a05a4b9badbd5e17ff12->leave($__internal_2a8cab12ef146deb882c11aed514a7631b492c3aee07a05a4b9badbd5e17ff12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
