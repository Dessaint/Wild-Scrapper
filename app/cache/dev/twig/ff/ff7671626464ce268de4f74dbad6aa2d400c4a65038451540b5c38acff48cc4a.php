<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3ff08070519e76e213bc495e83dc210b8255d802cc79348a2d72f5187ac4c96d extends Twig_Template
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
        $__internal_a578929c8d789756813d2826ed409fc8b2139675de6d5e54c28f94cf2dee8abf = $this->env->getExtension("native_profiler");
        $__internal_a578929c8d789756813d2826ed409fc8b2139675de6d5e54c28f94cf2dee8abf->enter($__internal_a578929c8d789756813d2826ed409fc8b2139675de6d5e54c28f94cf2dee8abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a578929c8d789756813d2826ed409fc8b2139675de6d5e54c28f94cf2dee8abf->leave($__internal_a578929c8d789756813d2826ed409fc8b2139675de6d5e54c28f94cf2dee8abf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
