<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_df2d0635846d1869f7cc9f4c8d289ec5d0691956632d8d60d2d092fcc29960c4 extends Twig_Template
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
        $__internal_b453f0a75f9473caeaae411f1c1472bd96ea13022a778d4a88d00e27236cdc42 = $this->env->getExtension("native_profiler");
        $__internal_b453f0a75f9473caeaae411f1c1472bd96ea13022a778d4a88d00e27236cdc42->enter($__internal_b453f0a75f9473caeaae411f1c1472bd96ea13022a778d4a88d00e27236cdc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b453f0a75f9473caeaae411f1c1472bd96ea13022a778d4a88d00e27236cdc42->leave($__internal_b453f0a75f9473caeaae411f1c1472bd96ea13022a778d4a88d00e27236cdc42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
