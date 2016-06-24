<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_85691cc3257308f41bd6eac5448dcbfb8e2393a745ac2ff46ea72a138c24b0dc extends Twig_Template
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
        $__internal_c1dd1f22d660b0c0583554eb651e9bd38ac577c6725395546220e6f579f309f3 = $this->env->getExtension("native_profiler");
        $__internal_c1dd1f22d660b0c0583554eb651e9bd38ac577c6725395546220e6f579f309f3->enter($__internal_c1dd1f22d660b0c0583554eb651e9bd38ac577c6725395546220e6f579f309f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c1dd1f22d660b0c0583554eb651e9bd38ac577c6725395546220e6f579f309f3->leave($__internal_c1dd1f22d660b0c0583554eb651e9bd38ac577c6725395546220e6f579f309f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
