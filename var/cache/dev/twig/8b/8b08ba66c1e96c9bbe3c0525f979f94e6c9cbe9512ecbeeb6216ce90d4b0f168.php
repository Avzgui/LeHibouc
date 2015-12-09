<?php

/* TestBundle:Default:index.html.twig */
class __TwigTemplate_d6c229ddc85322521af4919da22d9f3643407bab8e441ac0ffea28821f2d68bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bb17b8720ebac73604c53099382572613f7b075adf15b00be89b5873d2888eb = $this->env->getExtension("native_profiler");
        $__internal_7bb17b8720ebac73604c53099382572613f7b075adf15b00be89b5873d2888eb->enter($__internal_7bb17b8720ebac73604c53099382572613f7b075adf15b00be89b5873d2888eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
    <body>
        Hello ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
    </body>
</html>
";
        
        $__internal_7bb17b8720ebac73604c53099382572613f7b075adf15b00be89b5873d2888eb->leave($__internal_7bb17b8720ebac73604c53099382572613f7b075adf15b00be89b5873d2888eb_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/*     <body>*/
/*         Hello {{name}}!*/
/*     </body>*/
/* </html>*/
/* */
