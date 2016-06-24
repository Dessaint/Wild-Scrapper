<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d564c0f1d25f56a4a4bab40ef65ecc284b71c654d1cff6acdfa0bbf2e00573a8 extends Twig_Template
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
        $__internal_b0eebf3dab3aec57fdf1414ce0f61ff2797fa53bc451898832b69912ae753c39 = $this->env->getExtension("native_profiler");
        $__internal_b0eebf3dab3aec57fdf1414ce0f61ff2797fa53bc451898832b69912ae753c39->enter($__internal_b0eebf3dab3aec57fdf1414ce0f61ff2797fa53bc451898832b69912ae753c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b0eebf3dab3aec57fdf1414ce0f61ff2797fa53bc451898832b69912ae753c39->leave($__internal_b0eebf3dab3aec57fdf1414ce0f61ff2797fa53bc451898832b69912ae753c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
