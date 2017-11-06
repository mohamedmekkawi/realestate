<?php

/* master.html.twig */
class __TwigTemplate_87a86df006dd2202e643b264156f3e573238b8b43873d898258852522591c01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
";
        // line 7
        $this->displayBlock('headextra', $context, $blocks);
        // line 14
        echo " </head>
 
 ";
        // line 17
        echo " 
    <body>
          <div class=\"navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header nabar-left\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                    <span class=\"sr-only\">Toggle navigation</span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span> 
                </button>
                <a class=\"navbar-brand\" href=\"../\">
                    <img src=\"images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                </a> 
            </div>
            
            <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">

                <form class=\"navbar-form navbar-right\" style=\"border: none\" onSubmit=\"return Validate()\" method=\"post\" action=\"\">
                    
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"User Name\">
                        <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
                        <input type=\"submit\" value=\"Login In\" name=\"login\" class=\"btn btn-default\">
                    </div>
                </form>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"\">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

";
        // line 51
        echo "
        <div id=\"centeredContent\">
        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "        </div>
        <footer>
            <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>© Copyright On Q8, 2017. All rights reserved.</small></p>
        </footer>
        
        <script src=\"../script/registration.js\"></script>
\t<script src=\"../script/validateform.js\"></script>
\t<script src=\"../script/jquery-1.11.2.min.js\"></script>
\t<script src=\"../script/bootstrap.min.js\"></script>
        
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 7
    public function block_headextra($context, array $blocks = array())
    {
        echo " 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <link href=\"css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"images/logo_icon.ico\">     
";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 53,  102 => 7,  96 => 5,  80 => 54,  78 => 53,  74 => 51,  39 => 17,  35 => 14,  33 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Default{% endblock %}</title>
        
{% block headextra %} 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <link href=\"css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"images/logo_icon.ico\">     
{% endblock %}
 </head>
 
 {#=========================   ================================== #}
 
    <body>
          <div class=\"navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header nabar-left\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                    <span class=\"sr-only\">Toggle navigation</span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span> 
                </button>
                <a class=\"navbar-brand\" href=\"../\">
                    <img src=\"images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                </a> 
            </div>
            
            <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">

                <form class=\"navbar-form navbar-right\" style=\"border: none\" onSubmit=\"return Validate()\" method=\"post\" action=\"\">
                    
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"User Name\">
                        <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
                        <input type=\"submit\" value=\"Login In\" name=\"login\" class=\"btn btn-default\">
                    </div>
                </form>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"\">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

{#=========================   ================================== #}

        <div id=\"centeredContent\">
        {% block content %}{% endblock %}
        </div>
        <footer>
            <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>© Copyright On Q8, 2017. All rights reserved.</small></p>
        </footer>
        
        <script src=\"../script/registration.js\"></script>
\t<script src=\"../script/validateform.js\"></script>
\t<script src=\"../script/jquery-1.11.2.min.js\"></script>
\t<script src=\"../script/bootstrap.min.js\"></script>
        
    </body>
</html>", "master.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\master.html.twig");
    }
}
