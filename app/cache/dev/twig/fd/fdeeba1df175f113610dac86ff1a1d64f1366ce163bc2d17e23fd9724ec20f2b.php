<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4ef6b0fef2739d5a607852c6f041d32819276a2889990bbccdf79d1e65eb7fc6 extends Twig_Template
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
        $__internal_cb6cb2a6ad8420209f6de356bba962a8afd963a8c2aa6170dbd9788117f68b50 = $this->env->getExtension("native_profiler");
        $__internal_cb6cb2a6ad8420209f6de356bba962a8afd963a8c2aa6170dbd9788117f68b50->enter($__internal_cb6cb2a6ad8420209f6de356bba962a8afd963a8c2aa6170dbd9788117f68b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cb6cb2a6ad8420209f6de356bba962a8afd963a8c2aa6170dbd9788117f68b50->leave($__internal_cb6cb2a6ad8420209f6de356bba962a8afd963a8c2aa6170dbd9788117f68b50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
