<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_52080ea610fefc8a7e49b2c7b35d3e179dc084597f5f62b4ee665f87c34b6882 extends Twig_Template
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
        $__internal_5d0e1226d8ccbc7033da8ea68a2632c75a809fa9fce0c80d35343ab4128b3890 = $this->env->getExtension("native_profiler");
        $__internal_5d0e1226d8ccbc7033da8ea68a2632c75a809fa9fce0c80d35343ab4128b3890->enter($__internal_5d0e1226d8ccbc7033da8ea68a2632c75a809fa9fce0c80d35343ab4128b3890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5d0e1226d8ccbc7033da8ea68a2632c75a809fa9fce0c80d35343ab4128b3890->leave($__internal_5d0e1226d8ccbc7033da8ea68a2632c75a809fa9fce0c80d35343ab4128b3890_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
