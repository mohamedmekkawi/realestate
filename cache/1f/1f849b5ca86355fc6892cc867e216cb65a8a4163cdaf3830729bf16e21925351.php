<?php

/* master.html.twig */
class __TwigTemplate_3018369d9241e65b0602ec01cb904d03ccd2c814f1b7b77b9752862f73882906 extends Twig_Template
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
        echo "<!DOCTYPE html>

<html>
    
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <link href=\"/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link href=\"/css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"/images/logo_icon.ico\">
        
    ";
        // line 15
        $this->displayBlock('headextra', $context, $blocks);
        // line 16
        echo "    </head>

    <body>
            <div class=\"navbar-default\">
                <div class=\"container\">
                    <div class=\"navbar-header nabar-left\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                            <span class=\"sr-only\">Toggle navigation</span> 
                            <span class=\"icon-bar\"></span> 
                            <span class=\"icon-bar\"></span> 
                        </button>
                        <a class=\"navbar-brand\" href=\"/\">
                            <img src=\"/images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                        </a> 
                    </div>

                    <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">
                        ";
        // line 43
        echo "                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"/login\">Login</a></li>
                            <li><a href=\"/register\">Register</a></li>
                            <li><a href=\"/logout\">logout</a></li>
                            <li><a href=\"/index\">Home</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            ";
        // line 55
        echo "
            <div id=\"centeredContent\">
";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        echo " 
            </div>
            <footer>
                <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
                    <small>© Copyright On Q8, 2017. All rights reserved.</small></p>
            </footer>

           
    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 15
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 57,  99 => 15,  93 => 8,  79 => 57,  75 => 55,  62 => 43,  43 => 16,  41 => 15,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
    
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Default{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <link href=\"/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link href=\"/css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"/images/logo_icon.ico\">
        
    {% block headextra %} {% endblock %}
    </head>

    <body>
            <div class=\"navbar-default\">
                <div class=\"container\">
                    <div class=\"navbar-header nabar-left\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                            <span class=\"sr-only\">Toggle navigation</span> 
                            <span class=\"icon-bar\"></span> 
                            <span class=\"icon-bar\"></span> 
                        </button>
                        <a class=\"navbar-brand\" href=\"/\">
                            <img src=\"/images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                        </a> 
                    </div>

                    <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">
                        {#=========================
                                       <form class=\"navbar-form navbar-right\" style=\"border: none\" onSubmit=\"return Validate()\" method=\"post\" action=\"\">
                                           
                                           <div class=\"form-group\">
                                               <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"User Name\">
                                               <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
                                               <input type=\"submit\" value=\"login\" name=\"login\" class=\"btn btn-default\">
                                           </div>
                                       </form>
                       ================================== #}
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"/login\">Login</a></li>
                            <li><a href=\"/register\">Register</a></li>
                            <li><a href=\"/logout\">logout</a></li>
                            <li><a href=\"/index\">Home</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            {#=========================   ================================== #}

            <div id=\"centeredContent\">
{% block content %} {% endblock %} 
            </div>
            <footer>
                <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
                    <small>© Copyright On Q8, 2017. All rights reserved.</small></p>
            </footer>

           
    </body>
</html>", "master.html.twig", "/Applications/MAMP/htdocs/realestate/templates/master.html.twig");
    }
}
