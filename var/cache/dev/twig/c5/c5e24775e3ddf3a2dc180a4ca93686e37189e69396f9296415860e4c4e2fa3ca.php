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
        $__internal_0f38f0a894688495e03a1eb14cdb0099f37b19eff86930b8b5e50a9672ac7c30 = $this->env->getExtension("native_profiler");
        $__internal_0f38f0a894688495e03a1eb14cdb0099f37b19eff86930b8b5e50a9672ac7c30->enter($__internal_0f38f0a894688495e03a1eb14cdb0099f37b19eff86930b8b5e50a9672ac7c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0f38f0a894688495e03a1eb14cdb0099f37b19eff86930b8b5e50a9672ac7c30->leave($__internal_0f38f0a894688495e03a1eb14cdb0099f37b19eff86930b8b5e50a9672ac7c30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ec64d18c3379c003ec73ee90b9aeddd94b568f075a49fcdadb9d53da4fbaf46 = $this->env->getExtension("native_profiler");
        $__internal_6ec64d18c3379c003ec73ee90b9aeddd94b568f075a49fcdadb9d53da4fbaf46->enter($__internal_6ec64d18c3379c003ec73ee90b9aeddd94b568f075a49fcdadb9d53da4fbaf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ec64d18c3379c003ec73ee90b9aeddd94b568f075a49fcdadb9d53da4fbaf46->leave($__internal_6ec64d18c3379c003ec73ee90b9aeddd94b568f075a49fcdadb9d53da4fbaf46_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d2e903af9ea350d9e577e7c4989abe2d6be89f9928bccf2a69ae0d6af174000 = $this->env->getExtension("native_profiler");
        $__internal_2d2e903af9ea350d9e577e7c4989abe2d6be89f9928bccf2a69ae0d6af174000->enter($__internal_2d2e903af9ea350d9e577e7c4989abe2d6be89f9928bccf2a69ae0d6af174000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2d2e903af9ea350d9e577e7c4989abe2d6be89f9928bccf2a69ae0d6af174000->leave($__internal_2d2e903af9ea350d9e577e7c4989abe2d6be89f9928bccf2a69ae0d6af174000_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_db847bee48ef26117c1cbbaf8a94ed76e434c09e3d34bc7c1d7a0193bbdbe88f = $this->env->getExtension("native_profiler");
        $__internal_db847bee48ef26117c1cbbaf8a94ed76e434c09e3d34bc7c1d7a0193bbdbe88f->enter($__internal_db847bee48ef26117c1cbbaf8a94ed76e434c09e3d34bc7c1d7a0193bbdbe88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db847bee48ef26117c1cbbaf8a94ed76e434c09e3d34bc7c1d7a0193bbdbe88f->leave($__internal_db847bee48ef26117c1cbbaf8a94ed76e434c09e3d34bc7c1d7a0193bbdbe88f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d57cfe69766aa93e84eb237dfa52df6bc0c102160eecc544366b6074a9d4cd59 = $this->env->getExtension("native_profiler");
        $__internal_d57cfe69766aa93e84eb237dfa52df6bc0c102160eecc544366b6074a9d4cd59->enter($__internal_d57cfe69766aa93e84eb237dfa52df6bc0c102160eecc544366b6074a9d4cd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d57cfe69766aa93e84eb237dfa52df6bc0c102160eecc544366b6074a9d4cd59->leave($__internal_d57cfe69766aa93e84eb237dfa52df6bc0c102160eecc544366b6074a9d4cd59_prof);

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
