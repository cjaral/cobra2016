<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b4128c8f3f21de9bb079add076bbdfe359507a6f211521f7e57cf4b8da6b297c extends Twig_Template
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
        $__internal_7413d45a57cb7bf0e93d4bb2c6db826d0003f1093f05ae16258a681fdb752d53 = $this->env->getExtension("native_profiler");
        $__internal_7413d45a57cb7bf0e93d4bb2c6db826d0003f1093f05ae16258a681fdb752d53->enter($__internal_7413d45a57cb7bf0e93d4bb2c6db826d0003f1093f05ae16258a681fdb752d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7413d45a57cb7bf0e93d4bb2c6db826d0003f1093f05ae16258a681fdb752d53->leave($__internal_7413d45a57cb7bf0e93d4bb2c6db826d0003f1093f05ae16258a681fdb752d53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
