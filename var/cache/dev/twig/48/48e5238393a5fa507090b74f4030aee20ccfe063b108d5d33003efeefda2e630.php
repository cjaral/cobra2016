<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a14401588c7b78cc5b87ff380f1169a2882e7898f119140af4e262040da79c1 extends Twig_Template
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
        $__internal_cc5b42c0b3e6dcb7a8c475caf1da6b0fb078982c5877dd677b977b217c1ca621 = $this->env->getExtension("native_profiler");
        $__internal_cc5b42c0b3e6dcb7a8c475caf1da6b0fb078982c5877dd677b977b217c1ca621->enter($__internal_cc5b42c0b3e6dcb7a8c475caf1da6b0fb078982c5877dd677b977b217c1ca621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cc5b42c0b3e6dcb7a8c475caf1da6b0fb078982c5877dd677b977b217c1ca621->leave($__internal_cc5b42c0b3e6dcb7a8c475caf1da6b0fb078982c5877dd677b977b217c1ca621_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
