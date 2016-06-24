<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_374f481b780b5e58692d4956a0091e1cbed94df85ee805b36ed44815124e97d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbb8b0c6cfe580c1ccb04ad191eae894cb8a2b65f9584438850e08a85b2e3030 = $this->env->getExtension("native_profiler");
        $__internal_bbb8b0c6cfe580c1ccb04ad191eae894cb8a2b65f9584438850e08a85b2e3030->enter($__internal_bbb8b0c6cfe580c1ccb04ad191eae894cb8a2b65f9584438850e08a85b2e3030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bbb8b0c6cfe580c1ccb04ad191eae894cb8a2b65f9584438850e08a85b2e3030->leave($__internal_bbb8b0c6cfe580c1ccb04ad191eae894cb8a2b65f9584438850e08a85b2e3030_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1eb11e9a95656c97993f43a826fdfb647547452fe77f98ae4f73eaa1413e19d = $this->env->getExtension("native_profiler");
        $__internal_c1eb11e9a95656c97993f43a826fdfb647547452fe77f98ae4f73eaa1413e19d->enter($__internal_c1eb11e9a95656c97993f43a826fdfb647547452fe77f98ae4f73eaa1413e19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c1eb11e9a95656c97993f43a826fdfb647547452fe77f98ae4f73eaa1413e19d->leave($__internal_c1eb11e9a95656c97993f43a826fdfb647547452fe77f98ae4f73eaa1413e19d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
