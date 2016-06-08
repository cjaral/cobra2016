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
        $__internal_83b3b8af7c2f1914b4ddd2fbe6560e20796511213b9b9f8bcdd0c87562eda490 = $this->env->getExtension("native_profiler");
        $__internal_83b3b8af7c2f1914b4ddd2fbe6560e20796511213b9b9f8bcdd0c87562eda490->enter($__internal_83b3b8af7c2f1914b4ddd2fbe6560e20796511213b9b9f8bcdd0c87562eda490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_83b3b8af7c2f1914b4ddd2fbe6560e20796511213b9b9f8bcdd0c87562eda490->leave($__internal_83b3b8af7c2f1914b4ddd2fbe6560e20796511213b9b9f8bcdd0c87562eda490_prof);

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
