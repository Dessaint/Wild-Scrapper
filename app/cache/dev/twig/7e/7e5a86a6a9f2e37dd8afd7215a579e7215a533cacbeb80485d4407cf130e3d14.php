<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ad5b95765b8e74e22f849de815f527ffd58c8f70e266861d843e16ccf34abeb6 extends Twig_Template
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
        $__internal_4c62bd5921492039e03125c008a0d7008cb98606f0f5ae2d9a7fd47747d2c31c = $this->env->getExtension("native_profiler");
        $__internal_4c62bd5921492039e03125c008a0d7008cb98606f0f5ae2d9a7fd47747d2c31c->enter($__internal_4c62bd5921492039e03125c008a0d7008cb98606f0f5ae2d9a7fd47747d2c31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4c62bd5921492039e03125c008a0d7008cb98606f0f5ae2d9a7fd47747d2c31c->leave($__internal_4c62bd5921492039e03125c008a0d7008cb98606f0f5ae2d9a7fd47747d2c31c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
