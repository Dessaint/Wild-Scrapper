<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4123d77ed8e3c6f0106c7f89b7a7fc76cf52c57ca61e0da8741f099e26ce7ee0 extends Twig_Template
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
        $__internal_05c70f29eece13dcb7cdee4bb58fc263ff339f3f5dc16e1e9e3f815ad3f2cde0 = $this->env->getExtension("native_profiler");
        $__internal_05c70f29eece13dcb7cdee4bb58fc263ff339f3f5dc16e1e9e3f815ad3f2cde0->enter($__internal_05c70f29eece13dcb7cdee4bb58fc263ff339f3f5dc16e1e9e3f815ad3f2cde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c70f29eece13dcb7cdee4bb58fc263ff339f3f5dc16e1e9e3f815ad3f2cde0->leave($__internal_05c70f29eece13dcb7cdee4bb58fc263ff339f3f5dc16e1e9e3f815ad3f2cde0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1daf1d6924084415a7432bfd68c63c4ec9c01214bee032525c0b26fc2ee27de1 = $this->env->getExtension("native_profiler");
        $__internal_1daf1d6924084415a7432bfd68c63c4ec9c01214bee032525c0b26fc2ee27de1->enter($__internal_1daf1d6924084415a7432bfd68c63c4ec9c01214bee032525c0b26fc2ee27de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1daf1d6924084415a7432bfd68c63c4ec9c01214bee032525c0b26fc2ee27de1->leave($__internal_1daf1d6924084415a7432bfd68c63c4ec9c01214bee032525c0b26fc2ee27de1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4b38c0f16cff2b8eee3df91070035ff97761a62395d79fd9ce2c721a81a06f05 = $this->env->getExtension("native_profiler");
        $__internal_4b38c0f16cff2b8eee3df91070035ff97761a62395d79fd9ce2c721a81a06f05->enter($__internal_4b38c0f16cff2b8eee3df91070035ff97761a62395d79fd9ce2c721a81a06f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4b38c0f16cff2b8eee3df91070035ff97761a62395d79fd9ce2c721a81a06f05->leave($__internal_4b38c0f16cff2b8eee3df91070035ff97761a62395d79fd9ce2c721a81a06f05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_733c8992d36859d86e9a56bf4cdca99820e0d065dedc5d43443d9d6938923799 = $this->env->getExtension("native_profiler");
        $__internal_733c8992d36859d86e9a56bf4cdca99820e0d065dedc5d43443d9d6938923799->enter($__internal_733c8992d36859d86e9a56bf4cdca99820e0d065dedc5d43443d9d6938923799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_733c8992d36859d86e9a56bf4cdca99820e0d065dedc5d43443d9d6938923799->leave($__internal_733c8992d36859d86e9a56bf4cdca99820e0d065dedc5d43443d9d6938923799_prof);

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
