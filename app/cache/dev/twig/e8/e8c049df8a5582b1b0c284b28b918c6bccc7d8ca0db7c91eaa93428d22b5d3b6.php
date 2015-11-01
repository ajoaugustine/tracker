<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_bd36443b7de84fed07428a5b0d57e7a04df17cef65e48cf023e8c3c16f2c3d71 extends Twig_Template
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
        $__internal_4ac28c63d42ad06121e68f89389292a3b0aa35e7c9bce41cccf6e0b1a536feaa = $this->env->getExtension("native_profiler");
        $__internal_4ac28c63d42ad06121e68f89389292a3b0aa35e7c9bce41cccf6e0b1a536feaa->enter($__internal_4ac28c63d42ad06121e68f89389292a3b0aa35e7c9bce41cccf6e0b1a536feaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4ac28c63d42ad06121e68f89389292a3b0aa35e7c9bce41cccf6e0b1a536feaa->leave($__internal_4ac28c63d42ad06121e68f89389292a3b0aa35e7c9bce41cccf6e0b1a536feaa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
