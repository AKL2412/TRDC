<?php

/* TRCDDCBundle:Docs:ajout.html.twig */
class __TwigTemplate_0ad78eda28d3b1f5ff8eac0f0ac8fdca8edfea716588134f463da7e5392b0741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::Default/consulter.html.twig", "TRCDDCBundle:Docs:ajout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'position' => array($this, 'block_position'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TRCDDCBundle::Default/consulter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b07f931ef4511bc1a5f3e0fa8206f0a98f7aa60b1c4822975bd1ad74b433fca = $this->env->getExtension("native_profiler");
        $__internal_0b07f931ef4511bc1a5f3e0fa8206f0a98f7aa60b1c4822975bd1ad74b433fca->enter($__internal_0b07f931ef4511bc1a5f3e0fa8206f0a98f7aa60b1c4822975bd1ad74b433fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Docs:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b07f931ef4511bc1a5f3e0fa8206f0a98f7aa60b1c4822975bd1ad74b433fca->leave($__internal_0b07f931ef4511bc1a5f3e0fa8206f0a98f7aa60b1c4822975bd1ad74b433fca_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6744b8505187da2f857b846ee3a2a9eff441c6f211c56603d198d065b87f97ab = $this->env->getExtension("native_profiler");
        $__internal_6744b8505187da2f857b846ee3a2a9eff441c6f211c56603d198d065b87f97ab->enter($__internal_6744b8505187da2f857b846ee3a2a9eff441c6f211c56603d198d065b87f97ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tDocuments | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6744b8505187da2f857b846ee3a2a9eff441c6f211c56603d198d065b87f97ab->leave($__internal_6744b8505187da2f857b846ee3a2a9eff441c6f211c56603d198d065b87f97ab_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_8de6603ca8a2616ef77eadb95b318a7c3336887f2e3fc413084885490813f378 = $this->env->getExtension("native_profiler");
        $__internal_8de6603ca8a2616ef77eadb95b318a7c3336887f2e3fc413084885490813f378->enter($__internal_8de6603ca8a2616ef77eadb95b318a7c3336887f2e3fc413084885490813f378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "\tDocuments 
";
        
        $__internal_8de6603ca8a2616ef77eadb95b318a7c3336887f2e3fc413084885490813f378->leave($__internal_8de6603ca8a2616ef77eadb95b318a7c3336887f2e3fc413084885490813f378_prof);

    }

    // line 8
    public function block_position($context, array $blocks = array())
    {
        $__internal_5071391578dddb4b56b8acf13107f29d3f80fbf2e35a559078982c65095ee17f = $this->env->getExtension("native_profiler");
        $__internal_5071391578dddb4b56b8acf13107f29d3f80fbf2e35a559078982c65095ee17f->enter($__internal_5071391578dddb4b56b8acf13107f29d3f80fbf2e35a559078982c65095ee17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 9
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-plus-circle\"></i>
            <a href=\"#\">
            \tDocuments
            </a>
        </li>
        
    ";
        
        $__internal_5071391578dddb4b56b8acf13107f29d3f80fbf2e35a559078982c65095ee17f->leave($__internal_5071391578dddb4b56b8acf13107f29d3f80fbf2e35a559078982c65095ee17f_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_2ab66814044c3176fec4e3a90fc226a5b99e62fc1d37150a4cda0be6c1003b67 = $this->env->getExtension("native_profiler");
        $__internal_2ab66814044c3176fec4e3a90fc226a5b99e62fc1d37150a4cda0be6c1003b67->enter($__internal_2ab66814044c3176fec4e3a90fc226a5b99e62fc1d37150a4cda0be6c1003b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        <div id=\"voirFichierDDC\">
            ";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TRCDDCBundle:Docs:voir", array("rs" => $this->getAttribute(        // line 24
(isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()))));
        // line 25
        echo "
        </div>
    </div>
    <div class=\"col-md-4\">
        <div class=\"panel-default panel\">
            <div class=\"panel-heading\">
                Uploader un fichier
            </div>
            <form voir=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_voir_docs", array("rs" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rs", array()))), "html", null, true);
        echo " \"  url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_ddc_upload_file", array("rc" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "type" => "doc")), "html", null, true);
        echo " \" id=\"data-form-docs-ddc\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"panel-body\">
                    <div class=\"form-group\">
                        <label>
                            Le document chargé
                        </label>
                        <select class=\"form-control\" name=\"document\">
                            <option value=\"vide\">Sélectionner le fichier</option>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : $this->getContext($context, "docs")));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 42
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "id", array()), "html", null, true);
            echo " \">
                                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "nom", array()), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                            <label>
                                <i class=\"fa-upload fa\"></i>
                                Importer le fichier
                                <input hidden=\"hidden\" name=\"fichier\" type=\"file\" class=\"surveiller hide hidden \" id=\"leFichier\"/>
                            </label>
                    </div>
                    <div class=\"form-group\">
                            <label>
                                Nom du document
                            </label>
                            <input placeholder=\"Nom du fichier\" type=\"text\" id=\"nom-fichier\" class=\"form-control\" name=\"nomFichier\"/>
                    </div>
                    <div id=\"message\" class=\"text-danger alert alert-danger\">
                       
                    </div>
                </div>
                <div class=\"panel-footer\">
                    <div class=\"form-group\">
                            <button type=\"submit\" class=\"form-control btn btn-success btn-lg\">
                                <i class=\"fa-upload fa\"></i>
                                Envoyer
                            </button>
                    </div>
                </div>
             </form>
        </div>
    </div>
