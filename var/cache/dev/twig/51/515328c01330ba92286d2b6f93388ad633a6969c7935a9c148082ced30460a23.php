<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8eb0baf109547ad46def865022f04ae63fd8d89279f33f606a4752fadebdce3d extends Twig_Template
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
        $__internal_e3dfcba4a4f1ecf1c9816b44659f537b2a79c471851fe1baa90206445f5d036e = $this->env->getExtension("native_profiler");
        $__internal_e3dfcba4a4f1ecf1c9816b44659f537b2a79c471851fe1baa90206445f5d036e->enter($__internal_e3dfcba4a4f1ecf1c9816b44659f537b2a79c471851fe1baa90206445f5d036e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e3dfcba4a4f1ecf1c9816b44659f537b2a79c471851fe1baa90206445f5d036e->leave($__internal_e3dfcba4a4f1ecf1c9816b44659f537b2a79c471851fe1baa90206445f5d036e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
