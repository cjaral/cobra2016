<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_93b6da0732780b483aaf1342e2c60f0ea81b861231474b43f5da0360e5b9a327 extends Twig_Template
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
        $__internal_16f4d9a15b44c3db24017926ea1cad0b9a24f1e8ce1140df3ce5108d656987d1 = $this->env->getExtension("native_profiler");
        $__internal_16f4d9a15b44c3db24017926ea1cad0b9a24f1e8ce1140df3ce5108d656987d1->enter($__internal_16f4d9a15b44c3db24017926ea1cad0b9a24f1e8ce1140df3ce5108d656987d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_16f4d9a15b44c3db24017926ea1cad0b9a24f1e8ce1140df3ce5108d656987d1->leave($__internal_16f4d9a15b44c3db24017926ea1cad0b9a24f1e8ce1140df3ce5108d656987d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
