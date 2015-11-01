<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_66322f3b42ac770da7771dc1085b59aa4807721bd68a4b34c3ae6144ef650c69 extends Twig_Template
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
        $__internal_58febe910fbba188284aeb75aa4a79d90f764b84e75ff1fc281b36a535437308 = $this->env->getExtension("native_profiler");
        $__internal_58febe910fbba188284aeb75aa4a79d90f764b84e75ff1fc281b36a535437308->enter($__internal_58febe910fbba188284aeb75aa4a79d90f764b84e75ff1fc281b36a535437308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_58febe910fbba188284aeb75aa4a79d90f764b84e75ff1fc281b36a535437308->leave($__internal_58febe910fbba188284aeb75aa4a79d90f764b84e75ff1fc281b36a535437308_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
