<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ad98de044fd2f67214c7b34b745b43e4d5d2d8ef6e0e9a867cf22d79fd2dff3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_f6ff70922ef5c1f09e54f313d51c502c25b94be504ae1001308f7d70b6273b58 = $this->env->getExtension("native_profiler");
        $__internal_f6ff70922ef5c1f09e54f313d51c502c25b94be504ae1001308f7d70b6273b58->enter($__internal_f6ff70922ef5c1f09e54f313d51c502c25b94be504ae1001308f7d70b6273b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ff70922ef5c1f09e54f313d51c502c25b94be504ae1001308f7d70b6273b58->leave($__internal_f6ff70922ef5c1f09e54f313d51c502c25b94be504ae1001308f7d70b6273b58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2deb1e646a409e3716c67d0262254263d9e26d02e0d85e41212f36d0016859d = $this->env->getExtension("native_profiler");
        $__internal_f2deb1e646a409e3716c67d0262254263d9e26d02e0d85e41212f36d0016859d->enter($__internal_f2deb1e646a409e3716c67d0262254263d9e26d02e0d85e41212f36d0016859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2deb1e646a409e3716c67d0262254263d9e26d02e0d85e41212f36d0016859d->leave($__internal_f2deb1e646a409e3716c67d0262254263d9e26d02e0d85e41212f36d0016859d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df07d9c349f1301c8f97f752eaddef12d28b98b82b9a47cad9d95683844718b0 = $this->env->getExtension("native_profiler");
        $__internal_df07d9c349f1301c8f97f752eaddef12d28b98b82b9a47cad9d95683844718b0->enter($__internal_df07d9c349f1301c8f97f752eaddef12d28b98b82b9a47cad9d95683844718b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_df07d9c349f1301c8f97f752eaddef12d28b98b82b9a47cad9d95683844718b0->leave($__internal_df07d9c349f1301c8f97f752eaddef12d28b98b82b9a47cad9d95683844718b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bb482d58e6fe01c6603504908de5043574f7d601f6c8e4592faca4330dd09f4 = $this->env->getExtension("native_profiler");
        $__internal_2bb482d58e6fe01c6603504908de5043574f7d601f6c8e4592faca4330dd09f4->enter($__internal_2bb482d58e6fe01c6603504908de5043574f7d601f6c8e4592faca4330dd09f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2bb482d58e6fe01c6603504908de5043574f7d601f6c8e4592faca4330dd09f4->leave($__internal_2bb482d58e6fe01c6603504908de5043574f7d601f6c8e4592faca4330dd09f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
