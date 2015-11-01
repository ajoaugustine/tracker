<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_df59e5b510a5f4630a973c4912a0f970683204c2cfc10ff3205c679a3232e868 extends Twig_Template
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
        $__internal_e95021ccabaa25eadb468a6101f554648e23cbeec5a74f2e50e527e58e0b7cc0 = $this->env->getExtension("native_profiler");
        $__internal_e95021ccabaa25eadb468a6101f554648e23cbeec5a74f2e50e527e58e0b7cc0->enter($__internal_e95021ccabaa25eadb468a6101f554648e23cbeec5a74f2e50e527e58e0b7cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e95021ccabaa25eadb468a6101f554648e23cbeec5a74f2e50e527e58e0b7cc0->leave($__internal_e95021ccabaa25eadb468a6101f554648e23cbeec5a74f2e50e527e58e0b7cc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
