<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_de4dd759e8768899d66266919a0a3c4b538019ac01139ac9b755e1a8034da499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_705e3598d998c0841b4891de2e6e5661728ff3ffa1dc8df05e941ee88eac211a = $this->env->getExtension("native_profiler");
        $__internal_705e3598d998c0841b4891de2e6e5661728ff3ffa1dc8df05e941ee88eac211a->enter($__internal_705e3598d998c0841b4891de2e6e5661728ff3ffa1dc8df05e941ee88eac211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705e3598d998c0841b4891de2e6e5661728ff3ffa1dc8df05e941ee88eac211a->leave($__internal_705e3598d998c0841b4891de2e6e5661728ff3ffa1dc8df05e941ee88eac211a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6b5f9c0731ea95989b7278dcb0935a449346b9acd648a5e2c5115a117fbc186 = $this->env->getExtension("native_profiler");
        $__internal_b6b5f9c0731ea95989b7278dcb0935a449346b9acd648a5e2c5115a117fbc186->enter($__internal_b6b5f9c0731ea95989b7278dcb0935a449346b9acd648a5e2c5115a117fbc186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b6b5f9c0731ea95989b7278dcb0935a449346b9acd648a5e2c5115a117fbc186->leave($__internal_b6b5f9c0731ea95989b7278dcb0935a449346b9acd648a5e2c5115a117fbc186_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_542c89f4cf43e7edab40800040c27f1f96044aa8ff351ed840305fe5e919d067 = $this->env->getExtension("native_profiler");
        $__internal_542c89f4cf43e7edab40800040c27f1f96044aa8ff351ed840305fe5e919d067->enter($__internal_542c89f4cf43e7edab40800040c27f1f96044aa8ff351ed840305fe5e919d067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_542c89f4cf43e7edab40800040c27f1f96044aa8ff351ed840305fe5e919d067->leave($__internal_542c89f4cf43e7edab40800040c27f1f96044aa8ff351ed840305fe5e919d067_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
