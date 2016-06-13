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
        $__internal_b09167aed5ecfac9693b31a6a8bb5e67fd0968c34c957e208082023aaf959a38 = $this->env->getExtension("native_profiler");
        $__internal_b09167aed5ecfac9693b31a6a8bb5e67fd0968c34c957e208082023aaf959a38->enter($__internal_b09167aed5ecfac9693b31a6a8bb5e67fd0968c34c957e208082023aaf959a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09167aed5ecfac9693b31a6a8bb5e67fd0968c34c957e208082023aaf959a38->leave($__internal_b09167aed5ecfac9693b31a6a8bb5e67fd0968c34c957e208082023aaf959a38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10ed8ca7046b70d936c797c807daafe622e954c7960a1700f2827b7ae1857515 = $this->env->getExtension("native_profiler");
        $__internal_10ed8ca7046b70d936c797c807daafe622e954c7960a1700f2827b7ae1857515->enter($__internal_10ed8ca7046b70d936c797c807daafe622e954c7960a1700f2827b7ae1857515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10ed8ca7046b70d936c797c807daafe622e954c7960a1700f2827b7ae1857515->leave($__internal_10ed8ca7046b70d936c797c807daafe622e954c7960a1700f2827b7ae1857515_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a76ad64e7bb757db1bb3ccfa48ebed53f16b59a38b9e58e8aafcd82b5a359b8 = $this->env->getExtension("native_profiler");
        $__internal_9a76ad64e7bb757db1bb3ccfa48ebed53f16b59a38b9e58e8aafcd82b5a359b8->enter($__internal_9a76ad64e7bb757db1bb3ccfa48ebed53f16b59a38b9e58e8aafcd82b5a359b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a76ad64e7bb757db1bb3ccfa48ebed53f16b59a38b9e58e8aafcd82b5a359b8->leave($__internal_9a76ad64e7bb757db1bb3ccfa48ebed53f16b59a38b9e58e8aafcd82b5a359b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08c54a4a3562acf6bccf3da855186d1c019a7eb7c9cf0c958d9a78945cf8cc3b = $this->env->getExtension("native_profiler");
        $__internal_08c54a4a3562acf6bccf3da855186d1c019a7eb7c9cf0c958d9a78945cf8cc3b->enter($__internal_08c54a4a3562acf6bccf3da855186d1c019a7eb7c9cf0c958d9a78945cf8cc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08c54a4a3562acf6bccf3da855186d1c019a7eb7c9cf0c958d9a78945cf8cc3b->leave($__internal_08c54a4a3562acf6bccf3da855186d1c019a7eb7c9cf0c958d9a78945cf8cc3b_prof);

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
