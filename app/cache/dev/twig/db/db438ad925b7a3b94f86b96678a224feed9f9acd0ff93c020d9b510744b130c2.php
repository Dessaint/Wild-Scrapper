<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_30eab815c898969cb78a4cf676cfeeebe641ad28c60487821bd3eac7452cbaf1 extends Twig_Template
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
        $__internal_b1efcc0eb9aab56fae767942a4ef092dc2bc94dd2a85f4f7ac2e4508fb0f5c89 = $this->env->getExtension("native_profiler");
        $__internal_b1efcc0eb9aab56fae767942a4ef092dc2bc94dd2a85f4f7ac2e4508fb0f5c89->enter($__internal_b1efcc0eb9aab56fae767942a4ef092dc2bc94dd2a85f4f7ac2e4508fb0f5c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b1efcc0eb9aab56fae767942a4ef092dc2bc94dd2a85f4f7ac2e4508fb0f5c89->leave($__internal_b1efcc0eb9aab56fae767942a4ef092dc2bc94dd2a85f4f7ac2e4508fb0f5c89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
