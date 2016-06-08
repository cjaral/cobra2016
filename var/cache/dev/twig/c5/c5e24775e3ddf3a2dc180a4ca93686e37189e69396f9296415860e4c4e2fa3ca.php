<?php

/* base.html.twig */
class __TwigTemplate_09f143bf899e45b870bcb204a3ea869216b8750f59ee80092c3f4fb13381fa6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c08a1d43bac100a75858104ad33d497695adba6a061eb268dc89512b308c7aa = $this->env->getExtension("native_profiler");
        $__internal_0c08a1d43bac100a75858104ad33d497695adba6a061eb268dc89512b308c7aa->enter($__internal_0c08a1d43bac100a75858104ad33d497695adba6a061eb268dc89512b308c7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0c08a1d43bac100a75858104ad33d497695adba6a061eb268dc89512b308c7aa->leave($__internal_0c08a1d43bac100a75858104ad33d497695adba6a061eb268dc89512b308c7aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5054f8a79b15a1e5f769a9e2f1e615608e5972f0fed4d8eaa2f13fb4f0fa14b = $this->env->getExtension("native_profiler");
        $__internal_d5054f8a79b15a1e5f769a9e2f1e615608e5972f0fed4d8eaa2f13fb4f0fa14b->enter($__internal_d5054f8a79b15a1e5f769a9e2f1e615608e5972f0fed4d8eaa2f13fb4f0fa14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5054f8a79b15a1e5f769a9e2f1e615608e5972f0fed4d8eaa2f13fb4f0fa14b->leave($__internal_d5054f8a79b15a1e5f769a9e2f1e615608e5972f0fed4d8eaa2f13fb4f0fa14b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a838fc3f2f523b4394e9114e03cdc12c2e1a7d8a8205ee4e8667acab6ca300cf = $this->env->getExtension("native_profiler");
        $__internal_a838fc3f2f523b4394e9114e03cdc12c2e1a7d8a8205ee4e8667acab6ca300cf->enter($__internal_a838fc3f2f523b4394e9114e03cdc12c2e1a7d8a8205ee4e8667acab6ca300cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a838fc3f2f523b4394e9114e03cdc12c2e1a7d8a8205ee4e8667acab6ca300cf->leave($__internal_a838fc3f2f523b4394e9114e03cdc12c2e1a7d8a8205ee4e8667acab6ca300cf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_10af2d351b97857356b8d0f67dbc09814f0bf6b6fbaf5cc0928cb93e3cc5e434 = $this->env->getExtension("native_profiler");
        $__internal_10af2d351b97857356b8d0f67dbc09814f0bf6b6fbaf5cc0928cb93e3cc5e434->enter($__internal_10af2d351b97857356b8d0f67dbc09814f0bf6b6fbaf5cc0928cb93e3cc5e434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10af2d351b97857356b8d0f67dbc09814f0bf6b6fbaf5cc0928cb93e3cc5e434->leave($__internal_10af2d351b97857356b8d0f67dbc09814f0bf6b6fbaf5cc0928cb93e3cc5e434_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ab313b87ce3237ef9810d8cdd65687855af7f650df355d2a81aa8911393ab81 = $this->env->getExtension("native_profiler");
        $__internal_5ab313b87ce3237ef9810d8cdd65687855af7f650df355d2a81aa8911393ab81->enter($__internal_5ab313b87ce3237ef9810d8cdd65687855af7f650df355d2a81aa8911393ab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5ab313b87ce3237ef9810d8cdd65687855af7f650df355d2a81aa8911393ab81->leave($__internal_5ab313b87ce3237ef9810d8cdd65687855af7f650df355d2a81aa8911393ab81_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
