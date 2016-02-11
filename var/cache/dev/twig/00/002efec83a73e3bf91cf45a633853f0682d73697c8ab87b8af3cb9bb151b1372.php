<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_da83fff2086f67f6522b3d2ca869417809e6966214432909ebf94516a12c7594 extends Twig_Template
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
        $__internal_8b855c06cf546437b8e82f260ba0f1a66ce4f9a8a1fd55e30a3d3e2ef758cdd6 = $this->env->getExtension("native_profiler");
        $__internal_8b855c06cf546437b8e82f260ba0f1a66ce4f9a8a1fd55e30a3d3e2ef758cdd6->enter($__internal_8b855c06cf546437b8e82f260ba0f1a66ce4f9a8a1fd55e30a3d3e2ef758cdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8b855c06cf546437b8e82f260ba0f1a66ce4f9a8a1fd55e30a3d3e2ef758cdd6->leave($__internal_8b855c06cf546437b8e82f260ba0f1a66ce4f9a8a1fd55e30a3d3e2ef758cdd6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
