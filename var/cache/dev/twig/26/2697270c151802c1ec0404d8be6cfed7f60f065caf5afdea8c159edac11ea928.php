<?php

/* TRCAdminBundle:Profils:ajouter.html.twig */
class __TwigTemplate_928687aedebddab59b447a0b28043424e63cf15aac105d0dbde33ced935bf4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "TRCAdminBundle:Profils:ajouter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2acdae0183d7bde0b602c3f16dbab553a1e3134637fcd9c30fa263e2e7c746b5 = $this->env->getExtension("native_profiler");
        $__internal_2acdae0183d7bde0b602c3f16dbab553a1e3134637fcd9c30fa263e2e7c746b5->enter($__internal_2acdae0183d7bde0b602c3f16dbab553a1e3134637fcd9c30fa263e2e7c746b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCAdminBundle:Profils:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2acdae0183d7bde0b602c3f16dbab553a1e3134637fcd9c30fa263e2e7c746b5->leave($__internal_2acdae0183d7bde0b602c3f16dbab553a1e3134637fcd9c30fa263e2e7c746b5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f97473b3807b9ff920c7807e03830086ce422a13cab597a9752d233a6ac27d73 = $this->env->getExtension("native_profiler");
        $__internal_f97473b3807b9ff920c7807e03830086ce422a13cab597a9752d233a6ac27d73->enter($__internal_f97473b3807b9ff920c7807e03830086ce422a13cab597a9752d233a6ac27d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t   Les Profils       
\t";
        
        $__internal_f97473b3807b9ff920c7807e03830086ce422a13cab597a9752d233a6ac27d73->leave($__internal_f97473b3807b9ff920c7807e03830086ce422a13cab597a9752d233a6ac27d73_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_ae9003c6174a2c41cfd48ac1485bffb06de47dddcc830085a6fcde5b559b62ff = $this->env->getExtension("native_profiler");
        $__internal_ae9003c6174a2c41cfd48ac1485bffb06de47dddcc830085a6fcde5b559b62ff->enter($__internal_ae9003c6174a2c41cfd48ac1485bffb06de47dddcc830085a6fcde5b559b62ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "        <i class=\"fa fa-cubes\"></i>
        Les profils
    ";
        
        $__internal_ae9003c6174a2c41cfd48ac1485bffb06de47dddcc830085a6fcde5b559b62ff->leave($__internal_ae9003c6174a2c41cfd48ac1485bffb06de47dddcc830085a6fcde5b559b62ff_prof);

    }

    // line 10
    public function block_position($context, array $blocks = array())
    {
        $__internal_fe319d1c7a5b4eded2bed5ebadf7d58ff280dc8f40cbe3c61dd7385c7767c605 = $this->env->getExtension("native_profiler");
        $__internal_fe319d1c7a5b4eded2bed5ebadf7d58ff280dc8f40cbe3c61dd7385c7767c605->enter($__internal_fe319d1c7a5b4eded2bed5ebadf7d58ff280dc8f40cbe3c61dd7385c7767c605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 11
        echo "        
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-users\"></i>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("trc_admin_profils");
        echo "\">
            \tLes profils
            </a>
        </li>
        
    ";
        
        $__internal_fe319d1c7a5b4eded2bed5ebadf7d58ff280dc8f40cbe3c61dd7385c7767c605->leave($__internal_fe319d1c7a5b4eded2bed5ebadf7d58ff280dc8f40cbe3c61dd7385c7767c605_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d5b6d2075391d2a21a467e44f255694c603186767dd6ba046bc436a18ca86fa = $this->env->getExtension("native_profiler");
        $__internal_5d5b6d2075391d2a21a467e44f255694c603186767dd6ba046bc436a18ca86fa->enter($__internal_5d5b6d2075391d2a21a467e44f255694c603186767dd6ba046bc436a18ca86fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div class=\"col-md-9\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\"></div>
                ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils"))) > 0)) {
            // line 26
            echo "                    <div class=\"panel-body\">

                        <table class=\"table table-bordered table-condensed\">
                            <thead>
                                <tr>
                                  <th></th>
                                    <th>matricule</th>
                                    <th>Nom</th>
                                    <th>code</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
            foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
                // line 39
                echo "                                    <tr>
                                      <td>
                                      </td>
                                        <td>
                                          <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_admin_profils_voir", array("matricule" => $this->getAttribute($context["profil"], "matricule", array()))), "html", null, true);
                echo "\">
                                              ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "matricule", array()), "html", null, true);
                echo "
                                          </a>
                                        </td>
                                        <td>
                                            ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "nom", array()), "html", null, true);
                echo "
                                        </td>
                                        <td>
                                           ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "code", array()), "html", null, true);
                echo "
                                        </td>
                                    </tr>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                
                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
            ";
            // line 61
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCCoreBundle:Affichage:pagination", array("pagination" => (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))));
            echo "
                    </div>
                ";
        } else {
            // line 64
            echo "                    <div class=\"panel-body\">
                    <h3> Pas de données</h3>
                    </div>
                ";
        }
        // line 68
        echo "            </div>
    </div>
    <div class=\"col-md-3 panel\">
        
        <div class=\"panel-heading\">
                Ajouter un profil
        </div>
        ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"form-group\">
            <label for=\"inputName\" class=\"control-label\">
                Nom
            </label>
            <div class=\"input-icon right\">
                                
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom du profil")));
        echo "
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputName\" class=\"control-label\">
                code
            </label>
            <div class=\"input-icon right\">
                                
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "code du profil")));
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputName\" class=\"control-label\">
                Entité
            </label>
            <div class=\"input-icon right\">
                                
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entite", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "entite")));
        echo "
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entite", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputName\" class=\"control-label\">
                DDP
            </label>
            <div class=\"input-icon right\">
                                
                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddp", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ddp")));
        echo "
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddp", array()), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"inputName\" class=\"control-label\">
                description
            </label>
            <div class=\"input-icon right\">
                                
                ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "description du profil")));
        echo "
                ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
     
    </div>

