<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8d706182efc2024dc989bdada3a020dac69a508fbc28a5dc7b713b95064696a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a830a02ca496d1f366375449dc31ed0abad724644eee7d4d1c0a4d979f840898 = $this->env->getExtension("native_profiler");
        $__internal_a830a02ca496d1f366375449dc31ed0abad724644eee7d4d1c0a4d979f840898->enter($__internal_a830a02ca496d1f366375449dc31ed0abad724644eee7d4d1c0a4d979f840898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a830a02ca496d1f366375449dc31ed0abad724644eee7d4d1c0a4d979f840898->leave($__internal_a830a02ca496d1f366375449dc31ed0abad724644eee7d4d1c0a4d979f840898_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ad2062cec63772537a62ba4c298d2573dafd52719ab46889b59d929db7333fb = $this->env->getExtension("native_profiler");
        $__internal_5ad2062cec63772537a62ba4c298d2573dafd52719ab46889b59d929db7333fb->enter($__internal_5ad2062cec63772537a62ba4c298d2573dafd52719ab46889b59d929db7333fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ad2062cec63772537a62ba4c298d2573dafd52719ab46889b59d929db7333fb->leave($__internal_5ad2062cec63772537a62ba4c298d2573dafd52719ab46889b59d929db7333fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c962e0d229fa8df90a4f7a45dc3ae54866f5ba206b6dd1f5dbd9420f308481c = $this->env->getExtension("native_profiler");
        $__internal_9c962e0d229fa8df90a4f7a45dc3ae54866f5ba206b6dd1f5dbd9420f308481c->enter($__internal_9c962e0d229fa8df90a4f7a45dc3ae54866f5ba206b6dd1f5dbd9420f308481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9c962e0d229fa8df90a4f7a45dc3ae54866f5ba206b6dd1f5dbd9420f308481c->leave($__internal_9c962e0d229fa8df90a4f7a45dc3ae54866f5ba206b6dd1f5dbd9420f308481c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8a0d679acfa449c3e8c7c28e7835da0c4c5f089ec9d7aa4c3dc7d0ebfa39fac = $this->env->getExtension("native_profiler");
        $__internal_f8a0d679acfa449c3e8c7c28e7835da0c4c5f089ec9d7aa4c3dc7d0ebfa39fac->enter($__internal_f8a0d679acfa449c3e8c7c28e7835da0c4c5f089ec9d7aa4c3dc7d0ebfa39fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f8a0d679acfa449c3e8c7c28e7835da0c4c5f089ec9d7aa4c3dc7d0ebfa39fac->leave($__internal_f8a0d679acfa449c3e8c7c28e7835da0c4c5f089ec9d7aa4c3dc7d0ebfa39fac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
