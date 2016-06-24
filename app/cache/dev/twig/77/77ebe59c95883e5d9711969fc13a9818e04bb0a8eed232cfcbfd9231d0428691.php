<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_03d261b940bd9d71350c05293f370484d28ab5507f1b33fba724b5c1d5c1cddc extends Twig_Template
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
        $__internal_2347dfd64cacddd6212c0feed8708bb2657757b7753b98dcd1aa5f61641914dc = $this->env->getExtension("native_profiler");
        $__internal_2347dfd64cacddd6212c0feed8708bb2657757b7753b98dcd1aa5f61641914dc->enter($__internal_2347dfd64cacddd6212c0feed8708bb2657757b7753b98dcd1aa5f61641914dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2347dfd64cacddd6212c0feed8708bb2657757b7753b98dcd1aa5f61641914dc->leave($__internal_2347dfd64cacddd6212c0feed8708bb2657757b7753b98dcd1aa5f61641914dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
