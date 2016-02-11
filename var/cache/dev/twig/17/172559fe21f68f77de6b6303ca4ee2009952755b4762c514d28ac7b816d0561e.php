<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b5b5b8c06ffb7b40f5787bcfa9b1218db8c46b738ec23931226b25b90b6c08a0 extends Twig_Template
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
        $__internal_f3b33836f8073babed62a7583af8a3976fdc8f60594ea8e973b6d22d47418ee3 = $this->env->getExtension("native_profiler");
        $__internal_f3b33836f8073babed62a7583af8a3976fdc8f60594ea8e973b6d22d47418ee3->enter($__internal_f3b33836f8073babed62a7583af8a3976fdc8f60594ea8e973b6d22d47418ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f3b33836f8073babed62a7583af8a3976fdc8f60594ea8e973b6d22d47418ee3->leave($__internal_f3b33836f8073babed62a7583af8a3976fdc8f60594ea8e973b6d22d47418ee3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
