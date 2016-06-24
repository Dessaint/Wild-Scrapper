<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5095a41e287b251f458e1fd9dbdece3065cc25dc939b50a1b7c96c5d8b10d14f extends Twig_Template
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
        $__internal_c2307ead6bcbfc3e01b5d2333b5d32d11e3275066dadc32efdadbb6f9bb8306a = $this->env->getExtension("native_profiler");
        $__internal_c2307ead6bcbfc3e01b5d2333b5d32d11e3275066dadc32efdadbb6f9bb8306a->enter($__internal_c2307ead6bcbfc3e01b5d2333b5d32d11e3275066dadc32efdadbb6f9bb8306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c2307ead6bcbfc3e01b5d2333b5d32d11e3275066dadc32efdadbb6f9bb8306a->leave($__internal_c2307ead6bcbfc3e01b5d2333b5d32d11e3275066dadc32efdadbb6f9bb8306a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
