<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_680e33f14f99549f28b93d0b7718127172bac98b86f93c9d575ad811e4ef51a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48f78db5f62e6d5e580e90906a5dfe37ef1e9ddfa3fc32273ba04c58f8a92a25 = $this->env->getExtension("native_profiler");
        $__internal_48f78db5f62e6d5e580e90906a5dfe37ef1e9ddfa3fc32273ba04c58f8a92a25->enter($__internal_48f78db5f62e6d5e580e90906a5dfe37ef1e9ddfa3fc32273ba04c58f8a92a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f78db5f62e6d5e580e90906a5dfe37ef1e9ddfa3fc32273ba04c58f8a92a25->leave($__internal_48f78db5f62e6d5e580e90906a5dfe37ef1e9ddfa3fc32273ba04c58f8a92a25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_331881a030eb362afd84f9bff4765f20dae6da7254b8f3f7017725171f01ce7b = $this->env->getExtension("native_profiler");
        $__internal_331881a030eb362afd84f9bff4765f20dae6da7254b8f3f7017725171f01ce7b->enter($__internal_331881a030eb362afd84f9bff4765f20dae6da7254b8f3f7017725171f01ce7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_331881a030eb362afd84f9bff4765f20dae6da7254b8f3f7017725171f01ce7b->leave($__internal_331881a030eb362afd84f9bff4765f20dae6da7254b8f3f7017725171f01ce7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdab283f882c4939489c04195cb558b4eb30af64c42028dccf9e5ab2ff106285 = $this->env->getExtension("native_profiler");
        $__internal_fdab283f882c4939489c04195cb558b4eb30af64c42028dccf9e5ab2ff106285->enter($__internal_fdab283f882c4939489c04195cb558b4eb30af64c42028dccf9e5ab2ff106285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdab283f882c4939489c04195cb558b4eb30af64c42028dccf9e5ab2ff106285->leave($__internal_fdab283f882c4939489c04195cb558b4eb30af64c42028dccf9e5ab2ff106285_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_791552ebdb3e232442934b5b878c3f14b1adbb83d6f5e6e6b0158a32fb8a2782 = $this->env->getExtension("native_profiler");
        $__internal_791552ebdb3e232442934b5b878c3f14b1adbb83d6f5e6e6b0158a32fb8a2782->enter($__internal_791552ebdb3e232442934b5b878c3f14b1adbb83d6f5e6e6b0158a32fb8a2782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_791552ebdb3e232442934b5b878c3f14b1adbb83d6f5e6e6b0158a32fb8a2782->leave($__internal_791552ebdb3e232442934b5b878c3f14b1adbb83d6f5e6e6b0158a32fb8a2782_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
