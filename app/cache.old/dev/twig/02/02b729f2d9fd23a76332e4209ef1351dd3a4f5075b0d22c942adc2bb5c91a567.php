<?php

/* base.html.twig */
class __TwigTemplate_4e9ca75041ab8dac168aad867c515e58d142b74f15ab1164eb2f78071c589b19 extends Twig_Template
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
        $__internal_0c0a4053e81edd2611708f0972877ae7550f0554d9c1933f0a34ed0d78bd6dbc = $this->env->getExtension("native_profiler");
        $__internal_0c0a4053e81edd2611708f0972877ae7550f0554d9c1933f0a34ed0d78bd6dbc->enter($__internal_0c0a4053e81edd2611708f0972877ae7550f0554d9c1933f0a34ed0d78bd6dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0c0a4053e81edd2611708f0972877ae7550f0554d9c1933f0a34ed0d78bd6dbc->leave($__internal_0c0a4053e81edd2611708f0972877ae7550f0554d9c1933f0a34ed0d78bd6dbc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7a28e273df166b54e4a09ce892765dcd7b27d0631c50c62d0e92228d806e20b = $this->env->getExtension("native_profiler");
        $__internal_e7a28e273df166b54e4a09ce892765dcd7b27d0631c50c62d0e92228d806e20b->enter($__internal_e7a28e273df166b54e4a09ce892765dcd7b27d0631c50c62d0e92228d806e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7a28e273df166b54e4a09ce892765dcd7b27d0631c50c62d0e92228d806e20b->leave($__internal_e7a28e273df166b54e4a09ce892765dcd7b27d0631c50c62d0e92228d806e20b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d36edd04e0f6bfe9635eac22e486136ea522dbc4fd4ac0b11872f9e7bd2aacc9 = $this->env->getExtension("native_profiler");
        $__internal_d36edd04e0f6bfe9635eac22e486136ea522dbc4fd4ac0b11872f9e7bd2aacc9->enter($__internal_d36edd04e0f6bfe9635eac22e486136ea522dbc4fd4ac0b11872f9e7bd2aacc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d36edd04e0f6bfe9635eac22e486136ea522dbc4fd4ac0b11872f9e7bd2aacc9->leave($__internal_d36edd04e0f6bfe9635eac22e486136ea522dbc4fd4ac0b11872f9e7bd2aacc9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_28331c29ca74fa98737f1bc702923014e6d7215297bc9e14e3600f9b5c76ba50 = $this->env->getExtension("native_profiler");
        $__internal_28331c29ca74fa98737f1bc702923014e6d7215297bc9e14e3600f9b5c76ba50->enter($__internal_28331c29ca74fa98737f1bc702923014e6d7215297bc9e14e3600f9b5c76ba50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28331c29ca74fa98737f1bc702923014e6d7215297bc9e14e3600f9b5c76ba50->leave($__internal_28331c29ca74fa98737f1bc702923014e6d7215297bc9e14e3600f9b5c76ba50_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60c122aba95c883cdbb13a2a771e89427d80011dd5661c580403713000f98b3b = $this->env->getExtension("native_profiler");
        $__internal_60c122aba95c883cdbb13a2a771e89427d80011dd5661c580403713000f98b3b->enter($__internal_60c122aba95c883cdbb13a2a771e89427d80011dd5661c580403713000f98b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60c122aba95c883cdbb13a2a771e89427d80011dd5661c580403713000f98b3b->leave($__internal_60c122aba95c883cdbb13a2a771e89427d80011dd5661c580403713000f98b3b_prof);

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
