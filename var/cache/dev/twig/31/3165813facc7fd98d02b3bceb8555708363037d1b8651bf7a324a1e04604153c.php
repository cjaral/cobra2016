<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2fc4fdc7cfb2096bc1b8292ace4d4023ae4950de8a2ee3cb45cb92af1cc099e9 extends Twig_Template
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
        $__internal_5c30c69b9435ed5e610dec674223aee3bfe74714f11ed8b546cf4196532c9c28 = $this->env->getExtension("native_profiler");
        $__internal_5c30c69b9435ed5e610dec674223aee3bfe74714f11ed8b546cf4196532c9c28->enter($__internal_5c30c69b9435ed5e610dec674223aee3bfe74714f11ed8b546cf4196532c9c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5c30c69b9435ed5e610dec674223aee3bfe74714f11ed8b546cf4196532c9c28->leave($__internal_5c30c69b9435ed5e610dec674223aee3bfe74714f11ed8b546cf4196532c9c28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
