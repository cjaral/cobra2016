<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c9a103b2b40704579d412b988a27199475a752bd5df476621f6159679cde1e2b extends Twig_Template
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
        $__internal_6c6ae260fbfeea62fb45c7c73256df81e6261cc90e0cdcd0460ce5f496074f49 = $this->env->getExtension("native_profiler");
        $__internal_6c6ae260fbfeea62fb45c7c73256df81e6261cc90e0cdcd0460ce5f496074f49->enter($__internal_6c6ae260fbfeea62fb45c7c73256df81e6261cc90e0cdcd0460ce5f496074f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6c6ae260fbfeea62fb45c7c73256df81e6261cc90e0cdcd0460ce5f496074f49->leave($__internal_6c6ae260fbfeea62fb45c7c73256df81e6261cc90e0cdcd0460ce5f496074f49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
