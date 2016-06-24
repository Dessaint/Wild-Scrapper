<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_55767090c8eb678dc470188665e82f4de4db8cfedf232029b92c0266059e3c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_bc2101fc2b256c2835a0f2a49e6f8ec40574d4607edf76731f4f0c239bc04e81 = $this->env->getExtension("native_profiler");
        $__internal_bc2101fc2b256c2835a0f2a49e6f8ec40574d4607edf76731f4f0c239bc04e81->enter($__internal_bc2101fc2b256c2835a0f2a49e6f8ec40574d4607edf76731f4f0c239bc04e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2101fc2b256c2835a0f2a49e6f8ec40574d4607edf76731f4f0c239bc04e81->leave($__internal_bc2101fc2b256c2835a0f2a49e6f8ec40574d4607edf76731f4f0c239bc04e81_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3b165029c2cefae461c4372997b9e46d1fa07faab779edf91cc97302a09f683 = $this->env->getExtension("native_profiler");
        $__internal_d3b165029c2cefae461c4372997b9e46d1fa07faab779edf91cc97302a09f683->enter($__internal_d3b165029c2cefae461c4372997b9e46d1fa07faab779edf91cc97302a09f683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3b165029c2cefae461c4372997b9e46d1fa07faab779edf91cc97302a09f683->leave($__internal_d3b165029c2cefae461c4372997b9e46d1fa07faab779edf91cc97302a09f683_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cf6d98d05fca957e62c5e828ddbdbe3be5563cc23b47974984e9e4b8ecb4ac71 = $this->env->getExtension("native_profiler");
        $__internal_cf6d98d05fca957e62c5e828ddbdbe3be5563cc23b47974984e9e4b8ecb4ac71->enter($__internal_cf6d98d05fca957e62c5e828ddbdbe3be5563cc23b47974984e9e4b8ecb4ac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf6d98d05fca957e62c5e828ddbdbe3be5563cc23b47974984e9e4b8ecb4ac71->leave($__internal_cf6d98d05fca957e62c5e828ddbdbe3be5563cc23b47974984e9e4b8ecb4ac71_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a6d498538b83c709a07a837501cd86088d17d86baa89a9dfeaeff551cb20bef = $this->env->getExtension("native_profiler");
        $__internal_7a6d498538b83c709a07a837501cd86088d17d86baa89a9dfeaeff551cb20bef->enter($__internal_7a6d498538b83c709a07a837501cd86088d17d86baa89a9dfeaeff551cb20bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7a6d498538b83c709a07a837501cd86088d17d86baa89a9dfeaeff551cb20bef->leave($__internal_7a6d498538b83c709a07a837501cd86088d17d86baa89a9dfeaeff551cb20bef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
