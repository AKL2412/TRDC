<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_45f211a095a9af99d0d675f508729eb48166f88512ef5d4acf86934ebee446e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2dd78bee10e35ad56784c1b7c4042749dd7872a31fe283e3d502e6a434f3b28 = $this->env->getExtension("native_profiler");
        $__internal_a2dd78bee10e35ad56784c1b7c4042749dd7872a31fe283e3d502e6a434f3b28->enter($__internal_a2dd78bee10e35ad56784c1b7c4042749dd7872a31fe283e3d502e6a434f3b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2dd78bee10e35ad56784c1b7c4042749dd7872a31fe283e3d502e6a434f3b28->leave($__internal_a2dd78bee10e35ad56784c1b7c4042749dd7872a31fe283e3d502e6a434f3b28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d1516fb2eaf76d206df35ddd72cdfc41b20bc74594085dcc4de200032041da5 = $this->env->getExtension("native_profiler");
        $__internal_6d1516fb2eaf76d206df35ddd72cdfc41b20bc74594085dcc4de200032041da5->enter($__internal_6d1516fb2eaf76d206df35ddd72cdfc41b20bc74594085dcc4de200032041da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6d1516fb2eaf76d206df35ddd72cdfc41b20bc74594085dcc4de200032041da5->leave($__internal_6d1516fb2eaf76d206df35ddd72cdfc41b20bc74594085dcc4de200032041da5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd70d3af5deabf7426fb95a9b1eeffbcd67bda79775daa31b638a91177b4ee4 = $this->env->getExtension("native_profiler");
        $__internal_1cd70d3af5deabf7426fb95a9b1eeffbcd67bda79775daa31b638a91177b4ee4->enter($__internal_1cd70d3af5deabf7426fb95a9b1eeffbcd67bda79775daa31b638a91177b4ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1cd70d3af5deabf7426fb95a9b1eeffbcd67bda79775daa31b638a91177b4ee4->leave($__internal_1cd70d3af5deabf7426fb95a9b1eeffbcd67bda79775daa31b638a91177b4ee4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_633e1261dfd129c8b068d305ca73b87897e93a506d449f1057682fb8e66a49d0 = $this->env->getExtension("native_profiler");
        $__internal_633e1261dfd129c8b068d305ca73b87897e93a506d449f1057682fb8e66a49d0->enter($__internal_633e1261dfd129c8b068d305ca73b87897e93a506d449f1057682fb8e66a49d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_633e1261dfd129c8b068d305ca73b87897e93a506d449f1057682fb8e66a49d0->leave($__internal_633e1261dfd129c8b068d305ca73b87897e93a506d449f1057682fb8e66a49d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
