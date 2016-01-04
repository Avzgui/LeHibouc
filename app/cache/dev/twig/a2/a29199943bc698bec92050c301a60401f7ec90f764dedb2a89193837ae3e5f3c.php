<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_316341b04879df8538ebb4fa555e96124d3a39356f359a9951fb2952a53880c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle::layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'top_menu' => array($this, 'block_top_menu'),
            'left_menu' => array($this, 'block_left_menu'),
            'middle_body' => array($this, 'block_middle_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7834c48284b130d08ba8dce8b6d6128baad8cb29993be98c51e8bb4d9b352490 = $this->env->getExtension("native_profiler");
        $__internal_7834c48284b130d08ba8dce8b6d6128baad8cb29993be98c51e8bb4d9b352490->enter($__internal_7834c48284b130d08ba8dce8b6d6128baad8cb29993be98c51e8bb4d9b352490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7834c48284b130d08ba8dce8b6d6128baad8cb29993be98c51e8bb4d9b352490->leave($__internal_7834c48284b130d08ba8dce8b6d6128baad8cb29993be98c51e8bb4d9b352490_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7816b2ca0d859ec88e0bae5d51579e0ac181fa6b643d442b1c4dd306eaba212f = $this->env->getExtension("native_profiler");
        $__internal_7816b2ca0d859ec88e0bae5d51579e0ac181fa6b643d442b1c4dd306eaba212f->enter($__internal_7816b2ca0d859ec88e0bae5d51579e0ac181fa6b643d442b1c4dd306eaba212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Le Hibouc</h1>
      <p>
        The Online Community Library
      </p>
      ";
        // line 12
        $this->displayBlock('top_menu', $context, $blocks);
        // line 14
        echo "    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
      \t";
        // line 18
        $this->displayBlock('left_menu', $context, $blocks);
        // line 20
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 22
        $this->displayBlock('middle_body', $context, $blocks);
        // line 24
        echo "      </div>
    </div>

    <hr>
    <footer>
      <p>Le Hibouc <img src=\"img/copyleft.svg\" alt=\"copyleft\" style=\"width:12px;height:12px;\"> ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        
        $__internal_7816b2ca0d859ec88e0bae5d51579e0ac181fa6b643d442b1c4dd306eaba212f->leave($__internal_7816b2ca0d859ec88e0bae5d51579e0ac181fa6b643d442b1c4dd306eaba212f_prof);

    }

    // line 12
    public function block_top_menu($context, array $blocks = array())
    {
        $__internal_d98904c5fd7f89a6dd1d79dfdeba0bbc56c4a0525e0fe5de5949a7b107dbe354 = $this->env->getExtension("native_profiler");
        $__internal_d98904c5fd7f89a6dd1d79dfdeba0bbc56c4a0525e0fe5de5949a7b107dbe354->enter($__internal_d98904c5fd7f89a6dd1d79dfdeba0bbc56c4a0525e0fe5de5949a7b107dbe354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_menu"));

        // line 13
        echo "      ";
        
        $__internal_d98904c5fd7f89a6dd1d79dfdeba0bbc56c4a0525e0fe5de5949a7b107dbe354->leave($__internal_d98904c5fd7f89a6dd1d79dfdeba0bbc56c4a0525e0fe5de5949a7b107dbe354_prof);

    }

    // line 18
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_85d6ec9fe66f74a1a280121bc3228a9561b3059200a54547189f34f0cdc55446 = $this->env->getExtension("native_profiler");
        $__internal_85d6ec9fe66f74a1a280121bc3228a9561b3059200a54547189f34f0cdc55446->enter($__internal_85d6ec9fe66f74a1a280121bc3228a9561b3059200a54547189f34f0cdc55446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 19
        echo "      \t";
        
        $__internal_85d6ec9fe66f74a1a280121bc3228a9561b3059200a54547189f34f0cdc55446->leave($__internal_85d6ec9fe66f74a1a280121bc3228a9561b3059200a54547189f34f0cdc55446_prof);

    }

    // line 22
    public function block_middle_body($context, array $blocks = array())
    {
        $__internal_27b9dd2b43d320fa9bb704d12df9457cbf36a82b554536f62b2baed00aa50dd9 = $this->env->getExtension("native_profiler");
        $__internal_27b9dd2b43d320fa9bb704d12df9457cbf36a82b554536f62b2baed00aa50dd9->enter($__internal_27b9dd2b43d320fa9bb704d12df9457cbf36a82b554536f62b2baed00aa50dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle_body"));

        // line 23
        echo "        ";
        
        $__internal_27b9dd2b43d320fa9bb704d12df9457cbf36a82b554536f62b2baed00aa50dd9->leave($__internal_27b9dd2b43d320fa9bb704d12df9457cbf36a82b554536f62b2baed00aa50dd9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 23,  112 => 22,  105 => 19,  99 => 18,  92 => 13,  86 => 12,  74 => 29,  67 => 24,  65 => 22,  61 => 20,  59 => 18,  53 => 14,  51 => 12,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# src/LeHibouc/AppBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Le Hibouc</h1>*/
/*       <p>*/
/*         The Online Community Library*/
/*       </p>*/
/*       {% block top_menu %}*/
/*       {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*       	{% block left_menu %}*/
/*       	{% endblock %}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block middle_body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/*     <footer>*/
/*       <p>Le Hibouc <img src="img/copyleft.svg" alt="copyleft" style="width:12px;height:12px;"> {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% endblock %}*/
/* */
