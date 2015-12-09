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
        $__internal_7aa7c33d6f915e99173311ab4e5157c73b5e44e4047f9e1842aa36463b9dcbb4 = $this->env->getExtension("native_profiler");
        $__internal_7aa7c33d6f915e99173311ab4e5157c73b5e44e4047f9e1842aa36463b9dcbb4->enter($__internal_7aa7c33d6f915e99173311ab4e5157c73b5e44e4047f9e1842aa36463b9dcbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa7c33d6f915e99173311ab4e5157c73b5e44e4047f9e1842aa36463b9dcbb4->leave($__internal_7aa7c33d6f915e99173311ab4e5157c73b5e44e4047f9e1842aa36463b9dcbb4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56f3a10c22882f5c8caa250795f5d8df5a8c401cf052188dc59dfd33ef4d171a = $this->env->getExtension("native_profiler");
        $__internal_56f3a10c22882f5c8caa250795f5d8df5a8c401cf052188dc59dfd33ef4d171a->enter($__internal_56f3a10c22882f5c8caa250795f5d8df5a8c401cf052188dc59dfd33ef4d171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_56f3a10c22882f5c8caa250795f5d8df5a8c401cf052188dc59dfd33ef4d171a->leave($__internal_56f3a10c22882f5c8caa250795f5d8df5a8c401cf052188dc59dfd33ef4d171a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_163cb0e48ffc0a2a47492935dfda37bd23f709d81cd396243d3283772b778c62 = $this->env->getExtension("native_profiler");
        $__internal_163cb0e48ffc0a2a47492935dfda37bd23f709d81cd396243d3283772b778c62->enter($__internal_163cb0e48ffc0a2a47492935dfda37bd23f709d81cd396243d3283772b778c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_163cb0e48ffc0a2a47492935dfda37bd23f709d81cd396243d3283772b778c62->leave($__internal_163cb0e48ffc0a2a47492935dfda37bd23f709d81cd396243d3283772b778c62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b950bcbb9b671eec3fca1d7e06a1a08a9ae42304ea2bed0003e6cbe9466b597a = $this->env->getExtension("native_profiler");
        $__internal_b950bcbb9b671eec3fca1d7e06a1a08a9ae42304ea2bed0003e6cbe9466b597a->enter($__internal_b950bcbb9b671eec3fca1d7e06a1a08a9ae42304ea2bed0003e6cbe9466b597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b950bcbb9b671eec3fca1d7e06a1a08a9ae42304ea2bed0003e6cbe9466b597a->leave($__internal_b950bcbb9b671eec3fca1d7e06a1a08a9ae42304ea2bed0003e6cbe9466b597a_prof);

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
