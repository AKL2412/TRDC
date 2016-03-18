<?php

/* TRCAdminBundle:Credits:creditsvoir.html.twig */
class __TwigTemplate_461d5dfed7268948c54dfe7bfde7039e83f390b599fc2af772d5610fca40cfe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCAdminBundle::Credits/credits.html.twig", "TRCAdminBundle:Credits:creditsvoir.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCAdminBundle::Credits/credits.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b44b819ea927293e81e27b146199432d5a76b90fcc8d1f9681f19ab1b1c1b41 = $this->env->getExtension("native_profiler");
        $__internal_5b44b819ea927293e81e27b146199432d5a76b90fcc8d1f9681f19ab1b1c1b41->enter($__internal_5b44b819ea927293e81e27b146199432d5a76b90fcc8d1f9681f19ab1b1c1b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Credits:creditsvoir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b44b819ea927293e81e27b146199432d5a76b90fcc8d1f9681f19ab1b1c1b41->leave($__internal_5b44b819ea927293e81e27b146199432d5a76b90fcc8d1f9681f19ab1b1c1b41_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_96a7c8d51906c5ec5101e370ccebb1b6574074b50b26c9e5b6d9eb9f6566551e = $this->env->getExtension("native_profiler");
        $__internal_96a7c8d51906c5ec5101e370ccebb1b6574074b50b26c9e5b6d9eb9f6566551e->enter($__internal_96a7c8d51906c5ec5101e370ccebb1b6574074b50b26c9e5b6d9eb9f6566551e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "nom", array()), "html", null, true);
        echo "         
\t";
        
        $__internal_96a7c8d51906c5ec5101e370ccebb1b6574074b50b26c9e5b6d9eb9f6566551e->leave($__internal_96a7c8d51906c5ec5101e370ccebb1b6574074b50b26c9e5b6d9eb9f6566551e_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_86713dafdea03bf1f1d9f003a47c7de134dbb1b7e5d23a7fda7fd4d74704d944 = $this->env->getExtension("native_profiler");
        $__internal_86713dafdea03bf1f1d9f003a47c7de134dbb1b7e5d23a7fda7fd4d74704d944->enter($__internal_86713dafdea03bf1f1d9f003a47c7de134dbb1b7e5d23a7fda7fd4d74704d944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "code", array()), "html", null, true);
        echo "
    ";
        
        $__internal_86713dafdea03bf1f1d9f003a47c7de134dbb1b7e5d23a7fda7fd4d74704d944->leave($__internal_86713dafdea03bf1f1d9f003a47c7de134dbb1b7e5d23a7fda7fd4d74704d944_prof);

    }

    // line 9
    public function block_position($context, array $blocks = array())
    {
        $__internal_4178164645eb369746763b5a2c178ecbcee8ba068434e96f18c6e386e03b9945 = $this->env->getExtension("native_profiler");
        $__internal_4178164645eb369746763b5a2c178ecbcee8ba068434e96f18c6e386e03b9945->enter($__internal_4178164645eb369746763b5a2c178ecbcee8ba068434e96f18c6e386e03b9945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 10
        echo "    \t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-tags\"></i>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_tdc_voir", array("code" => $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "code", array()))), "html", null, true);
        echo "\">
            \t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "code", array()), "html", null, true);
        echo "
            </a>
        </li>
        
    ";
        
        $__internal_4178164645eb369746763b5a2c178ecbcee8ba068434e96f18c6e386e03b9945->leave($__internal_4178164645eb369746763b5a2c178ecbcee8ba068434e96f18c6e386e03b9945_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9754588727394a7428c57540ac4fd06774af846a06c2a58dc705c304f98feac = $this->env->getExtension("native_profiler");
        $__internal_d9754588727394a7428c57540ac4fd06774af846a06c2a58dc705c304f98feac->enter($__internal_d9754588727394a7428c57540ac4fd06774af846a06c2a58dc705c304f98feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "   \t      
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          #";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "code", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "nom", array()), "html", null, true);
        echo "
        </div>
        <div class=\"panel-body\">
          <table class=\"table\">
            <tbody>
              
                <tr>
                \t<td>Code</td>
                  \t<td>
\t                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_tdc_voir", array("code" => $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "code", array()))), "html", null, true);
        echo " \">
\t                      ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "code", array()), "html", null, true);
        echo " 
