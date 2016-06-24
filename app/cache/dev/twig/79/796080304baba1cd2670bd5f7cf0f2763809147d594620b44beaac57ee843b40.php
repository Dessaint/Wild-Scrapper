<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4a481846d2d822edf19b8cdd9ac574da9ec958fde316c47a50bd7ac134e02300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6cc4484a828e556a5c00ce66e56606fe9a974584fbf31d884ab1ec4ad175bad4 = $this->env->getExtension("native_profiler");
        $__internal_6cc4484a828e556a5c00ce66e56606fe9a974584fbf31d884ab1ec4ad175bad4->enter($__internal_6cc4484a828e556a5c00ce66e56606fe9a974584fbf31d884ab1ec4ad175bad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc4484a828e556a5c00ce66e56606fe9a974584fbf31d884ab1ec4ad175bad4->leave($__internal_6cc4484a828e556a5c00ce66e56606fe9a974584fbf31d884ab1ec4ad175bad4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ff175a68ae9f4fa10de51120fefa9acbf8eee19aeb16faad1a4b05930a42720 = $this->env->getExtension("native_profiler");
        $__internal_3ff175a68ae9f4fa10de51120fefa9acbf8eee19aeb16faad1a4b05930a42720->enter($__internal_3ff175a68ae9f4fa10de51120fefa9acbf8eee19aeb16faad1a4b05930a42720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ff175a68ae9f4fa10de51120fefa9acbf8eee19aeb16faad1a4b05930a42720->leave($__internal_3ff175a68ae9f4fa10de51120fefa9acbf8eee19aeb16faad1a4b05930a42720_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e9322554b6d533aa25b5f6797e32dd068423be4edbd5f6c31552f216851fe87 = $this->env->getExtension("native_profiler");
        $__internal_6e9322554b6d533aa25b5f6797e32dd068423be4edbd5f6c31552f216851fe87->enter($__internal_6e9322554b6d533aa25b5f6797e32dd068423be4edbd5f6c31552f216851fe87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e9322554b6d533aa25b5f6797e32dd068423be4edbd5f6c31552f216851fe87->leave($__internal_6e9322554b6d533aa25b5f6797e32dd068423be4edbd5f6c31552f216851fe87_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18609ee42a6a0dc3b00939be9e5ae4b43f70a65e3e0ddfa30d69edda7664f43 = $this->env->getExtension("native_profiler");
        $__internal_f18609ee42a6a0dc3b00939be9e5ae4b43f70a65e3e0ddfa30d69edda7664f43->enter($__internal_f18609ee42a6a0dc3b00939be9e5ae4b43f70a65e3e0ddfa30d69edda7664f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f18609ee42a6a0dc3b00939be9e5ae4b43f70a65e3e0ddfa30d69edda7664f43->leave($__internal_f18609ee42a6a0dc3b00939be9e5ae4b43f70a65e3e0ddfa30d69edda7664f43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
