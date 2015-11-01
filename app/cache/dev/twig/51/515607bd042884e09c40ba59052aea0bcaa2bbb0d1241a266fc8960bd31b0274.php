<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_66d95ed2ed13c68276f3d825d3814a52974489ee125d4d1a99040504751abab0 extends Twig_Template
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
        $__internal_4a84693791bbed0783394b7bc92726ca9d55a2c47f8799934078b7af3881f64d = $this->env->getExtension("native_profiler");
        $__internal_4a84693791bbed0783394b7bc92726ca9d55a2c47f8799934078b7af3881f64d->enter($__internal_4a84693791bbed0783394b7bc92726ca9d55a2c47f8799934078b7af3881f64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4a84693791bbed0783394b7bc92726ca9d55a2c47f8799934078b7af3881f64d->leave($__internal_4a84693791bbed0783394b7bc92726ca9d55a2c47f8799934078b7af3881f64d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
