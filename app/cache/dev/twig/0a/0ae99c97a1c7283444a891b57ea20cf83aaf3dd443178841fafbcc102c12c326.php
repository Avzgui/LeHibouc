<?php

/* KtbsBundle:Default:index.html.twig */
class __TwigTemplate_858521997d38b3974c051627880b19414a840b7692e8daee75b035a99703a430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468a47aa908eed0ddd2da83a247d918382485a4ddf03f69aad6e4fc988437f34 = $this->env->getExtension("native_profiler");
        $__internal_468a47aa908eed0ddd2da83a247d918382485a4ddf03f69aad6e4fc988437f34->enter($__internal_468a47aa908eed0ddd2da83a247d918382485a4ddf03f69aad6e4fc988437f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KtbsBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t
\t<body>
\t\t<h1>kTBS Home</h1>
\t\t<p>Test pour envoyer une trace et des obsels : </p>
\t\t
\t\t<!-- Menu pour choisir l'action (ajouter trace ou obsels ou recuperer trace ou des obsels) -->
\t\t
\t\t<select id=\"action\">
\t\t  <option selected=\"selected\">Choisir actions</option>
          <option value=\"creerTr\">Creer trace</option>
          <option value=\"creerObs\">Creer obsels</option>
          <option value=\"getTr\">Recuperer trace</option>
          <option value=\"getObs\">Recuperer obsels</option>
        </select>
        
        <!-- Creer ou recuperer une trace ou les obsels d'une trace ------------------------------------------------>
\t\t
\t\t<div id=\"creation_trace\" hidden=\"true\">
\t\t\t<label for=\"nomTrace\">Id de la trace</label>
\t\t\t<input type=\"text\" name=\"nomTrace\" id=\"nomTrace\"/>
\t\t\t
\t\t\t<button id=\"bGET\">Récuperer</button>
\t\t\t<button id=\"bPOST\">Envoyer</button>
\t\t\t<button id=\"reset\">Renitialiser</button>
\t\t</div>
\t\t
\t\t<!-- Creer un Obsels --------------------------------------------------------------------------------------->
\t\t
\t\t<div id=\"creation_obsels\" hidden=\"true\">
\t\t\t<label for=\"nomTrace\">Id de la trace</label>
\t\t\t<input type=\"text\" name=\"nomTrace\" id=\"nomTrace_o\"/>
\t\t\t
\t\t\t<label for=\"nomObsels\">Id de l'Obsel</label>
\t\t\t<input type=\"text\" name=\"nomObsels\" id=\"nomObsels\"/>
\t\t\t
\t\t\t<label for=\"typeObsels\">Type de l'Obsel</label>
\t\t\t<input type=\"text\" name=\"typeObsels\" id=\"typeObsels\"/>
\t\t\t
\t\t\t<button id=\"bPOST_o\">Envoyer</button>
\t\t\t<button id=\"reset_o\">Renitialiser</button>
\t\t</div>
\t\t
\t\t<!-- DIV resultat ------------------------------------------------------------------------------------------->
\t\t<div>
\t\t\t<p id=\"resultat\"></p>
\t\t</div>

\t\t
\t\t";
        // line 51
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a073b83_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a073b83_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a073b83_requetes_1.js");
            // line 52
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "a073b83"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a073b83") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a073b83.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 54
        echo "\t</body>
</html>
";
        
        $__internal_468a47aa908eed0ddd2da83a247d918382485a4ddf03f69aad6e4fc988437f34->leave($__internal_468a47aa908eed0ddd2da83a247d918382485a4ddf03f69aad6e4fc988437f34_prof);

    }

    public function getTemplateName()
    {
        return "KtbsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 54,  78 => 52,  74 => 51,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	*/
/* 	<body>*/
/* 		<h1>kTBS Home</h1>*/
/* 		<p>Test pour envoyer une trace et des obsels : </p>*/
/* 		*/
/* 		<!-- Menu pour choisir l'action (ajouter trace ou obsels ou recuperer trace ou des obsels) -->*/
/* 		*/
/* 		<select id="action">*/
/* 		  <option selected="selected">Choisir actions</option>*/
/*           <option value="creerTr">Creer trace</option>*/
/*           <option value="creerObs">Creer obsels</option>*/
/*           <option value="getTr">Recuperer trace</option>*/
/*           <option value="getObs">Recuperer obsels</option>*/
/*         </select>*/
/*         */
/*         <!-- Creer ou recuperer une trace ou les obsels d'une trace ------------------------------------------------>*/
/* 		*/
/* 		<div id="creation_trace" hidden="true">*/
/* 			<label for="nomTrace">Id de la trace</label>*/
/* 			<input type="text" name="nomTrace" id="nomTrace"/>*/
/* 			*/
/* 			<button id="bGET">Récuperer</button>*/
/* 			<button id="bPOST">Envoyer</button>*/
/* 			<button id="reset">Renitialiser</button>*/
/* 		</div>*/
/* 		*/
/* 		<!-- Creer un Obsels --------------------------------------------------------------------------------------->*/
/* 		*/
/* 		<div id="creation_obsels" hidden="true">*/
/* 			<label for="nomTrace">Id de la trace</label>*/
/* 			<input type="text" name="nomTrace" id="nomTrace_o"/>*/
/* 			*/
/* 			<label for="nomObsels">Id de l'Obsel</label>*/
/* 			<input type="text" name="nomObsels" id="nomObsels"/>*/
/* 			*/
/* 			<label for="typeObsels">Type de l'Obsel</label>*/
/* 			<input type="text" name="typeObsels" id="typeObsels"/>*/
/* 			*/
/* 			<button id="bPOST_o">Envoyer</button>*/
/* 			<button id="reset_o">Renitialiser</button>*/
/* 		</div>*/
/* 		*/
/* 		<!-- DIV resultat ------------------------------------------------------------------------------------------->*/
/* 		<div>*/
/* 			<p id="resultat"></p>*/
/* 		</div>*/
/* */
/* 		*/
/* 		{% javascripts '@KtbsBundle/Resources/js/requetes.js' %}*/
/*     		<script src="{{ asset_url }}"></script>*/
/* 		{% endjavascripts %}*/
/* 	</body>*/
/* </html>*/
/* */
