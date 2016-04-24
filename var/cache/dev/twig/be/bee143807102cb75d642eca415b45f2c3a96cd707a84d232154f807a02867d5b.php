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
        $__internal_43148475d4d8454430d45af7fcdebd5e0a5aa249445135427ce3a99dccebbba8 = $this->env->getExtension("native_profiler");
        $__internal_43148475d4d8454430d45af7fcdebd5e0a5aa249445135427ce3a99dccebbba8->enter($__internal_43148475d4d8454430d45af7fcdebd5e0a5aa249445135427ce3a99dccebbba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta name=\"viewport\" charset=\"UTF-8\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css\">
\t<script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
\t<script src=\"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>
       
        
<div data-role=\"page\" id=\"pageone\">
  <div data-role=\"header\">
 \t <h1>Inicio</h1>
  </div>

  <nav data-role=\"navbar\">
    <ul>
      <li><a href=\"#home\" data-rel=\"dialog\" data-icon=\"home\">Home</a></li>
      <li><a href=\"#email\" data-rel=\"dialog\" data-icon=\"grid\">Email</a></li>
      <li><a href=\"#phonebook\" data-rel=\"dialog\" data-icon=\"search\">Phonebook</a></li>
      <li><a href=\"#calendar\" data-rel=\"dialog\" data-icon=\"calendar\">Calendar</a></li>
    </ul>
  </nav>
  
 
  <div data-role=\"main\" class=\"ui-content\"><br>
\t\t
\t\t  <div class=\"ui-field-contain\">
\t\t    <label for=\"name\">Full Name:</label>
\t\t    <input type=\"text\" name=\"text\" id=\"name\" value=\"\" placeholder=\"What's Your Name?\">
\t\t    </div>
\t\t    
\t\t    <div class=\"ui-field-contain\">
\t\t    <label for=\"search\">Looking for anything?</label>
\t\t    <input type=\"search\" name=\"search\" id=\"search\" value=\"\" placeholder=\"Search for content\">
\t\t  </div>
\t\t
\t\t  <div class=\"ui-field-contain\">
\t\t    <label for=\"date\">Today's date:</label>
\t\t    <input type=\"date\" name=\"date\" id=\"date\" value=\"\">
\t\t  </div>
\t\t  
\t\t  <div class=\"ui-field-contain\">
\t\t    <label for=\"colors\">Choose Favorite Color:</label>
\t\t    <select id=\"colors\" name=\"colors\">
\t\t      <option value=\"red\">Red</option>
\t\t      <option value=\"green\">Green</option>
\t\t      <option value=\"blue\">Blue</option>
\t\t    </select>
\t\t  </div>
\t\t    
\t\t  <div class=\"ui-field-contain\">
\t\t  <label for=\"switch\">Flip Switch:</label>
\t\t    <input type=\"checkbox\" data-role=\"flipswitch\" name=\"switch\" id=\"switch\">
\t\t  </div>
\t\t
\t\t   <div class=\"ui-field-contain\">
\t\t   <legend>Choose Favorite Movies:</legend>
\t\t   <label for=\"mov1\">The Shawshank Redemption</label>
\t\t   <input type=\"checkbox\" name=\"mov1\" id=\"mov1\">
\t\t   <label for=\"mov2\">The Godfather</label>
\t\t   <input type=\"checkbox\" name=\"mov2\" id=\"mov2\">
\t\t   <label for=\"mov3\">Pulp Fiction</label>
\t\t   <input type=\"checkbox\" name=\"mov3\" id=\"mov3\">
\t\t   </div>
\t\t\t<input type=\"submit\" data-inline=\"true\" value=\"Submit\">
\t\t</form>
\t\t</div>
";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "    </div>
 
       
  <div data-role=\"footer\" data-position=\"fixed\">
  <h1>Copyright W3Schools</h1>
  </div>
</div> 

<div data-role=\"page\" id=\"email\">
  <div data-role=\"header\">
  <h1>Email Account</h1>
  </div>
              
    <div data-role=\"main\" class=\"ui-content\">
    <ul data-role=\"listview\" data-inset=\"true\">
      <li><a href=\"#\">Inbox<span class=\"ui-li-count\">25</span></a></li>
      <li><a href=\"#\">Sent<span class=\"ui-li-count\">432</span></a></li>
      <li><a href=\"#\">Trash<span class=\"ui-li-count\">7</span></a></li>
    </ul>
  <a href=\"#pageone\" data-role=\"button\" data-inline=\"true\" data-icon=\"back\">Go Back</a>
  </div>
                  
  <div data-role=\"footer\" data-position=\"fixed\">
  <h1>Footer Text</h1>
  </div>
</div> 

<div data-role=\"page\" id=\"home\">
  <div data-role=\"header\">
  <h1>Home</h1>
  </div>

  <div data-role=\"main\" class=\"ui-content\">
  <p>Home Is Where The Heart Is!</p>
  <a href=\"#pageone\" data-role=\"button\" data-inline=\"true\" data-icon=\"back\">Go Back</a>
  </div>

  <div data-role=\"footer\">
  <h1>Footer Text</h1>
  </div>
</div>

<div data-role=\"page\" id=\"home2\">
  <div data-role=\"header\">
  <h1>Home</h1>
  </div>

  <div data-role=\"main\" class=\"ui-content\">
  <p>Home Is Where The Heart Is!</p>
  <a href=\"#pageone\" data-role=\"button\" data-inline=\"true\" data-icon=\"back\">Go Back</a>
  </div>

  <div data-role=\"footer\">
  <h1>Footer Text</h1>
  </div>
</div> 

<div data-role=\"page\" id=\"calendar\">
  <div data-role=\"header\">
  <h1>Calendar</h1>
  </div>

   <div data-role=\"main\" class=\"ui-content\">
     <ul data-role=\"listview\" data-inset=\"true\">
      <li data-role=\"list-divider\">Tuesday, February 10, 2014 <span class=\"ui-li-count\">2</span></li>   
      <li><a href=\"#\">   
        <h2>Doctor</h2>
        <p>Regular check at 12:00</p>
        <p class=\"ui-li-aside\">Appointment</p></a>
      </li>
      <li><a href=\"#\">
        <h2>Glen Quagmire</h2>
        <p>The clam at 18:00</p>
        <p class=\"ui-li-aside\">giggity giggity goo</p></a>
      </li>
    </ul>
    <a href=\"#pageone\" data-role=\"button\" data-inline=\"true\" data-icon=\"back\">Go Back</a>
  </div>
</div>
  
<div data-role=\"page\" id=\"phonebook\">
  <div data-role=\"header\">
  <h1>Phonebook</h1>
  <a href=\"#pageone\" data-role=\"button\" class=\"ui-btn-right\" data-icon=\"back\">Go Back</a>
  </div>

 <div data-role=\"main\" class=\"ui-content\">
  
  <ul data-role=\"listview\" data-autodividers=\"true\" data-inset=\"true\" data-filter=\"true\">
    <li><a href=\"#\">Adele</a></li>
    <li><a href=\"#\">Albert</a></li>
    <li><a href=\"#\">Billy</a></li>
    <li><a href=\"#\">Calvin</a></li>
  </ul>
  </div>
</div> 



";
        // line 173
        $this->displayBlock('javascripts', $context, $blocks);
        // line 174
        echo "        
</body>
</html>";
        
        $__internal_43148475d4d8454430d45af7fcdebd5e0a5aa249445135427ce3a99dccebbba8->leave($__internal_43148475d4d8454430d45af7fcdebd5e0a5aa249445135427ce3a99dccebbba8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08808b79fb98c69120308c3ccd0eb39e5db1792588663dd39dc53cccef9616df = $this->env->getExtension("native_profiler");
        $__internal_08808b79fb98c69120308c3ccd0eb39e5db1792588663dd39dc53cccef9616df->enter($__internal_08808b79fb98c69120308c3ccd0eb39e5db1792588663dd39dc53cccef9616df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_08808b79fb98c69120308c3ccd0eb39e5db1792588663dd39dc53cccef9616df->leave($__internal_08808b79fb98c69120308c3ccd0eb39e5db1792588663dd39dc53cccef9616df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d757864d7675d0f01aa2d549fc5887d8e9885021a20395574d64b73f45c1953a = $this->env->getExtension("native_profiler");
        $__internal_d757864d7675d0f01aa2d549fc5887d8e9885021a20395574d64b73f45c1953a->enter($__internal_d757864d7675d0f01aa2d549fc5887d8e9885021a20395574d64b73f45c1953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d757864d7675d0f01aa2d549fc5887d8e9885021a20395574d64b73f45c1953a->leave($__internal_d757864d7675d0f01aa2d549fc5887d8e9885021a20395574d64b73f45c1953a_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3bd69413ef9a11fdc82e52380faa9848fcf0d0528abd669ca8d032cf343a37 = $this->env->getExtension("native_profiler");
        $__internal_7f3bd69413ef9a11fdc82e52380faa9848fcf0d0528abd669ca8d032cf343a37->enter($__internal_7f3bd69413ef9a11fdc82e52380faa9848fcf0d0528abd669ca8d032cf343a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f3bd69413ef9a11fdc82e52380faa9848fcf0d0528abd669ca8d032cf343a37->leave($__internal_7f3bd69413ef9a11fdc82e52380faa9848fcf0d0528abd669ca8d032cf343a37_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78701288c031f3856cc6a10905df0802dafe0b1da0520be1f68f4c49d2e8a551 = $this->env->getExtension("native_profiler");
        $__internal_78701288c031f3856cc6a10905df0802dafe0b1da0520be1f68f4c49d2e8a551->enter($__internal_78701288c031f3856cc6a10905df0802dafe0b1da0520be1f68f4c49d2e8a551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_78701288c031f3856cc6a10905df0802dafe0b1da0520be1f68f4c49d2e8a551->leave($__internal_78701288c031f3856cc6a10905df0802dafe0b1da0520be1f68f4c49d2e8a551_prof);

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
        return array (  256 => 173,  245 => 73,  234 => 6,  222 => 5,  213 => 174,  211 => 173,  110 => 74,  108 => 73,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">*/
/* 	<title>{% block title %}Welcome!{% endblock %}</title>*/
/* 	{% block stylesheets %}{% endblock %}*/
/* 	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">*/
/* 	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>*/
/* 	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>*/
/* </head>*/
/* <body>*/
/*        */
/*         */
/* <div data-role="page" id="pageone">*/
/*   <div data-role="header">*/
/*  	 <h1>Inicio</h1>*/
/*   </div>*/
/* */
/*   <nav data-role="navbar">*/
/*     <ul>*/
/*       <li><a href="#home" data-rel="dialog" data-icon="home">Home</a></li>*/
/*       <li><a href="#email" data-rel="dialog" data-icon="grid">Email</a></li>*/
/*       <li><a href="#phonebook" data-rel="dialog" data-icon="search">Phonebook</a></li>*/
/*       <li><a href="#calendar" data-rel="dialog" data-icon="calendar">Calendar</a></li>*/
/*     </ul>*/
/*   </nav>*/
/*   */
/*  */
/*   <div data-role="main" class="ui-content"><br>*/
/* 		*/
/* 		  <div class="ui-field-contain">*/
/* 		    <label for="name">Full Name:</label>*/
/* 		    <input type="text" name="text" id="name" value="" placeholder="What's Your Name?">*/
/* 		    </div>*/
/* 		    */
/* 		    <div class="ui-field-contain">*/
/* 		    <label for="search">Looking for anything?</label>*/
/* 		    <input type="search" name="search" id="search" value="" placeholder="Search for content">*/
/* 		  </div>*/
/* 		*/
/* 		  <div class="ui-field-contain">*/
/* 		    <label for="date">Today's date:</label>*/
/* 		    <input type="date" name="date" id="date" value="">*/
/* 		  </div>*/
/* 		  */
/* 		  <div class="ui-field-contain">*/
/* 		    <label for="colors">Choose Favorite Color:</label>*/
/* 		    <select id="colors" name="colors">*/
/* 		      <option value="red">Red</option>*/
/* 		      <option value="green">Green</option>*/
/* 		      <option value="blue">Blue</option>*/
/* 		    </select>*/
/* 		  </div>*/
/* 		    */
/* 		  <div class="ui-field-contain">*/
/* 		  <label for="switch">Flip Switch:</label>*/
/* 		    <input type="checkbox" data-role="flipswitch" name="switch" id="switch">*/
/* 		  </div>*/
/* 		*/
/* 		   <div class="ui-field-contain">*/
/* 		   <legend>Choose Favorite Movies:</legend>*/
/* 		   <label for="mov1">The Shawshank Redemption</label>*/
/* 		   <input type="checkbox" name="mov1" id="mov1">*/
/* 		   <label for="mov2">The Godfather</label>*/
/* 		   <input type="checkbox" name="mov2" id="mov2">*/
/* 		   <label for="mov3">Pulp Fiction</label>*/
/* 		   <input type="checkbox" name="mov3" id="mov3">*/
/* 		   </div>*/
/* 			<input type="submit" data-inline="true" value="Submit">*/
/* 		</form>*/
/* 		</div>*/
/* {% block body %}{% endblock %}*/
/*     </div>*/
/*  */
/*        */
/*   <div data-role="footer" data-position="fixed">*/
/*   <h1>Copyright W3Schools</h1>*/
/*   </div>*/
/* </div> */
/* */
/* <div data-role="page" id="email">*/
/*   <div data-role="header">*/
/*   <h1>Email Account</h1>*/
/*   </div>*/
/*               */
/*     <div data-role="main" class="ui-content">*/
/*     <ul data-role="listview" data-inset="true">*/
/*       <li><a href="#">Inbox<span class="ui-li-count">25</span></a></li>*/
/*       <li><a href="#">Sent<span class="ui-li-count">432</span></a></li>*/
/*       <li><a href="#">Trash<span class="ui-li-count">7</span></a></li>*/
/*     </ul>*/
/*   <a href="#pageone" data-role="button" data-inline="true" data-icon="back">Go Back</a>*/
/*   </div>*/
/*                   */
/*   <div data-role="footer" data-position="fixed">*/
/*   <h1>Footer Text</h1>*/
/*   </div>*/
/* </div> */
/* */
/* <div data-role="page" id="home">*/
/*   <div data-role="header">*/
/*   <h1>Home</h1>*/
/*   </div>*/
/* */
/*   <div data-role="main" class="ui-content">*/
/*   <p>Home Is Where The Heart Is!</p>*/
/*   <a href="#pageone" data-role="button" data-inline="true" data-icon="back">Go Back</a>*/
/*   </div>*/
/* */
/*   <div data-role="footer">*/
/*   <h1>Footer Text</h1>*/
/*   </div>*/
/* </div>*/
/* */
/* <div data-role="page" id="home2">*/
/*   <div data-role="header">*/
/*   <h1>Home</h1>*/
/*   </div>*/
/* */
/*   <div data-role="main" class="ui-content">*/
/*   <p>Home Is Where The Heart Is!</p>*/
/*   <a href="#pageone" data-role="button" data-inline="true" data-icon="back">Go Back</a>*/
/*   </div>*/
/* */
/*   <div data-role="footer">*/
/*   <h1>Footer Text</h1>*/
/*   </div>*/
/* </div> */
/* */
/* <div data-role="page" id="calendar">*/
/*   <div data-role="header">*/
/*   <h1>Calendar</h1>*/
/*   </div>*/
/* */
/*    <div data-role="main" class="ui-content">*/
/*      <ul data-role="listview" data-inset="true">*/
/*       <li data-role="list-divider">Tuesday, February 10, 2014 <span class="ui-li-count">2</span></li>   */
/*       <li><a href="#">   */
/*         <h2>Doctor</h2>*/
/*         <p>Regular check at 12:00</p>*/
/*         <p class="ui-li-aside">Appointment</p></a>*/
/*       </li>*/
/*       <li><a href="#">*/
/*         <h2>Glen Quagmire</h2>*/
/*         <p>The clam at 18:00</p>*/
/*         <p class="ui-li-aside">giggity giggity goo</p></a>*/
/*       </li>*/
/*     </ul>*/
/*     <a href="#pageone" data-role="button" data-inline="true" data-icon="back">Go Back</a>*/
/*   </div>*/
/* </div>*/
/*   */
/* <div data-role="page" id="phonebook">*/
/*   <div data-role="header">*/
/*   <h1>Phonebook</h1>*/
/*   <a href="#pageone" data-role="button" class="ui-btn-right" data-icon="back">Go Back</a>*/
/*   </div>*/
/* */
/*  <div data-role="main" class="ui-content">*/
/*   */
/*   <ul data-role="listview" data-autodividers="true" data-inset="true" data-filter="true">*/
/*     <li><a href="#">Adele</a></li>*/
/*     <li><a href="#">Albert</a></li>*/
/*     <li><a href="#">Billy</a></li>*/
/*     <li><a href="#">Calvin</a></li>*/
/*   </ul>*/
/*   </div>*/
/* </div> */
/* */
/* */
/* */
/* {% block javascripts %}{% endblock %}*/
/*         */
/* </body>*/
/* </html>*/
