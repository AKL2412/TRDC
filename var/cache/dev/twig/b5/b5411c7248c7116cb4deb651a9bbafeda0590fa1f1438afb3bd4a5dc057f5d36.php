<?php

/* TRCDDCBundle:Docs:edp.html.twig */
class __TwigTemplate_1005eedb5c94cfe6320dc45115f4d8b7f965a66f62aa8372a0056c19fd42053c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TRCDDCBundle::Default/consulter.html.twig", "TRCDDCBundle:Docs:edp.html.twig", 1);
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
        $__internal_345cb5110593d086bbc640307ab4c0ed444c38708c688c1b2909402567292355 = $this->env->getExtension("native_profiler");
        $__internal_345cb5110593d086bbc640307ab4c0ed444c38708c688c1b2909402567292355->enter($__internal_345cb5110593d086bbc640307ab4c0ed444c38708c688c1b2909402567292355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TRCDDCBundle:Docs:edp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345cb5110593d086bbc640307ab4c0ed444c38708c688c1b2909402567292355->leave($__internal_345cb5110593d086bbc640307ab4c0ed444c38708c688c1b2909402567292355_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_40165eb396c4a5e509cf6f80e71365fe30e7bf8711867fb98a0c29a0d5c21094 = $this->env->getExtension("native_profiler");
        $__internal_40165eb396c4a5e509cf6f80e71365fe30e7bf8711867fb98a0c29a0d5c21094->enter($__internal_40165eb396c4a5e509cf6f80e71365fe30e7bf8711867fb98a0c29a0d5c21094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t#EDP | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_40165eb396c4a5e509cf6f80e71365fe30e7bf8711867fb98a0c29a0d5c21094->leave($__internal_40165eb396c4a5e509cf6f80e71365fe30e7bf8711867fb98a0c29a0d5c21094_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_480c94aa8bf710fc68418aff97ea298fbe531d985c111d4ae5ee1708f2e0b0a7 = $this->env->getExtension("native_profiler");
        $__internal_480c94aa8bf710fc68418aff97ea298fbe531d985c111d4ae5ee1708f2e0b0a7->enter($__internal_480c94aa8bf710fc68418aff97ea298fbe531d985c111d4ae5ee1708f2e0b0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 6
        echo "\tEDP ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))), "html", null, true);
        echo " post(s)
";
        
        $__internal_480c94aa8bf710fc68418aff97ea298fbe531d985c111d4ae5ee1708f2e0b0a7->leave($__internal_480c94aa8bf710fc68418aff97ea298fbe531d985c111d4ae5ee1708f2e0b0a7_prof);

    }

    // line 8
    public function block_position($context, array $blocks = array())
    {
        $__internal_53e816a00055e40d324344b44eda845f50cf0111eb9e3352e04b7711607755f7 = $this->env->getExtension("native_profiler");
        $__internal_53e816a00055e40d324344b44eda845f50cf0111eb9e3352e04b7711607755f7->enter($__internal_53e816a00055e40d324344b44eda845f50cf0111eb9e3352e04b7711607755f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "position"));

        // line 9
        echo "\t";
        $this->displayParentBlock("position", $context, $blocks);
        echo "
    \t<li class=\"active\">
    \t\t<i class=\"fa fa-angle-right\"></i>
    \t\t<i class=\"fa fa-comments\"></i>
            <a href=\"#\">
            \tEDP
            </a>
        </li>
        
    ";
        
        $__internal_53e816a00055e40d324344b44eda845f50cf0111eb9e3352e04b7711607755f7->leave($__internal_53e816a00055e40d324344b44eda845f50cf0111eb9e3352e04b7711607755f7_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_b0f44a7bd53f44946dc6909a22e6537098f4e3d9aaaa988fb5c28617eaf3ec35 = $this->env->getExtension("native_profiler");
        $__internal_b0f44a7bd53f44946dc6909a22e6537098f4e3d9aaaa988fb5c28617eaf3ec35->enter($__internal_b0f44a7bd53f44946dc6909a22e6537098f4e3d9aaaa988fb5c28617eaf3ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "<div class=\"row\">
    <div class=\"col-md-8 col-md-offset-2\">
        <div id=\"edp\">
            <div class=\"bann\">
                <div class=\"titre\">
                    <div class=\"d\">
                        <span class=\"b\">E</span>space <span class=\"b\">D</span>e <span class=\"b\">P</span>artage
                    </div>
                    <p class=\"description\"> 
                    </p>    
                </div>
                
            </div>
            <div class=\"edp-form\">
                <form  url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trcddc_ddc_upload_file", array("rc" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "rc", array()), "type" => "edp")), "html", null, true);
        echo " \" id=\"data-form-edp\" method=\"post\" enctype=\"multipart/form-data\">
                    <textarea name=\"message\" placeholder=\"Entrer le texte ici\"></textarea>
                   <div class=\"vali\">
                        <label>
                            <i class=\"fa-upload fa\"></i>
                            <input name=\"fichier\" type=\"file\" class=\"surveiller\" />
                        </label>
                        <button type=\"submit\" class=\"btn btn-success button\">
                            <i class=\"fa-send fa\"></i>
                        </button>
                   </div>
                </form>
            </div>
            <div class=\"edp-body\" medp=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))), "html", null, true);
        echo "\">
                <a class=\"noti-modal\" data-toggle=\"modal\" data-target=\".modal-general\" href=\"#\" link=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("trc_core_resume_ddc", array("id" => $this->getAttribute((isset($context["ddc"]) ? $context["ddc"] : $this->getContext($context, "ddc")), "id", array()))), "html", null, true);
        echo "\">
                    Voir resume
                </a>
                ";
        // line 51
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) > 0)) {
            // line 52
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["medp"]) {
                // line 53
                echo "                        <div class=\"m\">
                            <div class=\"i\">
                                ";
                // line 55
                $context["utilisateur"] = $this->env->getExtension('TwigExtension')->getParentActeur($this->getAttribute($this->getAttribute($context["medp"], "fonction", array()), "acteur", array()));
                // line 56
                echo "                                ";
                if ( !(null === (isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")))) {
                    // line 57
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "image", array())), "html", null, true);
                    echo " \" class=\"img-circle\">
                                
                                    <div class=\"d\">
                                        ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "prenom", array()), "html", null, true);
                    echo " <br>
                                        ";
                    // line 61
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["medp"], "dateposte", array()), "d-m-Y H:i"), "html", null, true);
                    echo "
                                    </div>
                                ";
                } else {
                    // line 64
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/default.png"), "html", null, true);
                    echo " \" class=\"img-circle\">
                                
                                    <div class=\"d\">
                                        Erreur <br>
                                        ##-##-#### ##:##
                                    </div>
                                ";
                }
                // line 71
                echo "                                
                            </div>
                            <div class=\"t\">
                                ";
                // line 74
                echo $this->getAttribute($context["medp"], "message", array());
                echo "
                                <div class=\"fichier\">
                                    ";
                // line 76
                if ( !(null === $this->getAttribute($context["medp"], "fichier", array()))) {
                    // line 77
                    echo "                                        ";
                    $context["fichier"] = $this->getAttribute($context["medp"], "fichier", array());
                    echo "<br>
                                        <a target=\"blank\" href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "chemin", array())), "html", null, true);
                    echo " \">
                                            ";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fichier"]) ? $context["fichier"] : $this->getContext($context, "fichier")), "nomoriginal", array()), "html", null, true);
                    echo "
                                        </a>
                                        ";
                    // line 81
                    if ($this->env->getExtension('TwigExtension')->aPoste($context["medp"], $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                        // line 82
                        echo "                                            <a href=\"#\" class=\"supp-fichier text-danger\">
                                                <i class=\"fa-trash-o fa\"></i>
                                                
                                            </a>
                                        ";
                    }
                    // line 87
                    echo "                                    ";
                }
                // line 88
                echo "                                </div>  
                            </div>
                            
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                ";
        } else {
            // line 95
            echo "                    <div class=\"alert-info alert text-center\">
                        <h2>Aucun Post</h2>
                    </div>
                ";
        }
        // line 99
        echo "            
                
            </div>
            
        </div>
    </div>
