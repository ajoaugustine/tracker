<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a39299a83176a4977160a33c284d860f4ff53dbaf49593d021cc73bf7e0deeae extends Twig_Template
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
        $__internal_c53ddd57156b9e1de9cabe26b4e7b3e6accb62abcc5220902b0bd11fb24043ad = $this->env->getExtension("native_profiler");
        $__internal_c53ddd57156b9e1de9cabe26b4e7b3e6accb62abcc5220902b0bd11fb24043ad->enter($__internal_c53ddd57156b9e1de9cabe26b4e7b3e6accb62abcc5220902b0bd11fb24043ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c53ddd57156b9e1de9cabe26b4e7b3e6accb62abcc5220902b0bd11fb24043ad->leave($__internal_c53ddd57156b9e1de9cabe26b4e7b3e6accb62abcc5220902b0bd11fb24043ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