";
        
        $__internal_5d5b6d2075391d2a21a467e44f255694c603186767dd6ba046bc436a18ca86fa->leave($__internal_5d5b6d2075391d2a21a467e44f255694c603186767dd6ba046bc436a18ca86fa_prof);

    }

    public function getTemplateName()
    {
        return "TRCAdminBundle:Profils:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 127,  266 => 124,  262 => 123,  250 => 114,  246 => 113,  234 => 104,  230 => 103,  218 => 94,  214 => 93,  202 => 84,  198 => 83,  188 => 76,  184 => 75,  175 => 68,  169 => 64,  163 => 61,  156 => 56,  145 => 51,  139 => 48,  132 => 44,  128 => 43,  122 => 39,  118 => 38,  104 => 26,  102 => 25,  97 => 22,  91 => 21,  78 => 15,  72 => 11,  66 => 10,  57 => 6,  51 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends '::layout.html.twig'%}*/
/* 	{%block title%}*/
/* 	   Les Profils       */
/* 	{%endblock title%}*/
/* 	{%block titre%}*/
/*         <i class="fa fa-cubes"></i>*/
/*         Les profils*/
/*     {%endblock titre%}*/
/* */
/*     {%block position %}*/
/*         */
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-users"></i>*/
/*             <a href="{{url('trc_admin_profils')}}">*/
/*             	Les profils*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/*     {%block content%}*/
/*     <div class="col-md-9">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading"></div>*/
/*                 {%if profils|length > 0 %}*/
/*                     <div class="panel-body">*/
/* */
/*                         <table class="table table-bordered table-condensed">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                   <th></th>*/
/*                                     <th>matricule</th>*/
/*                                     <th>Nom</th>*/
/*                                     <th>code</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {%for profil in profils %}*/
/*                                     <tr>*/
/*                                       <td>*/
/*                                       </td>*/
/*                                         <td>*/
/*                                           <a href="{{url('trc_admin_profils_voir',{matricule:profil.matricule})}}">*/
/*                                               {{profil.matricule}}*/
/*                                           </a>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{profil.nom}}*/
/*                                         </td>*/
/*                                         <td>*/
/*                                            {{profil.code}}*/
/*                                         </td>*/
/*                                     </tr>*/
/* */
/*                                 {%endfor%}*/
/*                                 */
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*             {{ render(controller('TRCCoreBundle:Affichage:pagination',{pagination:pagination})) }}*/
/*                     </div>*/
/*                 {%else%}*/
/*                     <div class="panel-body">*/
/*                     <h3> Pas de données</h3>*/
/*                     </div>*/
/*                 {%endif%}*/
/*             </div>*/
/*     </div>*/
/*     <div class="col-md-3 panel">*/
/*         */
/*         <div class="panel-heading">*/
/*                 Ajouter un profil*/
/*         </div>*/
/*         {{ form_start(form, {'attr': {'role':'form'}}) }}*/
/*             {{ form_errors(form) }}*/
/*         <div class="form-group">*/
/*             <label for="inputName" class="control-label">*/
/*                 Nom*/
/*             </label>*/
/*             <div class="input-icon right">*/
/*                                 */
/*                 {{ form_widget(form.nom, {'attr': {'class': 'form-control','placeholder':"nom du profil"}}) }}*/
/*                 {{ form_errors(form.nom) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="inputName" class="control-label">*/
/*                 code*/
/*             </label>*/
/*             <div class="input-icon right">*/
/*                                 */
/*                 {{ form_widget(form.code, {'attr': {'class': 'form-control','placeholder':"code du profil"}}) }}*/
/*                 {{ form_errors(form.code) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="inputName" class="control-label">*/
/*                 Entité*/
/*             </label>*/
/*             <div class="input-icon right">*/
/*                                 */
/*                 {{ form_widget(form.entite, {'attr': {'class': 'form-control','placeholder':"entite"}}) }}*/
/*                 {{ form_errors(form.entite) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="inputName" class="control-label">*/
/*                 DDP*/
/*             </label>*/
/*             <div class="input-icon right">*/
/*                                 */
/*                 {{ form_widget(form.ddp, {'attr': {'class': 'form-control','placeholder':"ddp"}}) }}*/
/*                 {{ form_errors(form.ddp) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="inputName" class="control-label">*/
/*                 description*/
/*             </label>*/
/*             <div class="input-icon right">*/
/*                                 */
/*                 {{ form_widget(form.description, {'attr': {'class': 'form-control','placeholder':"description du profil"}}) }}*/
/*                 {{ form_errors(form.description) }}*/
/*             </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*      */
/*     </div>*/
/* */
/* {%endblock content%}*/