</div>

";
        
        $__internal_b0f44a7bd53f44946dc6909a22e6537098f4e3d9aaaa988fb5c28617eaf3ec35->leave($__internal_b0f44a7bd53f44946dc6909a22e6537098f4e3d9aaaa988fb5c28617eaf3ec35_prof);

    }

    public function getTemplateName()
    {
        return "TRCDDCBundle:Docs:edp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 99,  237 => 95,  234 => 94,  223 => 88,  220 => 87,  213 => 82,  211 => 81,  206 => 79,  202 => 78,  197 => 77,  195 => 76,  190 => 74,  185 => 71,  174 => 64,  168 => 61,  164 => 60,  157 => 57,  154 => 56,  152 => 55,  148 => 53,  143 => 52,  141 => 51,  135 => 48,  131 => 47,  115 => 34,  99 => 20,  93 => 19,  75 => 9,  69 => 8,  59 => 6,  53 => 5,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'TRCDDCBundle::Default/consulter.html.twig' %}*/
/* {%block title%}*/
/* 	#EDP | {{parent()}}*/
/* {%endblock title%}*/
/* {%block titre%}*/
/* 	EDP {{messages|length}} post(s)*/
/* {%endblock titre%}*/
/* {%block position %}*/
/* 	{{parent()}}*/
/*     	<li class="active">*/
/*     		<i class="fa fa-angle-right"></i>*/
/*     		<i class="fa fa-comments"></i>*/
/*             <a href="#">*/
/*             	EDP*/
/*             </a>*/
/*         </li>*/
/*         */
/*     {%endblock position%}*/
/* {%block main%}*/
/* <div class="row">*/
/*     <div class="col-md-8 col-md-offset-2">*/
/*         <div id="edp">*/
/*             <div class="bann">*/
/*                 <div class="titre">*/
/*                     <div class="d">*/
/*                         <span class="b">E</span>space <span class="b">D</span>e <span class="b">P</span>artage*/
/*                     </div>*/
/*                     <p class="description"> */
/*                     </p>    */
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <div class="edp-form">*/
/*                 <form  url="{{url('trcddc_ddc_upload_file',{rc:ddc.rc,type:'edp'})}} " id="data-form-edp" method="post" enctype="multipart/form-data">*/
/*                     <textarea name="message" placeholder="Entrer le texte ici"></textarea>*/
/*                    <div class="vali">*/
/*                         <label>*/
/*                             <i class="fa-upload fa"></i>*/
/*                             <input name="fichier" type="file" class="surveiller" />*/
/*                         </label>*/
/*                         <button type="submit" class="btn btn-success button">*/
/*                             <i class="fa-send fa"></i>*/
/*                         </button>*/
/*                    </div>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="edp-body" medp="{{messages|length}}">*/
/*                 <a class="noti-modal" data-toggle="modal" data-target=".modal-general" href="#" link="{{url('trc_core_resume_ddc',{id:ddc.id})}}">*/
/*                     Voir resume*/
/*                 </a>*/
/*                 {%if messages|length > 0 %}*/
/*                     {%for medp in messages %}*/
/*                         <div class="m">*/
/*                             <div class="i">*/
/*                                 {%set utilisateur = getParentActeur(medp.fonction.acteur)%}*/
/*                                 {%if utilisateur is not null %}*/
/*                                     <img src="{{asset(utilisateur.image)}} " class="img-circle">*/
/*                                 */
/*                                     <div class="d">*/
/*                                         {{utilisateur.prenom}} <br>*/
/*                                         {{medp.dateposte|date('d-m-Y H:i')}}*/
/*                                     </div>*/
/*                                 {%else%}*/
/*                                     <img src="{{asset('img/default.png')}} " class="img-circle">*/
/*                                 */
/*                                     <div class="d">*/
/*                                         Erreur <br>*/
/*                                         ##-##-#### ##:##*/
/*                                     </div>*/
/*                                 {%endif%}*/
/*                                 */
/*                             </div>*/
/*                             <div class="t">*/
/*                                 {{medp.message|raw}}*/
/*                                 <div class="fichier">*/
/*                                     {%if medp.fichier is not null %}*/
/*                                         {%set fichier = medp.fichier%}<br>*/
/*                                         <a target="blank" href="{{asset(fichier.chemin)}} ">*/
/*                                             {{fichier.nomoriginal}}*/
/*                                         </a>*/
/*                                         {%if aPoste(medp,app.user) %}*/
/*                                             <a href="#" class="supp-fichier text-danger">*/
/*                                                 <i class="fa-trash-o fa"></i>*/
/*                                                 */
/*                                             </a>*/
/*                                         {%endif%}*/
/*                                     {%endif%}*/
/*                                 </div>  */
/*                             </div>*/
/*                             */
/*                         </div>*/
/* */
/*                     {%endfor%}*/
/*                 {%else%}*/
/*                     <div class="alert-info alert text-center">*/
/*                         <h2>Aucun Post</h2>*/
/*                     </div>*/
/*                 {%endif%}*/
/*             */
/*                 */
/*             </div>*/
/*             */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {%endblock main%}*/
