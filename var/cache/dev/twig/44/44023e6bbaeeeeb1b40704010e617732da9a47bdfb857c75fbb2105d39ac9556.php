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
        $__internal_bb57fe8445248baccd9b2514e27ca7f1ca61acc8abc0a859cdcae2312fcc149f = $this->env->getExtension("native_profiler");
        $__internal_bb57fe8445248baccd9b2514e27ca7f1ca61acc8abc0a859cdcae2312fcc149f->enter($__internal_bb57fe8445248baccd9b2514e27ca7f1ca61acc8abc0a859cdcae2312fcc149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bb57fe8445248baccd9b2514e27ca7f1ca61acc8abc0a859cdcae2312fcc149f->leave($__internal_bb57fe8445248baccd9b2514e27ca7f1ca61acc8abc0a859cdcae2312fcc149f_prof);

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
