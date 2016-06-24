<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c3db836e3afeba1b1a182ab54f87c1a21164e5ecfaf7a95351f64780aae6a4b4 extends Twig_Template
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
        $__internal_d33c274aae2d70a314835c1c45e70ba008ed3060d7a86fe12e415746b523d57d = $this->env->getExtension("native_profiler");
        $__internal_d33c274aae2d70a314835c1c45e70ba008ed3060d7a86fe12e415746b523d57d->enter($__internal_d33c274aae2d70a314835c1c45e70ba008ed3060d7a86fe12e415746b523d57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d33c274aae2d70a314835c1c45e70ba008ed3060d7a86fe12e415746b523d57d->leave($__internal_d33c274aae2d70a314835c1c45e70ba008ed3060d7a86fe12e415746b523d57d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
