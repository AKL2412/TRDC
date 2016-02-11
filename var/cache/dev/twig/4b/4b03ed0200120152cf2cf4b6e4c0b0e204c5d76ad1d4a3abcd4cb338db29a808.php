<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_43a6c2b5913710c496887c63d029b813fab48f93b514629f37706c3bcf90889b extends Twig_Template
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
        $__internal_fbf65dcc2534201434ab40fbeca2f7d653a0327ae81ca2643fc11b7891022c5d = $this->env->getExtension("native_profiler");
        $__internal_fbf65dcc2534201434ab40fbeca2f7d653a0327ae81ca2643fc11b7891022c5d->enter($__internal_fbf65dcc2534201434ab40fbeca2f7d653a0327ae81ca2643fc11b7891022c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_fbf65dcc2534201434ab40fbeca2f7d653a0327ae81ca2643fc11b7891022c5d->leave($__internal_fbf65dcc2534201434ab40fbeca2f7d653a0327ae81ca2643fc11b7891022c5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
