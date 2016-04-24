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
        $__internal_3e9bbbe804dc1c32c681d97d773c6e989ed481b083459464e49b009a4ceb19dd = $this->env->getExtension("native_profiler");
        $__internal_3e9bbbe804dc1c32c681d97d773c6e989ed481b083459464e49b009a4ceb19dd->enter($__internal_3e9bbbe804dc1c32c681d97d773c6e989ed481b083459464e49b009a4ceb19dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3e9bbbe804dc1c32c681d97d773c6e989ed481b083459464e49b009a4ceb19dd->leave($__internal_3e9bbbe804dc1c32c681d97d773c6e989ed481b083459464e49b009a4ceb19dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ada828f4ccfb1b8ec14c65d45e8c0b0e20611f78791358351a4ed0879b2b0437 = $this->env->getExtension("native_profiler");
        $__internal_ada828f4ccfb1b8ec14c65d45e8c0b0e20611f78791358351a4ed0879b2b0437->enter($__internal_ada828f4ccfb1b8ec14c65d45e8c0b0e20611f78791358351a4ed0879b2b0437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ada828f4ccfb1b8ec14c65d45e8c0b0e20611f78791358351a4ed0879b2b0437->leave($__internal_ada828f4ccfb1b8ec14c65d45e8c0b0e20611f78791358351a4ed0879b2b0437_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3397009d8ccbc1d04770eb4c0422020303eb626982efb0e777bd2f1025eddb67 = $this->env->getExtension("native_profiler");
        $__internal_3397009d8ccbc1d04770eb4c0422020303eb626982efb0e777bd2f1025eddb67->enter($__internal_3397009d8ccbc1d04770eb4c0422020303eb626982efb0e777bd2f1025eddb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3397009d8ccbc1d04770eb4c0422020303eb626982efb0e777bd2f1025eddb67->leave($__internal_3397009d8ccbc1d04770eb4c0422020303eb626982efb0e777bd2f1025eddb67_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_37f7455d27664d27ca120d0242d354943242794bbafa650bff130a9c1726ff06 = $this->env->getExtension("native_profiler");
        $__internal_37f7455d27664d27ca120d0242d354943242794bbafa650bff130a9c1726ff06->enter($__internal_37f7455d27664d27ca120d0242d354943242794bbafa650bff130a9c1726ff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37f7455d27664d27ca120d0242d354943242794bbafa650bff130a9c1726ff06->leave($__internal_37f7455d27664d27ca120d0242d354943242794bbafa650bff130a9c1726ff06_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62e4d4c2e263a09717f007a6dab558f1ea176bbc92bae2c570052603037422fe = $this->env->getExtension("native_profiler");
        $__internal_62e4d4c2e263a09717f007a6dab558f1ea176bbc92bae2c570052603037422fe->enter($__internal_62e4d4c2e263a09717f007a6dab558f1ea176bbc92bae2c570052603037422fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62e4d4c2e263a09717f007a6dab558f1ea176bbc92bae2c570052603037422fe->leave($__internal_62e4d4c2e263a09717f007a6dab558f1ea176bbc92bae2c570052603037422fe_prof);

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