</div>
";
        
        $__internal_2ab66814044c3176fec4e3a90fc226a5b99e62fc1d37150a4cda0be6c1003b67->leave($__internal_2ab66814044c3176fec4e3a90fc226a5b99e62fc1d37150a4cda0be6c1003b67_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Docs:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  137 => 43,  132 => 42,  128 => 41,  115 => 33,  105 => 25,  103 => 24,  102 => 23,  97 => 20,  91 => 19,  73 => 9,  67 => 8,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::Default/consulter.html.twig' %}*/
/* {%block title%}*/
/* 	Documents | {{parent()}}*/
/* {%endblock title%}*/
/* {%block titre%}*/
/* 	Documents */
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-plus-circle"></i>*/
/*             <a href="#">*/
/*             	Documents*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/* {%block main%}*/
/* <div class="row">*/
/*     <div class="col-md-8">*/
/*         <div id="voirFichierDDC">*/
/*             {{*/
/*                 render(controller('TRCDDCBundle:Docs:voir',{rs:ddc.rs}))*/
/*             }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*         <div class="panel-default panel">*/
/*             <div class="panel-heading">*/
/*                 Uploader un fichier*/
/*             </div>*/
/*             <form voir="{{url('trcddc_voir_docs',{rs:ddc.rs})}} "  url="{{url('trcddc_ddc_upload_file',{rc:ddc.rc,type:'doc'})}} " id="data-form-docs-ddc" method="post" enctype="multipart/form-data">*/
/*                 <div class="panel-body">*/
/*                     <div class="form-group">*/
/*                         <label>*/
/*                             Le document chargé*/
/*                         </label>*/
/*                         <select class="form-control" name="document">*/
/*                             <option value="vide">Sélectionner le fichier</option>*/
/*                             {%for doc in docs %}*/
/*                                 <option value="{{doc.id}} ">*/
/*                                     {{doc.nom}}*/
/*                                 </option>*/
/*                             {%endfor%}*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                             <label>*/
/*                                 <i class="fa-upload fa"></i>*/
/*                                 Importer le fichier*/
/*                                 <input hidden="hidden" name="fichier" type="file" class="surveiller hide hidden " id="leFichier"/>*/
/*                             </label>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                             <label>*/
/*                                 Nom du document*/
/*                             </label>*/
/*                             <input placeholder="Nom du fichier" type="text" id="nom-fichier" class="form-control" name="nomFichier"/>*/
/*                     </div>*/
/*                     <div id="message" class="text-danger alert alert-danger">*/
/*                        */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel-footer">*/
/*                     <div class="form-group">*/
/*                             <button type="submit" class="form-control btn btn-success btn-lg">*/
/*                                 <i class="fa-upload fa"></i>*/
/*                                 Envoyer*/
/*                             </button>*/
/*                     </div>*/
/*                 </div>*/
/*              </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {%endblock main%}*/
/* */
/*                     */
/*                     */
/*                    */
/*                         */
/*                         */
/*                         */
/*                    */
/*        */
