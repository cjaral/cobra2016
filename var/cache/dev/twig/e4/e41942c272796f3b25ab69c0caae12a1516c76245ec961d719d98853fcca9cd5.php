<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_38d7f8c37aa88ae42bfdceb2b93760476f2b7c3699b1a731f1256de329f21a93 extends Twig_Template
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
        $__internal_f0fefbd6aa5d4f703ae2a4e4d72360fdfcad6815b209bb63b240d66491e9cba1 = $this->env->getExtension("native_profiler");
        $__internal_f0fefbd6aa5d4f703ae2a4e4d72360fdfcad6815b209bb63b240d66491e9cba1->enter($__internal_f0fefbd6aa5d4f703ae2a4e4d72360fdfcad6815b209bb63b240d66491e9cba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f0fefbd6aa5d4f703ae2a4e4d72360fdfcad6815b209bb63b240d66491e9cba1->leave($__internal_f0fefbd6aa5d4f703ae2a4e4d72360fdfcad6815b209bb63b240d66491e9cba1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
