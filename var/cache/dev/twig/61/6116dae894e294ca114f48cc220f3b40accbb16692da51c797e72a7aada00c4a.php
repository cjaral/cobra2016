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
        $__internal_70bb9d4df92f1ccdab2ab77aca51643f729e5bfb60cc0c2c6b8f71919e7cea01 = $this->env->getExtension("native_profiler");
        $__internal_70bb9d4df92f1ccdab2ab77aca51643f729e5bfb60cc0c2c6b8f71919e7cea01->enter($__internal_70bb9d4df92f1ccdab2ab77aca51643f729e5bfb60cc0c2c6b8f71919e7cea01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_70bb9d4df92f1ccdab2ab77aca51643f729e5bfb60cc0c2c6b8f71919e7cea01->leave($__internal_70bb9d4df92f1ccdab2ab77aca51643f729e5bfb60cc0c2c6b8f71919e7cea01_prof);

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
