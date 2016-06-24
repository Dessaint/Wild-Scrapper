<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b7a88365b5f81fddf75dcec5ba5f728ca78580d6be3a820d0421605abf86566e extends Twig_Template
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
        $__internal_bef005d4a0242f538b7d17f18dfe105a7ef0de578cc2e506278012ace0a04d7a = $this->env->getExtension("native_profiler");
        $__internal_bef005d4a0242f538b7d17f18dfe105a7ef0de578cc2e506278012ace0a04d7a->enter($__internal_bef005d4a0242f538b7d17f18dfe105a7ef0de578cc2e506278012ace0a04d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_bef005d4a0242f538b7d17f18dfe105a7ef0de578cc2e506278012ace0a04d7a->leave($__internal_bef005d4a0242f538b7d17f18dfe105a7ef0de578cc2e506278012ace0a04d7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
