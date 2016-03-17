<?php

/* TRCClientBundle:Default:index.html.twig */
class __TwigTemplate_0a58f232964f7bd4add9fbb35d90160523afe48a6053f229d9c3c37b4133fcf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCClientBundle::clients.html.twig", "TRCClientBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCClientBundle::clients.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_384fb6d4a58bb468fb6382f358922fc22e3afe5d786ae18d918811f19a6e2777 = $this->env->getExtension("native_profiler");
        $__internal_384fb6d4a58bb468fb6382f358922fc22e3afe5d786ae18d918811f19a6e2777->enter($__internal_384fb6d4a58bb468fb6382f358922fc22e3afe5d786ae18d918811f19a6e2777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCClientBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384fb6d4a58bb468fb6382f358922fc22e3afe5d786ae18d918811f19a6e2777->leave($__internal_384fb6d4a58bb468fb6382f358922fc22e3afe5d786ae18d918811f19a6e2777_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a0d43f6b45ab468c117b635cd91ac1619607687b6dffdc84311a85cf901882a = $this->env->getExtension("native_profiler");
        $__internal_2a0d43f6b45ab468c117b635cd91ac1619607687b6dffdc84311a85cf901882a->enter($__internal_2a0d43f6b45ab468c117b635cd91ac1619607687b6dffdc84311a85cf901882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<br><br>
\t<div class=\"row\">
\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form", "method" => "post")));
        echo "
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t\t\t
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radical", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrer le radical du client")));
        echo "
\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radical", array()), 'errors');
        echo "
\t\t\t\t  
\t\t\t\t  <div class=\"input-group-btn\">
\t\t\t\t    \t<input type=\"submit\" value=\"Ajouter\" class=\"btn-success btn\">
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_2a0d43f6b45ab468c117b635cd91ac1619607687b6dffdc84311a85cf901882a->leave($__internal_2a0d43f6b45ab468c117b635cd91ac1619607687b6dffdc84311a85cf901882a_prof);

    }

    public function getTemplateName()
    {
        return "TRCClientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  60 => 13,  56 => 12,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%extends 'TRCClientBundle::clients.html.twig'%}*/
/* */
/* {%block content %}*/
/* 	<br><br>*/
/* 	<div class="row">*/
/* 		<div class="col-md-6 col-md-offset-3">*/
/* 			{{ form_start(form, {'attr': {'role':'form','method':'post'}}) }}*/
/* 				{{ form_errors(form) }}*/
/* */
/* 				*/
/* 				<div class="input-group">*/
/* 					{{ form_widget(form.radical,{'attr':{'class':'form-control','placeholder':'Entrer le radical du client'}}) }}*/
/* 					{{ form_errors(form.radical) }}*/
/* 				  */
/* 				  <div class="input-group-btn">*/
/* 				    	<input type="submit" value="Ajouter" class="btn-success btn">*/
/* 				  </div>*/
/* 				</div>*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* {%endblock content %}*/
