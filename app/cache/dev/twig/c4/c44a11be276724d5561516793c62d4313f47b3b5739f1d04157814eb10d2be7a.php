<?php

/* base.html.twig */
class __TwigTemplate_298a78fc1fa4594b21fad825944c07d4b5992f086e48dd3f1756392084685a2a extends Twig_Template
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
        $__internal_73dfacca94d3d94533c897b0a87f60c213698b61528442da025f08829d873545 = $this->env->getExtension("native_profiler");
        $__internal_73dfacca94d3d94533c897b0a87f60c213698b61528442da025f08829d873545->enter($__internal_73dfacca94d3d94533c897b0a87f60c213698b61528442da025f08829d873545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_73dfacca94d3d94533c897b0a87f60c213698b61528442da025f08829d873545->leave($__internal_73dfacca94d3d94533c897b0a87f60c213698b61528442da025f08829d873545_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db590fce811b0c115b2372346429305b4a76c60d042c7f4daeeb6c7c55fa1876 = $this->env->getExtension("native_profiler");
        $__internal_db590fce811b0c115b2372346429305b4a76c60d042c7f4daeeb6c7c55fa1876->enter($__internal_db590fce811b0c115b2372346429305b4a76c60d042c7f4daeeb6c7c55fa1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_db590fce811b0c115b2372346429305b4a76c60d042c7f4daeeb6c7c55fa1876->leave($__internal_db590fce811b0c115b2372346429305b4a76c60d042c7f4daeeb6c7c55fa1876_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_717dee76dc03823101a684ebe9392b600126eafd07de3e11141e3bd8b988442c = $this->env->getExtension("native_profiler");
        $__internal_717dee76dc03823101a684ebe9392b600126eafd07de3e11141e3bd8b988442c->enter($__internal_717dee76dc03823101a684ebe9392b600126eafd07de3e11141e3bd8b988442c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_717dee76dc03823101a684ebe9392b600126eafd07de3e11141e3bd8b988442c->leave($__internal_717dee76dc03823101a684ebe9392b600126eafd07de3e11141e3bd8b988442c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f2647b22eb9183426b4092a2e7f706596aa29fb995514ee4502d93d640fce84 = $this->env->getExtension("native_profiler");
        $__internal_6f2647b22eb9183426b4092a2e7f706596aa29fb995514ee4502d93d640fce84->enter($__internal_6f2647b22eb9183426b4092a2e7f706596aa29fb995514ee4502d93d640fce84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f2647b22eb9183426b4092a2e7f706596aa29fb995514ee4502d93d640fce84->leave($__internal_6f2647b22eb9183426b4092a2e7f706596aa29fb995514ee4502d93d640fce84_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07b9b291bd403a51ff676ab632500421aca03ac931d31359b3ad9e507cace0cb = $this->env->getExtension("native_profiler");
        $__internal_07b9b291bd403a51ff676ab632500421aca03ac931d31359b3ad9e507cace0cb->enter($__internal_07b9b291bd403a51ff676ab632500421aca03ac931d31359b3ad9e507cace0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_07b9b291bd403a51ff676ab632500421aca03ac931d31359b3ad9e507cace0cb->leave($__internal_07b9b291bd403a51ff676ab632500421aca03ac931d31359b3ad9e507cace0cb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
