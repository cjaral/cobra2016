<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e7aa81acac62b82d1bd177890d00d3731d6c71527705b019a4507f2cbe61269b extends Twig_Template
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
        $__internal_0d63165ab13137112d0698e9af7989e184d4d3e760bf619e8325df603994d78d = $this->env->getExtension("native_profiler");
        $__internal_0d63165ab13137112d0698e9af7989e184d4d3e760bf619e8325df603994d78d->enter($__internal_0d63165ab13137112d0698e9af7989e184d4d3e760bf619e8325df603994d78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0d63165ab13137112d0698e9af7989e184d4d3e760bf619e8325df603994d78d->leave($__internal_0d63165ab13137112d0698e9af7989e184d4d3e760bf619e8325df603994d78d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
