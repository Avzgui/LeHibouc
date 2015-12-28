<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_590f3d846a0b59b1d064d292b194394d1f17340d592ca5837404d91300dae9aa extends Twig_Template
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
        $__internal_30cbd04bf585510a7c7808f67a502bec1b51477278278657ae67321909f29466 = $this->env->getExtension("native_profiler");
        $__internal_30cbd04bf585510a7c7808f67a502bec1b51477278278657ae67321909f29466->enter($__internal_30cbd04bf585510a7c7808f67a502bec1b51477278278657ae67321909f29466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30cbd04bf585510a7c7808f67a502bec1b51477278278657ae67321909f29466->leave($__internal_30cbd04bf585510a7c7808f67a502bec1b51477278278657ae67321909f29466_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cdaa5329cb64f4daf9538b225a3b2f50d5610cfbd4749b0251dbb0a2509006a = $this->env->getExtension("native_profiler");
        $__internal_7cdaa5329cb64f4daf9538b225a3b2f50d5610cfbd4749b0251dbb0a2509006a->enter($__internal_7cdaa5329cb64f4daf9538b225a3b2f50d5610cfbd4749b0251dbb0a2509006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7cdaa5329cb64f4daf9538b225a3b2f50d5610cfbd4749b0251dbb0a2509006a->leave($__internal_7cdaa5329cb64f4daf9538b225a3b2f50d5610cfbd4749b0251dbb0a2509006a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_019a62b7639089a79853404e2f09fb39394e7974be4bf451d08681e33e8cb851 = $this->env->getExtension("native_profiler");
        $__internal_019a62b7639089a79853404e2f09fb39394e7974be4bf451d08681e33e8cb851->enter($__internal_019a62b7639089a79853404e2f09fb39394e7974be4bf451d08681e33e8cb851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_019a62b7639089a79853404e2f09fb39394e7974be4bf451d08681e33e8cb851->leave($__internal_019a62b7639089a79853404e2f09fb39394e7974be4bf451d08681e33e8cb851_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5575e0511e5a6f49b5d84487fb9556fbe7a81801897e6ed08b7025b07e16ea93 = $this->env->getExtension("native_profiler");
        $__internal_5575e0511e5a6f49b5d84487fb9556fbe7a81801897e6ed08b7025b07e16ea93->enter($__internal_5575e0511e5a6f49b5d84487fb9556fbe7a81801897e6ed08b7025b07e16ea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5575e0511e5a6f49b5d84487fb9556fbe7a81801897e6ed08b7025b07e16ea93->leave($__internal_5575e0511e5a6f49b5d84487fb9556fbe7a81801897e6ed08b7025b07e16ea93_prof);

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
