<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_260da4bebf3ef0feaa91b570c21f08e0a12ee751b1bd144c65523dc1873447a3 extends Twig_Template
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
        $__internal_69db3123aeefc4ef634a7a2b22b0fba1d229a1da3d44583cf3657dc190cb0798 = $this->env->getExtension("native_profiler");
        $__internal_69db3123aeefc4ef634a7a2b22b0fba1d229a1da3d44583cf3657dc190cb0798->enter($__internal_69db3123aeefc4ef634a7a2b22b0fba1d229a1da3d44583cf3657dc190cb0798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_69db3123aeefc4ef634a7a2b22b0fba1d229a1da3d44583cf3657dc190cb0798->leave($__internal_69db3123aeefc4ef634a7a2b22b0fba1d229a1da3d44583cf3657dc190cb0798_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
