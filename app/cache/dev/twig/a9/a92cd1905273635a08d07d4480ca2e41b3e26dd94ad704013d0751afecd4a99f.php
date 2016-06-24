<?php

/* ::base.html.twig */
class __TwigTemplate_e0ef102051f14202898ac42548ad8cb34eb3b80ee7fc71b7bd24652b8f737dbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ab709c13cfbded9d7f7cc719657dc9750f1851d831c3406cd2381e926ad9dc6 = $this->env->getExtension("native_profiler");
        $__internal_5ab709c13cfbded9d7f7cc719657dc9750f1851d831c3406cd2381e926ad9dc6->enter($__internal_5ab709c13cfbded9d7f7cc719657dc9750f1851d831c3406cd2381e926ad9dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5ab709c13cfbded9d7f7cc719657dc9750f1851d831c3406cd2381e926ad9dc6->leave($__internal_5ab709c13cfbded9d7f7cc719657dc9750f1851d831c3406cd2381e926ad9dc6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1d6b23a979803453c6a8a5a9bb9ee6545f8ce173fdeab005387f8a29fed718f = $this->env->getExtension("native_profiler");
        $__internal_b1d6b23a979803453c6a8a5a9bb9ee6545f8ce173fdeab005387f8a29fed718f->enter($__internal_b1d6b23a979803453c6a8a5a9bb9ee6545f8ce173fdeab005387f8a29fed718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b1d6b23a979803453c6a8a5a9bb9ee6545f8ce173fdeab005387f8a29fed718f->leave($__internal_b1d6b23a979803453c6a8a5a9bb9ee6545f8ce173fdeab005387f8a29fed718f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a231fac7e2c3e6d502ec32ad84cad4e8bebc2a4fade3bde2a7f7062ed860cf91 = $this->env->getExtension("native_profiler");
        $__internal_a231fac7e2c3e6d502ec32ad84cad4e8bebc2a4fade3bde2a7f7062ed860cf91->enter($__internal_a231fac7e2c3e6d502ec32ad84cad4e8bebc2a4fade3bde2a7f7062ed860cf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a231fac7e2c3e6d502ec32ad84cad4e8bebc2a4fade3bde2a7f7062ed860cf91->leave($__internal_a231fac7e2c3e6d502ec32ad84cad4e8bebc2a4fade3bde2a7f7062ed860cf91_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18f713236f01a8133d380be9b78c8af9540e2706512bfdd77aa3dd5665414e4 = $this->env->getExtension("native_profiler");
        $__internal_f18f713236f01a8133d380be9b78c8af9540e2706512bfdd77aa3dd5665414e4->enter($__internal_f18f713236f01a8133d380be9b78c8af9540e2706512bfdd77aa3dd5665414e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f18f713236f01a8133d380be9b78c8af9540e2706512bfdd77aa3dd5665414e4->leave($__internal_f18f713236f01a8133d380be9b78c8af9540e2706512bfdd77aa3dd5665414e4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5266da7e31de0c81fde376cc62075c63ba9a295085b52150391af19fc648bf1e = $this->env->getExtension("native_profiler");
        $__internal_5266da7e31de0c81fde376cc62075c63ba9a295085b52150391af19fc648bf1e->enter($__internal_5266da7e31de0c81fde376cc62075c63ba9a295085b52150391af19fc648bf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5266da7e31de0c81fde376cc62075c63ba9a295085b52150391af19fc648bf1e->leave($__internal_5266da7e31de0c81fde376cc62075c63ba9a295085b52150391af19fc648bf1e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
