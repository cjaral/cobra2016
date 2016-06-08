<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1506822a3a4a884c59a7fe7148e2dc22c4fa3914f67589b58cc5239cb165a669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33b9b2a5a15b064e72e55bd6f005de57ddbf1cc919f5e8d40b9c0ef68fb8bd9d = $this->env->getExtension("native_profiler");
        $__internal_33b9b2a5a15b064e72e55bd6f005de57ddbf1cc919f5e8d40b9c0ef68fb8bd9d->enter($__internal_33b9b2a5a15b064e72e55bd6f005de57ddbf1cc919f5e8d40b9c0ef68fb8bd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_33b9b2a5a15b064e72e55bd6f005de57ddbf1cc919f5e8d40b9c0ef68fb8bd9d->leave($__internal_33b9b2a5a15b064e72e55bd6f005de57ddbf1cc919f5e8d40b9c0ef68fb8bd9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
