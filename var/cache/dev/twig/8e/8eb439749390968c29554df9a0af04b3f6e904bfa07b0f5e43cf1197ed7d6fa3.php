<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_8ea3e36c302fe83a800ec042e8aef968285147964bc393a29a1ad268c5fb289e extends Twig_Template
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
        $__internal_8eb0f85a7868d41c9a9a0048260d47511470226c65c84fb762303f8a424650d2 = $this->env->getExtension("native_profiler");
        $__internal_8eb0f85a7868d41c9a9a0048260d47511470226c65c84fb762303f8a424650d2->enter($__internal_8eb0f85a7868d41c9a9a0048260d47511470226c65c84fb762303f8a424650d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8eb0f85a7868d41c9a9a0048260d47511470226c65c84fb762303f8a424650d2->leave($__internal_8eb0f85a7868d41c9a9a0048260d47511470226c65c84fb762303f8a424650d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
