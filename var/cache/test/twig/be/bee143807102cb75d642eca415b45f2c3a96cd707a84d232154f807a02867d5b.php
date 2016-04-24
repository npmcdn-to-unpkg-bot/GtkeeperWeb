<?php

/* base.html.twig */
class __TwigTemplate_334570ce3c7e7f840220a3fe2e0e3b2b70351b977f4319ef41ecca7f7196f16a extends Twig_Template
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
        $__internal_19955565a19ff1d05d5dd5ee03d1e2ba400dc3e98e4b8582f594c9c235368d12 = $this->env->getExtension("native_profiler");
        $__internal_19955565a19ff1d05d5dd5ee03d1e2ba400dc3e98e4b8582f594c9c235368d12->enter($__internal_19955565a19ff1d05d5dd5ee03d1e2ba400dc3e98e4b8582f594c9c235368d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    \t8===D
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_19955565a19ff1d05d5dd5ee03d1e2ba400dc3e98e4b8582f594c9c235368d12->leave($__internal_19955565a19ff1d05d5dd5ee03d1e2ba400dc3e98e4b8582f594c9c235368d12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1089ef75b8a267eb2ebd2e60f9430355de3ce0cf916e540a95431c5a6bb92bf = $this->env->getExtension("native_profiler");
        $__internal_b1089ef75b8a267eb2ebd2e60f9430355de3ce0cf916e540a95431c5a6bb92bf->enter($__internal_b1089ef75b8a267eb2ebd2e60f9430355de3ce0cf916e540a95431c5a6bb92bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b1089ef75b8a267eb2ebd2e60f9430355de3ce0cf916e540a95431c5a6bb92bf->leave($__internal_b1089ef75b8a267eb2ebd2e60f9430355de3ce0cf916e540a95431c5a6bb92bf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42e831325f27a987e9bd065ca5bce82640f34a5329a6d35fb7aa7172d9aac1d8 = $this->env->getExtension("native_profiler");
        $__internal_42e831325f27a987e9bd065ca5bce82640f34a5329a6d35fb7aa7172d9aac1d8->enter($__internal_42e831325f27a987e9bd065ca5bce82640f34a5329a6d35fb7aa7172d9aac1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_42e831325f27a987e9bd065ca5bce82640f34a5329a6d35fb7aa7172d9aac1d8->leave($__internal_42e831325f27a987e9bd065ca5bce82640f34a5329a6d35fb7aa7172d9aac1d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2d8a5fd7a462c9608f04a50c34936da12410f80d7dffd4a55ae9e9fa730b8b1 = $this->env->getExtension("native_profiler");
        $__internal_d2d8a5fd7a462c9608f04a50c34936da12410f80d7dffd4a55ae9e9fa730b8b1->enter($__internal_d2d8a5fd7a462c9608f04a50c34936da12410f80d7dffd4a55ae9e9fa730b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d2d8a5fd7a462c9608f04a50c34936da12410f80d7dffd4a55ae9e9fa730b8b1->leave($__internal_d2d8a5fd7a462c9608f04a50c34936da12410f80d7dffd4a55ae9e9fa730b8b1_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bee13a9773aa5d2d7ce08bd3ca94f506072ddd84f5ba5cb6967a040a71ebacf0 = $this->env->getExtension("native_profiler");
        $__internal_bee13a9773aa5d2d7ce08bd3ca94f506072ddd84f5ba5cb6967a040a71ebacf0->enter($__internal_bee13a9773aa5d2d7ce08bd3ca94f506072ddd84f5ba5cb6967a040a71ebacf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bee13a9773aa5d2d7ce08bd3ca94f506072ddd84f5ba5cb6967a040a71ebacf0->leave($__internal_bee13a9773aa5d2d7ce08bd3ca94f506072ddd84f5ba5cb6967a040a71ebacf0_prof);

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
        return array (  94 => 12,  83 => 11,  72 => 6,  60 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*     	8===D*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
