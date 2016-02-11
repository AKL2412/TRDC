<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_826997777625da6cc409f67d6f8b0cdb774021e9f6670d076daf2a1a6f903883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64a3eb2fc42faa4e23f5aba86ea537f4735f3697f9de7803b145857ead45731f = $this->env->getExtension("native_profiler");
        $__internal_64a3eb2fc42faa4e23f5aba86ea537f4735f3697f9de7803b145857ead45731f->enter($__internal_64a3eb2fc42faa4e23f5aba86ea537f4735f3697f9de7803b145857ead45731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a3eb2fc42faa4e23f5aba86ea537f4735f3697f9de7803b145857ead45731f->leave($__internal_64a3eb2fc42faa4e23f5aba86ea537f4735f3697f9de7803b145857ead45731f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d32334330db27c8ea55ee469259f0352c98c5cf35c6c2582ab9ff2fa086f996e = $this->env->getExtension("native_profiler");
        $__internal_d32334330db27c8ea55ee469259f0352c98c5cf35c6c2582ab9ff2fa086f996e->enter($__internal_d32334330db27c8ea55ee469259f0352c98c5cf35c6c2582ab9ff2fa086f996e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d32334330db27c8ea55ee469259f0352c98c5cf35c6c2582ab9ff2fa086f996e->leave($__internal_d32334330db27c8ea55ee469259f0352c98c5cf35c6c2582ab9ff2fa086f996e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ddc96fc26a025d2105ce571a8b797065392545bf8ea0bcfe9cd9d0559e199c = $this->env->getExtension("native_profiler");
        $__internal_42ddc96fc26a025d2105ce571a8b797065392545bf8ea0bcfe9cd9d0559e199c->enter($__internal_42ddc96fc26a025d2105ce571a8b797065392545bf8ea0bcfe9cd9d0559e199c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_42ddc96fc26a025d2105ce571a8b797065392545bf8ea0bcfe9cd9d0559e199c->leave($__internal_42ddc96fc26a025d2105ce571a8b797065392545bf8ea0bcfe9cd9d0559e199c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
