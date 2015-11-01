<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ec458bc5337b80d2eb68a244903b08277b6a00af4187a6eb58414421c9af429d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d53932e73341f05d145fa4c0348dd10b9367cb93843d6a87e38c387de5eaed3 = $this->env->getExtension("native_profiler");
        $__internal_7d53932e73341f05d145fa4c0348dd10b9367cb93843d6a87e38c387de5eaed3->enter($__internal_7d53932e73341f05d145fa4c0348dd10b9367cb93843d6a87e38c387de5eaed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d53932e73341f05d145fa4c0348dd10b9367cb93843d6a87e38c387de5eaed3->leave($__internal_7d53932e73341f05d145fa4c0348dd10b9367cb93843d6a87e38c387de5eaed3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c12bbfb9fed722fbafbf5b38c876a343a3b245cf90f30b938e681ccad31bb3c3 = $this->env->getExtension("native_profiler");
        $__internal_c12bbfb9fed722fbafbf5b38c876a343a3b245cf90f30b938e681ccad31bb3c3->enter($__internal_c12bbfb9fed722fbafbf5b38c876a343a3b245cf90f30b938e681ccad31bb3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c12bbfb9fed722fbafbf5b38c876a343a3b245cf90f30b938e681ccad31bb3c3->leave($__internal_c12bbfb9fed722fbafbf5b38c876a343a3b245cf90f30b938e681ccad31bb3c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
