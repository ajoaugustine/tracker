<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9f1e761c18d0f81f874a889d46de75dd82315ea52f10261be615dfc21030197e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5f5a8f1ec2c65812fae6db8cb915c6e22449351584121056edcfa10945f51268 = $this->env->getExtension("native_profiler");
        $__internal_5f5a8f1ec2c65812fae6db8cb915c6e22449351584121056edcfa10945f51268->enter($__internal_5f5a8f1ec2c65812fae6db8cb915c6e22449351584121056edcfa10945f51268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f5a8f1ec2c65812fae6db8cb915c6e22449351584121056edcfa10945f51268->leave($__internal_5f5a8f1ec2c65812fae6db8cb915c6e22449351584121056edcfa10945f51268_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df93c197c9dbd0e09c5b334bdc1debf07457ec504a9422bcea166fa3f8b342e6 = $this->env->getExtension("native_profiler");
        $__internal_df93c197c9dbd0e09c5b334bdc1debf07457ec504a9422bcea166fa3f8b342e6->enter($__internal_df93c197c9dbd0e09c5b334bdc1debf07457ec504a9422bcea166fa3f8b342e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_df93c197c9dbd0e09c5b334bdc1debf07457ec504a9422bcea166fa3f8b342e6->leave($__internal_df93c197c9dbd0e09c5b334bdc1debf07457ec504a9422bcea166fa3f8b342e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33ccfac5e306ab8c67c0a3dbc3d7db90ac16354a3547351b86d9eddfb8cf3e3e = $this->env->getExtension("native_profiler");
        $__internal_33ccfac5e306ab8c67c0a3dbc3d7db90ac16354a3547351b86d9eddfb8cf3e3e->enter($__internal_33ccfac5e306ab8c67c0a3dbc3d7db90ac16354a3547351b86d9eddfb8cf3e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33ccfac5e306ab8c67c0a3dbc3d7db90ac16354a3547351b86d9eddfb8cf3e3e->leave($__internal_33ccfac5e306ab8c67c0a3dbc3d7db90ac16354a3547351b86d9eddfb8cf3e3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cecef1eac668f8a502678077c204a39fcbf97727e34e48409aa6f9c3c6c365ed = $this->env->getExtension("native_profiler");
        $__internal_cecef1eac668f8a502678077c204a39fcbf97727e34e48409aa6f9c3c6c365ed->enter($__internal_cecef1eac668f8a502678077c204a39fcbf97727e34e48409aa6f9c3c6c365ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cecef1eac668f8a502678077c204a39fcbf97727e34e48409aa6f9c3c6c365ed->leave($__internal_cecef1eac668f8a502678077c204a39fcbf97727e34e48409aa6f9c3c6c365ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
