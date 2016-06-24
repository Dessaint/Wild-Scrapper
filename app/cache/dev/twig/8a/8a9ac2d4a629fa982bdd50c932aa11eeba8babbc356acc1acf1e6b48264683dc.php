<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b00a8dab8f5151e9b7d58c9456be464063761d40a39399059899b73f34914967 extends Twig_Template
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
        $__internal_f4cf305d9f334bf0f2947dbdc5eba82b8b225232bd2e7e7db666cf0070e0ece4 = $this->env->getExtension("native_profiler");
        $__internal_f4cf305d9f334bf0f2947dbdc5eba82b8b225232bd2e7e7db666cf0070e0ece4->enter($__internal_f4cf305d9f334bf0f2947dbdc5eba82b8b225232bd2e7e7db666cf0070e0ece4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f4cf305d9f334bf0f2947dbdc5eba82b8b225232bd2e7e7db666cf0070e0ece4->leave($__internal_f4cf305d9f334bf0f2947dbdc5eba82b8b225232bd2e7e7db666cf0070e0ece4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
