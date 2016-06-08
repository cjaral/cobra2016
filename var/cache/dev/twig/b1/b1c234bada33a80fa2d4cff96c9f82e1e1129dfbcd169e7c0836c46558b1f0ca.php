<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e348c1dcb04e904bd759a997d2f9a1623cc7224314803a54453c087885b9a226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36024099b4bbaac233345a9ce29bf11e33804ded32305ade43bff8de5f9a5ee2 = $this->env->getExtension("native_profiler");
        $__internal_36024099b4bbaac233345a9ce29bf11e33804ded32305ade43bff8de5f9a5ee2->enter($__internal_36024099b4bbaac233345a9ce29bf11e33804ded32305ade43bff8de5f9a5ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_36024099b4bbaac233345a9ce29bf11e33804ded32305ade43bff8de5f9a5ee2->leave($__internal_36024099b4bbaac233345a9ce29bf11e33804ded32305ade43bff8de5f9a5ee2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c377c4d46e74c7719f1e5fac7681693dc8ced2b31b0a19ef0a57f187cd75a115 = $this->env->getExtension("native_profiler");
        $__internal_c377c4d46e74c7719f1e5fac7681693dc8ced2b31b0a19ef0a57f187cd75a115->enter($__internal_c377c4d46e74c7719f1e5fac7681693dc8ced2b31b0a19ef0a57f187cd75a115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c377c4d46e74c7719f1e5fac7681693dc8ced2b31b0a19ef0a57f187cd75a115->leave($__internal_c377c4d46e74c7719f1e5fac7681693dc8ced2b31b0a19ef0a57f187cd75a115_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
