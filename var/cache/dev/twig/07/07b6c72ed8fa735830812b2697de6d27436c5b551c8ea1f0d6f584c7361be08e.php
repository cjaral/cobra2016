<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_822f1c6c9efcfa973ab49692e20b33d061b548268768d53bcfee47c3a7a00c0b extends Twig_Template
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
        $__internal_c8c2ba62567578b3f51adfd9227fe89a5df65521cb22e1b73b78d6dadf1f1ffa = $this->env->getExtension("native_profiler");
        $__internal_c8c2ba62567578b3f51adfd9227fe89a5df65521cb22e1b73b78d6dadf1f1ffa->enter($__internal_c8c2ba62567578b3f51adfd9227fe89a5df65521cb22e1b73b78d6dadf1f1ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c8c2ba62567578b3f51adfd9227fe89a5df65521cb22e1b73b78d6dadf1f1ffa->leave($__internal_c8c2ba62567578b3f51adfd9227fe89a5df65521cb22e1b73b78d6dadf1f1ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
