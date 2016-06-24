<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3e96a8889bf3921d2168f91178e748db0f4854a50218faa2d05df29b235747ff extends Twig_Template
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
        $__internal_d739b320f3a85a4f84c9d1e38bf45d373ea5b4322b56b3da8a298748623c6038 = $this->env->getExtension("native_profiler");
        $__internal_d739b320f3a85a4f84c9d1e38bf45d373ea5b4322b56b3da8a298748623c6038->enter($__internal_d739b320f3a85a4f84c9d1e38bf45d373ea5b4322b56b3da8a298748623c6038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d739b320f3a85a4f84c9d1e38bf45d373ea5b4322b56b3da8a298748623c6038->leave($__internal_d739b320f3a85a4f84c9d1e38bf45d373ea5b4322b56b3da8a298748623c6038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
