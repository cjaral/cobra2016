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
        $__internal_efa58bf08ceca68efcacb09e5202166c00d4b68b85f7da8f5365e95e114667c0 = $this->env->getExtension("native_profiler");
        $__internal_efa58bf08ceca68efcacb09e5202166c00d4b68b85f7da8f5365e95e114667c0->enter($__internal_efa58bf08ceca68efcacb09e5202166c00d4b68b85f7da8f5365e95e114667c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa58bf08ceca68efcacb09e5202166c00d4b68b85f7da8f5365e95e114667c0->leave($__internal_efa58bf08ceca68efcacb09e5202166c00d4b68b85f7da8f5365e95e114667c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f929fcc08eebbb511b83f824d767fa61af5d105403e64b965d202a68336534ec = $this->env->getExtension("native_profiler");
        $__internal_f929fcc08eebbb511b83f824d767fa61af5d105403e64b965d202a68336534ec->enter($__internal_f929fcc08eebbb511b83f824d767fa61af5d105403e64b965d202a68336534ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f929fcc08eebbb511b83f824d767fa61af5d105403e64b965d202a68336534ec->leave($__internal_f929fcc08eebbb511b83f824d767fa61af5d105403e64b965d202a68336534ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fa5e8b6a517178b0c28f551b7e2e408ce53670ca230b4fb32697ae858df1bd0 = $this->env->getExtension("native_profiler");
        $__internal_8fa5e8b6a517178b0c28f551b7e2e408ce53670ca230b4fb32697ae858df1bd0->enter($__internal_8fa5e8b6a517178b0c28f551b7e2e408ce53670ca230b4fb32697ae858df1bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8fa5e8b6a517178b0c28f551b7e2e408ce53670ca230b4fb32697ae858df1bd0->leave($__internal_8fa5e8b6a517178b0c28f551b7e2e408ce53670ca230b4fb32697ae858df1bd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6019d1f4be6c7c2b977e3701bede10137460e584a0f88c3a4812df60084d250d = $this->env->getExtension("native_profiler");
        $__internal_6019d1f4be6c7c2b977e3701bede10137460e584a0f88c3a4812df60084d250d->enter($__internal_6019d1f4be6c7c2b977e3701bede10137460e584a0f88c3a4812df60084d250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6019d1f4be6c7c2b977e3701bede10137460e584a0f88c3a4812df60084d250d->leave($__internal_6019d1f4be6c7c2b977e3701bede10137460e584a0f88c3a4812df60084d250d_prof);

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
