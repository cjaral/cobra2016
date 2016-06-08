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
        $__internal_f98180a7cc265eeb357ce2ed5dcf3e55cf639af58825ef104497170e8320765c = $this->env->getExtension("native_profiler");
        $__internal_f98180a7cc265eeb357ce2ed5dcf3e55cf639af58825ef104497170e8320765c->enter($__internal_f98180a7cc265eeb357ce2ed5dcf3e55cf639af58825ef104497170e8320765c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f98180a7cc265eeb357ce2ed5dcf3e55cf639af58825ef104497170e8320765c->leave($__internal_f98180a7cc265eeb357ce2ed5dcf3e55cf639af58825ef104497170e8320765c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_948afe25e5fde2785c3bb9e172c33d833e020de3d66362e1974e247159cb9817 = $this->env->getExtension("native_profiler");
        $__internal_948afe25e5fde2785c3bb9e172c33d833e020de3d66362e1974e247159cb9817->enter($__internal_948afe25e5fde2785c3bb9e172c33d833e020de3d66362e1974e247159cb9817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_948afe25e5fde2785c3bb9e172c33d833e020de3d66362e1974e247159cb9817->leave($__internal_948afe25e5fde2785c3bb9e172c33d833e020de3d66362e1974e247159cb9817_prof);

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
