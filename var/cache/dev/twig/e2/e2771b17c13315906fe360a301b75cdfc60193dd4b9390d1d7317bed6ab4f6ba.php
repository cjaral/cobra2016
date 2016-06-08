<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6af33097e9604ca3a5036d4d6f443f9a92754a9a9ae4446908ec23edecb33bea extends Twig_Template
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
        $__internal_32577996733a99297d60977fcab61833ea474c9fa145e67fe02eb10770554b9c = $this->env->getExtension("native_profiler");
        $__internal_32577996733a99297d60977fcab61833ea474c9fa145e67fe02eb10770554b9c->enter($__internal_32577996733a99297d60977fcab61833ea474c9fa145e67fe02eb10770554b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_32577996733a99297d60977fcab61833ea474c9fa145e67fe02eb10770554b9c->leave($__internal_32577996733a99297d60977fcab61833ea474c9fa145e67fe02eb10770554b9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
