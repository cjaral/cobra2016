<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_d0c6e8b1a46599d80358f5abf74822cb629a29ad67461c16b2b783832c5eee4e extends Twig_Template
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
        $__internal_d695cb376e49a1a61eced3ead552cb64a43318b0f9fe2bd0f211b40d8d9af37a = $this->env->getExtension("native_profiler");
        $__internal_d695cb376e49a1a61eced3ead552cb64a43318b0f9fe2bd0f211b40d8d9af37a->enter($__internal_d695cb376e49a1a61eced3ead552cb64a43318b0f9fe2bd0f211b40d8d9af37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d695cb376e49a1a61eced3ead552cb64a43318b0f9fe2bd0f211b40d8d9af37a->leave($__internal_d695cb376e49a1a61eced3ead552cb64a43318b0f9fe2bd0f211b40d8d9af37a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
