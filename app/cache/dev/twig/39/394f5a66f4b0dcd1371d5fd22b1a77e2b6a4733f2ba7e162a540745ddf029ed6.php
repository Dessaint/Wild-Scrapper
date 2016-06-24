<?php

/* base.html.twig */
class __TwigTemplate_e3c576cf407821f870e73fd3e987b6cb664ee98229c9f4b88a57fd74f2746261 extends Twig_Template
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
        $__internal_aad4ef37433e85751610dab975cc58f9cf758961c2f840d4fc262ff11e6014a1 = $this->env->getExtension("native_profiler");
        $__internal_aad4ef37433e85751610dab975cc58f9cf758961c2f840d4fc262ff11e6014a1->enter($__internal_aad4ef37433e85751610dab975cc58f9cf758961c2f840d4fc262ff11e6014a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_aad4ef37433e85751610dab975cc58f9cf758961c2f840d4fc262ff11e6014a1->leave($__internal_aad4ef37433e85751610dab975cc58f9cf758961c2f840d4fc262ff11e6014a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea866e2c090bde5c5bcf87ebf8578b5c1ede9350a214f71303ed22a222367015 = $this->env->getExtension("native_profiler");
        $__internal_ea866e2c090bde5c5bcf87ebf8578b5c1ede9350a214f71303ed22a222367015->enter($__internal_ea866e2c090bde5c5bcf87ebf8578b5c1ede9350a214f71303ed22a222367015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea866e2c090bde5c5bcf87ebf8578b5c1ede9350a214f71303ed22a222367015->leave($__internal_ea866e2c090bde5c5bcf87ebf8578b5c1ede9350a214f71303ed22a222367015_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a7e372b10fe135ecf237e5fffe546734a1f6224bef0db82de11bba64adbb808 = $this->env->getExtension("native_profiler");
        $__internal_8a7e372b10fe135ecf237e5fffe546734a1f6224bef0db82de11bba64adbb808->enter($__internal_8a7e372b10fe135ecf237e5fffe546734a1f6224bef0db82de11bba64adbb808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8a7e372b10fe135ecf237e5fffe546734a1f6224bef0db82de11bba64adbb808->leave($__internal_8a7e372b10fe135ecf237e5fffe546734a1f6224bef0db82de11bba64adbb808_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_008b4617f8fcfa25cec86ee5939094135f459046b37a10c6f43f143ef845de24 = $this->env->getExtension("native_profiler");
        $__internal_008b4617f8fcfa25cec86ee5939094135f459046b37a10c6f43f143ef845de24->enter($__internal_008b4617f8fcfa25cec86ee5939094135f459046b37a10c6f43f143ef845de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_008b4617f8fcfa25cec86ee5939094135f459046b37a10c6f43f143ef845de24->leave($__internal_008b4617f8fcfa25cec86ee5939094135f459046b37a10c6f43f143ef845de24_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be8c03605559b382ad9b5f6f2d8839542dbbdf2c81d4a281b39f6b5c9e635aa9 = $this->env->getExtension("native_profiler");
        $__internal_be8c03605559b382ad9b5f6f2d8839542dbbdf2c81d4a281b39f6b5c9e635aa9->enter($__internal_be8c03605559b382ad9b5f6f2d8839542dbbdf2c81d4a281b39f6b5c9e635aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be8c03605559b382ad9b5f6f2d8839542dbbdf2c81d4a281b39f6b5c9e635aa9->leave($__internal_be8c03605559b382ad9b5f6f2d8839542dbbdf2c81d4a281b39f6b5c9e635aa9_prof);

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
