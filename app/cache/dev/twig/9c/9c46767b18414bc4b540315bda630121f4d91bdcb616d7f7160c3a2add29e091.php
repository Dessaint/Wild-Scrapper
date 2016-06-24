<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_551bb19b50596dc80e30e289916a37236352077d55b1232e296ece710ca00464 extends Twig_Template
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
        $__internal_f46706987b86ce167a9e15fa951bd28ccce65a566a78b953b639add5766b8d38 = $this->env->getExtension("native_profiler");
        $__internal_f46706987b86ce167a9e15fa951bd28ccce65a566a78b953b639add5766b8d38->enter($__internal_f46706987b86ce167a9e15fa951bd28ccce65a566a78b953b639add5766b8d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f46706987b86ce167a9e15fa951bd28ccce65a566a78b953b639add5766b8d38->leave($__internal_f46706987b86ce167a9e15fa951bd28ccce65a566a78b953b639add5766b8d38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
