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
        $__internal_02731de35138db04c9331d321a9a0d6fc6f0869f0e7b02c8379d6e9b17e6d9ef = $this->env->getExtension("native_profiler");
        $__internal_02731de35138db04c9331d321a9a0d6fc6f0869f0e7b02c8379d6e9b17e6d9ef->enter($__internal_02731de35138db04c9331d321a9a0d6fc6f0869f0e7b02c8379d6e9b17e6d9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_02731de35138db04c9331d321a9a0d6fc6f0869f0e7b02c8379d6e9b17e6d9ef->leave($__internal_02731de35138db04c9331d321a9a0d6fc6f0869f0e7b02c8379d6e9b17e6d9ef_prof);

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
