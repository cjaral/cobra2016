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
        $__internal_1cd9ab259cace8294d0f75ac6a583d6be465015ce1091d2fbbba30ff647e3723 = $this->env->getExtension("native_profiler");
        $__internal_1cd9ab259cace8294d0f75ac6a583d6be465015ce1091d2fbbba30ff647e3723->enter($__internal_1cd9ab259cace8294d0f75ac6a583d6be465015ce1091d2fbbba30ff647e3723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_1cd9ab259cace8294d0f75ac6a583d6be465015ce1091d2fbbba30ff647e3723->leave($__internal_1cd9ab259cace8294d0f75ac6a583d6be465015ce1091d2fbbba30ff647e3723_prof);

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
