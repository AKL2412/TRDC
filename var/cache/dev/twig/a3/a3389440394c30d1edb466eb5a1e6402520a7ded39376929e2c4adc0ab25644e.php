<?php

/* base.html.twig */
class __TwigTemplate_0534f26e7576d913ffe9f0183a9a38f8ece92cc34209108f33b09a23c458ee3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b17f77a0060db630b497e4aeaa74bb38f9187a42062c6840432db1fd84250db2 = $this->env->getExtension("native_profiler");
        $__internal_b17f77a0060db630b497e4aeaa74bb38f9187a42062c6840432db1fd84250db2->enter($__internal_b17f77a0060db630b497e4aeaa74bb38f9187a42062c6840432db1fd84250db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b17f77a0060db630b497e4aeaa74bb38f9187a42062c6840432db1fd84250db2->leave($__internal_b17f77a0060db630b497e4aeaa74bb38f9187a42062c6840432db1fd84250db2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a98eabb5061774c3c640c38f23c8a34b414e230f1c50ec64a4bfba73b39cfaa = $this->env->getExtension("native_profiler");
        $__internal_6a98eabb5061774c3c640c38f23c8a34b414e230f1c50ec64a4bfba73b39cfaa->enter($__internal_6a98eabb5061774c3c640c38f23c8a34b414e230f1c50ec64a4bfba73b39cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6a98eabb5061774c3c640c38f23c8a34b414e230f1c50ec64a4bfba73b39cfaa->leave($__internal_6a98eabb5061774c3c640c38f23c8a34b414e230f1c50ec64a4bfba73b39cfaa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d212f6e3b370da392fe57252bb41e576ab0a7065d486a70ace98cabbf80318e = $this->env->getExtension("native_profiler");
        $__internal_5d212f6e3b370da392fe57252bb41e576ab0a7065d486a70ace98cabbf80318e->enter($__internal_5d212f6e3b370da392fe57252bb41e576ab0a7065d486a70ace98cabbf80318e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d212f6e3b370da392fe57252bb41e576ab0a7065d486a70ace98cabbf80318e->leave($__internal_5d212f6e3b370da392fe57252bb41e576ab0a7065d486a70ace98cabbf80318e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dee98f7a3f56110b62e78f53f8f4e5a0b3ef316504292a5b64e37ff533eba115 = $this->env->getExtension("native_profiler");
        $__internal_dee98f7a3f56110b62e78f53f8f4e5a0b3ef316504292a5b64e37ff533eba115->enter($__internal_dee98f7a3f56110b62e78f53f8f4e5a0b3ef316504292a5b64e37ff533eba115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dee98f7a3f56110b62e78f53f8f4e5a0b3ef316504292a5b64e37ff533eba115->leave($__internal_dee98f7a3f56110b62e78f53f8f4e5a0b3ef316504292a5b64e37ff533eba115_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67f495e11d2e4d305d93cf4a0025b5e0e966392acbcc811477338b3105ac666c = $this->env->getExtension("native_profiler");
        $__internal_67f495e11d2e4d305d93cf4a0025b5e0e966392acbcc811477338b3105ac666c->enter($__internal_67f495e11d2e4d305d93cf4a0025b5e0e966392acbcc811477338b3105ac666c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_67f495e11d2e4d305d93cf4a0025b5e0e966392acbcc811477338b3105ac666c->leave($__internal_67f495e11d2e4d305d93cf4a0025b5e0e966392acbcc811477338b3105ac666c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
