<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_389d83cfcd5887d6bbeeb7ede1a3c1ec13e9a63f5fd6be083910dfcffdd26cff extends Twig_Template
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
        $__internal_22082d571d11851fa41edaedf12d262e671a4183aeac1721bb156f99a9e32583 = $this->env->getExtension("native_profiler");
        $__internal_22082d571d11851fa41edaedf12d262e671a4183aeac1721bb156f99a9e32583->enter($__internal_22082d571d11851fa41edaedf12d262e671a4183aeac1721bb156f99a9e32583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_22082d571d11851fa41edaedf12d262e671a4183aeac1721bb156f99a9e32583->leave($__internal_22082d571d11851fa41edaedf12d262e671a4183aeac1721bb156f99a9e32583_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
