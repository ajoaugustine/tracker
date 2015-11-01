<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b9370fdf009da7adb6a5eda1be7d9bcbd380378aaa160f8d5947dfc01462be0b extends Twig_Template
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
        $__internal_c1195aebb674408a2fc58a3dcd1364017f66e72f3bff1c47e640d0b1d516eefe = $this->env->getExtension("native_profiler");
        $__internal_c1195aebb674408a2fc58a3dcd1364017f66e72f3bff1c47e640d0b1d516eefe->enter($__internal_c1195aebb674408a2fc58a3dcd1364017f66e72f3bff1c47e640d0b1d516eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c1195aebb674408a2fc58a3dcd1364017f66e72f3bff1c47e640d0b1d516eefe->leave($__internal_c1195aebb674408a2fc58a3dcd1364017f66e72f3bff1c47e640d0b1d516eefe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
