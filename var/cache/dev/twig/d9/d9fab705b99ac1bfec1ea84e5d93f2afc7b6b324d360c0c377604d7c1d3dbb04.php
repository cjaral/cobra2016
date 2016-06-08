<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ea0f85a02e9802ae6a0eccab04714d549ebd085649e7804e517f6d2c62de9c56 extends Twig_Template
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
        $__internal_2d1b75b335192c3f9f61e6d755a27602b384a4ae3440a23f8c20139e6d4854c5 = $this->env->getExtension("native_profiler");
        $__internal_2d1b75b335192c3f9f61e6d755a27602b384a4ae3440a23f8c20139e6d4854c5->enter($__internal_2d1b75b335192c3f9f61e6d755a27602b384a4ae3440a23f8c20139e6d4854c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2d1b75b335192c3f9f61e6d755a27602b384a4ae3440a23f8c20139e6d4854c5->leave($__internal_2d1b75b335192c3f9f61e6d755a27602b384a4ae3440a23f8c20139e6d4854c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
