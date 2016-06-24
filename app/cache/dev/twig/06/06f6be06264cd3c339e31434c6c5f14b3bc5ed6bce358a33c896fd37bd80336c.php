<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4ca6f792973caffd13bf5359976deffa5429cd23dba95413ad1e8e8c42ca1c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e2b31203092d717d14fc06caba13707bab14dcb238d84281530b12fd082710bb = $this->env->getExtension("native_profiler");
        $__internal_e2b31203092d717d14fc06caba13707bab14dcb238d84281530b12fd082710bb->enter($__internal_e2b31203092d717d14fc06caba13707bab14dcb238d84281530b12fd082710bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b31203092d717d14fc06caba13707bab14dcb238d84281530b12fd082710bb->leave($__internal_e2b31203092d717d14fc06caba13707bab14dcb238d84281530b12fd082710bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea480ae1e4481c1a03f1554044c00f6e6a32393b3f482ff4eccf9613a308473f = $this->env->getExtension("native_profiler");
        $__internal_ea480ae1e4481c1a03f1554044c00f6e6a32393b3f482ff4eccf9613a308473f->enter($__internal_ea480ae1e4481c1a03f1554044c00f6e6a32393b3f482ff4eccf9613a308473f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ea480ae1e4481c1a03f1554044c00f6e6a32393b3f482ff4eccf9613a308473f->leave($__internal_ea480ae1e4481c1a03f1554044c00f6e6a32393b3f482ff4eccf9613a308473f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c93137b4f1c55ab04995f0dc62a37542c1cac6e1b6584a94e57fecfc0275e29e = $this->env->getExtension("native_profiler");
        $__internal_c93137b4f1c55ab04995f0dc62a37542c1cac6e1b6584a94e57fecfc0275e29e->enter($__internal_c93137b4f1c55ab04995f0dc62a37542c1cac6e1b6584a94e57fecfc0275e29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c93137b4f1c55ab04995f0dc62a37542c1cac6e1b6584a94e57fecfc0275e29e->leave($__internal_c93137b4f1c55ab04995f0dc62a37542c1cac6e1b6584a94e57fecfc0275e29e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d714fa9869d0b0f0cd0de0acdbad11eecc06fa4eb2a3e613338eeffc0d18bed = $this->env->getExtension("native_profiler");
        $__internal_4d714fa9869d0b0f0cd0de0acdbad11eecc06fa4eb2a3e613338eeffc0d18bed->enter($__internal_4d714fa9869d0b0f0cd0de0acdbad11eecc06fa4eb2a3e613338eeffc0d18bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4d714fa9869d0b0f0cd0de0acdbad11eecc06fa4eb2a3e613338eeffc0d18bed->leave($__internal_4d714fa9869d0b0f0cd0de0acdbad11eecc06fa4eb2a3e613338eeffc0d18bed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
