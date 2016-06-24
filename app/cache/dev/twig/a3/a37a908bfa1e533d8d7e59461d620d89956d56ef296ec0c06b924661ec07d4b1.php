<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ba8e0eddd07c07cefdbac4216d467d5f29246bad6158d259cdd3d517a6315aba extends Twig_Template
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
        $__internal_f937fee5d7dd452c09211200d02b24e5a85da60591986da73db4e0ed1279782a = $this->env->getExtension("native_profiler");
        $__internal_f937fee5d7dd452c09211200d02b24e5a85da60591986da73db4e0ed1279782a->enter($__internal_f937fee5d7dd452c09211200d02b24e5a85da60591986da73db4e0ed1279782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f937fee5d7dd452c09211200d02b24e5a85da60591986da73db4e0ed1279782a->leave($__internal_f937fee5d7dd452c09211200d02b24e5a85da60591986da73db4e0ed1279782a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
