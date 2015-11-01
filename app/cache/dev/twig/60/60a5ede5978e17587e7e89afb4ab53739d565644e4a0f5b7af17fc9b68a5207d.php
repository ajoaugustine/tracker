<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2aa98b465533c30940395d0ebb25d46967bdbb1b4643d6691e4f16def9a6302b extends Twig_Template
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
        $__internal_0ced09608cc8ef46c47f594aa1840bb55d8eb9b514d36177d54548b2637e76cc = $this->env->getExtension("native_profiler");
        $__internal_0ced09608cc8ef46c47f594aa1840bb55d8eb9b514d36177d54548b2637e76cc->enter($__internal_0ced09608cc8ef46c47f594aa1840bb55d8eb9b514d36177d54548b2637e76cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0ced09608cc8ef46c47f594aa1840bb55d8eb9b514d36177d54548b2637e76cc->leave($__internal_0ced09608cc8ef46c47f594aa1840bb55d8eb9b514d36177d54548b2637e76cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
