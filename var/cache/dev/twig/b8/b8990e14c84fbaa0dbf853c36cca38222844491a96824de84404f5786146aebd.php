<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bbeaec96414a537445cbdc6745e94573245135ad74bceba6a15e8fa93ee3fefb extends Twig_Template
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
        $__internal_c9010b1646a458ac7cbbfb6eebe3a3c79278e1ae8895cd2b4c5e1bed6e769e6f = $this->env->getExtension("native_profiler");
        $__internal_c9010b1646a458ac7cbbfb6eebe3a3c79278e1ae8895cd2b4c5e1bed6e769e6f->enter($__internal_c9010b1646a458ac7cbbfb6eebe3a3c79278e1ae8895cd2b4c5e1bed6e769e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9010b1646a458ac7cbbfb6eebe3a3c79278e1ae8895cd2b4c5e1bed6e769e6f->leave($__internal_c9010b1646a458ac7cbbfb6eebe3a3c79278e1ae8895cd2b4c5e1bed6e769e6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8a7b5d4e77e86f9ba421a35b0da9f7591f60128e9ab8891e027f5bb2cd0c635 = $this->env->getExtension("native_profiler");
        $__internal_c8a7b5d4e77e86f9ba421a35b0da9f7591f60128e9ab8891e027f5bb2cd0c635->enter($__internal_c8a7b5d4e77e86f9ba421a35b0da9f7591f60128e9ab8891e027f5bb2cd0c635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8a7b5d4e77e86f9ba421a35b0da9f7591f60128e9ab8891e027f5bb2cd0c635->leave($__internal_c8a7b5d4e77e86f9ba421a35b0da9f7591f60128e9ab8891e027f5bb2cd0c635_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_682f3e926ee3887923245589c7c2076418f87e600dfc4cde0e6eed4e3fb5ffe6 = $this->env->getExtension("native_profiler");
        $__internal_682f3e926ee3887923245589c7c2076418f87e600dfc4cde0e6eed4e3fb5ffe6->enter($__internal_682f3e926ee3887923245589c7c2076418f87e600dfc4cde0e6eed4e3fb5ffe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_682f3e926ee3887923245589c7c2076418f87e600dfc4cde0e6eed4e3fb5ffe6->leave($__internal_682f3e926ee3887923245589c7c2076418f87e600dfc4cde0e6eed4e3fb5ffe6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad9e5fc69212365bab34d393a7046ab386c4e29af1017b93fb33062fe956c2c2 = $this->env->getExtension("native_profiler");
        $__internal_ad9e5fc69212365bab34d393a7046ab386c4e29af1017b93fb33062fe956c2c2->enter($__internal_ad9e5fc69212365bab34d393a7046ab386c4e29af1017b93fb33062fe956c2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad9e5fc69212365bab34d393a7046ab386c4e29af1017b93fb33062fe956c2c2->leave($__internal_ad9e5fc69212365bab34d393a7046ab386c4e29af1017b93fb33062fe956c2c2_prof);

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
