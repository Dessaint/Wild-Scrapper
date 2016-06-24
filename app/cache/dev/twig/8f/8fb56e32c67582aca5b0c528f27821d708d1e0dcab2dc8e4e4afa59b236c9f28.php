<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_336df20579252595b3541d05c42611954a8bca57a342f993074f6875a2927b8d extends Twig_Template
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
        $__internal_1d96ecc8ed77371f314f8bb4f63cea93a8d706f9c237f04d29a3f9e57b5f2270 = $this->env->getExtension("native_profiler");
        $__internal_1d96ecc8ed77371f314f8bb4f63cea93a8d706f9c237f04d29a3f9e57b5f2270->enter($__internal_1d96ecc8ed77371f314f8bb4f63cea93a8d706f9c237f04d29a3f9e57b5f2270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1d96ecc8ed77371f314f8bb4f63cea93a8d706f9c237f04d29a3f9e57b5f2270->leave($__internal_1d96ecc8ed77371f314f8bb4f63cea93a8d706f9c237f04d29a3f9e57b5f2270_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
