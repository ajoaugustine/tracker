<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_74f854a805bb4147ba541e54d2517489a5d5c9f53f33988ef4a87c68aca8ff60 extends Twig_Template
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
        $__internal_600801ff9ca490d7d3aa8614619869e2cd547c63fd461cc7edee12d080f5db60 = $this->env->getExtension("native_profiler");
        $__internal_600801ff9ca490d7d3aa8614619869e2cd547c63fd461cc7edee12d080f5db60->enter($__internal_600801ff9ca490d7d3aa8614619869e2cd547c63fd461cc7edee12d080f5db60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_600801ff9ca490d7d3aa8614619869e2cd547c63fd461cc7edee12d080f5db60->leave($__internal_600801ff9ca490d7d3aa8614619869e2cd547c63fd461cc7edee12d080f5db60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
