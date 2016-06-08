<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4c44c2b5b9fd01f0631b58debb849d1fa03c8ad28dec55c98659039d995ea286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_506d3848a48abf82710fdd12b8fb30ab0e95ba02c8e5d20666753007687eb83c = $this->env->getExtension("native_profiler");
        $__internal_506d3848a48abf82710fdd12b8fb30ab0e95ba02c8e5d20666753007687eb83c->enter($__internal_506d3848a48abf82710fdd12b8fb30ab0e95ba02c8e5d20666753007687eb83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_506d3848a48abf82710fdd12b8fb30ab0e95ba02c8e5d20666753007687eb83c->leave($__internal_506d3848a48abf82710fdd12b8fb30ab0e95ba02c8e5d20666753007687eb83c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f0de05e023b9c71dc013fb289c7fff202779260144f7f5fc85e9939d1ee8e9f = $this->env->getExtension("native_profiler");
        $__internal_2f0de05e023b9c71dc013fb289c7fff202779260144f7f5fc85e9939d1ee8e9f->enter($__internal_2f0de05e023b9c71dc013fb289c7fff202779260144f7f5fc85e9939d1ee8e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2f0de05e023b9c71dc013fb289c7fff202779260144f7f5fc85e9939d1ee8e9f->leave($__internal_2f0de05e023b9c71dc013fb289c7fff202779260144f7f5fc85e9939d1ee8e9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c625ff5f8b4b68805c1ba236bb05fc5ec92f8f98e4fac6647e2077964ae7f47 = $this->env->getExtension("native_profiler");
        $__internal_9c625ff5f8b4b68805c1ba236bb05fc5ec92f8f98e4fac6647e2077964ae7f47->enter($__internal_9c625ff5f8b4b68805c1ba236bb05fc5ec92f8f98e4fac6647e2077964ae7f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9c625ff5f8b4b68805c1ba236bb05fc5ec92f8f98e4fac6647e2077964ae7f47->leave($__internal_9c625ff5f8b4b68805c1ba236bb05fc5ec92f8f98e4fac6647e2077964ae7f47_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
