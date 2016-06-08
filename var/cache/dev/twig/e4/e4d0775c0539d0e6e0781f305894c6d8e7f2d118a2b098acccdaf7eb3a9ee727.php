<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76ce14c2864fc4ecacf9600370f8cdb5b4a98172611fdf3c1e762550c9243cbe extends Twig_Template
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
        $__internal_3ff05db84e88c6742e798eccf520e67948c51d908c0e07e8be99eaa70acab9c7 = $this->env->getExtension("native_profiler");
        $__internal_3ff05db84e88c6742e798eccf520e67948c51d908c0e07e8be99eaa70acab9c7->enter($__internal_3ff05db84e88c6742e798eccf520e67948c51d908c0e07e8be99eaa70acab9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3ff05db84e88c6742e798eccf520e67948c51d908c0e07e8be99eaa70acab9c7->leave($__internal_3ff05db84e88c6742e798eccf520e67948c51d908c0e07e8be99eaa70acab9c7_prof);

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
