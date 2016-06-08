<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c406a2f6400ed6e2d96720be9a65fe42cdb45bf06dbef405ba77297fd3ed37d9 extends Twig_Template
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
        $__internal_47d94ff91cc879fa9497d5a4dc558acbe18fff6792df10cb2c3df0f227ada0d1 = $this->env->getExtension("native_profiler");
        $__internal_47d94ff91cc879fa9497d5a4dc558acbe18fff6792df10cb2c3df0f227ada0d1->enter($__internal_47d94ff91cc879fa9497d5a4dc558acbe18fff6792df10cb2c3df0f227ada0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_47d94ff91cc879fa9497d5a4dc558acbe18fff6792df10cb2c3df0f227ada0d1->leave($__internal_47d94ff91cc879fa9497d5a4dc558acbe18fff6792df10cb2c3df0f227ada0d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
