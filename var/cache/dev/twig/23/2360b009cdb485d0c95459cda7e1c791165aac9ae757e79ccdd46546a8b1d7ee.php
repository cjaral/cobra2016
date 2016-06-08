<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d80f6a10004116969490b942e254aeb4e23da76e741abb1a211114494bde589b extends Twig_Template
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
        $__internal_2d3b961cb47112763970262ed5c5eb9973b7681ce0bf005ab9883dd213d2aae7 = $this->env->getExtension("native_profiler");
        $__internal_2d3b961cb47112763970262ed5c5eb9973b7681ce0bf005ab9883dd213d2aae7->enter($__internal_2d3b961cb47112763970262ed5c5eb9973b7681ce0bf005ab9883dd213d2aae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2d3b961cb47112763970262ed5c5eb9973b7681ce0bf005ab9883dd213d2aae7->leave($__internal_2d3b961cb47112763970262ed5c5eb9973b7681ce0bf005ab9883dd213d2aae7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
