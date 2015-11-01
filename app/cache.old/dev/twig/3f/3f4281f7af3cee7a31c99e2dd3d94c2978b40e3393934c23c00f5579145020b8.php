<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2dfc9462bf9ea4fed89dc291e4e7d439f3b52b70726768ac0e6c148d647ecc32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d79c1ab57efc372bb54d6b0258e0120c8ad73a8e6f0f58374fce1376288abbde = $this->env->getExtension("native_profiler");
        $__internal_d79c1ab57efc372bb54d6b0258e0120c8ad73a8e6f0f58374fce1376288abbde->enter($__internal_d79c1ab57efc372bb54d6b0258e0120c8ad73a8e6f0f58374fce1376288abbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d79c1ab57efc372bb54d6b0258e0120c8ad73a8e6f0f58374fce1376288abbde->leave($__internal_d79c1ab57efc372bb54d6b0258e0120c8ad73a8e6f0f58374fce1376288abbde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f751ffe182df1a41efeaadd00056f4862384ce7e53d5e258f22e7421dee253d = $this->env->getExtension("native_profiler");
        $__internal_3f751ffe182df1a41efeaadd00056f4862384ce7e53d5e258f22e7421dee253d->enter($__internal_3f751ffe182df1a41efeaadd00056f4862384ce7e53d5e258f22e7421dee253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f751ffe182df1a41efeaadd00056f4862384ce7e53d5e258f22e7421dee253d->leave($__internal_3f751ffe182df1a41efeaadd00056f4862384ce7e53d5e258f22e7421dee253d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54f9b2ad0f5940b2553749d665fa72cafa366ef7b9d5f441de894764a5f67502 = $this->env->getExtension("native_profiler");
        $__internal_54f9b2ad0f5940b2553749d665fa72cafa366ef7b9d5f441de894764a5f67502->enter($__internal_54f9b2ad0f5940b2553749d665fa72cafa366ef7b9d5f441de894764a5f67502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54f9b2ad0f5940b2553749d665fa72cafa366ef7b9d5f441de894764a5f67502->leave($__internal_54f9b2ad0f5940b2553749d665fa72cafa366ef7b9d5f441de894764a5f67502_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54373e6ca20fe382855f5656bf649220a230baf6ea4361a0e458bbec039174e = $this->env->getExtension("native_profiler");
        $__internal_d54373e6ca20fe382855f5656bf649220a230baf6ea4361a0e458bbec039174e->enter($__internal_d54373e6ca20fe382855f5656bf649220a230baf6ea4361a0e458bbec039174e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d54373e6ca20fe382855f5656bf649220a230baf6ea4361a0e458bbec039174e->leave($__internal_d54373e6ca20fe382855f5656bf649220a230baf6ea4361a0e458bbec039174e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
