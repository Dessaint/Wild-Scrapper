<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e7f25d99c3dc34ffc24180b157a6f7aeb2c7ad385e0b18680c13661d54760e1a extends Twig_Template
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
        $__internal_93bb9cf77112d41ccef2463af7be98328975c79466162f41ad0170edbb2c4e08 = $this->env->getExtension("native_profiler");
        $__internal_93bb9cf77112d41ccef2463af7be98328975c79466162f41ad0170edbb2c4e08->enter($__internal_93bb9cf77112d41ccef2463af7be98328975c79466162f41ad0170edbb2c4e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_93bb9cf77112d41ccef2463af7be98328975c79466162f41ad0170edbb2c4e08->leave($__internal_93bb9cf77112d41ccef2463af7be98328975c79466162f41ad0170edbb2c4e08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
