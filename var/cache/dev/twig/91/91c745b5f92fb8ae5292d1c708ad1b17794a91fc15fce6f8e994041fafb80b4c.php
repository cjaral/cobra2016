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
        $__internal_43c9d4f1d3ab8f570d176333b6c23f4c11cf2ba162a082cba5226380a37a4d20 = $this->env->getExtension("native_profiler");
        $__internal_43c9d4f1d3ab8f570d176333b6c23f4c11cf2ba162a082cba5226380a37a4d20->enter($__internal_43c9d4f1d3ab8f570d176333b6c23f4c11cf2ba162a082cba5226380a37a4d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_43c9d4f1d3ab8f570d176333b6c23f4c11cf2ba162a082cba5226380a37a4d20->leave($__internal_43c9d4f1d3ab8f570d176333b6c23f4c11cf2ba162a082cba5226380a37a4d20_prof);

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