\t                    </a>
\t                </td>
\t            </tr>
\t            <tr>
\t            \t<td>Nom</td>
                  <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "nom", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                \t<td>Description</td>
                  <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tdc"]) ? $context["tdc"] : $this->getContext($context, "tdc")), "description", array()), "html", null, true);
        echo " </td>
                </tr>
              
            </tbody>
          </table>
        </div>
        
      </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          Liste de documents
        </div>
        <div class=\"panel-body\">
          <table class=\"table\">
            <tbody>
            \t<tr>
              ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 62
            echo "                \t
                \t<p class=\"badge\">
                
                \t\t<i class=\"fa-check fa\"></i>
                \t\t";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "nom", array()), "html", null, true);
            echo "
                \t</p>
                \t
\t            
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "              </tr>
            </tbody>
          </table>
        </div>
        <div class=\"panel-footer\">
        \t";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        \t\t
        \t\t<div class=\"input-group\">
\t\t\t      <span class=\"input-group-btn\">
\t\t\t        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
\t\t\t      </span>
\t\t\t      ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Entrer le nom du document")));
        echo "
\t\t\t    </div>
        \t";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
      </div>
   ";
        
        $__internal_d9754588727394a7428c57540ac4fd06774af846a06c2a58dc705c304f98feac->leave($__internal_d9754588727394a7428c57540ac4fd06774af846a06c2a58dc705c304f98feac_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Credits:creditsvoir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 84,  203 => 82,  198 => 80,  191 => 76,  184 => 71,  173 => 66,  167 => 62,  163 => 61,  144 => 45,  137 => 41,  128 => 35,  124 => 34,  110 => 25,  105 => 22,  99 => 21,  87 => 15,  83 => 14,  75 => 10,  69 => 9,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends 'TRCAdminBundle::Credits/credits.html.twig'%}*/
/* {%block title%}*/
/* 	   {{tdc.nom}}         */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         {{tdc.code}}*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*     	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-tags"></i>*/
/*             <a href="{{url('trc_admin_tdc_voir',{code:tdc.code})}}">*/
/*             	{{tdc.code}}*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*    */
/*    {%block content %}*/
/*    	      */
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           #{{tdc.code}} : {{tdc.nom}}*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <table class="table">*/
/*             <tbody>*/
/*               */
/*                 <tr>*/
/*                 	<td>Code</td>*/
/*                   	<td>*/
/* 	                    <a href="{{url('trc_admin_tdc_voir',{code:tdc.code})}} ">*/
/* 	                      {{tdc.code}} */
/* 	                    </a>*/
/* 	                </td>*/
/* 	            </tr>*/
/* 	            <tr>*/
/* 	            	<td>Nom</td>*/
/*                   <td>{{tdc.nom}} </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                 	<td>Description</td>*/
/*                   <td>{{tdc.description}} </td>*/
/*                 </tr>*/
/*               */
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*         */
/*       </div>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           Liste de documents*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <table class="table">*/
/*             <tbody>*/
/*             	<tr>*/
/*               {%for doc in docs %}*/
/*                 	*/
/*                 	<p class="badge">*/
/*                 */
/*                 		<i class="fa-check fa"></i>*/
/*                 		{{doc.nom}}*/
/*                 	</p>*/
/*                 	*/
/* 	            */
/*               {%endfor%}*/
/*               </tr>*/
/*             </tbody>*/
/*           </table>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*         	{{form_start(form)}}*/
/*         		*/
/*         		<div class="input-group">*/
/* 			      <span class="input-group-btn">*/
/* 			        {{form_widget(form.save)}}*/
/* 			      </span>*/
/* 			      {{form_widget(form.nom,{'attr':{'class':'form-control','placeholder':'Entrer le nom du document'}})}}*/
/* 			    </div>*/
/*         	{{form_end(form)}}*/
/*         </div>*/
/*       </div>*/
/*    {%endblock%}*/
/* */
/* */
/* */
