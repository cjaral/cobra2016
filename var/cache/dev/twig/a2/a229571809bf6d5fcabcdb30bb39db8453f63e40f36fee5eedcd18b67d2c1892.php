<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ad98de044fd2f67214c7b34b745b43e4d5d2d8ef6e0e9a867cf22d79fd2dff3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52bbe655ac5539ffc04a630920b8cb5c5c9cd4a78d09809ad5f03cb8e09117a1 = $this->env->getExtension("native_profiler");
        $__internal_52bbe655ac5539ffc04a630920b8cb5c5c9cd4a78d09809ad5f03cb8e09117a1->enter($__internal_52bbe655ac5539ffc04a630920b8cb5c5c9cd4a78d09809ad5f03cb8e09117a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bbe655ac5539ffc04a630920b8cb5c5c9cd4a78d09809ad5f03cb8e09117a1->leave($__internal_52bbe655ac5539ffc04a630920b8cb5c5c9cd4a78d09809ad5f03cb8e09117a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7eecc39f1bcddc3749700338e076df3dfd5e8e2f016ba89fa88a0d5b56a8573a = $this->env->getExtension("native_profiler");
        $__internal_7eecc39f1bcddc3749700338e076df3dfd5e8e2f016ba89fa88a0d5b56a8573a->enter($__internal_7eecc39f1bcddc3749700338e076df3dfd5e8e2f016ba89fa88a0d5b56a8573a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7eecc39f1bcddc3749700338e076df3dfd5e8e2f016ba89fa88a0d5b56a8573a->leave($__internal_7eecc39f1bcddc3749700338e076df3dfd5e8e2f016ba89fa88a0d5b56a8573a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef980bf0c944f2d92e7e5c40e9929aa404f25f2f524ee30df3cf83594428136d = $this->env->getExtension("native_profiler");
        $__internal_ef980bf0c944f2d92e7e5c40e9929aa404f25f2f524ee30df3cf83594428136d->enter($__internal_ef980bf0c944f2d92e7e5c40e9929aa404f25f2f524ee30df3cf83594428136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef980bf0c944f2d92e7e5c40e9929aa404f25f2f524ee30df3cf83594428136d->leave($__internal_ef980bf0c944f2d92e7e5c40e9929aa404f25f2f524ee30df3cf83594428136d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f90487b82caa57f73b71335c7aadd66a421c95027b37e03c407213c156273068 = $this->env->getExtension("native_profiler");
        $__internal_f90487b82caa57f73b71335c7aadd66a421c95027b37e03c407213c156273068->enter($__internal_f90487b82caa57f73b71335c7aadd66a421c95027b37e03c407213c156273068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f90487b82caa57f73b71335c7aadd66a421c95027b37e03c407213c156273068->leave($__internal_f90487b82caa57f73b71335c7aadd66a421c95027b37e03c407213c156273068_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
