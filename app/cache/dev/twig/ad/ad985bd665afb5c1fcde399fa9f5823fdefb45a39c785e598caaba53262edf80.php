<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_54c38065a8436ed6c098e1d166abaa8a9bd71e541879c2e90697fe4e419675e7 extends Twig_Template
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
        $__internal_c5f594b2975ee7f6048372ec5bc8a4a4e8028b0ad3c32c12c7296a7a0bcbba56 = $this->env->getExtension("native_profiler");
        $__internal_c5f594b2975ee7f6048372ec5bc8a4a4e8028b0ad3c32c12c7296a7a0bcbba56->enter($__internal_c5f594b2975ee7f6048372ec5bc8a4a4e8028b0ad3c32c12c7296a7a0bcbba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c5f594b2975ee7f6048372ec5bc8a4a4e8028b0ad3c32c12c7296a7a0bcbba56->leave($__internal_c5f594b2975ee7f6048372ec5bc8a4a4e8028b0ad3c32c12c7296a7a0bcbba56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
