<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f7739a4906fb8ac3120739b11ddc99f8d3ffed2a075f5d4869f7c91dec8b2a47 extends Twig_Template
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
        $__internal_1185f653ab50c58d419f3d3e69a30402552fe8dbfb4c6b4b551818bde0e12a02 = $this->env->getExtension("native_profiler");
        $__internal_1185f653ab50c58d419f3d3e69a30402552fe8dbfb4c6b4b551818bde0e12a02->enter($__internal_1185f653ab50c58d419f3d3e69a30402552fe8dbfb4c6b4b551818bde0e12a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1185f653ab50c58d419f3d3e69a30402552fe8dbfb4c6b4b551818bde0e12a02->leave($__internal_1185f653ab50c58d419f3d3e69a30402552fe8dbfb4c6b4b551818bde0e12a02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34a9103d6f08fb951fd7852390a44ba872ea1d07b012b0ed80384211e81019c5 = $this->env->getExtension("native_profiler");
        $__internal_34a9103d6f08fb951fd7852390a44ba872ea1d07b012b0ed80384211e81019c5->enter($__internal_34a9103d6f08fb951fd7852390a44ba872ea1d07b012b0ed80384211e81019c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34a9103d6f08fb951fd7852390a44ba872ea1d07b012b0ed80384211e81019c5->leave($__internal_34a9103d6f08fb951fd7852390a44ba872ea1d07b012b0ed80384211e81019c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea87d66ad89e11be7ae603e7360066dce8f6c0bfa6c4d04df0df673c5fd2cb44 = $this->env->getExtension("native_profiler");
        $__internal_ea87d66ad89e11be7ae603e7360066dce8f6c0bfa6c4d04df0df673c5fd2cb44->enter($__internal_ea87d66ad89e11be7ae603e7360066dce8f6c0bfa6c4d04df0df673c5fd2cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea87d66ad89e11be7ae603e7360066dce8f6c0bfa6c4d04df0df673c5fd2cb44->leave($__internal_ea87d66ad89e11be7ae603e7360066dce8f6c0bfa6c4d04df0df673c5fd2cb44_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b807383d72bf05c50ab385d9dc95747ee696b86ed52e89bf2b7b07b0cde2d98b = $this->env->getExtension("native_profiler");
        $__internal_b807383d72bf05c50ab385d9dc95747ee696b86ed52e89bf2b7b07b0cde2d98b->enter($__internal_b807383d72bf05c50ab385d9dc95747ee696b86ed52e89bf2b7b07b0cde2d98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b807383d72bf05c50ab385d9dc95747ee696b86ed52e89bf2b7b07b0cde2d98b->leave($__internal_b807383d72bf05c50ab385d9dc95747ee696b86ed52e89bf2b7b07b0cde2d98b_prof);

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
