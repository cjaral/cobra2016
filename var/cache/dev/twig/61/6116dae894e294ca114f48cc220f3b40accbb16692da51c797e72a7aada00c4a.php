<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fd11ed95e6166a26dab1ad418055c79e496045feb7ed6ea2c9b6cdd5f7445b38 extends Twig_Template
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
        $__internal_c836b8914475e08ed72b64d1dc352e17a7463df74955c50108f39910f3b5e10b = $this->env->getExtension("native_profiler");
        $__internal_c836b8914475e08ed72b64d1dc352e17a7463df74955c50108f39910f3b5e10b->enter($__internal_c836b8914475e08ed72b64d1dc352e17a7463df74955c50108f39910f3b5e10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c836b8914475e08ed72b64d1dc352e17a7463df74955c50108f39910f3b5e10b->leave($__internal_c836b8914475e08ed72b64d1dc352e17a7463df74955c50108f39910f3b5e10b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
