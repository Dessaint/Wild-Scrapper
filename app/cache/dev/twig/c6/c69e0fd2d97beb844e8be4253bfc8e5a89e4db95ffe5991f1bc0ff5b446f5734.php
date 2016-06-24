<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_05d7cac0c7cc211d33e63cc48f0ec562625ce21325bf037555d2cb3e0e577489 extends Twig_Template
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
        $__internal_a1b3c8b51ecd2e03a9fa1ddb4737541a03b6f6874e754966a695702246b6cc2a = $this->env->getExtension("native_profiler");
        $__internal_a1b3c8b51ecd2e03a9fa1ddb4737541a03b6f6874e754966a695702246b6cc2a->enter($__internal_a1b3c8b51ecd2e03a9fa1ddb4737541a03b6f6874e754966a695702246b6cc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a1b3c8b51ecd2e03a9fa1ddb4737541a03b6f6874e754966a695702246b6cc2a->leave($__internal_a1b3c8b51ecd2e03a9fa1ddb4737541a03b6f6874e754966a695702246b6cc2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
