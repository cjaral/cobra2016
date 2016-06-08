<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1082b262c7c335ef40efea8b57b9b234e111ee08ecbeedfe8205c8962cbaac07 extends Twig_Template
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
        $__internal_255862f1701654424b46c00b46c076076a13b17a50380e78462256fa3d651a4c = $this->env->getExtension("native_profiler");
        $__internal_255862f1701654424b46c00b46c076076a13b17a50380e78462256fa3d651a4c->enter($__internal_255862f1701654424b46c00b46c076076a13b17a50380e78462256fa3d651a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_255862f1701654424b46c00b46c076076a13b17a50380e78462256fa3d651a4c->leave($__internal_255862f1701654424b46c00b46c076076a13b17a50380e78462256fa3d651a4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
