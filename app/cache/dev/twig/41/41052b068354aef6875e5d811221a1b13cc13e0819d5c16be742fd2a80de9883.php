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
        $__internal_857a257a69b24dc5ff3eee776bd00c19654a0da597edb1ac43f8e76cc79f42ad = $this->env->getExtension("native_profiler");
        $__internal_857a257a69b24dc5ff3eee776bd00c19654a0da597edb1ac43f8e76cc79f42ad->enter($__internal_857a257a69b24dc5ff3eee776bd00c19654a0da597edb1ac43f8e76cc79f42ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_857a257a69b24dc5ff3eee776bd00c19654a0da597edb1ac43f8e76cc79f42ad->leave($__internal_857a257a69b24dc5ff3eee776bd00c19654a0da597edb1ac43f8e76cc79f42ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_499ad30cd2a8b526f2711e89dc5da8c7701c3d94db929575720a8b59f3c4098a = $this->env->getExtension("native_profiler");
        $__internal_499ad30cd2a8b526f2711e89dc5da8c7701c3d94db929575720a8b59f3c4098a->enter($__internal_499ad30cd2a8b526f2711e89dc5da8c7701c3d94db929575720a8b59f3c4098a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_499ad30cd2a8b526f2711e89dc5da8c7701c3d94db929575720a8b59f3c4098a->leave($__internal_499ad30cd2a8b526f2711e89dc5da8c7701c3d94db929575720a8b59f3c4098a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c244baf8c5e09fd950ba4ab97d5b5906d982dfa4038fafcdeeaf6bf4eea9a89b = $this->env->getExtension("native_profiler");
        $__internal_c244baf8c5e09fd950ba4ab97d5b5906d982dfa4038fafcdeeaf6bf4eea9a89b->enter($__internal_c244baf8c5e09fd950ba4ab97d5b5906d982dfa4038fafcdeeaf6bf4eea9a89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c244baf8c5e09fd950ba4ab97d5b5906d982dfa4038fafcdeeaf6bf4eea9a89b->leave($__internal_c244baf8c5e09fd950ba4ab97d5b5906d982dfa4038fafcdeeaf6bf4eea9a89b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_801ba1f1c54671ad4e3d43fc0ca70721338cb0eb0dc29af592f9d299768f0ff0 = $this->env->getExtension("native_profiler");
        $__internal_801ba1f1c54671ad4e3d43fc0ca70721338cb0eb0dc29af592f9d299768f0ff0->enter($__internal_801ba1f1c54671ad4e3d43fc0ca70721338cb0eb0dc29af592f9d299768f0ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_801ba1f1c54671ad4e3d43fc0ca70721338cb0eb0dc29af592f9d299768f0ff0->leave($__internal_801ba1f1c54671ad4e3d43fc0ca70721338cb0eb0dc29af592f9d299768f0ff0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b79711717e27b55bd0bc1c5266e84753fe5c5ee80a7ad8d45e041e6305a5137f = $this->env->getExtension("native_profiler");
        $__internal_b79711717e27b55bd0bc1c5266e84753fe5c5ee80a7ad8d45e041e6305a5137f->enter($__internal_b79711717e27b55bd0bc1c5266e84753fe5c5ee80a7ad8d45e041e6305a5137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b79711717e27b55bd0bc1c5266e84753fe5c5ee80a7ad8d45e041e6305a5137f->leave($__internal_b79711717e27b55bd0bc1c5266e84753fe5c5ee80a7ad8d45e041e6305a5137f_prof);

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
