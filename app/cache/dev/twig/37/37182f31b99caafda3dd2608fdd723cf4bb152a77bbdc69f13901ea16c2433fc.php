<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_f315547849d34f94a0349a21cfa77b48b7c22b0d252c4964a23e22bf83313f7a extends Twig_Template
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
        $__internal_78d43c914b4cd24a30279248e69a3934b61dd8fa99196c6f279021821cd726f6 = $this->env->getExtension("native_profiler");
        $__internal_78d43c914b4cd24a30279248e69a3934b61dd8fa99196c6f279021821cd726f6->enter($__internal_78d43c914b4cd24a30279248e69a3934b61dd8fa99196c6f279021821cd726f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_78d43c914b4cd24a30279248e69a3934b61dd8fa99196c6f279021821cd726f6->leave($__internal_78d43c914b4cd24a30279248e69a3934b61dd8fa99196c6f279021821cd726f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
