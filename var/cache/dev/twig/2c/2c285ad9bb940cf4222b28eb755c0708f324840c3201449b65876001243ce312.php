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
        $__internal_1d2e5f165f93bf4321652dc8ae9caae4e168135e9f8bff5599bf844ec7031f7f = $this->env->getExtension("native_profiler");
        $__internal_1d2e5f165f93bf4321652dc8ae9caae4e168135e9f8bff5599bf844ec7031f7f->enter($__internal_1d2e5f165f93bf4321652dc8ae9caae4e168135e9f8bff5599bf844ec7031f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1d2e5f165f93bf4321652dc8ae9caae4e168135e9f8bff5599bf844ec7031f7f->leave($__internal_1d2e5f165f93bf4321652dc8ae9caae4e168135e9f8bff5599bf844ec7031f7f_prof);

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
