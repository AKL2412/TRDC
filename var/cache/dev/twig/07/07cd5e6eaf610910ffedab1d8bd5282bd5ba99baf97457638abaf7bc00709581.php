<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_10ac1bf6797abf56f43b472c2173d37ce6c683ec2d59fb44c81a3230d44d2d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_949e8f7c5bf23a5e810874fa9227c1cad094b092b7f8c67aac7db1ed3918302c = $this->env->getExtension("native_profiler");
        $__internal_949e8f7c5bf23a5e810874fa9227c1cad094b092b7f8c67aac7db1ed3918302c->enter($__internal_949e8f7c5bf23a5e810874fa9227c1cad094b092b7f8c67aac7db1ed3918302c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_949e8f7c5bf23a5e810874fa9227c1cad094b092b7f8c67aac7db1ed3918302c->leave($__internal_949e8f7c5bf23a5e810874fa9227c1cad094b092b7f8c67aac7db1ed3918302c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_456bad8f9159ada8a8b6408785acf926f9ed43b86833070933510fbcbd02633e = $this->env->getExtension("native_profiler");
        $__internal_456bad8f9159ada8a8b6408785acf926f9ed43b86833070933510fbcbd02633e->enter($__internal_456bad8f9159ada8a8b6408785acf926f9ed43b86833070933510fbcbd02633e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_456bad8f9159ada8a8b6408785acf926f9ed43b86833070933510fbcbd02633e->leave($__internal_456bad8f9159ada8a8b6408785acf926f9ed43b86833070933510fbcbd02633e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a5186e137fa6e8d08cc1b46fd4b6ac2b8ca22a8f1fc413e587a59495dfd2d1a = $this->env->getExtension("native_profiler");
        $__internal_8a5186e137fa6e8d08cc1b46fd4b6ac2b8ca22a8f1fc413e587a59495dfd2d1a->enter($__internal_8a5186e137fa6e8d08cc1b46fd4b6ac2b8ca22a8f1fc413e587a59495dfd2d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a5186e137fa6e8d08cc1b46fd4b6ac2b8ca22a8f1fc413e587a59495dfd2d1a->leave($__internal_8a5186e137fa6e8d08cc1b46fd4b6ac2b8ca22a8f1fc413e587a59495dfd2d1a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae0fd79096bb5bfc285b7d5142125546cce57371636b3f1069639cd9bb4db4a1 = $this->env->getExtension("native_profiler");
        $__internal_ae0fd79096bb5bfc285b7d5142125546cce57371636b3f1069639cd9bb4db4a1->enter($__internal_ae0fd79096bb5bfc285b7d5142125546cce57371636b3f1069639cd9bb4db4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae0fd79096bb5bfc285b7d5142125546cce57371636b3f1069639cd9bb4db4a1->leave($__internal_ae0fd79096bb5bfc285b7d5142125546cce57371636b3f1069639cd9bb4db4a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
