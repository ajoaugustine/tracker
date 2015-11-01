<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8da90fccc7d3f652b40dd0ea94b93dffa61fd49d14d7d19f8cbb6ccd4c406321 extends Twig_Template
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
        $__internal_3f23e3b58fb0786ab08a0e8c3f0d32f2e0a3fa245894737127133e4796593d4e = $this->env->getExtension("native_profiler");
        $__internal_3f23e3b58fb0786ab08a0e8c3f0d32f2e0a3fa245894737127133e4796593d4e->enter($__internal_3f23e3b58fb0786ab08a0e8c3f0d32f2e0a3fa245894737127133e4796593d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3f23e3b58fb0786ab08a0e8c3f0d32f2e0a3fa245894737127133e4796593d4e->leave($__internal_3f23e3b58fb0786ab08a0e8c3f0d32f2e0a3fa245894737127133e4796593d4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
