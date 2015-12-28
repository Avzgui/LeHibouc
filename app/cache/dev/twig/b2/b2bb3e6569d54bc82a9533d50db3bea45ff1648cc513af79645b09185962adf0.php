<?php

/* ::layout.html.twig */
class __TwigTemplate_6062526c48877fe80e364ece15a1811121a1909c37d1fd289a2764cda8a022c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbb4c6bd924ed7a2afea6579c135253ac3c463fa78310420f8d0eeb841878f0a = $this->env->getExtension("native_profiler");
        $__internal_fbb4c6bd924ed7a2afea6579c135253ac3c463fa78310420f8d0eeb841878f0a->enter($__internal_fbb4c6bd924ed7a2afea6579c135253ac3c463fa78310420f8d0eeb841878f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
  ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
</body>
</html>";
        
        $__internal_fbb4c6bd924ed7a2afea6579c135253ac3c463fa78310420f8d0eeb841878f0a->leave($__internal_fbb4c6bd924ed7a2afea6579c135253ac3c463fa78310420f8d0eeb841878f0a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_aac01b7d5a557e24160369188eca6ac48cb2d45813936080d3384f29422f103c = $this->env->getExtension("native_profiler");
        $__internal_aac01b7d5a557e24160369188eca6ac48cb2d45813936080d3384f29422f103c->enter($__internal_aac01b7d5a557e24160369188eca6ac48cb2d45813936080d3384f29422f103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le Hibouc";
        
        $__internal_aac01b7d5a557e24160369188eca6ac48cb2d45813936080d3384f29422f103c->leave($__internal_aac01b7d5a557e24160369188eca6ac48cb2d45813936080d3384f29422f103c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c206c12efea0252b47f396945eef14ad49773f543f64c59305c08209b97a11c7 = $this->env->getExtension("native_profiler");
        $__internal_c206c12efea0252b47f396945eef14ad49773f543f64c59305c08209b97a11c7->enter($__internal_c206c12efea0252b47f396945eef14ad49773f543f64c59305c08209b97a11c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_c206c12efea0252b47f396945eef14ad49773f543f64c59305c08209b97a11c7->leave($__internal_c206c12efea0252b47f396945eef14ad49773f543f64c59305c08209b97a11c7_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d464553d5a8c75316e812943baf04585315cd413bf8dd4e47132a0d10c5d2e0 = $this->env->getExtension("native_profiler");
        $__internal_1d464553d5a8c75316e812943baf04585315cd413bf8dd4e47132a0d10c5d2e0->enter($__internal_1d464553d5a8c75316e812943baf04585315cd413bf8dd4e47132a0d10c5d2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "  ";
        
        $__internal_1d464553d5a8c75316e812943baf04585315cd413bf8dd4e47132a0d10c5d2e0->leave($__internal_1d464553d5a8c75316e812943baf04585315cd413bf8dd4e47132a0d10c5d2e0_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26f40fd12c59d47d01550526d3d9a921d24f49b1f7fbd40a64ad3b7dc1720b98 = $this->env->getExtension("native_profiler");
        $__internal_26f40fd12c59d47d01550526d3d9a921d24f49b1f7fbd40a64ad3b7dc1720b98->enter($__internal_26f40fd12c59d47d01550526d3d9a921d24f49b1f7fbd40a64ad3b7dc1720b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        // line 23
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_26f40fd12c59d47d01550526d3d9a921d24f49b1f7fbd40a64ad3b7dc1720b98->leave($__internal_26f40fd12c59d47d01550526d3d9a921d24f49b1f7fbd40a64ad3b7dc1720b98_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  110 => 22,  104 => 21,  97 => 19,  91 => 18,  83 => 13,  81 => 12,  75 => 11,  63 => 9,  54 => 26,  52 => 21,  49 => 20,  47 => 18,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}Le Hibouc{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   {% block body %}*/
/*   {% endblock %}*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
