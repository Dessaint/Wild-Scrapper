<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_be8d133ac0d9c572be94c7f7d539ed986ec344690e3aae21395e81844e8b1e11 extends Twig_Template
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
        $__internal_a1f9ebef6323a7502eaa51d97b0ee0d02aea82f754778d395beba89ae8bf1391 = $this->env->getExtension("native_profiler");
        $__internal_a1f9ebef6323a7502eaa51d97b0ee0d02aea82f754778d395beba89ae8bf1391->enter($__internal_a1f9ebef6323a7502eaa51d97b0ee0d02aea82f754778d395beba89ae8bf1391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f9ebef6323a7502eaa51d97b0ee0d02aea82f754778d395beba89ae8bf1391->leave($__internal_a1f9ebef6323a7502eaa51d97b0ee0d02aea82f754778d395beba89ae8bf1391_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08fbab49aee037add4ccc8969f6a9e3208fa575a3b984a12f3b9c4a52d42058b = $this->env->getExtension("native_profiler");
        $__internal_08fbab49aee037add4ccc8969f6a9e3208fa575a3b984a12f3b9c4a52d42058b->enter($__internal_08fbab49aee037add4ccc8969f6a9e3208fa575a3b984a12f3b9c4a52d42058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08fbab49aee037add4ccc8969f6a9e3208fa575a3b984a12f3b9c4a52d42058b->leave($__internal_08fbab49aee037add4ccc8969f6a9e3208fa575a3b984a12f3b9c4a52d42058b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d261a0209e6a005f10f5175ddbf80a39a8c5b4674ba9e6aab4b0cdc56a0a6ed8 = $this->env->getExtension("native_profiler");
        $__internal_d261a0209e6a005f10f5175ddbf80a39a8c5b4674ba9e6aab4b0cdc56a0a6ed8->enter($__internal_d261a0209e6a005f10f5175ddbf80a39a8c5b4674ba9e6aab4b0cdc56a0a6ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d261a0209e6a005f10f5175ddbf80a39a8c5b4674ba9e6aab4b0cdc56a0a6ed8->leave($__internal_d261a0209e6a005f10f5175ddbf80a39a8c5b4674ba9e6aab4b0cdc56a0a6ed8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a090d386eaa9c0e76b22f77a7251159e32d6ab7d4aea4285305dd4526f2e9d2b = $this->env->getExtension("native_profiler");
        $__internal_a090d386eaa9c0e76b22f77a7251159e32d6ab7d4aea4285305dd4526f2e9d2b->enter($__internal_a090d386eaa9c0e76b22f77a7251159e32d6ab7d4aea4285305dd4526f2e9d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a090d386eaa9c0e76b22f77a7251159e32d6ab7d4aea4285305dd4526f2e9d2b->leave($__internal_a090d386eaa9c0e76b22f77a7251159e32d6ab7d4aea4285305dd4526f2e9d2b_prof);

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
