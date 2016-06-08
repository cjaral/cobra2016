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
        $__internal_8a2afe165385acf4278b01c1b561d03c66ae3e9698ac949452d3b3a4277d7021 = $this->env->getExtension("native_profiler");
        $__internal_8a2afe165385acf4278b01c1b561d03c66ae3e9698ac949452d3b3a4277d7021->enter($__internal_8a2afe165385acf4278b01c1b561d03c66ae3e9698ac949452d3b3a4277d7021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a2afe165385acf4278b01c1b561d03c66ae3e9698ac949452d3b3a4277d7021->leave($__internal_8a2afe165385acf4278b01c1b561d03c66ae3e9698ac949452d3b3a4277d7021_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_176128b35f01b06550cae12dd7b71dd2c041f30ed33529359efa86fa28308d99 = $this->env->getExtension("native_profiler");
        $__internal_176128b35f01b06550cae12dd7b71dd2c041f30ed33529359efa86fa28308d99->enter($__internal_176128b35f01b06550cae12dd7b71dd2c041f30ed33529359efa86fa28308d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_176128b35f01b06550cae12dd7b71dd2c041f30ed33529359efa86fa28308d99->leave($__internal_176128b35f01b06550cae12dd7b71dd2c041f30ed33529359efa86fa28308d99_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_413486749585127d4d6ddf5de30d0a565096d1ede7504b1a8279244f11fd7a49 = $this->env->getExtension("native_profiler");
        $__internal_413486749585127d4d6ddf5de30d0a565096d1ede7504b1a8279244f11fd7a49->enter($__internal_413486749585127d4d6ddf5de30d0a565096d1ede7504b1a8279244f11fd7a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_413486749585127d4d6ddf5de30d0a565096d1ede7504b1a8279244f11fd7a49->leave($__internal_413486749585127d4d6ddf5de30d0a565096d1ede7504b1a8279244f11fd7a49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abf763e9712893d10211bbc62014a21651ff86ead7d09b2a2f563d9588aba499 = $this->env->getExtension("native_profiler");
        $__internal_abf763e9712893d10211bbc62014a21651ff86ead7d09b2a2f563d9588aba499->enter($__internal_abf763e9712893d10211bbc62014a21651ff86ead7d09b2a2f563d9588aba499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_abf763e9712893d10211bbc62014a21651ff86ead7d09b2a2f563d9588aba499->leave($__internal_abf763e9712893d10211bbc62014a21651ff86ead7d09b2a2f563d9588aba499_prof);

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
