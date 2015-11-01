<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_7e921203fabdfb59c8963e34b1e5b64e8ea3a65a5ceb786f9e923cbcf835372e extends Twig_Template
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
        $__internal_1ed1a979a8c28a74aef8a2191d42172e2600f7a2dfea3e3328c22abb72d84c0e = $this->env->getExtension("native_profiler");
        $__internal_1ed1a979a8c28a74aef8a2191d42172e2600f7a2dfea3e3328c22abb72d84c0e->enter($__internal_1ed1a979a8c28a74aef8a2191d42172e2600f7a2dfea3e3328c22abb72d84c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed1a979a8c28a74aef8a2191d42172e2600f7a2dfea3e3328c22abb72d84c0e->leave($__internal_1ed1a979a8c28a74aef8a2191d42172e2600f7a2dfea3e3328c22abb72d84c0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a49874a8c0e1935d838d8f0a5fc2309672fca6e376253d7de53deb32ea0c5311 = $this->env->getExtension("native_profiler");
        $__internal_a49874a8c0e1935d838d8f0a5fc2309672fca6e376253d7de53deb32ea0c5311->enter($__internal_a49874a8c0e1935d838d8f0a5fc2309672fca6e376253d7de53deb32ea0c5311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a49874a8c0e1935d838d8f0a5fc2309672fca6e376253d7de53deb32ea0c5311->leave($__internal_a49874a8c0e1935d838d8f0a5fc2309672fca6e376253d7de53deb32ea0c5311_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b732e0059e780adcdea65e96c45ad7107bfe2e18b8c35350c67adbdf5ad6b990 = $this->env->getExtension("native_profiler");
        $__internal_b732e0059e780adcdea65e96c45ad7107bfe2e18b8c35350c67adbdf5ad6b990->enter($__internal_b732e0059e780adcdea65e96c45ad7107bfe2e18b8c35350c67adbdf5ad6b990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b732e0059e780adcdea65e96c45ad7107bfe2e18b8c35350c67adbdf5ad6b990->leave($__internal_b732e0059e780adcdea65e96c45ad7107bfe2e18b8c35350c67adbdf5ad6b990_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eab0fcb335e44f2a31db046c6c1fc342478bee79f42a5c25ab72eef4fe9ce8de = $this->env->getExtension("native_profiler");
        $__internal_eab0fcb335e44f2a31db046c6c1fc342478bee79f42a5c25ab72eef4fe9ce8de->enter($__internal_eab0fcb335e44f2a31db046c6c1fc342478bee79f42a5c25ab72eef4fe9ce8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eab0fcb335e44f2a31db046c6c1fc342478bee79f42a5c25ab72eef4fe9ce8de->leave($__internal_eab0fcb335e44f2a31db046c6c1fc342478bee79f42a5c25ab72eef4fe9ce8de_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cb2200e0dfd27afaf53c4166763a7bbef0615682134f8637adbe2089ec4be781 = $this->env->getExtension("native_profiler");
        $__internal_cb2200e0dfd27afaf53c4166763a7bbef0615682134f8637adbe2089ec4be781->enter($__internal_cb2200e0dfd27afaf53c4166763a7bbef0615682134f8637adbe2089ec4be781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cb2200e0dfd27afaf53c4166763a7bbef0615682134f8637adbe2089ec4be781->leave($__internal_cb2200e0dfd27afaf53c4166763a7bbef0615682134f8637adbe2089ec4be781_prof);

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
