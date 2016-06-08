<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d98086108048ea0f4db1f075939a5fea02d91f1e430669cd9a1319fded96fbe5 extends Twig_Template
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
        $__internal_910a1c884d7d4c899c930a8eb03de67d31d0aad8d30595f9b7dc0c170e14f057 = $this->env->getExtension("native_profiler");
        $__internal_910a1c884d7d4c899c930a8eb03de67d31d0aad8d30595f9b7dc0c170e14f057->enter($__internal_910a1c884d7d4c899c930a8eb03de67d31d0aad8d30595f9b7dc0c170e14f057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_910a1c884d7d4c899c930a8eb03de67d31d0aad8d30595f9b7dc0c170e14f057->leave($__internal_910a1c884d7d4c899c930a8eb03de67d31d0aad8d30595f9b7dc0c170e14f057_prof);

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
