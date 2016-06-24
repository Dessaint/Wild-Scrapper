<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0680452e061d3eaa59eced6029a306ade9bc7da5b10971e2acca4d3b6578422f extends Twig_Template
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
        $__internal_556ab39781db437d8dc7918c3e1bce8e374ecd333f18d9506e670a1c1510988f = $this->env->getExtension("native_profiler");
        $__internal_556ab39781db437d8dc7918c3e1bce8e374ecd333f18d9506e670a1c1510988f->enter($__internal_556ab39781db437d8dc7918c3e1bce8e374ecd333f18d9506e670a1c1510988f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_556ab39781db437d8dc7918c3e1bce8e374ecd333f18d9506e670a1c1510988f->leave($__internal_556ab39781db437d8dc7918c3e1bce8e374ecd333f18d9506e670a1c1510988f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
