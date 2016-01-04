<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_26f9abdd6b4540987fa427223cba7174bfba30db671421c9193619b2436b374f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e87c51d618825c2320d4328a1d9f4683ffe13aaf9e385a2cacdfc409476e6696 = $this->env->getExtension("native_profiler");
        $__internal_e87c51d618825c2320d4328a1d9f4683ffe13aaf9e385a2cacdfc409476e6696->enter($__internal_e87c51d618825c2320d4328a1d9f4683ffe13aaf9e385a2cacdfc409476e6696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e87c51d618825c2320d4328a1d9f4683ffe13aaf9e385a2cacdfc409476e6696->leave($__internal_e87c51d618825c2320d4328a1d9f4683ffe13aaf9e385a2cacdfc409476e6696_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d977aa302164cee09466782d4e7ab51c00fdf30774de5b68675ea662d758a9ca = $this->env->getExtension("native_profiler");
        $__internal_d977aa302164cee09466782d4e7ab51c00fdf30774de5b68675ea662d758a9ca->enter($__internal_d977aa302164cee09466782d4e7ab51c00fdf30774de5b68675ea662d758a9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d977aa302164cee09466782d4e7ab51c00fdf30774de5b68675ea662d758a9ca->leave($__internal_d977aa302164cee09466782d4e7ab51c00fdf30774de5b68675ea662d758a9ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38b92e20d5f7bebe8c492205e3b4827dbb02669252deb88a7b29121a9722e64b = $this->env->getExtension("native_profiler");
        $__internal_38b92e20d5f7bebe8c492205e3b4827dbb02669252deb88a7b29121a9722e64b->enter($__internal_38b92e20d5f7bebe8c492205e3b4827dbb02669252deb88a7b29121a9722e64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38b92e20d5f7bebe8c492205e3b4827dbb02669252deb88a7b29121a9722e64b->leave($__internal_38b92e20d5f7bebe8c492205e3b4827dbb02669252deb88a7b29121a9722e64b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_433df5013b60db7727c7726330a480262954c64f05bd3d00e67d0e54bf9d80f8 = $this->env->getExtension("native_profiler");
        $__internal_433df5013b60db7727c7726330a480262954c64f05bd3d00e67d0e54bf9d80f8->enter($__internal_433df5013b60db7727c7726330a480262954c64f05bd3d00e67d0e54bf9d80f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_433df5013b60db7727c7726330a480262954c64f05bd3d00e67d0e54bf9d80f8->leave($__internal_433df5013b60db7727c7726330a480262954c64f05bd3d00e67d0e54bf9d80f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
