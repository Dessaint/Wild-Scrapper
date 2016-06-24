<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5b2ecb38707d655d576fdf98b0021f6b6c51034ecabef341d1586a484c545cf7 extends Twig_Template
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
        $__internal_73de62ed562737c477c290ca952f22a3a3ffed4bd1ee7925253f5df43e5a10ab = $this->env->getExtension("native_profiler");
        $__internal_73de62ed562737c477c290ca952f22a3a3ffed4bd1ee7925253f5df43e5a10ab->enter($__internal_73de62ed562737c477c290ca952f22a3a3ffed4bd1ee7925253f5df43e5a10ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_73de62ed562737c477c290ca952f22a3a3ffed4bd1ee7925253f5df43e5a10ab->leave($__internal_73de62ed562737c477c290ca952f22a3a3ffed4bd1ee7925253f5df43e5a10ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
