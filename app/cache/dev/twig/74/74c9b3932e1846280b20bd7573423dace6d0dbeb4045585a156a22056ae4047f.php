<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_49218a9aa138f6b17676f7d7d898bc55bff6643f232edb03706cbcfde7e40323 extends Twig_Template
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
        $__internal_70b8dd4e0058467ff4d8a02d90c3ba3776ce34328ea9c8caefb437e7a277504e = $this->env->getExtension("native_profiler");
        $__internal_70b8dd4e0058467ff4d8a02d90c3ba3776ce34328ea9c8caefb437e7a277504e->enter($__internal_70b8dd4e0058467ff4d8a02d90c3ba3776ce34328ea9c8caefb437e7a277504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_70b8dd4e0058467ff4d8a02d90c3ba3776ce34328ea9c8caefb437e7a277504e->leave($__internal_70b8dd4e0058467ff4d8a02d90c3ba3776ce34328ea9c8caefb437e7a277504e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
