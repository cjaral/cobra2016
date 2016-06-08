<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6a3944d85ea001c6a51c2425184e2654fe268469d30d52059d0565e502ac3b2e extends Twig_Template
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
        $__internal_756cd9c55a54d6c9374d587355eeef45d17112701c69ed5f418cc9e0e865989f = $this->env->getExtension("native_profiler");
        $__internal_756cd9c55a54d6c9374d587355eeef45d17112701c69ed5f418cc9e0e865989f->enter($__internal_756cd9c55a54d6c9374d587355eeef45d17112701c69ed5f418cc9e0e865989f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_756cd9c55a54d6c9374d587355eeef45d17112701c69ed5f418cc9e0e865989f->leave($__internal_756cd9c55a54d6c9374d587355eeef45d17112701c69ed5f418cc9e0e865989f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
