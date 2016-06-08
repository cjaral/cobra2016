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
        $__internal_43d6c74334085c29ec235922b37c3fbb11f91529bbb1f8b8983bbf21ad12c958 = $this->env->getExtension("native_profiler");
        $__internal_43d6c74334085c29ec235922b37c3fbb11f91529bbb1f8b8983bbf21ad12c958->enter($__internal_43d6c74334085c29ec235922b37c3fbb11f91529bbb1f8b8983bbf21ad12c958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_43d6c74334085c29ec235922b37c3fbb11f91529bbb1f8b8983bbf21ad12c958->leave($__internal_43d6c74334085c29ec235922b37c3fbb11f91529bbb1f8b8983bbf21ad12c958_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f418bf0518e24b25872228d00616f804fc4c8d791d4272f1c2bb68241fd696a = $this->env->getExtension("native_profiler");
        $__internal_8f418bf0518e24b25872228d00616f804fc4c8d791d4272f1c2bb68241fd696a->enter($__internal_8f418bf0518e24b25872228d00616f804fc4c8d791d4272f1c2bb68241fd696a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f418bf0518e24b25872228d00616f804fc4c8d791d4272f1c2bb68241fd696a->leave($__internal_8f418bf0518e24b25872228d00616f804fc4c8d791d4272f1c2bb68241fd696a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abbab386183e4dc3e10a117d9fd3d7c4177f26591bbdea8639a77a27ebd433a5 = $this->env->getExtension("native_profiler");
        $__internal_abbab386183e4dc3e10a117d9fd3d7c4177f26591bbdea8639a77a27ebd433a5->enter($__internal_abbab386183e4dc3e10a117d9fd3d7c4177f26591bbdea8639a77a27ebd433a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_abbab386183e4dc3e10a117d9fd3d7c4177f26591bbdea8639a77a27ebd433a5->leave($__internal_abbab386183e4dc3e10a117d9fd3d7c4177f26591bbdea8639a77a27ebd433a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b107ef6fa7186e1074a7835ec8bb400a555a5fb5881ce5b1cf1d43f326dab8b0 = $this->env->getExtension("native_profiler");
        $__internal_b107ef6fa7186e1074a7835ec8bb400a555a5fb5881ce5b1cf1d43f326dab8b0->enter($__internal_b107ef6fa7186e1074a7835ec8bb400a555a5fb5881ce5b1cf1d43f326dab8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b107ef6fa7186e1074a7835ec8bb400a555a5fb5881ce5b1cf1d43f326dab8b0->leave($__internal_b107ef6fa7186e1074a7835ec8bb400a555a5fb5881ce5b1cf1d43f326dab8b0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ad8bcde29c5742d29342fac47c21d3ef2ff2fe394490ca480804858c6da86d0 = $this->env->getExtension("native_profiler");
        $__internal_7ad8bcde29c5742d29342fac47c21d3ef2ff2fe394490ca480804858c6da86d0->enter($__internal_7ad8bcde29c5742d29342fac47c21d3ef2ff2fe394490ca480804858c6da86d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ad8bcde29c5742d29342fac47c21d3ef2ff2fe394490ca480804858c6da86d0->leave($__internal_7ad8bcde29c5742d29342fac47c21d3ef2ff2fe394490ca480804858c6da86d0_prof);

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
