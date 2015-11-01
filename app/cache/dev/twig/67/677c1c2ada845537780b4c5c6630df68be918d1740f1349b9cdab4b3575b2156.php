<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b94b1849ace9d3f502b7b5ce45bfe862087fe7aa9b2c141cb47d54980f15286d extends Twig_Template
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
        $__internal_090a9e409c46a55808383ec6da858e3757548b79a31356838730d9d1016941e3 = $this->env->getExtension("native_profiler");
        $__internal_090a9e409c46a55808383ec6da858e3757548b79a31356838730d9d1016941e3->enter($__internal_090a9e409c46a55808383ec6da858e3757548b79a31356838730d9d1016941e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_090a9e409c46a55808383ec6da858e3757548b79a31356838730d9d1016941e3->leave($__internal_090a9e409c46a55808383ec6da858e3757548b79a31356838730d9d1016941e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
