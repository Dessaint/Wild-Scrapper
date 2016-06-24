<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9455964996fce9efceaac3bda204e5c2e4590dbd8b8c2f6ff33b1b20eaa818b9 extends Twig_Template
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
        $__internal_ee71963866631a4656ef89b5257243b5535fecaae9c15a7a5660108da090747f = $this->env->getExtension("native_profiler");
        $__internal_ee71963866631a4656ef89b5257243b5535fecaae9c15a7a5660108da090747f->enter($__internal_ee71963866631a4656ef89b5257243b5535fecaae9c15a7a5660108da090747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ee71963866631a4656ef89b5257243b5535fecaae9c15a7a5660108da090747f->leave($__internal_ee71963866631a4656ef89b5257243b5535fecaae9c15a7a5660108da090747f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
