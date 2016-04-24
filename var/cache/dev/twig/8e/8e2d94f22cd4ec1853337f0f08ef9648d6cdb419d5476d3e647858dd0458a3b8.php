<?php

/* lucky/number.html.twig */
class __TwigTemplate_2d4ac09b3ce87e72495d93b70960778993d0eaa5ea99fd31e043db3e534a0253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c71dee5078d08bb8b179f1ae78a56822b8c1c4e1d43fca1850919a01e396d270 = $this->env->getExtension("native_profiler");
        $__internal_c71dee5078d08bb8b179f1ae78a56822b8c1c4e1d43fca1850919a01e396d270->enter($__internal_c71dee5078d08bb8b179f1ae78a56822b8c1c4e1d43fca1850919a01e396d270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c71dee5078d08bb8b179f1ae78a56822b8c1c4e1d43fca1850919a01e396d270->leave($__internal_c71dee5078d08bb8b179f1ae78a56822b8c1c4e1d43fca1850919a01e396d270_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_808f679d28ca949f9b4690228b0de1be8c8dea6407638f3e5025737e0f7ce409 = $this->env->getExtension("native_profiler");
        $__internal_808f679d28ca949f9b4690228b0de1be8c8dea6407638f3e5025737e0f7ce409->enter($__internal_808f679d28ca949f9b4690228b0de1be8c8dea6407638f3e5025737e0f7ce409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_808f679d28ca949f9b4690228b0de1be8c8dea6407638f3e5025737e0f7ce409->leave($__internal_808f679d28ca949f9b4690228b0de1be8c8dea6407638f3e5025737e0f7ce409_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
