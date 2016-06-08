<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5a66fc46886e3c3800ece24fbbbc7addf62719293a78f7520a6de5f98d421698 extends Twig_Template
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
        $__internal_4890982421b867124a2fd0f6d98b9faa0b9e263ef8a1ff9424e5bc1a78e13446 = $this->env->getExtension("native_profiler");
        $__internal_4890982421b867124a2fd0f6d98b9faa0b9e263ef8a1ff9424e5bc1a78e13446->enter($__internal_4890982421b867124a2fd0f6d98b9faa0b9e263ef8a1ff9424e5bc1a78e13446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4890982421b867124a2fd0f6d98b9faa0b9e263ef8a1ff9424e5bc1a78e13446->leave($__internal_4890982421b867124a2fd0f6d98b9faa0b9e263ef8a1ff9424e5bc1a78e13446_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
