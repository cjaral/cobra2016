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
        $__internal_fb708281a57dac3e8f1e97078738c1bae2009f7d074e7921eac888c5882a0d83 = $this->env->getExtension("native_profiler");
        $__internal_fb708281a57dac3e8f1e97078738c1bae2009f7d074e7921eac888c5882a0d83->enter($__internal_fb708281a57dac3e8f1e97078738c1bae2009f7d074e7921eac888c5882a0d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fb708281a57dac3e8f1e97078738c1bae2009f7d074e7921eac888c5882a0d83->leave($__internal_fb708281a57dac3e8f1e97078738c1bae2009f7d074e7921eac888c5882a0d83_prof);

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
