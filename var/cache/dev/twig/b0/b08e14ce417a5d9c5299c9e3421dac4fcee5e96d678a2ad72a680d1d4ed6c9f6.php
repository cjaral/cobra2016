<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1f1ffdc6f35bd9981499c8144c2e83bb8b635362ae00b0fbc4eedbd011350a28 extends Twig_Template
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
        $__internal_ce5e1126aa44cf22a1b656fbb2585dfab3e05f7db462ed22fbd888c6ffa339e7 = $this->env->getExtension("native_profiler");
        $__internal_ce5e1126aa44cf22a1b656fbb2585dfab3e05f7db462ed22fbd888c6ffa339e7->enter($__internal_ce5e1126aa44cf22a1b656fbb2585dfab3e05f7db462ed22fbd888c6ffa339e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ce5e1126aa44cf22a1b656fbb2585dfab3e05f7db462ed22fbd888c6ffa339e7->leave($__internal_ce5e1126aa44cf22a1b656fbb2585dfab3e05f7db462ed22fbd888c6ffa339e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
