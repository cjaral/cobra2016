<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b9bc0e658c207ebe891e080d5afc6feffb46cd117c28e090f848c3f943b78bc6 extends Twig_Template
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
        $__internal_554b8898b44f2fd121affb370c7915bbde01481112fe7ecb72d77d82f94652ed = $this->env->getExtension("native_profiler");
        $__internal_554b8898b44f2fd121affb370c7915bbde01481112fe7ecb72d77d82f94652ed->enter($__internal_554b8898b44f2fd121affb370c7915bbde01481112fe7ecb72d77d82f94652ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_554b8898b44f2fd121affb370c7915bbde01481112fe7ecb72d77d82f94652ed->leave($__internal_554b8898b44f2fd121affb370c7915bbde01481112fe7ecb72d77d82f94652ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
