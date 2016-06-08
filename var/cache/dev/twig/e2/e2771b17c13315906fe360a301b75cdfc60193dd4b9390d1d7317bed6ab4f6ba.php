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
        $__internal_d7dfd552ec4d25aaf3b7d49c9f2ece7c45d69f3f419fd821059f35d1c4cf40b8 = $this->env->getExtension("native_profiler");
        $__internal_d7dfd552ec4d25aaf3b7d49c9f2ece7c45d69f3f419fd821059f35d1c4cf40b8->enter($__internal_d7dfd552ec4d25aaf3b7d49c9f2ece7c45d69f3f419fd821059f35d1c4cf40b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d7dfd552ec4d25aaf3b7d49c9f2ece7c45d69f3f419fd821059f35d1c4cf40b8->leave($__internal_d7dfd552ec4d25aaf3b7d49c9f2ece7c45d69f3f419fd821059f35d1c4cf40b8_prof);

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
