<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_81df2db650c18f4f5ae0f375f50a97ca4b232b8b30f42e815f4e1f4b5a8d18b0 extends Twig_Template
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
        $__internal_36562d56cd48d079fec0abfab48bc3cf99b11bcecd3455589f03482198a6c985 = $this->env->getExtension("native_profiler");
        $__internal_36562d56cd48d079fec0abfab48bc3cf99b11bcecd3455589f03482198a6c985->enter($__internal_36562d56cd48d079fec0abfab48bc3cf99b11bcecd3455589f03482198a6c985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_36562d56cd48d079fec0abfab48bc3cf99b11bcecd3455589f03482198a6c985->leave($__internal_36562d56cd48d079fec0abfab48bc3cf99b11bcecd3455589f03482198a6c985_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
