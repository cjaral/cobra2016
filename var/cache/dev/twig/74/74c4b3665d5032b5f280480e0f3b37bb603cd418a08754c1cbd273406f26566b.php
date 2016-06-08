<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cbcf790a8e40045ceb166aae4643dcd01d8fa279bcce7e826f8f0747e5d26db1 extends Twig_Template
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
        $__internal_d2318c04bf0e54e71416ad2e6a0b722196fe17f680bf0b88a0b69cb2ce1fa704 = $this->env->getExtension("native_profiler");
        $__internal_d2318c04bf0e54e71416ad2e6a0b722196fe17f680bf0b88a0b69cb2ce1fa704->enter($__internal_d2318c04bf0e54e71416ad2e6a0b722196fe17f680bf0b88a0b69cb2ce1fa704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d2318c04bf0e54e71416ad2e6a0b722196fe17f680bf0b88a0b69cb2ce1fa704->leave($__internal_d2318c04bf0e54e71416ad2e6a0b722196fe17f680bf0b88a0b69cb2ce1fa704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
