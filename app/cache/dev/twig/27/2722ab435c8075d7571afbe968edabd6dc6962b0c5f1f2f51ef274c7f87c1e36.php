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
        $__internal_63b109748ec03a421546c008cafd88b5b3d9e5d4cbc82a51d73e067bdf3fc49c = $this->env->getExtension("native_profiler");
        $__internal_63b109748ec03a421546c008cafd88b5b3d9e5d4cbc82a51d73e067bdf3fc49c->enter($__internal_63b109748ec03a421546c008cafd88b5b3d9e5d4cbc82a51d73e067bdf3fc49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b109748ec03a421546c008cafd88b5b3d9e5d4cbc82a51d73e067bdf3fc49c->leave($__internal_63b109748ec03a421546c008cafd88b5b3d9e5d4cbc82a51d73e067bdf3fc49c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38d48da13dd22184f4731d7355fd22743f6471379bfd41c01e80099a9f66f406 = $this->env->getExtension("native_profiler");
        $__internal_38d48da13dd22184f4731d7355fd22743f6471379bfd41c01e80099a9f66f406->enter($__internal_38d48da13dd22184f4731d7355fd22743f6471379bfd41c01e80099a9f66f406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_38d48da13dd22184f4731d7355fd22743f6471379bfd41c01e80099a9f66f406->leave($__internal_38d48da13dd22184f4731d7355fd22743f6471379bfd41c01e80099a9f66f406_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f66d19ef454a334b97a3a185d0b57f660ef812533383282ebb495703b79f30cc = $this->env->getExtension("native_profiler");
        $__internal_f66d19ef454a334b97a3a185d0b57f660ef812533383282ebb495703b79f30cc->enter($__internal_f66d19ef454a334b97a3a185d0b57f660ef812533383282ebb495703b79f30cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f66d19ef454a334b97a3a185d0b57f660ef812533383282ebb495703b79f30cc->leave($__internal_f66d19ef454a334b97a3a185d0b57f660ef812533383282ebb495703b79f30cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0978ee28b2ae05c1463360aa7b213778ff3cd8e68a0cb875ad9d00b0cd8a59ac = $this->env->getExtension("native_profiler");
        $__internal_0978ee28b2ae05c1463360aa7b213778ff3cd8e68a0cb875ad9d00b0cd8a59ac->enter($__internal_0978ee28b2ae05c1463360aa7b213778ff3cd8e68a0cb875ad9d00b0cd8a59ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0978ee28b2ae05c1463360aa7b213778ff3cd8e68a0cb875ad9d00b0cd8a59ac->leave($__internal_0978ee28b2ae05c1463360aa7b213778ff3cd8e68a0cb875ad9d00b0cd8a59ac_prof);

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
