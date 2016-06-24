<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_bce0c6d9161fd3e5b1253e3abf6a491129c0575cf1af850d14c3d8c17c7d7b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2501dca8b07cfcd1716c6225ceb2a74b1fa410bec533775c5be4dd427f576a = $this->env->getExtension("native_profiler");
        $__internal_7a2501dca8b07cfcd1716c6225ceb2a74b1fa410bec533775c5be4dd427f576a->enter($__internal_7a2501dca8b07cfcd1716c6225ceb2a74b1fa410bec533775c5be4dd427f576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7a2501dca8b07cfcd1716c6225ceb2a74b1fa410bec533775c5be4dd427f576a->leave($__internal_7a2501dca8b07cfcd1716c6225ceb2a74b1fa410bec533775c5be4dd427f576a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5a0ab0d95bdcd70b251ce1a47a3ff90be5777c621236edd9ccfff2078475b16 = $this->env->getExtension("native_profiler");
        $__internal_b5a0ab0d95bdcd70b251ce1a47a3ff90be5777c621236edd9ccfff2078475b16->enter($__internal_b5a0ab0d95bdcd70b251ce1a47a3ff90be5777c621236edd9ccfff2078475b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5a0ab0d95bdcd70b251ce1a47a3ff90be5777c621236edd9ccfff2078475b16->leave($__internal_b5a0ab0d95bdcd70b251ce1a47a3ff90be5777c621236edd9ccfff2078475b16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
