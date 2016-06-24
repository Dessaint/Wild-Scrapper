<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_14940ce8f4c853e7142e5da2af19d5d506d117f3d339263af59a92645877ce92 extends Twig_Template
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
        $__internal_bc1442d439e0124c1ced3bd217ba8d56b6510ddfc71dc165ad26dafc6a4157d8 = $this->env->getExtension("native_profiler");
        $__internal_bc1442d439e0124c1ced3bd217ba8d56b6510ddfc71dc165ad26dafc6a4157d8->enter($__internal_bc1442d439e0124c1ced3bd217ba8d56b6510ddfc71dc165ad26dafc6a4157d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bc1442d439e0124c1ced3bd217ba8d56b6510ddfc71dc165ad26dafc6a4157d8->leave($__internal_bc1442d439e0124c1ced3bd217ba8d56b6510ddfc71dc165ad26dafc6a4157d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
