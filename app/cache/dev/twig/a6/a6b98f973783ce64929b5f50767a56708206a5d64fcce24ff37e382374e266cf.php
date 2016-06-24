<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_095453fdca311ef44fc2dbac9bcc2d04e5759bc0b8793353c9f14ac6bc30dd07 extends Twig_Template
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
        $__internal_42ae0e885f707d8b3dcef0f2ec92cc91171e43fcb0d22d9018478a52e685b21a = $this->env->getExtension("native_profiler");
        $__internal_42ae0e885f707d8b3dcef0f2ec92cc91171e43fcb0d22d9018478a52e685b21a->enter($__internal_42ae0e885f707d8b3dcef0f2ec92cc91171e43fcb0d22d9018478a52e685b21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_42ae0e885f707d8b3dcef0f2ec92cc91171e43fcb0d22d9018478a52e685b21a->leave($__internal_42ae0e885f707d8b3dcef0f2ec92cc91171e43fcb0d22d9018478a52e685b21a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
