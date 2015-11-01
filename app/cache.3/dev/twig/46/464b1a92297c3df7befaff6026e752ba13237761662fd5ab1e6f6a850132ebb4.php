<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9f1e761c18d0f81f874a889d46de75dd82315ea52f10261be615dfc21030197e extends Twig_Template
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
        $__internal_fe87620b62960e80d46e7c406ba37244e37bd02109ae93f891b4e2914f721df5 = $this->env->getExtension("native_profiler");
        $__internal_fe87620b62960e80d46e7c406ba37244e37bd02109ae93f891b4e2914f721df5->enter($__internal_fe87620b62960e80d46e7c406ba37244e37bd02109ae93f891b4e2914f721df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe87620b62960e80d46e7c406ba37244e37bd02109ae93f891b4e2914f721df5->leave($__internal_fe87620b62960e80d46e7c406ba37244e37bd02109ae93f891b4e2914f721df5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39e1e7981b2dc185a5f47be198527d3110edf17b9ef3a07bdb5915a3b4969bd0 = $this->env->getExtension("native_profiler");
        $__internal_39e1e7981b2dc185a5f47be198527d3110edf17b9ef3a07bdb5915a3b4969bd0->enter($__internal_39e1e7981b2dc185a5f47be198527d3110edf17b9ef3a07bdb5915a3b4969bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_39e1e7981b2dc185a5f47be198527d3110edf17b9ef3a07bdb5915a3b4969bd0->leave($__internal_39e1e7981b2dc185a5f47be198527d3110edf17b9ef3a07bdb5915a3b4969bd0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f5559b2acdfe3076b9e68c5a4f42f1127226a79a3c537830d79acd1302d836d = $this->env->getExtension("native_profiler");
        $__internal_9f5559b2acdfe3076b9e68c5a4f42f1127226a79a3c537830d79acd1302d836d->enter($__internal_9f5559b2acdfe3076b9e68c5a4f42f1127226a79a3c537830d79acd1302d836d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f5559b2acdfe3076b9e68c5a4f42f1127226a79a3c537830d79acd1302d836d->leave($__internal_9f5559b2acdfe3076b9e68c5a4f42f1127226a79a3c537830d79acd1302d836d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d9523c5ba490180dcaf17d2e5479dd036ae042db8b57fab1a7ac8ce145d61c = $this->env->getExtension("native_profiler");
        $__internal_30d9523c5ba490180dcaf17d2e5479dd036ae042db8b57fab1a7ac8ce145d61c->enter($__internal_30d9523c5ba490180dcaf17d2e5479dd036ae042db8b57fab1a7ac8ce145d61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_30d9523c5ba490180dcaf17d2e5479dd036ae042db8b57fab1a7ac8ce145d61c->leave($__internal_30d9523c5ba490180dcaf17d2e5479dd036ae042db8b57fab1a7ac8ce145d61c_prof);

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
