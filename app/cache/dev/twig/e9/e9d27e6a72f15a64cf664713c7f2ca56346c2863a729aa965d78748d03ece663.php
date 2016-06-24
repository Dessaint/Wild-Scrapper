<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a8d9b1a944f9c879202bdc717e8ccec4a6a8d7a5f4d3a1b8b7a88103159acb53 extends Twig_Template
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
        $__internal_5c50638cd759a2414d5d0c283646b8070268906858db5c0e710b378668da52fa = $this->env->getExtension("native_profiler");
        $__internal_5c50638cd759a2414d5d0c283646b8070268906858db5c0e710b378668da52fa->enter($__internal_5c50638cd759a2414d5d0c283646b8070268906858db5c0e710b378668da52fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5c50638cd759a2414d5d0c283646b8070268906858db5c0e710b378668da52fa->leave($__internal_5c50638cd759a2414d5d0c283646b8070268906858db5c0e710b378668da52fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
