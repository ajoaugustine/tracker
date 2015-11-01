<?php

/* PersonBundle:Default:index.html.twig */
class __TwigTemplate_77e96bb1fa2dea969a9789c7f4f07c8133d61d6089729ed1d6680a4ef6135672 extends Twig_Template
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
        $__internal_9869c8e6b7dccfd3f5af891e494df69f7faefdc2a8922cf01a958eac4fdb7549 = $this->env->getExtension("native_profiler");
        $__internal_9869c8e6b7dccfd3f5af891e494df69f7faefdc2a8922cf01a958eac4fdb7549->enter($__internal_9869c8e6b7dccfd3f5af891e494df69f7faefdc2a8922cf01a958eac4fdb7549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PersonBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_9869c8e6b7dccfd3f5af891e494df69f7faefdc2a8922cf01a958eac4fdb7549->leave($__internal_9869c8e6b7dccfd3f5af891e494df69f7faefdc2a8922cf01a958eac4fdb7549_prof);

    }

    public function getTemplateName()
    {
        return "PersonBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
