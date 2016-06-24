<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bdedbe7a1d255c00f279c1c1473333ceb4e6d1b984e45db06a3fe6e7d5d7d584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_653d2fb1f6855f3164217ec68f3d2af3eaa2b0fd1e11dff76766fac6be0241be = $this->env->getExtension("native_profiler");
        $__internal_653d2fb1f6855f3164217ec68f3d2af3eaa2b0fd1e11dff76766fac6be0241be->enter($__internal_653d2fb1f6855f3164217ec68f3d2af3eaa2b0fd1e11dff76766fac6be0241be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653d2fb1f6855f3164217ec68f3d2af3eaa2b0fd1e11dff76766fac6be0241be->leave($__internal_653d2fb1f6855f3164217ec68f3d2af3eaa2b0fd1e11dff76766fac6be0241be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8168dd8dd543a10255d443ab76d067a600684c7cdf81ed01979ae257022637a = $this->env->getExtension("native_profiler");
        $__internal_f8168dd8dd543a10255d443ab76d067a600684c7cdf81ed01979ae257022637a->enter($__internal_f8168dd8dd543a10255d443ab76d067a600684c7cdf81ed01979ae257022637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f8168dd8dd543a10255d443ab76d067a600684c7cdf81ed01979ae257022637a->leave($__internal_f8168dd8dd543a10255d443ab76d067a600684c7cdf81ed01979ae257022637a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e52f3d84450d9400f8489b320c758a9763cde20643e577b62c1c8e0fd12e3a1e = $this->env->getExtension("native_profiler");
        $__internal_e52f3d84450d9400f8489b320c758a9763cde20643e577b62c1c8e0fd12e3a1e->enter($__internal_e52f3d84450d9400f8489b320c758a9763cde20643e577b62c1c8e0fd12e3a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e52f3d84450d9400f8489b320c758a9763cde20643e577b62c1c8e0fd12e3a1e->leave($__internal_e52f3d84450d9400f8489b320c758a9763cde20643e577b62c1c8e0fd12e3a1e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
