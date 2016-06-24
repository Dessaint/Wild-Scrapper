<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_54e043f1372265a826366cf622188c66517f80275ff555cd5234e2a34973e9f8 extends Twig_Template
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
        $__internal_82aecd2dab374d41b1a4abf3decf1aef8fb4164e3d6cbf12e5d813e56a8cf798 = $this->env->getExtension("native_profiler");
        $__internal_82aecd2dab374d41b1a4abf3decf1aef8fb4164e3d6cbf12e5d813e56a8cf798->enter($__internal_82aecd2dab374d41b1a4abf3decf1aef8fb4164e3d6cbf12e5d813e56a8cf798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_82aecd2dab374d41b1a4abf3decf1aef8fb4164e3d6cbf12e5d813e56a8cf798->leave($__internal_82aecd2dab374d41b1a4abf3decf1aef8fb4164e3d6cbf12e5d813e56a8cf798_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
