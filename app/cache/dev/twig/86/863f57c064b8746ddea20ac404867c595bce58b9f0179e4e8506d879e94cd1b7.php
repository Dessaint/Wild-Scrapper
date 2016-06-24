<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7f1c4c14308fcd87e3cd09f61a97054fe3dd051f263739e3819ddf81b4ca277d extends Twig_Template
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
        $__internal_18b135896eb1966e54a8915056d4446d54b53ff963d124f5f1e93dc0ccf6fc5f = $this->env->getExtension("native_profiler");
        $__internal_18b135896eb1966e54a8915056d4446d54b53ff963d124f5f1e93dc0ccf6fc5f->enter($__internal_18b135896eb1966e54a8915056d4446d54b53ff963d124f5f1e93dc0ccf6fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_18b135896eb1966e54a8915056d4446d54b53ff963d124f5f1e93dc0ccf6fc5f->leave($__internal_18b135896eb1966e54a8915056d4446d54b53ff963d124f5f1e93dc0ccf6fc5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
