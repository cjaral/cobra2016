<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_10730c52f714ee9fe32b0074e5b12cac55abf2d84984b3f1131c753b2e961187 extends Twig_Template
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
        $__internal_94c6132362a6f3eef1ff5c3ac88f8506f36f97e25fcacb9467437d3120ecb265 = $this->env->getExtension("native_profiler");
        $__internal_94c6132362a6f3eef1ff5c3ac88f8506f36f97e25fcacb9467437d3120ecb265->enter($__internal_94c6132362a6f3eef1ff5c3ac88f8506f36f97e25fcacb9467437d3120ecb265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_94c6132362a6f3eef1ff5c3ac88f8506f36f97e25fcacb9467437d3120ecb265->leave($__internal_94c6132362a6f3eef1ff5c3ac88f8506f36f97e25fcacb9467437d3120ecb265_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
