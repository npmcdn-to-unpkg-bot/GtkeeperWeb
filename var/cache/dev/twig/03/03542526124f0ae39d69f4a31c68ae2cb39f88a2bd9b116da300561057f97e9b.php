<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4e662e2ef2e1cb51eedd2df73e508d40f6314a312f92fdd617b656b67af5b77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ebd80090c5bb0f2760075517a721ef5cd9bb806399b044fcfd69692aa150525 = $this->env->getExtension("native_profiler");
        $__internal_1ebd80090c5bb0f2760075517a721ef5cd9bb806399b044fcfd69692aa150525->enter($__internal_1ebd80090c5bb0f2760075517a721ef5cd9bb806399b044fcfd69692aa150525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ebd80090c5bb0f2760075517a721ef5cd9bb806399b044fcfd69692aa150525->leave($__internal_1ebd80090c5bb0f2760075517a721ef5cd9bb806399b044fcfd69692aa150525_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b746f5ec049bf60ad2a0a094334d1e39f1f0798bc5eb342c49c8eb7988e68583 = $this->env->getExtension("native_profiler");
        $__internal_b746f5ec049bf60ad2a0a094334d1e39f1f0798bc5eb342c49c8eb7988e68583->enter($__internal_b746f5ec049bf60ad2a0a094334d1e39f1f0798bc5eb342c49c8eb7988e68583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b746f5ec049bf60ad2a0a094334d1e39f1f0798bc5eb342c49c8eb7988e68583->leave($__internal_b746f5ec049bf60ad2a0a094334d1e39f1f0798bc5eb342c49c8eb7988e68583_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e0d398c3a41a9b0af1fc6516e06df9023d853e9d9c4763c1aec238534872736 = $this->env->getExtension("native_profiler");
        $__internal_4e0d398c3a41a9b0af1fc6516e06df9023d853e9d9c4763c1aec238534872736->enter($__internal_4e0d398c3a41a9b0af1fc6516e06df9023d853e9d9c4763c1aec238534872736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e0d398c3a41a9b0af1fc6516e06df9023d853e9d9c4763c1aec238534872736->leave($__internal_4e0d398c3a41a9b0af1fc6516e06df9023d853e9d9c4763c1aec238534872736_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2572f21b7c87a2251f0724e1019c1482ef14639782e9301be6b04a2ad5cc7868 = $this->env->getExtension("native_profiler");
        $__internal_2572f21b7c87a2251f0724e1019c1482ef14639782e9301be6b04a2ad5cc7868->enter($__internal_2572f21b7c87a2251f0724e1019c1482ef14639782e9301be6b04a2ad5cc7868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2572f21b7c87a2251f0724e1019c1482ef14639782e9301be6b04a2ad5cc7868->leave($__internal_2572f21b7c87a2251f0724e1019c1482ef14639782e9301be6b04a2ad5cc7868_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
