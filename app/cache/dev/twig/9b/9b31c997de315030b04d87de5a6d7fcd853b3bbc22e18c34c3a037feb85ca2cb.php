<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1103f7987effadbf9e95caa9ab2ce14ebd0b1e52973fcc51f20dffaf9608f7c3 extends Twig_Template
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
        $__internal_5f09691357ae4caba90fada2ecc3dce1c992463220f36cae61c71c777b957724 = $this->env->getExtension("native_profiler");
        $__internal_5f09691357ae4caba90fada2ecc3dce1c992463220f36cae61c71c777b957724->enter($__internal_5f09691357ae4caba90fada2ecc3dce1c992463220f36cae61c71c777b957724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5f09691357ae4caba90fada2ecc3dce1c992463220f36cae61c71c777b957724->leave($__internal_5f09691357ae4caba90fada2ecc3dce1c992463220f36cae61c71c777b957724_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
