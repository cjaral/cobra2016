<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9225e113b5112c54f292b8e5b7f3964e22ca48dde5711eafb5d161b2ade5de2f extends Twig_Template
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
        $__internal_cc7b5e7461ad73dfb34cf41c1204f93163535b955a9e8b7a0f14ba9dcd31adf5 = $this->env->getExtension("native_profiler");
        $__internal_cc7b5e7461ad73dfb34cf41c1204f93163535b955a9e8b7a0f14ba9dcd31adf5->enter($__internal_cc7b5e7461ad73dfb34cf41c1204f93163535b955a9e8b7a0f14ba9dcd31adf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cc7b5e7461ad73dfb34cf41c1204f93163535b955a9e8b7a0f14ba9dcd31adf5->leave($__internal_cc7b5e7461ad73dfb34cf41c1204f93163535b955a9e8b7a0f14ba9dcd31adf5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
