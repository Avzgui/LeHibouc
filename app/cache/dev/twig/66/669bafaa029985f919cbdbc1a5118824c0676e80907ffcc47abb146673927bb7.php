<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_aab6daf631336b27dccaae972c51878543a5d21a46d1be47058ba9bb8135c4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Default:index.html.twig", 3);
        $this->blocks = array(
            'left_menu' => array($this, 'block_left_menu'),
            'middle_body' => array($this, 'block_middle_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2384b1281a62d9f716b50828b786833660f5473ec5bc86f3606e9c04d6e241cb = $this->env->getExtension("native_profiler");
        $__internal_2384b1281a62d9f716b50828b786833660f5473ec5bc86f3606e9c04d6e241cb->enter($__internal_2384b1281a62d9f716b50828b786833660f5473ec5bc86f3606e9c04d6e241cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2384b1281a62d9f716b50828b786833660f5473ec5bc86f3606e9c04d6e241cb->leave($__internal_2384b1281a62d9f716b50828b786833660f5473ec5bc86f3606e9c04d6e241cb_prof);

    }

    // line 5
    public function block_left_menu($context, array $blocks = array())
    {
        $__internal_b873053fe3330e3869be14b0ce2052d31243d990d2c593ac336ec4eac28fe6b0 = $this->env->getExtension("native_profiler");
        $__internal_b873053fe3330e3869be14b0ce2052d31243d990d2c593ac336ec4eac28fe6b0->enter($__internal_b873053fe3330e3869be14b0ce2052d31243d990d2c593ac336ec4eac28fe6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_menu"));

        // line 6
        echo "\t<ul class=\"nav nav-pills nav-stacked\">
  \t\t<li>Accueil</li>
  \t\t<li>Rechercher un livre</li>
\t</ul>

\t<h4>Nouveauté</h4>
\t";
        
        $__internal_b873053fe3330e3869be14b0ce2052d31243d990d2c593ac336ec4eac28fe6b0->leave($__internal_b873053fe3330e3869be14b0ce2052d31243d990d2c593ac336ec4eac28fe6b0_prof);

    }

    // line 15
    public function block_middle_body($context, array $blocks = array())
    {
        $__internal_f3f73ecac7b41afc41baf344cae01b291f388c844a4b59fb90feaa88bdc06548 = $this->env->getExtension("native_profiler");
        $__internal_f3f73ecac7b41afc41baf344cae01b291f388c844a4b59fb90feaa88bdc06548->enter($__internal_f3f73ecac7b41afc41baf344cae01b291f388c844a4b59fb90feaa88bdc06548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle_body"));

        // line 16
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EBookLibraryBundle:Default:index"));
        echo "
";
        
        $__internal_f3f73ecac7b41afc41baf344cae01b291f388c844a4b59fb90feaa88bdc06548->leave($__internal_f3f73ecac7b41afc41baf344cae01b291f388c844a4b59fb90feaa88bdc06548_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  54 => 15,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/LeHibouc/AppBundle/Resources/views/Default/index.html.twig #}*/
/* */
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block left_menu %}*/
/* 	<ul class="nav nav-pills nav-stacked">*/
/*   		<li>Accueil</li>*/
/*   		<li>Rechercher un livre</li>*/
/* 	</ul>*/
/* */
/* 	<h4>Nouveauté</h4>*/
/* 	{# render(controller("EBookLibraryBundle:Default:news", {'limit': 3})) #}*/
/* {% endblock %}*/
/* */
/* {% block middle_body %}*/
/*   {{ render(controller("EBookLibraryBundle:Default:index")) }}*/
/* {% endblock %}*/
