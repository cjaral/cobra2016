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
        $__internal_f4e30136c81bb25e7800eb7427e5c39f2d8355ba7b675a8ff155f5b961a8299f = $this->env->getExtension("native_profiler");
        $__internal_f4e30136c81bb25e7800eb7427e5c39f2d8355ba7b675a8ff155f5b961a8299f->enter($__internal_f4e30136c81bb25e7800eb7427e5c39f2d8355ba7b675a8ff155f5b961a8299f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f4e30136c81bb25e7800eb7427e5c39f2d8355ba7b675a8ff155f5b961a8299f->leave($__internal_f4e30136c81bb25e7800eb7427e5c39f2d8355ba7b675a8ff155f5b961a8299f_prof);

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
