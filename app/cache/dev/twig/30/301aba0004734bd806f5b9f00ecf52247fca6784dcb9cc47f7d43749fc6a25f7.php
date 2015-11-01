<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7da4c8572df85c18533434cc3888d0f74a487cac83129c075281cb5aeaa82126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2022590d76f534002b62181b4f67279d2cf9605bed68aa7d036a4b7c69f3f2ec = $this->env->getExtension("native_profiler");
        $__internal_2022590d76f534002b62181b4f67279d2cf9605bed68aa7d036a4b7c69f3f2ec->enter($__internal_2022590d76f534002b62181b4f67279d2cf9605bed68aa7d036a4b7c69f3f2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2022590d76f534002b62181b4f67279d2cf9605bed68aa7d036a4b7c69f3f2ec->leave($__internal_2022590d76f534002b62181b4f67279d2cf9605bed68aa7d036a4b7c69f3f2ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52aa1c6fe17c4c53164b83d27c19f20e75eef3f7681811a5ccdff08769c813fa = $this->env->getExtension("native_profiler");
        $__internal_52aa1c6fe17c4c53164b83d27c19f20e75eef3f7681811a5ccdff08769c813fa->enter($__internal_52aa1c6fe17c4c53164b83d27c19f20e75eef3f7681811a5ccdff08769c813fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_52aa1c6fe17c4c53164b83d27c19f20e75eef3f7681811a5ccdff08769c813fa->leave($__internal_52aa1c6fe17c4c53164b83d27c19f20e75eef3f7681811a5ccdff08769c813fa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e0284d85b4a7ed58d62a5d226724a836d28ef6ea0a8f64bf28e7cb4076c515d = $this->env->getExtension("native_profiler");
        $__internal_8e0284d85b4a7ed58d62a5d226724a836d28ef6ea0a8f64bf28e7cb4076c515d->enter($__internal_8e0284d85b4a7ed58d62a5d226724a836d28ef6ea0a8f64bf28e7cb4076c515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8e0284d85b4a7ed58d62a5d226724a836d28ef6ea0a8f64bf28e7cb4076c515d->leave($__internal_8e0284d85b4a7ed58d62a5d226724a836d28ef6ea0a8f64bf28e7cb4076c515d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
