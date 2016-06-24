<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_04e7690b6beace3cbde3c07140045a4e9ab351ff1134bd0ef6883e91b73241ca extends Twig_Template
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
        $__internal_6e815079d0c1031be25220011f032e4a80c3fec4fa5345856aac3d89d8fa11c9 = $this->env->getExtension("native_profiler");
        $__internal_6e815079d0c1031be25220011f032e4a80c3fec4fa5345856aac3d89d8fa11c9->enter($__internal_6e815079d0c1031be25220011f032e4a80c3fec4fa5345856aac3d89d8fa11c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6e815079d0c1031be25220011f032e4a80c3fec4fa5345856aac3d89d8fa11c9->leave($__internal_6e815079d0c1031be25220011f032e4a80c3fec4fa5345856aac3d89d8fa11c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
