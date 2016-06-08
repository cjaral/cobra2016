<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_adb9b61aebe1f0cda3d2dd7039081a02741bbfccb557893f02c5ae81a745f6ff extends Twig_Template
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
        $__internal_86e0a950f7f7f166700e7dcc7f9f20aa325ebaa2b0e1ef2a1b24551221f2f537 = $this->env->getExtension("native_profiler");
        $__internal_86e0a950f7f7f166700e7dcc7f9f20aa325ebaa2b0e1ef2a1b24551221f2f537->enter($__internal_86e0a950f7f7f166700e7dcc7f9f20aa325ebaa2b0e1ef2a1b24551221f2f537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_86e0a950f7f7f166700e7dcc7f9f20aa325ebaa2b0e1ef2a1b24551221f2f537->leave($__internal_86e0a950f7f7f166700e7dcc7f9f20aa325ebaa2b0e1ef2a1b24551221f2f537_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
