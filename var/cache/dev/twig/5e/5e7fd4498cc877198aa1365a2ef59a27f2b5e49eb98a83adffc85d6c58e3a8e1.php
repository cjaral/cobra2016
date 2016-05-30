<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_103a7f5e567e48ff9e2cd22c95fe54b7e84ff66aa9ba97f259013ccedf71cfc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_51486998ed2e01afcd9189bd072cab95c7b010410d6859a76bf265a5d539da01 = $this->env->getExtension("native_profiler");
        $__internal_51486998ed2e01afcd9189bd072cab95c7b010410d6859a76bf265a5d539da01->enter($__internal_51486998ed2e01afcd9189bd072cab95c7b010410d6859a76bf265a5d539da01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51486998ed2e01afcd9189bd072cab95c7b010410d6859a76bf265a5d539da01->leave($__internal_51486998ed2e01afcd9189bd072cab95c7b010410d6859a76bf265a5d539da01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3627404e1ec83340a4f45afc213a5d2959a121bfafb6f690602afcdd7749170 = $this->env->getExtension("native_profiler");
        $__internal_d3627404e1ec83340a4f45afc213a5d2959a121bfafb6f690602afcdd7749170->enter($__internal_d3627404e1ec83340a4f45afc213a5d2959a121bfafb6f690602afcdd7749170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3627404e1ec83340a4f45afc213a5d2959a121bfafb6f690602afcdd7749170->leave($__internal_d3627404e1ec83340a4f45afc213a5d2959a121bfafb6f690602afcdd7749170_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9eb56b4506426690d562d6bcf2de68d3dc89d8cfa8e08cfa192a96666509b8e0 = $this->env->getExtension("native_profiler");
        $__internal_9eb56b4506426690d562d6bcf2de68d3dc89d8cfa8e08cfa192a96666509b8e0->enter($__internal_9eb56b4506426690d562d6bcf2de68d3dc89d8cfa8e08cfa192a96666509b8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9eb56b4506426690d562d6bcf2de68d3dc89d8cfa8e08cfa192a96666509b8e0->leave($__internal_9eb56b4506426690d562d6bcf2de68d3dc89d8cfa8e08cfa192a96666509b8e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64018974bbdade70bbd9f2525c098647b88dbc9c7114386150fc91feb0a858e3 = $this->env->getExtension("native_profiler");
        $__internal_64018974bbdade70bbd9f2525c098647b88dbc9c7114386150fc91feb0a858e3->enter($__internal_64018974bbdade70bbd9f2525c098647b88dbc9c7114386150fc91feb0a858e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64018974bbdade70bbd9f2525c098647b88dbc9c7114386150fc91feb0a858e3->leave($__internal_64018974bbdade70bbd9f2525c098647b88dbc9c7114386150fc91feb0a858e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
