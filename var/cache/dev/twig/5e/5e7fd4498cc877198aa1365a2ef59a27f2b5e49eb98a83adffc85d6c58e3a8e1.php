<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_103a7f5e567e48ff9e2cd22c95fe54b7e84ff66aa9ba97f259013ccedf71cfc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec2a09b9090739b7d51ae92f5fdaa88b9d5e644a1497aea41265510a7816e9c3 = $this->env->getExtension("native_profiler");
        $__internal_ec2a09b9090739b7d51ae92f5fdaa88b9d5e644a1497aea41265510a7816e9c3->enter($__internal_ec2a09b9090739b7d51ae92f5fdaa88b9d5e644a1497aea41265510a7816e9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec2a09b9090739b7d51ae92f5fdaa88b9d5e644a1497aea41265510a7816e9c3->leave($__internal_ec2a09b9090739b7d51ae92f5fdaa88b9d5e644a1497aea41265510a7816e9c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_042e1de1ce1c32f12021be64da2885f846974568e364e10b55de6b79e54d2af3 = $this->env->getExtension("native_profiler");
        $__internal_042e1de1ce1c32f12021be64da2885f846974568e364e10b55de6b79e54d2af3->enter($__internal_042e1de1ce1c32f12021be64da2885f846974568e364e10b55de6b79e54d2af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_042e1de1ce1c32f12021be64da2885f846974568e364e10b55de6b79e54d2af3->leave($__internal_042e1de1ce1c32f12021be64da2885f846974568e364e10b55de6b79e54d2af3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16c8b8eb44c71f8c02fc9386b1d054085ea0a644f6de6d71d40cc9e44f73fe9d = $this->env->getExtension("native_profiler");
        $__internal_16c8b8eb44c71f8c02fc9386b1d054085ea0a644f6de6d71d40cc9e44f73fe9d->enter($__internal_16c8b8eb44c71f8c02fc9386b1d054085ea0a644f6de6d71d40cc9e44f73fe9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16c8b8eb44c71f8c02fc9386b1d054085ea0a644f6de6d71d40cc9e44f73fe9d->leave($__internal_16c8b8eb44c71f8c02fc9386b1d054085ea0a644f6de6d71d40cc9e44f73fe9d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de62e04f6b701b24fcd197e608d2efb1a313767888711a753ca00a8eef99d262 = $this->env->getExtension("native_profiler");
        $__internal_de62e04f6b701b24fcd197e608d2efb1a313767888711a753ca00a8eef99d262->enter($__internal_de62e04f6b701b24fcd197e608d2efb1a313767888711a753ca00a8eef99d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de62e04f6b701b24fcd197e608d2efb1a313767888711a753ca00a8eef99d262->leave($__internal_de62e04f6b701b24fcd197e608d2efb1a313767888711a753ca00a8eef99d262_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
