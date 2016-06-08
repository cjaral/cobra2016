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
        $__internal_6766fca394a71cc83d5e7824bbead3b7a99418cacb5d4678856704b45ee08df3 = $this->env->getExtension("native_profiler");
        $__internal_6766fca394a71cc83d5e7824bbead3b7a99418cacb5d4678856704b45ee08df3->enter($__internal_6766fca394a71cc83d5e7824bbead3b7a99418cacb5d4678856704b45ee08df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_6766fca394a71cc83d5e7824bbead3b7a99418cacb5d4678856704b45ee08df3->leave($__internal_6766fca394a71cc83d5e7824bbead3b7a99418cacb5d4678856704b45ee08df3_prof);

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
