<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_77126ca5154bf5d29560dbaca1fa357f7f833269315adb39732dd46ea01f9ab8 extends Twig_Template
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
        $__internal_44460c9b84f92509e326c5080bb2eba0fe058616139bece904ef23cc396ce727 = $this->env->getExtension("native_profiler");
        $__internal_44460c9b84f92509e326c5080bb2eba0fe058616139bece904ef23cc396ce727->enter($__internal_44460c9b84f92509e326c5080bb2eba0fe058616139bece904ef23cc396ce727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_44460c9b84f92509e326c5080bb2eba0fe058616139bece904ef23cc396ce727->leave($__internal_44460c9b84f92509e326c5080bb2eba0fe058616139bece904ef23cc396ce727_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
