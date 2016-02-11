<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f6f16e11fa08ac442cdf4536bc6e83d2becf1ccbc7ea1193ed3f492fd6b28a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea225e3e783374f60e553f65d717df009d10cf57be01bbd784ab14fd172bd95b = $this->env->getExtension("native_profiler");
        $__internal_ea225e3e783374f60e553f65d717df009d10cf57be01bbd784ab14fd172bd95b->enter($__internal_ea225e3e783374f60e553f65d717df009d10cf57be01bbd784ab14fd172bd95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea225e3e783374f60e553f65d717df009d10cf57be01bbd784ab14fd172bd95b->leave($__internal_ea225e3e783374f60e553f65d717df009d10cf57be01bbd784ab14fd172bd95b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_298dc1df3e04636f47c326ec292b5d77b2abef13bc73bc0224fbb5e38dd21737 = $this->env->getExtension("native_profiler");
        $__internal_298dc1df3e04636f47c326ec292b5d77b2abef13bc73bc0224fbb5e38dd21737->enter($__internal_298dc1df3e04636f47c326ec292b5d77b2abef13bc73bc0224fbb5e38dd21737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_298dc1df3e04636f47c326ec292b5d77b2abef13bc73bc0224fbb5e38dd21737->leave($__internal_298dc1df3e04636f47c326ec292b5d77b2abef13bc73bc0224fbb5e38dd21737_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
