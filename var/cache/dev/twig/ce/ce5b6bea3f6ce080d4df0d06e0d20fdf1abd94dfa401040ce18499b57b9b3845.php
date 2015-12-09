<?php

/* base.html.twig */
class __TwigTemplate_20ab78271dea3e950a4ec341a171644d9c496ec3456d23c1cc84d8a6a1339549 extends Twig_Template
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
        $__internal_bf40e3c2a0b25a3291147dfb85872e7b76b51326f6fe7b65da2b112e98234aa8 = $this->env->getExtension("native_profiler");
        $__internal_bf40e3c2a0b25a3291147dfb85872e7b76b51326f6fe7b65da2b112e98234aa8->enter($__internal_bf40e3c2a0b25a3291147dfb85872e7b76b51326f6fe7b65da2b112e98234aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bf40e3c2a0b25a3291147dfb85872e7b76b51326f6fe7b65da2b112e98234aa8->leave($__internal_bf40e3c2a0b25a3291147dfb85872e7b76b51326f6fe7b65da2b112e98234aa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08d7c623707a57d67d167b157b047225ac18df411e9264ff00e1a878813e3dd9 = $this->env->getExtension("native_profiler");
        $__internal_08d7c623707a57d67d167b157b047225ac18df411e9264ff00e1a878813e3dd9->enter($__internal_08d7c623707a57d67d167b157b047225ac18df411e9264ff00e1a878813e3dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_08d7c623707a57d67d167b157b047225ac18df411e9264ff00e1a878813e3dd9->leave($__internal_08d7c623707a57d67d167b157b047225ac18df411e9264ff00e1a878813e3dd9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90b68e91d03266c0c91056b63df7bcb35e013d98c90a975a7e641c6cba3d1d11 = $this->env->getExtension("native_profiler");
        $__internal_90b68e91d03266c0c91056b63df7bcb35e013d98c90a975a7e641c6cba3d1d11->enter($__internal_90b68e91d03266c0c91056b63df7bcb35e013d98c90a975a7e641c6cba3d1d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_90b68e91d03266c0c91056b63df7bcb35e013d98c90a975a7e641c6cba3d1d11->leave($__internal_90b68e91d03266c0c91056b63df7bcb35e013d98c90a975a7e641c6cba3d1d11_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b785d9f88a5b44b328b12d3294d25ba6013294ebce550534f6f8ac8c64f83d9b = $this->env->getExtension("native_profiler");
        $__internal_b785d9f88a5b44b328b12d3294d25ba6013294ebce550534f6f8ac8c64f83d9b->enter($__internal_b785d9f88a5b44b328b12d3294d25ba6013294ebce550534f6f8ac8c64f83d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b785d9f88a5b44b328b12d3294d25ba6013294ebce550534f6f8ac8c64f83d9b->leave($__internal_b785d9f88a5b44b328b12d3294d25ba6013294ebce550534f6f8ac8c64f83d9b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28fb4fb7eb49a47a7b2766ebbb3ff4f839bad88d74a97a4865b9f3352b7f1984 = $this->env->getExtension("native_profiler");
        $__internal_28fb4fb7eb49a47a7b2766ebbb3ff4f839bad88d74a97a4865b9f3352b7f1984->enter($__internal_28fb4fb7eb49a47a7b2766ebbb3ff4f839bad88d74a97a4865b9f3352b7f1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_28fb4fb7eb49a47a7b2766ebbb3ff4f839bad88d74a97a4865b9f3352b7f1984->leave($__internal_28fb4fb7eb49a47a7b2766ebbb3ff4f839bad88d74a97a4865b9f3352b7f1984_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
