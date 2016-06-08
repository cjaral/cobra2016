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
        $__internal_32470d04a31a2c2169ce88d639a1b0c6e1783c145cb6e9a8e165c824e72a5d02 = $this->env->getExtension("native_profiler");
        $__internal_32470d04a31a2c2169ce88d639a1b0c6e1783c145cb6e9a8e165c824e72a5d02->enter($__internal_32470d04a31a2c2169ce88d639a1b0c6e1783c145cb6e9a8e165c824e72a5d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32470d04a31a2c2169ce88d639a1b0c6e1783c145cb6e9a8e165c824e72a5d02->leave($__internal_32470d04a31a2c2169ce88d639a1b0c6e1783c145cb6e9a8e165c824e72a5d02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0eb7cde2fda2e3d16633d4ffe5398cf28123f022094d7d92893f76bf1a07e26 = $this->env->getExtension("native_profiler");
        $__internal_d0eb7cde2fda2e3d16633d4ffe5398cf28123f022094d7d92893f76bf1a07e26->enter($__internal_d0eb7cde2fda2e3d16633d4ffe5398cf28123f022094d7d92893f76bf1a07e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d0eb7cde2fda2e3d16633d4ffe5398cf28123f022094d7d92893f76bf1a07e26->leave($__internal_d0eb7cde2fda2e3d16633d4ffe5398cf28123f022094d7d92893f76bf1a07e26_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_224bdd473ca63ad4ff20efc058389d6f0e6f02361b88f850bb4ded41a16dd028 = $this->env->getExtension("native_profiler");
        $__internal_224bdd473ca63ad4ff20efc058389d6f0e6f02361b88f850bb4ded41a16dd028->enter($__internal_224bdd473ca63ad4ff20efc058389d6f0e6f02361b88f850bb4ded41a16dd028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_224bdd473ca63ad4ff20efc058389d6f0e6f02361b88f850bb4ded41a16dd028->leave($__internal_224bdd473ca63ad4ff20efc058389d6f0e6f02361b88f850bb4ded41a16dd028_prof);

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
