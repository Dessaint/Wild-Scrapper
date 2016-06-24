<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c05401a4cc2339f35f13bd59065e03c88189ff3e2c0a6ccb955a31093b13bc41 extends Twig_Template
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
        $__internal_7ff4647eaf712018d73427c1b73235e6276404be18c994f636ed49c2c03bd679 = $this->env->getExtension("native_profiler");
        $__internal_7ff4647eaf712018d73427c1b73235e6276404be18c994f636ed49c2c03bd679->enter($__internal_7ff4647eaf712018d73427c1b73235e6276404be18c994f636ed49c2c03bd679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7ff4647eaf712018d73427c1b73235e6276404be18c994f636ed49c2c03bd679->leave($__internal_7ff4647eaf712018d73427c1b73235e6276404be18c994f636ed49c2c03bd679_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
