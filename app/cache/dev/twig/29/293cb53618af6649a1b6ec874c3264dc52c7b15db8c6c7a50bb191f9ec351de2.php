<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_5e0285da2cc3094d8cf512edf47a8b7bcc59ce2e984b0f464e8ae11111e5c007 extends Twig_Template
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
        $__internal_f23a3e9b34e8d635c5556bb7c11e1be5eb391888b38e97b2c62169415d91acb4 = $this->env->getExtension("native_profiler");
        $__internal_f23a3e9b34e8d635c5556bb7c11e1be5eb391888b38e97b2c62169415d91acb4->enter($__internal_f23a3e9b34e8d635c5556bb7c11e1be5eb391888b38e97b2c62169415d91acb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f23a3e9b34e8d635c5556bb7c11e1be5eb391888b38e97b2c62169415d91acb4->leave($__internal_f23a3e9b34e8d635c5556bb7c11e1be5eb391888b38e97b2c62169415d91acb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
