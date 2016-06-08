<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_93396250df39fd0190cd528dafbc56ab264aacce6f38a73fddfadf9f84795816 extends Twig_Template
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
        $__internal_00dd13be7655f06490022dd64fcbd0d2d93548a50bca6aeb092b4c09f6c5a6a5 = $this->env->getExtension("native_profiler");
        $__internal_00dd13be7655f06490022dd64fcbd0d2d93548a50bca6aeb092b4c09f6c5a6a5->enter($__internal_00dd13be7655f06490022dd64fcbd0d2d93548a50bca6aeb092b4c09f6c5a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_00dd13be7655f06490022dd64fcbd0d2d93548a50bca6aeb092b4c09f6c5a6a5->leave($__internal_00dd13be7655f06490022dd64fcbd0d2d93548a50bca6aeb092b4c09f6c5a6a5_prof);

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
