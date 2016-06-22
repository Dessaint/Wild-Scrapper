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
        $__internal_b6c1d59c2762ff206885d3974f5391e2e10554110a25ca526fb2c60b35316480 = $this->env->getExtension("native_profiler");
        $__internal_b6c1d59c2762ff206885d3974f5391e2e10554110a25ca526fb2c60b35316480->enter($__internal_b6c1d59c2762ff206885d3974f5391e2e10554110a25ca526fb2c60b35316480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c1d59c2762ff206885d3974f5391e2e10554110a25ca526fb2c60b35316480->leave($__internal_b6c1d59c2762ff206885d3974f5391e2e10554110a25ca526fb2c60b35316480_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_daefbe363de50a0daf5bda0ff2e826c3fa84987bf7ab6e8b112acb1a4054e89d = $this->env->getExtension("native_profiler");
        $__internal_daefbe363de50a0daf5bda0ff2e826c3fa84987bf7ab6e8b112acb1a4054e89d->enter($__internal_daefbe363de50a0daf5bda0ff2e826c3fa84987bf7ab6e8b112acb1a4054e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_daefbe363de50a0daf5bda0ff2e826c3fa84987bf7ab6e8b112acb1a4054e89d->leave($__internal_daefbe363de50a0daf5bda0ff2e826c3fa84987bf7ab6e8b112acb1a4054e89d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_511da63af1702c5548e9cdc657548e58dd6e41ede8cdbea36d29fabc55b28b24 = $this->env->getExtension("native_profiler");
        $__internal_511da63af1702c5548e9cdc657548e58dd6e41ede8cdbea36d29fabc55b28b24->enter($__internal_511da63af1702c5548e9cdc657548e58dd6e41ede8cdbea36d29fabc55b28b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_511da63af1702c5548e9cdc657548e58dd6e41ede8cdbea36d29fabc55b28b24->leave($__internal_511da63af1702c5548e9cdc657548e58dd6e41ede8cdbea36d29fabc55b28b24_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdffbe078d388519a34377e831c8350280f55951eeb801ac766d8923648ff524 = $this->env->getExtension("native_profiler");
        $__internal_fdffbe078d388519a34377e831c8350280f55951eeb801ac766d8923648ff524->enter($__internal_fdffbe078d388519a34377e831c8350280f55951eeb801ac766d8923648ff524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fdffbe078d388519a34377e831c8350280f55951eeb801ac766d8923648ff524->leave($__internal_fdffbe078d388519a34377e831c8350280f55951eeb801ac766d8923648ff524_prof);

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
