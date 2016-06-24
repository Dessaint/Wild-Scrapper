<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_806b167ed6a2ffb10eca1145c8f73967c0dcaf0dac6be41d6f1903ee7b5ad3c3 extends Twig_Template
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
        $__internal_0508a56ad821e0ba4d0b700df99388d3e61680e24afcf1d176bf4471e897e7a7 = $this->env->getExtension("native_profiler");
        $__internal_0508a56ad821e0ba4d0b700df99388d3e61680e24afcf1d176bf4471e897e7a7->enter($__internal_0508a56ad821e0ba4d0b700df99388d3e61680e24afcf1d176bf4471e897e7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0508a56ad821e0ba4d0b700df99388d3e61680e24afcf1d176bf4471e897e7a7->leave($__internal_0508a56ad821e0ba4d0b700df99388d3e61680e24afcf1d176bf4471e897e7a7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
