<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_540856e3d7c630eb99f5b5ab9a18b052fe8b81ea18abf3e8f3b0a57c6f69c49d extends Twig_Template
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
        $__internal_fc7ff740ccf15ab55591232c365a4d0f391b10243134f78775727389601db113 = $this->env->getExtension("native_profiler");
        $__internal_fc7ff740ccf15ab55591232c365a4d0f391b10243134f78775727389601db113->enter($__internal_fc7ff740ccf15ab55591232c365a4d0f391b10243134f78775727389601db113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fc7ff740ccf15ab55591232c365a4d0f391b10243134f78775727389601db113->leave($__internal_fc7ff740ccf15ab55591232c365a4d0f391b10243134f78775727389601db113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
