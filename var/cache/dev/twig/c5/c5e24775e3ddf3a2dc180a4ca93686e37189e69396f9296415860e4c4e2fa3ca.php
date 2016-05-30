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
        $__internal_596bfaad63147fbea0e94790f30debf259dbc8db5bc4d79f603027b59b556e3e = $this->env->getExtension("native_profiler");
        $__internal_596bfaad63147fbea0e94790f30debf259dbc8db5bc4d79f603027b59b556e3e->enter($__internal_596bfaad63147fbea0e94790f30debf259dbc8db5bc4d79f603027b59b556e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_596bfaad63147fbea0e94790f30debf259dbc8db5bc4d79f603027b59b556e3e->leave($__internal_596bfaad63147fbea0e94790f30debf259dbc8db5bc4d79f603027b59b556e3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_788fa16ae0a8a6cfc787955debd666c29daa78012acddd4fc05476459b99dcdc = $this->env->getExtension("native_profiler");
        $__internal_788fa16ae0a8a6cfc787955debd666c29daa78012acddd4fc05476459b99dcdc->enter($__internal_788fa16ae0a8a6cfc787955debd666c29daa78012acddd4fc05476459b99dcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_788fa16ae0a8a6cfc787955debd666c29daa78012acddd4fc05476459b99dcdc->leave($__internal_788fa16ae0a8a6cfc787955debd666c29daa78012acddd4fc05476459b99dcdc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94a40bc6f72b852206cee96795ad1598155bfc53e87fc82249fc8754dfdbadaf = $this->env->getExtension("native_profiler");
        $__internal_94a40bc6f72b852206cee96795ad1598155bfc53e87fc82249fc8754dfdbadaf->enter($__internal_94a40bc6f72b852206cee96795ad1598155bfc53e87fc82249fc8754dfdbadaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94a40bc6f72b852206cee96795ad1598155bfc53e87fc82249fc8754dfdbadaf->leave($__internal_94a40bc6f72b852206cee96795ad1598155bfc53e87fc82249fc8754dfdbadaf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_db891947d49fa0c5a111d6c5feac1dce36cdb15120064d370f7189e919f02f9e = $this->env->getExtension("native_profiler");
        $__internal_db891947d49fa0c5a111d6c5feac1dce36cdb15120064d370f7189e919f02f9e->enter($__internal_db891947d49fa0c5a111d6c5feac1dce36cdb15120064d370f7189e919f02f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db891947d49fa0c5a111d6c5feac1dce36cdb15120064d370f7189e919f02f9e->leave($__internal_db891947d49fa0c5a111d6c5feac1dce36cdb15120064d370f7189e919f02f9e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47a20116ef4562ec2ede395b0a0e5cc5e6f83aaac79693417821b1eb47750e66 = $this->env->getExtension("native_profiler");
        $__internal_47a20116ef4562ec2ede395b0a0e5cc5e6f83aaac79693417821b1eb47750e66->enter($__internal_47a20116ef4562ec2ede395b0a0e5cc5e6f83aaac79693417821b1eb47750e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_47a20116ef4562ec2ede395b0a0e5cc5e6f83aaac79693417821b1eb47750e66->leave($__internal_47a20116ef4562ec2ede395b0a0e5cc5e6f83aaac79693417821b1eb47750e66_prof);

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
