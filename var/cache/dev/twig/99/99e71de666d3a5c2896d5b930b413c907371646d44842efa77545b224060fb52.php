<?php

/* TRCAdminBundle::Credits/credits.html.twig */
class __TwigTemplate_a91ca860aa25ee0c6e08b83260af603e97aed434bb79e84d8dbe7f47f7603350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCAdminBundle::Credits/credits.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e835add74b11e6a2f9c4eb0fc8d4142b07a9067afedd34241593f27e47fcf25 = $this->env->getExtension("native_profiler");
        $__internal_1e835add74b11e6a2f9c4eb0fc8d4142b07a9067afedd34241593f27e47fcf25->enter($__internal_1e835add74b11e6a2f9c4eb0fc8d4142b07a9067afedd34241593f27e47fcf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle::Credits/credits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e835add74b11e6a2f9c4eb0fc8d4142b07a9067afedd34241593f27e47fcf25->leave($__internal_1e835add74b11e6a2f9c4eb0fc8d4142b07a9067afedd34241593f27e47fcf25_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf28751ad89c88fc6b4e59fa0c8cd28c354e65afe9ff6d7dfc8a72d19fd47e64 = $this->env->getExtension("native_profiler");
        $__internal_bf28751ad89c88fc6b4e59fa0c8cd28c354e65afe9ff6d7dfc8a72d19fd47e64->enter($__internal_bf28751ad89c88fc6b4e59fa0c8cd28c354e65afe9ff6d7dfc8a72d19fd47e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Les types de crédits         
\t";
        
        $__internal_bf28751ad89c88fc6b4e59fa0c8cd28c354e65afe9ff6d7dfc8a72d19fd47e64->leave($__internal_bf28751ad89c88fc6b4e59fa0c8cd28c354e65afe9ff6d7dfc8a72d19fd47e64_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5b9d367263cac5c35f3ddc5aaf6c9203309f0ead84baba46864da814b0790407 = $this->env->getExtension("native_profiler");
        $__internal_5b9d367263cac5c35f3ddc5aaf6c9203309f0ead84baba46864da814b0790407->enter($__internal_5b9d367263cac5c35f3ddc5aaf6c9203309f0ead84baba46864da814b0790407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        Les types de crédits
    ";
        
        $__internal_5b9d367263cac5c35f3ddc5aaf6c9203309f0ead84baba46864da814b0790407->leave($__internal_5b9d367263cac5c35f3ddc5aaf6c9203309f0ead84baba46864da814b0790407_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_e4a3c8cc02529d88d4f71970a98dd1ddf97622518f5c3e1721b7b2866c44c65e = $this->env->getExtension("native_profiler");
        $__internal_e4a3c8cc02529d88d4f71970a98dd1ddf97622518f5c3e1721b7b2866c44c65e->enter($__internal_e4a3c8cc02529d88d4f71970a98dd1ddf97622518f5c3e1721b7b2866c44c65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-money\"></i>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("trc_admin_tdc");
        echo "\">
            \tCrédits
            </a>
        </li>
        
    ";
        
        $__internal_e4a3c8cc02529d88d4f71970a98dd1ddf97622518f5c3e1721b7b2866c44c65e->leave($__internal_e4a3c8cc02529d88d4f71970a98dd1ddf97622518f5c3e1721b7b2866c44c65e_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c30e4e8ef6cf67a17f2595dc26527d747656953956d51ce724cc6906b64626a = $this->env->getExtension("native_profiler");
        $__internal_0c30e4e8ef6cf67a17f2595dc26527d747656953956d51ce724cc6906b64626a->enter($__internal_0c30e4e8ef6cf67a17f2595dc26527d747656953956d51ce724cc6906b64626a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "   \t      
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          Les types de crédits
        </div>
        <div class=\"panel-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>Code</th>
                <th>Nom</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tdcs"]) ? $context["tdcs"] : $this->getContext($context, "tdcs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tdc"]) {
            // line 37
            echo "                <tr>
                  <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_tdc_voir", array("code" => $this->getAttribute($context["tdc"], "code", array()))), "html", null, true);
            echo " \">
                      ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tdc"], "code", array()), "html", null, true);
            echo " 
                    </a>
                  </td>
                  <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["tdc"], "nom", array()), "html", null, true);
            echo " </td>
                  <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["tdc"], "description", array()), "html", null, true);
            echo " </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tdc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
          </table>
        </div>
        <div class=\"panel-footer\"></div>
      </div>
   ";
        
        $__internal_0c30e4e8ef6cf67a17f2595dc26527d747656953956d51ce724cc6906b64626a->leave($__internal_0c30e4e8ef6cf67a17f2595dc26527d747656953956d51ce724cc6906b64626a_prof);

    }

    // line 54
    public function block_script($context, array $blocks = array())
    {
        $__internal_636124636e9bc0c48f2df0f903858d36ca1b4515c7ea561473dfcd3a2c7e047c = $this->env->getExtension("native_profiler");
        $__internal_636124636e9bc0c48f2df0f903858d36ca1b4515c7ea561473dfcd3a2c7e047c->enter($__internal_636124636e9bc0c48f2df0f903858d36ca1b4515c7ea561473dfcd3a2c7e047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 55
        echo "<script type=\"text/javascript\">
\t(function(){
\t\t\$('#side-menu li').removeClass('active');
\t\t\$('#side-menu li.credits').addClass('active');
\t})();
</script>
";
        
        $__internal_636124636e9bc0c48f2df0f903858d36ca1b4515c7ea561473dfcd3a2c7e047c->leave($__internal_636124636e9bc0c48f2df0f903858d36ca1b4515c7ea561473dfcd3a2c7e047c_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle::Credits/credits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  156 => 54,  144 => 47,  135 => 44,  131 => 43,  125 => 40,  121 => 39,  117 => 37,  113 => 36,  96 => 21,  90 => 20,  77 => 13,  72 => 10,  66 => 9,  58 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* 	{%block title%}*/
/* 	   Les types de crédits         */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         Les types de crédits*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-money"></i>*/
/*             <a href="{{url('trc_admin_tdc')}}">*/
/*             	Crédits*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/*    {%block content %}*/
/*    	      */
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           Les types de crédits*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <table class="table">*/
/*             <thead>*/
/*               <tr>*/
/*                 <th>Code</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Description</th>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               {%for tdc in tdcs %}*/
/*                 <tr>*/
/*                   <td>*/
/*                     <a href="{{url('trc_admin_tdc_voir',{code:tdc.code})}} ">*/
/*                       {{tdc.code}} */
/*                     </a>*/
/*                   </td>*/
/*                   <td>{{tdc.nom}} </td>*/
/*                   <td>{{tdc.description}} </td>*/
/*                 </tr>*/
/*               {%endfor%}*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*         <div class="panel-footer"></div>*/
/*       </div>*/
/*    {%endblock%}*/
/* */
/* {%block script%}*/
/* <script type="text/javascript">*/
/* 	(function(){*/
/* 		$('#side-menu li').removeClass('active');*/
/* 		$('#side-menu li.credits').addClass('active');*/
/* 	})();*/
/* </script>*/
/* {%endblock script%}*/
/*     */
