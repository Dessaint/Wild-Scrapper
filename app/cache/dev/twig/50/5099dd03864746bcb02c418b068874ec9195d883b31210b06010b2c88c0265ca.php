<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b775f24a74745cd3d2a478dc85d8b80211852356faf36886a890b3f8609c22dd extends Twig_Template
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
        $__internal_f714322a68c7ebb80bdffbb2e70f7e97c1f35fdc32bc9256d6d84ec206549465 = $this->env->getExtension("native_profiler");
        $__internal_f714322a68c7ebb80bdffbb2e70f7e97c1f35fdc32bc9256d6d84ec206549465->enter($__internal_f714322a68c7ebb80bdffbb2e70f7e97c1f35fdc32bc9256d6d84ec206549465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f714322a68c7ebb80bdffbb2e70f7e97c1f35fdc32bc9256d6d84ec206549465->leave($__internal_f714322a68c7ebb80bdffbb2e70f7e97c1f35fdc32bc9256d6d84ec206549465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
