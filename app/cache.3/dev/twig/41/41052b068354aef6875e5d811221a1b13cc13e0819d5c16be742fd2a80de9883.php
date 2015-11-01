<?php

/* base.html.twig */
class __TwigTemplate_7b6497d805e77f2a6b2578855707ce771fa68bf4f28f8721f58c00c3ab54a933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cc79a64ba873f99a26a3c72ed22649452678503bfe31c610872df1f84c04ece = $this->env->getExtension("native_profiler");
        $__internal_2cc79a64ba873f99a26a3c72ed22649452678503bfe31c610872df1f84c04ece->enter($__internal_2cc79a64ba873f99a26a3c72ed22649452678503bfe31c610872df1f84c04ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2cc79a64ba873f99a26a3c72ed22649452678503bfe31c610872df1f84c04ece->leave($__internal_2cc79a64ba873f99a26a3c72ed22649452678503bfe31c610872df1f84c04ece_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47b84cf819a735861b9902b9868fe79c1d1bd8e0985018d62c78bf4d8726a341 = $this->env->getExtension("native_profiler");
        $__internal_47b84cf819a735861b9902b9868fe79c1d1bd8e0985018d62c78bf4d8726a341->enter($__internal_47b84cf819a735861b9902b9868fe79c1d1bd8e0985018d62c78bf4d8726a341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47b84cf819a735861b9902b9868fe79c1d1bd8e0985018d62c78bf4d8726a341->leave($__internal_47b84cf819a735861b9902b9868fe79c1d1bd8e0985018d62c78bf4d8726a341_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5aa7bdeee71242badfc374f42f8a29e65ec9511ae420ae2585542d8435007db1 = $this->env->getExtension("native_profiler");
        $__internal_5aa7bdeee71242badfc374f42f8a29e65ec9511ae420ae2585542d8435007db1->enter($__internal_5aa7bdeee71242badfc374f42f8a29e65ec9511ae420ae2585542d8435007db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5aa7bdeee71242badfc374f42f8a29e65ec9511ae420ae2585542d8435007db1->leave($__internal_5aa7bdeee71242badfc374f42f8a29e65ec9511ae420ae2585542d8435007db1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2de0a60775ef077a923bc936cafda11c98ed1bff9231e385ad8b3361628c296f = $this->env->getExtension("native_profiler");
        $__internal_2de0a60775ef077a923bc936cafda11c98ed1bff9231e385ad8b3361628c296f->enter($__internal_2de0a60775ef077a923bc936cafda11c98ed1bff9231e385ad8b3361628c296f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2de0a60775ef077a923bc936cafda11c98ed1bff9231e385ad8b3361628c296f->leave($__internal_2de0a60775ef077a923bc936cafda11c98ed1bff9231e385ad8b3361628c296f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cafa1eb949c4460c1da7039ca5abd9072a7a3a6a00981070175d62f6f3451683 = $this->env->getExtension("native_profiler");
        $__internal_cafa1eb949c4460c1da7039ca5abd9072a7a3a6a00981070175d62f6f3451683->enter($__internal_cafa1eb949c4460c1da7039ca5abd9072a7a3a6a00981070175d62f6f3451683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cafa1eb949c4460c1da7039ca5abd9072a7a3a6a00981070175d62f6f3451683->leave($__internal_cafa1eb949c4460c1da7039ca5abd9072a7a3a6a00981070175d62f6f3451683_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
