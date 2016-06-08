<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_30168a1c02867c8875008754ea7bce41d9dacef0a5cdd6f140b4a60c223e6254 extends Twig_Template
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
        $__internal_532b7ea9f9f2c07dadd071f1f2c9ccd544c6abfcf364e06c5bba06268d06436d = $this->env->getExtension("native_profiler");
        $__internal_532b7ea9f9f2c07dadd071f1f2c9ccd544c6abfcf364e06c5bba06268d06436d->enter($__internal_532b7ea9f9f2c07dadd071f1f2c9ccd544c6abfcf364e06c5bba06268d06436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_532b7ea9f9f2c07dadd071f1f2c9ccd544c6abfcf364e06c5bba06268d06436d->leave($__internal_532b7ea9f9f2c07dadd071f1f2c9ccd544c6abfcf364e06c5bba06268d06436d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
