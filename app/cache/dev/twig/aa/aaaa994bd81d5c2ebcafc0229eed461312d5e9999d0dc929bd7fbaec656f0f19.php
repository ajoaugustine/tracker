<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_577b39620296b6d86f676bb976722788759ba696f33f6db352d8aa43a4565559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172596201421ceaaef7087e3bf7d8ea3dcce5f5610073f869df089d219cbd88d = $this->env->getExtension("native_profiler");
        $__internal_172596201421ceaaef7087e3bf7d8ea3dcce5f5610073f869df089d219cbd88d->enter($__internal_172596201421ceaaef7087e3bf7d8ea3dcce5f5610073f869df089d219cbd88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172596201421ceaaef7087e3bf7d8ea3dcce5f5610073f869df089d219cbd88d->leave($__internal_172596201421ceaaef7087e3bf7d8ea3dcce5f5610073f869df089d219cbd88d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8394113965a62d6af035bbde811223e3d824d348887c37ec2e64d33a12bf548f = $this->env->getExtension("native_profiler");
        $__internal_8394113965a62d6af035bbde811223e3d824d348887c37ec2e64d33a12bf548f->enter($__internal_8394113965a62d6af035bbde811223e3d824d348887c37ec2e64d33a12bf548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8394113965a62d6af035bbde811223e3d824d348887c37ec2e64d33a12bf548f->leave($__internal_8394113965a62d6af035bbde811223e3d824d348887c37ec2e64d33a12bf548f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a5bd44ff806e5cbd12d8f7c9ce70b88669000b7952e2bd0a51648dbf7a355a7 = $this->env->getExtension("native_profiler");
        $__internal_6a5bd44ff806e5cbd12d8f7c9ce70b88669000b7952e2bd0a51648dbf7a355a7->enter($__internal_6a5bd44ff806e5cbd12d8f7c9ce70b88669000b7952e2bd0a51648dbf7a355a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6a5bd44ff806e5cbd12d8f7c9ce70b88669000b7952e2bd0a51648dbf7a355a7->leave($__internal_6a5bd44ff806e5cbd12d8f7c9ce70b88669000b7952e2bd0a51648dbf7a355a7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c06426a52858120400848c39a413a4652a37edfa14f17f596b343f909191d899 = $this->env->getExtension("native_profiler");
        $__internal_c06426a52858120400848c39a413a4652a37edfa14f17f596b343f909191d899->enter($__internal_c06426a52858120400848c39a413a4652a37edfa14f17f596b343f909191d899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_c06426a52858120400848c39a413a4652a37edfa14f17f596b343f909191d899->leave($__internal_c06426a52858120400848c39a413a4652a37edfa14f17f596b343f909191d899_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e724fd43c61a89909034d6eccb386bec7775ecb4d36c222e2fb80fccde10dda6 = $this->env->getExtension("native_profiler");
        $__internal_e724fd43c61a89909034d6eccb386bec7775ecb4d36c222e2fb80fccde10dda6->enter($__internal_e724fd43c61a89909034d6eccb386bec7775ecb4d36c222e2fb80fccde10dda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e724fd43c61a89909034d6eccb386bec7775ecb4d36c222e2fb80fccde10dda6->leave($__internal_e724fd43c61a89909034d6eccb386bec7775ecb4d36c222e2fb80fccde10dda6_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
